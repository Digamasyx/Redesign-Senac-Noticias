<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');
session_start();

$check = isset($_SESSION['admin']);

if (!$check) header("Location: ../../index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/newsAdmin.css">
	<link rel="shortcut icon" href="/assets/img/logosemnome.svg" type="image/x-icon">
	<title>Registrar noticias</title>
</head>
<body>
	<?php require_once(dirname(__DIR__) . '\php\components\header.html')?>
	
	<main>
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

		<button class="btn-registrar">Registrar uma notícia</button>

		<div class="container">
			<div class="imagem-noticia"></div>
			<div class="texto-noticia">
				<h4>Título da noticia</h4>
				<p>Descrição encurtada</p>
			</div>
			<div class="btn-noticias">
				<button class="btn-editar">Editar</button>
				<button class="btn-apagar">Apagar</button>
			</div>
		</div>

		<<div class="noticias-container">
			<h2>Inserir uma noticia</h2>
			<form>
				<label for="titulo-noticia"></label>
				<input type="text" name="titulo-noticia">
				
				<textarea name="descricao-noticia" id="" cols="30" rows="10"></textarea>
				<label for="imagem-noticia"></label>
				<input type="file">
				<button>Registrar</button>
			</form>
		</div>
	</main>

	<?php require_once(dirname(__DIR__) . '\php\components\footer.html')?>
</body>
<script src="/assets/js/modal-registrar-noticia.js"></script>
</html>