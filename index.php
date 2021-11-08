

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/Logosemnome.svg">
    <script type="text/javascript" src="assets/js/NLAction.js"></script>
    <title>SENAC Notícias</title>
</head>
<body>
    <!-- Header  -->
    <header class="header-navbar">
        <nav id="navbar">
            <img src="assets/img/Logo.svg" alt="Logo" id="nav-logo">
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
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
                    <a href="#footer-section">Serviços</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Landing-page -->
    <section class="first-section">
        <div id="landing-text">
            <p class="top-text">Seja bem-vindo(a) ao seu portal de notícias favorito</p>
            <h1 class="title">Veja aqui as principais notícias <br> acerca do Senac, a sua <br> instituição favorita para se tornar um <br> bom profissional</h1>
            <button class="landing-btn">VER NOTÍCIAS</button>
        </div>
    </section>

    <!-- Notícias -->
    <section id="news">
        <div>
            <p>bom, depois passa as mudanças pro outro kk</p>
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
    <footer id="footer-section">
        <img src="assets/img/Logo.svg" alt="Senac">
        <p>Senac, 2021<br>Todos os direitos reservados</p>
        <!-- Menus/Links do footer -->
        <ul>
            
            <h4></h4>
            <li><a href="">Unidades</a></li>
            <li><a href="">Licitações</a></li>
            <li><a href="">Notícias</a></li>
            <li><a href="">Transparência</a></li>
            <li><a href="">Fale conosco</a></li>
        </ul>
        <ul>
            <h4></h4>
            <li><a href="">Presenciais</a></li>
            <li><a href="">EAD</a></li>
            <li><a href="">SENAC Gratuidade</a></li>
            <li><a href="">Resultados</a></li>
        </ul>
        <ul>
        <h4></h4>
            <li><a href="">Salão de festas</a></li>
            <li><a href="">Bibliotecas</a></li>
            <li><a href="">Museu</a></li>
            <li><a href="">Salão de beleza</a></li>
            <li><a href="">Restaurantes</a></li>
            <li><a href="">Feiras</a></li>
        </ul>
        <ul>
            <h4></h4>
            <li><a href="">Para você</a></li>
            <li><a href="">Para empresas</a></li>
            <li><a href="">Atendimento corporativo</a></li>
        </ul>
        <ul>
            <h4></h4>
            <li><a href="">Jovem Aprendiz</a></li>
            <li><a href="">Alimentos Seguros</a></li>
            <li><a href="">SENAC Mais Verde</a></li>
            <li><a href="">SENAC Gratuidade</a></li>
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