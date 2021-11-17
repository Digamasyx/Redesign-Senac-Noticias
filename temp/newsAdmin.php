<?php 
    $dbh = new NewsController();
    $news = $dbh->getAllNews();
?>

<div class="container">
    <?php foreach ($news as $value): ?>
    <img class="imagem-noticia" src="<?php echo getPath($value['mainImage']); ?>"></img>
    <div class="texto-noticia">
        <h4><?php echo $value['title']; ?></h4>
        <p><?php echo getPath($value['shortDescription']); ?></p>
    </div>
    <div class="btn-noticias">
        <button class="btn-editar" onclick="activateEdit(<?php echo $value['id'] ?>)">Editar</button>
        <button class="btn-apagar" onclick="deleteAction(<?php echo $value['id'] ?>)">Apagar</button>
    </div>
    <?php endforeach; ?>
</div>