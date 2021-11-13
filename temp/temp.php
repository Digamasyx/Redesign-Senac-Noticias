<?php
require_once(__DIR__ . '/src/php/classes/NewsController.php');
require_once(__DIR__ . '/src/php/functions/getPath.php');
?>

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
                <div class="news-tile <?php echo $key >= 4 ? 'bottom-tile' : ''; ?>">
                    <img src="<?php echo $mainImage; ?>" alt="<?php echo $value['title']; ?>" />

                    <div class="news-text">
                        <h3><?php echo $value['title']; ?></h3>
                        <p><?php echo $value['shortDescription']; ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>