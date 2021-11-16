<div class='main-container-noticias'><!-- inicio container noticias -->
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