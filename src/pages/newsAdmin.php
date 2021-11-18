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
	<link rel="stylesheet" href="/assets/css/newsAdmin.css">
	<link rel="shortcut icon" href="/assets/img/logosemnome.svg" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/assets/js/newsAdmin.js"></script>
	<title>Administrar notícias</title>
</head>
<body>
	<?php require_once(dirname(__DIR__) . '\php\components\header.php')?>

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

		<div id="noticias-container" class="noticias-container hide">
			<h2 id="form-title">Insira uma notícia</h2>

			<form id="form" enctype="multipart/form-data" method="POST">
				<div>
					<label for="title">Título:</label>
					<input type="text" id="title" name="title" required /> 
				</div>

				<div>
					<label for="shortDesc">Descrição curta:</label> 
					<textarea id="shortDesc" name="shortDesc" rows="10"></textarea> 
				</div>

				<div>
					<label for="content">Notícia:</label> 
					<textarea id="content" name="content" rows="15" required></textarea> 

				</div>

				<div>
					<label for="mainImg">Imagem:</label> 
					<input type="file" id="mainImg" name="mainImg"/> 
				</div>
				<button>Pronto!</button>
			</form>
		</div>
	</main>

	<?php require_once(dirname(__DIR__) . '\php\components\footer.html')?>

	<?php if (isset($_GET['id'])): ?>
		<script>
			activateEdit(<?php echo $_GET['id']; ?>);
		</script>
	<?php 
	$_GET['id'] = null;
	endif; 
	?>
</body>
</html>