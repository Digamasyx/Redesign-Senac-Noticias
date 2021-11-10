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
	<link rel="stylesheet" href="/assets/css/header.css">
	<link rel="stylesheet" href="/assets/css/news.css">
</head>
<body>
	<?php require_once('../php/componentes/header.php')?>
	<div class="container"><!-- inicio container -->
		<main>
			<div class='caixaNoticias'>
				<div class='parteCimaCaixaNoticias'>
					<h1 class='tituloNoticia'>
						AMD anuncia Meta como cliente e tem forte alta nas ações
					</h1>
					<p class='descricaoNoticia'>
						A empresa também anunciou uma gama de novos chips com o objetivo 
						de enfrentar rivais como Nvidia.
					</p>
				</div>
				<div class='imagemNoticia'>
					<img class='noticiaImg' src="https://tm.ibxk.com.br/2021/11/08/08082730119015.jpg" alt="imagemGenerica">
				</div>
				<div class='parteBaixoCaixaNoticias'>
					<h3 class='mainCall'><i></i></h3>
					<h2 class='textoPrincipalCaixaNoticia'>
						A AMD disse hoje (8) que fechou acordo com a Meta, anteriormente conhecida como Facebook,
						para ser seu cliente de chips para centrais de processamento de dados. O anúncio fez as 
						ações da empresa de semicondutores disparar mais de 11%.<br>
						A empresa também anunciou uma gama de novos chips com o objetivo de enfrentar rivais 
						como Nvidia nos mercados de supercomputação, bem como concorrentes menores, incluindo 
						Ampere no mercado de computação em nuvem.Depois de anos atrás da Intel no mercado de chips, 
						a AMD vem ganhando participação de mercado desde 2017, quando um plano de recuperação liderado 
						pela presidente-executiva, Lisa Su, colocou a empresa em um curso para sua posição atual de ter
						chips mais rápidos do que a rival.<br>A AMD agora tem quase um quarto do mercado de chips x86, 
						de acordo com a Mercury Research.
					</h2>
					<!--newsletter input-->
					<hr class='divisorias'>
						<div class="receberNoticias">
							<img class='logoReceberNoticias'src='https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png'>
							<h1 class='textoGenerico'>Receba notícias via e-email e fique por dentro das novidades!</h1>
							<div class="receberDadosUsuario">
								<input class="inputNome" placeholder='Digite seu nome aqui'>
								<input class="inputEmail"placeholder='Digite seu email aqui'>
								<button class='botaoEnviar'>Enviar</button>
							</div>
							
						</div>
					<hr class='divisorias'>
					<!--newsletter input-->
					<h2 class='textoPrincipalCaixaNoticia'>
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
					
				</div>
				<!-- <h1><?php echo $title; ?></h1>
				<div class='content'><?php echo $content; ?></div> -->
			</div>
		</main>
		<!--footer -->
		<footer>
			<h1>FOOTER</h1>
    	</footer>
		<!--footer -->
	</div><!-- fim container -->

</body>
</html>