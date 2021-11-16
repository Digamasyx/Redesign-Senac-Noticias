<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');
require_once(dirname(__DIR__) . '/php/functions/getPath.php');

if (isset($_GET['id'])) {
	$nC = new NewsController();
	$news = $nC->getNews($_GET['id']);
}

//if (!isset($news)) header("Location: ../../index.php");
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
	<?php require_once(dirname(__DIR__) . '/php/components/header.html') ?>

	<main id='body-page' class="main-container">
		<div class='main-container-noticias'><!-- inicio container noticias -->
			<div class='main-noticias-header'>
				<h1 class='noticias-titulo'>
					AMD anuncia Meta como cliente e tem forte alta nas ações
				</h1>
				<p class='noticias-descricao'>
					A empresa também anunciou uma gama de novos chips com o objetivo 
					de enfrentar rivais como Nvidia.
				</p>
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
					<img class='noticias-imagem' src="https://marketresearchtelecast.com/wp-content/uploads/2021/11/1636639503_AMD-processors-Meta-converts-Intel-server-platform-to-AMD-Epyc.jpg" alt="imagemGenerica">
				</div>
				<?php require_once(dirname(__DIR__) . '/php/components/accessibility.html'); ?>
				<div class='main-container-noticias-principal'>
					<h2 id='texto-noticias' class='noticias-principal-texto'>
						A AMD disse hoje (8) que fechou acordo com a Meta, anteriormente conhecida como Facebook,
						para ser seu cliente de chips para centrais de processamento de dados. O anúncio fez as 
						ações da empresa de semicondutores disparar mais de 11%.<br><br>
						A empresa também anunciou uma gama de novos chips com o objetivo de enfrentar rivais 
						como Nvidia nos mercados de supercomputação, bem como concorrentes menores, incluindo 
						Ampere no mercado de computação em nuvem.
						<br><br>
						Depois de anos atrás da Intel no mercado de chips, 
						a AMD vem ganhando participação de mercado desde 2017, quando um plano de recuperação liderado 
						pela presidente-executiva, Lisa Su, colocou a empresa em um curso para sua posição atual de ter
						chips mais rápidos do que a rival.
						<br><br>
						A AMD agora tem quase um quarto do mercado de chips x86,
						<br><br>
						Depois de garantir a Meta como cliente, 
						a AMD fez negócios com muitos dos maiores 
						usuários de chips Intel. A companhia também 
						tem negócios com Google Cloud, 
						Amazon Web Services e Azure, da Microsoft.
						<br><br>
						<a 	onmouseenter="underlineMouseEnter()" onmouseleave="underlineMouseLeave()"
							href='https://forbes.com.br/forbeslife/2021/11/mocoto-tem-poder-transformador-diz-adriana-salay-premiada-por-projeto-social-com-o-chef-rodrigo-oliveira/
							'class='link-externo ' id='link-externo'>LEIA TAMBÉM:“O Mocotó tem poder transformador”,
							 diz Adriana Salay, premiada com o chef Rodrigo Oliveira
						</a>
						<br><br>
						A AMD também anunciou planos de enfrentar rivais
						além da Intel. A empresa 
						anunciou o chip MI200, um acelerador para tarefas
						como aprendizado de máquina e inteligência artificial.
						<br><br>
						O novo chip AMD foi projetado para enfrentar o chip A100 da Nvidia, 
						que, junto com outros chips projetados para acelerar a inteligência artificial,
						ajudou a tornar a Nvidia a mais valiosa empresa de semicondutores listada nos Estados Unidos.
						<br><br>
						A AMD também mirou em rivais menores. A empresa anunciou um novo processador chamado “Bergamo”, 
						que será lançado no primeiro semestre de 2023. O chip terá 128 núcleos de computação, que são úteis 
						para empresas de computação em nuvem que alugam seus chips para clientes externos.
						<br><br>
						A Ampere Computing, uma startup fundada por ex-executivos da Intel, está buscando uma estratégia 
						similar e este ano anunciou o serviço de nuvem da Oracle como cliente. (Com Reuters)
					</h2>
				</div>
			</div><!-- caixa noticias desktop final -->
		</div><!-- fim container de noticias -->
		<?php require_once(dirname(__DIR__) . '/php/components/newsletterForm.html') ?>
	</main>	

	<!--footer -->
	<?php require_once(dirname(__DIR__) . '/php/components/footer.html') ?>
	<!--footer -->
</body>
</html>