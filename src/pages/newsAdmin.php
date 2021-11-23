<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');
require_once(dirname(__DIR__) . '/php/functions/getPath.php');
require_once(dirname(__DIR__) . '/php/functions/startSession.php');

$check = isset($_SESSION['admin']);

if (!$check) header("Location: ../../index.php");

$dbh = new NewsController();
$news = $dbh->getAllNews();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/assets/quill/quill.snow.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/newsAdmin.css">
	<link rel="shortcut icon" href="/assets/img/logosemnome.svg" type="image/x-icon">
	<link rel="icon" href="/assets/img/Logosemnome.svg">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/assets/js/newsAdmin.js"></script>
	<title>Administrar notícias</title>
</head>
<body>
	<?php require_once(dirname(__DIR__) . '/php/components/header.php')?>

	<?php if (isset($_GET['internalError']) || isset($_GET['success']) || isset($_GET['noChanges'])): ?>
		<div id="admin-log">
			<?php
			if (isset($_GET['internalError']) && $_GET['internalError'])
			{
				echo "<div style='color: red;'>
						<h2>Ops... Algo deu errado!</h2>
						<p>Ocorreu um erro no servidor. Tente novamente mais tarde.</p>
					</div>";
			}
			else if (isset($_GET['success']) && $_GET['success'])
			{
				echo "<div style='color: LawnGreen;'>
						<h2>Alterações bem sucedidas!</h2>
					</div>";
			}
			else if (isset($_GET['noChanges']) && $_GET['noChanges'])
			{
				echo "<div style='color: black;'>
						<h2>Não houve alterações!</h2>
					</div>";
			}
			?>
		</div>
	<?php endif; ?>

	<main>
		<div class="container-edit">
			<button class="btn-registrar" onclick="activateRegister()">Registrar uma notícia</button>

			<div id="noticias-container" class="noticias-container hide">
				<h2 id="form-title">Insira uma notícia</h2>

				<form id="form" enctype="multipart/form-data" method="POST">
					<div class="form-div">
						<label for="title">Título:</label>
						<input type="text" id="title" name="title" required /> 
					</div>

					<div class="form-div">
						<label for="shortDesc">Descrição curta:</label> 
						<textarea id="shortDesc" name="shortDesc" rows="10" maxlength="255"></textarea> 
					</div>

					<div class="form-div">
						<label for="content">Notícia:</label>
						<div id="editor-all">
							<div id="editor"></div>
						</div>
						<textarea id="content" name="content" rows="15" required></textarea>
					</div>

					<div class="form-div">
						<label for="mainImg">Imagem:</label> 
						<input type="file" id="mainImg" name="mainImg"/> 
					</div>

					<button id="submit" onclick="attualizeContent()">Pronto!</button>
				</form>
			</div>

			<?php foreach ($news as $value): ?>
				<div class="main-noticias">
					<div class="noticias-imagem">
						<img class="imagem-noticia" src="<?php echo getPath($value['mainImage']); ?>" />
					</div>

					<div class="noticias-cabecalho">
						<h4 class='noticia-titulo'>
							<a href='<?php echo "/src/pages/news.php?id={$value['id']}"; ?>'><?php echo $value['title']; ?></a>
						</h4>
						<p class='noticia-descricao'><?php echo $value['shortDescription']; ?></p>
					</div>

					<div class="btn-noticias">
						<button class="btn-editar" onclick="activateEdit(<?php echo $value['id'] ?>)">Editar</button>
						<button class="btn-apagar" onclick="deleteAction(<?php echo $value['id'] ?>)">Apagar</button>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		
	</main>

	<?php require_once(dirname(__DIR__) . '/php/components/footer.html')?>

	<?php if (isset($_GET['id']) && isset($_GET['action'])): ?>
		<?php if ($_GET['action'] === 'edit'): ?>
			<script>
				activateEdit(<?php echo $_GET['id']; ?>);
			</script>
		<?php elseif ($_GET['action'] === 'remove'): ?>
			<script>
				deleteAction(<?php echo $_GET['id']; ?>);
			</script>
		<?php endif; ?>
	<?php endif; ?>

	<script src="/assets/quill/quill.js"></script>
	<script>
		var toolbarOptions = [
			['bold', 'italic', 'underline', 'strike', { 'header': '1' }], 
			[{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'align': [] }], 
			['link', 'image', 'video'],
			[{ 'color': [] }, { 'background': [] }]
		];
		
		var editor = new Quill('div#editor', {
			modules: {toolbar: toolbarOptions},
			theme: 'snow'
		});

		var allDeleted = [];
	
		function selectLocalImage() 
		{
			const input = document.createElement('input');

			input.setAttribute('id', 'otherImages');
			input.setAttribute('name', 'otherImages');
			input.setAttribute('type', 'file');
			input.click();

			input.onchange = () => {
				const file = input.files[0];

				if (/^image\//.test(file.type)) 
				{   
					var form_data = new FormData();                  
					form_data.append('file', file);
					$.ajax({
						url: '/src/php/functions/saveImage.php',
						cache: false,
						dataType: 'text',
						contentType: false,
						processData: false,
						data: form_data,                         
						type: 'post',
						success: function(url) 
						{
							insertToEditor(url);
						}
					});
				} 
				else console.warn('Você só pode anexar imagens.');
			};
		}

		function insertToEditor(url) 
		{
			const range = editor.getSelection();

			editor.insertEmbed(range.index, 'image', url);
		}

		editor.getModule('toolbar').addHandler('image', () => selectLocalImage());

		editor.on('text-change', (delta, oldContents, source) => 
		{
			if (source !== 'user') return;

			const deleted = getImgUrls(editor.getContents().diff(oldContents));
			allDeleted = merge(allDeleted, deleted);
		});

		function getImgUrls(delta) 
		{
			return delta.ops.filter(i => i.insert && i.insert.image).map(i => i.insert.image);
		}

		function merge(v1, v2)
		{
			let result = v1.concat(v2);

			result = [...new Set([...v1,...v2])];

			return result;
		}

		document.getElementById('form').addEventListener('submit', () => $.post('/src/php/functions/deleteFiles.php', { paths: allDeleted }));
	</script>
</body>
</html>