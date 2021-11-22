<section id="news">
    <img id="news-logo" src="/assets/img/Logosemnome.svg" />
    <?php require_once('accessibility.html'); ?>
    <div id="news-blocks">
        <?php
        $nC = new NewsController();
        $news = $nC->getLatestNews();

        foreach ($news as $key => $value):
            $href = "/src/pages/news.php?id=" . $value['id'];
            $mainImage = getPath($value['mainImage']);
            $add = strlen($value['shortDescription']) > 100 ?  "..." : "";
        ?>
            <a 
                href="<?php echo $href; ?>"
                class="news-tile <?php echo $key >= 4 ? 'bottom-tile' : ''; ?>" 
                style="background-image: url('<?php echo $mainImage; ?>');"
            >
                <div class="news-text">
                    <h3 class='news-text-title'><?php echo $value['title']; ?></h3>
                    <p><?php echo substr($value['shortDescription'], 0, 100) . $add; ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>
