<div id="news-list">
    <?php 
    $dbh = new NewsController();
    $news = $dbh->getAllNews();

    foreach ($news as $value):
        $href = "/src/news/pages/new.php?id=" . $value['id'];
    ?>
        <a href='<?php echo $href; ?>'>
            <div class='news'>
                <h2><?php echo $value['title']; ?></h2>
                <img src='<?php echo getPath($value['mainImage']) ?>' />
                <p><?php echo $value['shortDescription']; ?><p>
            </div>
        </a>
    <?php endforeach; ?>
</div>