<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/newsletterForm.css">
    
    <link rel="icon" href="assets/img/Logosemnome.svg">
    <script type="text/javascript" src="assets/js/NLAction.js"></script>
    <title>SENAC Notícias</title>
</head>
<body>
    <!-- Header  -->
    <?php require_once('src/php/components/header.php') ?>

    <!-- Landing-page -->
    <section class="first-section">
        <div id="landing-text">
            <p class="top-text">Seja bem-vindo(a) ao seu portal de notícias favorito</p>
            <h1 class="title">Veja aqui as principais notícias <br> acerca do Senac, a sua <br> instituição favorita para se tornar um <br> bom profissional</h1>
            <button class="landing-btn" onclick="document.location = '#news'">VER NOTÍCIAS</button>
        </div>
    </section>

    <!-- Notícias -->
    <section id="news">
        <div id="news-blocks">
            <div class="news-tile">
                <img src="https://via.placeholder.com/150" />
                <div class="news-text">
                    <h3>Título</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget neque quis eros aliquam viverra id eu elit.
                    </p>
                </div>
            </div>
            
            <div class="news-tile">
                <img src="https://via.placeholder.com/150" />
                <div class="news-text">
                    <h3>Título</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget neque quis eros aliquam viverra id eu elit.
                    </p>
                </div>
            </div>
            
            <div class="news-tile">
                <img src="https://via.placeholder.com/150" />
                <div class="news-text">
                    <h3>Título</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget neque quis eros aliquam viverra id eu elit.
                    </p>
                </div>
            </div>
            
            <div class="news-tile">
                <img src="https://via.placeholder.com/150" />
                <div class="news-text">
                    <h3>Título</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget neque quis eros aliquam viverra id eu elit.
                    </p>
                </div>
            </div>
            
            <div class="news-tile bottom-tile">
                <img src="https://via.placeholder.com/150" />
                <div class="news-text">
                    <h3>Título</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget neque quis eros aliquam viverra id eu elit.
                    </p>
                </div>
            </div>
            
            <div class="news-tile bottom-tile">
                <img src="https://via.placeholder.com/150" />
                <div class="news-text">
                    <h3>Título</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget neque quis eros aliquam viverra id eu elit.
                    </p>
                </div> 
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <?php require_once('./src/php/components/newsletterForm.php') ?>
    <?php require_once('./src/php/components/map.php') ?>

    <!-- Footer -->
    <?php require_once('src/php/components/footer.php') ?>
</body>
</html>