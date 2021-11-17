<section id="news">
    <div id="news-blocks">
        <?php
        $nC = new NewsController();
        $news = $nC->getLatestNews();

        foreach ($news as $key => $value):
            $href = "/src/pages/news.php?id=" . $value['id'];
            $mainImage = getPath($value['mainImage']);
        ?>
            <a href="<?php echo $href; ?>">
                <div 
                    class="news-tile <?php echo $key >= 4 ? 'bottom-tile' : ''; ?>" 
                    style="background-image: url('<?php echo $mainImage; ?>');"
                >
                    <div class="news-text">
                        <h3><?php echo $value['title']; ?></h3>
                        <p><?php echo $value['shortDescription']; ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>