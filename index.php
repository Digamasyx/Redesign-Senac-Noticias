

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="icon" href="assets/img/Logosemnome.svg">
    <script type="text/javascript" src="assets/js/NLAction.js"></script>
    <title>SENAC Notícias</title>
</head>
<body>
    <!-- Header  -->
    <?php require_once('src/php/componentes/header.php') ?>

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
    <?php require_once('src/php/componentes/footer.php') ?>
</body>
</html>