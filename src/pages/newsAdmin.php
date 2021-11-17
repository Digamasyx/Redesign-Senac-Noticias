<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');
require_once(dirname(__DIR__) . '/php/functions/getPath.php');
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/assets/js/newsAdmin.js"></script>
	<title>Administrar notícias</title>
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

		<button class="btn-registrar" onclick="activateRegister()">Registrar uma notícia</button>

		<div class="container">
			<img class="imagem-noticia" src="https://via.placeholder.com/150"></img>
			<div class="texto-noticia">
				<h4>Título da noticia</h4>
				<p>Descrição encurtada</p>
			</div>
			<div class="btn-noticias">
				<button class="btn-editar" onclick="activateEdit(1)">Editar</button>
				<button class="btn-apagar" onclick="deleteAction(1)">Apagar</button>
			</div>
		</div>

		<div id="noticias-container" class="noticias-container hide">
			<h2 id="form-title"></h2>

			<form id="form" enctype="multipart/form-data" method="POST">
				<label for="title">Título:</label>
				<input type="text" id="title" name="title" required /> 

				<label for="shortDesc">Descrição curta:</label> 
				<textarea id="shortDesc" name="shortDesc" rows="10"></textarea> 

				<label for="content">Notícia:</label> 
				<textarea id="content" name="content" rows="15" required></textarea> 

				<label for="mainImg">Imagem:</label> 
				<input type="file" id="mainImg" name="mainImg"/> 

				<button>Pronto!</button>
			</form>
		</div>
	</main>

	<?php require_once(dirname(__DIR__) . '\php\components\footer.html')?>
</body>
</html>