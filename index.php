<?php
require_once(__DIR__ . '/src/php/classes/NewsController.php');
require_once(__DIR__ . '/src/php/functions/getPath.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/styles/style.css" />
    <link rel="icon" href="assets/img/Logosemnome.svg" />
    <script type="text/javascript" src="assets/js/NLAction.js"></script>
    <title>SENAC Notícias</title>
</head>
<body>
    <!-- Header  -->
    <header class="header-navbar">
        <img src="assets/img/Logo.svg" alt="Logo" id="nav-logo">
        <nav id="navbar">
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#news">Notícias</a>
            </li>
            <li>
                <a href="#newsletter">Newsletter</a>
            </li>
            <li>
                <a href="#">Nos Encontre</a>
            </li>
            <li>
                <a href="#">Serviços</a>
            </li>
        </ul>
        </nav>
    </header>

    <!-- Landing-page -->
    <section class="first-section">
        <img src="assets/section-0image.svg" alt="" class="firstsection-img">
        <p class="img-parag">Seja bem-vindo(a) ao seu portal de notícias favorito</p>
        <h1 class="img-h1">Veja aqui as principais notícias <br> acerca do Senac, a sua <br> instituição favorita para se tornar um <br> bom profissional</h1>
        <button class="img-btn">VER NOTÍCIAS</button>
    </section>

    <!-- Notícias -->
    <section id="news">
        <div>
            <?php
    		$nC = new NewsController();
    		$news = $nC->getLatestNews();

    		foreach ($news as $value):
    			$href = "/src/pages/new.php?id=" . $value['id'];
                $mainImage = getPath($value['mainImage']);
    		?>
                <a href='<?php echo $href; ?>'>
                    <div class='news'>
                        <h2><?php echo $value['title']; ?></h2>
                        <img src='<?php echo $mainImage; ?>' />
                        <p><?php echo $value['shortDescription']; ?><p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Newsletter -->
    <section id="newsletter">
        <h1>Receba notícias via e-mail e fique por dentro das novidades!</h1>
        <div>
            <img src="assets/img/Logosemnome.svg" alt="Logoform">
            <form id="newsletter-form" action="javascript:NLAction()" method="GET">
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Insira seu nome">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Insira seu e-mail">
                <input type="submit" name="subscribe" value="Enviar" />
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <img src="assets/img/Logo.svg" alt="Senac">
        <p>Senac, 2021<br>Todos os direitos reservados</p>
        <!-- Menus/Links do footer -->
        <ul>
            <h4></h4>
            <li>Unidades</li>
            <li>Licitações</li>
            <li>Notícias</li>
            <li>Transparência</li>
            <li>Fale conosco</li>
        </ul>
        <ul>
            <h4></h4>
            <li>Presenciais</li>
            <li>EAD</li>
            <li>SENAC Gratuidade</li>
            <li>Resultados</li>
        </ul>
        <ul>
        <h4></h4>
            <li>Salão de festas</li>
            <li>Bibliotecas</li>
            <li>Museu</li>
            <li>Salão de beleza</li>
            <li>Restaurantes</li>
            <li>Feiras</li>
        </ul>
        <ul>
            <h4></h4>
            <li>Para você</li>
            <li>Para empresas</li>
            <li>Atendimento corporativo</li>
        </ul>
        <ul>
            <h4></h4>
            <li>Jovem Aprendiz</li>
            <li>Alimentos Seguros</li>
            <li>SENAC Mais Verde</li>
            <li>SENAC Gratuidade</li>
        </ul>
        <!-- Redes sociais -->
        <div class="footer-socials">
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
</body>
</html>