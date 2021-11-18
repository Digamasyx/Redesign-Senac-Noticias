<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');
require_once(dirname(__DIR__) . '/php/functions/getPath.php');
require_once(dirname(__DIR__) . '/php/functions/startSession.php');

$check = isset($_SESSION['admin']);

if (isset($_GET['id'])) 
{
	$nC = new NewsController();
	$news = $nC->getNews($_GET['id']);
}

if (!isset($news)) header("Location: ../../index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<title><?php echo $news['title']; ?></title>
	<link rel="stylesheet" href="/assets/css/contrast.css">
	<script type="text/javascript" src="/assets/js/menu-acessibilidade.js"></script>
	<link rel="stylesheet" href="/assets/css/normalize.css">
	<link rel="stylesheet" href="/assets/css/news.css">
	<link rel="stylesheet" href="assets/css/newsletterForm.css">
</head>
<body>
	<?php require_once(dirname(__DIR__) . '/php/components/header.php') ?>

	<?php if ($check): ?>
		<a id="admin-link" href="/src/pages/newsAdmin.php?id=<?php echo $_GET['id'];?>">Admin</a>
	<?php endif; ?>

	<main id='body-page' class="main-container">
		<div class='main-container-noticias'>
			<div class='main-noticias-header'>
				<h1 class='noticias-titulo'><?php echo $news["title"]; ?></h1>
				<p class='noticias-descricao'><?php echo $news["shortDescription"]; ?></p>
				<div id='midia-social' class='midia-social'><!--midias sociais-->
					<h3 class='compartilhar-noticia'>Compartilhe esta publicação:</h3>
					<a href='#' class='botao-social'><img style='margin-left: 0 !important;'class='midia-social-img' src='/assets/testpics/facebook.png'></a>
					<a href='#' class='botao-social'><img class='midia-social-img' src='/assets/testpics/instagram.png'></a>
					<a href='#' class='botao-social'><img class='midia-social-img' src='/assets/testpics/linkedin.png'></a>
					<a href='#' class='botao-social'><img class='midia-social-img' src='/assets/testpics/twitter.png'></a>
					<a href='#' class='botao-social'><img class='midia-social-img' src='/assets/testpics/whatsapp.png'></a>
					<a href='#' class='botao-social'><img class='midia-social-img' src='/assets/testpics/youtube.png'></a>
				</div><!--midias sociais-->
			</div>
			
			<div class='caixa-noticias-desktop'><!-- caixa noticias desktop -->
				<div class='main-noticias-imagem'>
					<img class='noticias-imagem' src="<?php echo getPath($news["mainImage"]); ?>" alt="<?php echo $news["title"]; ?>" />
				</div>

				<?php require_once(dirname(__DIR__) . '/php/components/accessibility.html'); ?>

				<div class='main-container-noticias-principal'>
					<h2 id='texto-noticias' class='noticias-principal-texto'><?php echo $news["content"]; ?></h2>
				</div>
			</div>
		</div>

		<?php require_once(dirname(__DIR__) . '/php/components/newsletterForm.html') ?>
	</main>	

	<!--footer -->
	<?php require_once(dirname(__DIR__) . '/php/components/footer.html') ?>
	<!--footer -->
</body>
</html>