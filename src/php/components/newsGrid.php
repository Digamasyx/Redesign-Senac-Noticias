<section id="news">
    <div id="news-blocks">
        <?php
        $top = 'https://via.placeholder.com/280x720';
        $bottom = 'https://via.placeholder.com/720x280';

        for ($i = 0; $i < 6; $i++):
        ?>
            <div 
                class="news-tile <?php echo $i >= 4 ? 'bottom-tile' : ''; ?>" 
                style="background-image: url('<?php echo $i < 4 ? $top : $bottom; ?>');"
            >
                <div class="news-text">
                    <h3>Título</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget neque quis eros aliquam viverra id eu elit.
                    </p>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>