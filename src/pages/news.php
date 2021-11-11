<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');

if (isset($_GET['id'])){
	$nC = new NewsController();
	$new = $nC->getNew($_GET['id']);
	
	$id = $new['id'];
	$title = $new['title'];
	$shortDesc = $new['shortDescription'];
	$mainImage = $new['mainImage'];
	$content = $new['content'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="/assets/css/contrast.css">
	<script type="text/javascript" src="/assets/js/accessibility-functions.js"></script>
	<link rel="stylesheet" href="/assets/css/normalize.css">
	<link rel="stylesheet" href="/assets/css/now	news.css">
</head>
<body>
	<?php require_once('../php/componentes/header.php')?>
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
			</div>
			<div class='midia-social'><!--midias sociais-->
				<img style='margin-left: 0 !important;'class='midia-social-img' src='/assets/testpics/facebook.png'>
				<img class='midia-social-img' src='/assets/testpics/instagram.png'>
				<img class='midia-social-img' src='/assets/testpics/linkedin.png'>
				<img class='midia-social-img' src='/assets/testpics/twitter.png'>
				<img class='midia-social-img' src='/assets/testpics/whatsapp.png'>
				<img class='midia-social-img' src='/assets/testpics/youtube.png'>
			</div><!--midias sociais-->
			<div class='main-noticias-imagem'>
				<img class='noticias-imagem' src="https://tm.ibxk.com.br/2021/11/08/08082730119015.jpg" alt="imagemGenerica">
			</div>
			<div class='caixa-de-acessibilidade'><!-- caixa de acessibilidade -->
				<img class='acessibilidade-iluminacao' src='/assets/testpics/dark-mode.png'>
				<a href='#fonte-magra'id='fonte-magra' class='botao-acessibilidade fonte-magra' onclick="thinFont()"><div class='div-botao-acessibilidade'>L</div></a>
				<a href='#fonte-nao-magra'id='fonte-nao-magra'class='botao-acessibilidade fonte-nao-magra' onclick="noThinFont()"><div class='div-botao-acessibilidade'>L</div></a>
				<a href='#fonte-negrito'id='fonte-negrito'class='botao-acessibilidade fonte-negrito'onclick="boldFont()"><div class='div-botao-acessibilidade'>L</div></a>
				<a href='#negrito-desliga'id='negrito-desliga'class='botao-acessibilidade negrito-desliga'onclick="noBoldFont()"><div class='div-botao-acessibilidade'>L</div></a>
				<a href='#'class='botao-acessibilidade fonte-menor'><div class='div-botao-acessibilidade'>A-</div></a>
				<a href='#'class='botao-acessibilidade fonte-maior'><div class='div-botao-acessibilidade'>A+</div></a>
				<a 
					href="#altocontraste" 
					id="altocontraste" 
					accesskey="3" 
					class='botao-acessibilidade div-botao-acessibilidade high-contrast' 
					onclick="contrast()" 
					onkeydown="window.toggleContrast()"> 
					<div>H+</div>
				</a>
				<a 
					href="#clean" 
					id="limpar-contraste"  
					class='botao-acessibilidade div-botao-acessibilidade' 
					onclick="cleanContrast()"> 
					<div>H-</div>
				</a>
			</div><!-- fim caixa de acessibilidade -->
			<div class='main-container-noticias-principal'>
				<h2 id='texto-noticias' class='noticias-principal-texto'>
					A AMD disse hoje (8) que fechou acordo com a Meta, anteriormente conhecida como Facebook,
					para ser seu cliente de chips para centrais de processamento de dados. O anúncio fez as 
					ações da empresa de semicondutores disparar mais de 11%.<br>
					A empresa também anunciou uma gama de novos chips com o objetivo de enfrentar rivais 
					como Nvidia nos mercados de supercomputação, bem como concorrentes menores, incluindo 
					Ampere no mercado de computação em nuvem.Depois de anos atrás da Intel no mercado de chips, 
					a AMD vem ganhando participação de mercado desde 2017, quando um plano de recuperação liderado 
					pela presidente-executiva, Lisa Su, colocou a empresa em um curso para sua posição atual de ter
					chips mais rápidos do que a rival.<br>A AMD agora tem quase um quarto do mercado de chips x86, 
					<br><br>
					Depois de garantir a Meta como cliente, 
					a AMD fez negócios com muitos dos maiores 
					usuários de chips Intel. A companhia também 
					tem negócios com Google Cloud, 
					Amazon Web Services e Azure, da Microsoft.
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
				<iframe 
					width="100%" height="500" src="https://www.youtube.com/embed/cIezMiOhW-0" 
					title="YouTube video player" 
					frameborder="0" 
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
					allowfullscreen>
				</iframe>
			</div>
			<!-- <h1><?php echo $title; ?></h1>
			<div class='content'><?php echo $content; ?></div> -->
		</div><!-- fim container de noticias -->
	</main>	
	<!--footer -->
	<?php require_once('../php/componentes/footer.php')?>
	<!--footer -->
</body>
</html>