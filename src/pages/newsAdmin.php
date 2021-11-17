<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');

$check = $_GET['email'] === "admin@senac.com" 
	&& ($_GET['name'] === "secretoAdd" || $_GET['name'] === "secretoEdit");
$mode = str_replace("secreto", '', $_GET['name']);
$add = "email=admin@senac.com&name=secreto{$mode}";
$handler = "";
$title = "";
$shortDesc = "";
$content = "";
$notFounded = false;
$id = NULL;
$originalPath = "";

if (!$check) header("Location: ../../index.php");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="icon" href="assets/img/Logosemnome.svg">
    <link rel="stylesheet" href="/assets/css/newsAdmin.css">
	<title>Administrar notícias</title>
</head>
<body>
	<!-- Header  -->
    <?php require_once(dirname(__DIR__) . '/php/components/header.html'); ?>

	<main>
		<form id="newsForm" action="<?php echo $handler; ?>" enctype="multipart/form-data" method="POST">
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
			else if ($notFounded)
			{
			echo "<div style='color: red;'>
				<h2>Ops... Algo deu errado!</h2>
				<p>Não encontramos nenhuma notícia com o id \"{$id}\".</p>
			</div>";
			}
			?>
			<?php if ($mode === "Add" || isset($_POST['id'])): ?>
				<label for="title">Título:</label><br />
				<input type="text" id="title" name="title" value="<?php echo $title; ?>" required /> <br />
				<label for="shortDesc">Descrição curta:</label> <br />
				<textarea id="shortDesc" name="shortDesc" rows="10"><?php echo $shortDesc; ?></textarea> <br />
				<label for="shortDesc">Notícia:</label> <br />
				<textarea id="content" name="content" rows="15" required><?php echo $content; ?></textarea> <br />
				<label for="mainImg">Imagem:</label> <br />
				<input type="file" id="mainImg" name="mainImg" <?php echo $mode === "Add" ? 'required' : '' ?> /> <br />
			
				<?php if ($mode === "Edit"): ?>
					<label>Ação:</label> 
					<select name="action" id="action">
						<option value="Edit">Editar</option>
						<option value="Remove">Remover</option>
					</select>
				<?php endif; ?>
			<?php endif; ?>
			<?php if ($mode === "Edit" && !isset($_POST['id'])): ?>
				<input type="hidden" name="name" value="<?php echo $_GET['name']; ?>" />
				<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" />

				<label for="id">Id:</label> <br />
				<input type="number" id="id" name="id" min="0" required /> <br />
			<?php endif; ?>

			<button type="submit">Executar</button>
		</form>
	</main>

	<!-- Footer -->
    <?php require_once(dirname(__DIR__) . '/php/components/footer.html'); ?>
</body>
</html>