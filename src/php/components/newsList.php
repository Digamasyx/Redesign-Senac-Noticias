<div id="news-list">
    <?php 
    $dbh = new NewsController();
    $news = $dbh->getAllNews();

    foreach ($news as $value):
        $href = "/src/news/pages/new.php?id=" . $value['id'];
    ?>
        <a class='noticia-caixa' href='<?php echo $href; ?>'>
            <div class='main-noticias'>
                <div class='noticias-imagem'>
                    <img class='img-noticia' src='<?php echo getPath($value['mainImage']); ?>'/>
                </div>
                <div class='noticias-cabecalho'>
                    <h2 class='noticia-titulo'>‘<?php echo $value['title']; ?></h2>
                    <p class='noticia-descricao'><?php echo $value['shortDescription']; ?><p>
                    <p class='leia-mais'>Leia mais...&rarr;</p>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>