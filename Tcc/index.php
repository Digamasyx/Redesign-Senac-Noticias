<?php
require_once(__DIR__ . '/src/news/php/NewsController.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <link rel="icon" href="assets/img/Logosemnome.svg">
    <title>Document</title>
</head>
<body>
    <header class="header-navbar">
        <img src="assets/img/Logo.svg" alt="Logo" id="nav-logo">
        <nav id="navbar">
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Notícias</a>
            </li>
            <li>
                <a href="">Newsteller</a>
            </li>
            <li>
                <a href="">Nos Encontre</a>
            </li>
            <li>
                <a href="">Serviços</a>
            </li>
        </ul>
        </nav>
    </header>
    <section class="first-section">
        <img src="assets/section-0 image.svg" alt="" class="firstsection-img">
        <p class="img-parag">Seja bem-vindo(a) ao seu portal de notícias favorito</p>
        <h1 class="img-h1">Veja aqui as principais notícias <br> acerca do Senac, a sua <br> instituição favorita para se tornar um <br> bom profissional</h1>
        <button class="img-btn">VER NOTÍCIAS</button>
    </section>
    <section>
        <div>
        <?php
		$dbh = new NewsController();
		$news = $dbh->getLatestNews();

		foreach ($news as $value){
			$id = $value['id'];
			$title = $value['title'];
			$shortDesc = $value['shortDescription'];
			$mainImage = $value['mainImage'];
			$href = "/src/news/pages/new.php?id=" . $id;

			echo "<a href='{$href}'><div class='news'>
				<h2>{$title}</h2>
				<img src='{$mainImage}' />
				<p>{$shortDesc}<p>
			</div></a>";
		}
		?>
        </div>
    </section>
    <section>
        <h1>Receba notícias via e-mail e fique por dentro das novidades!
        </h1>
        <div>
            <img src="assets/img/Logosemnome.svg" alt="Logoform">
            <form>
                <input type="text" placeholder="Insira seu nome">
                <input type="text" placeholder="Insira seu e-mail">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
    <footer>
        <img src="assets/img/Logo.svg" alt="Senac">
        <p>Senac, 2021<br>Todos os direitos reservados</p>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div>
            <ul>
                <li>
                    <a href="">
                        <img src="assets/img/YouTube Icon.svg" alt="YouTube">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/img/WhatsApp Icon.svg" alt="WhatsApp">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/img/Facebook Icon.svg" alt="Facebook">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/img/Instagram Icon.svg" alt="Instagram">
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="src/script.js"></script>
</body>
</html>