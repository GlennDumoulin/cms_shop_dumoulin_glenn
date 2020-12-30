<?php if (has_post_thumbnail()) { ?>
    <div class="hero">
        <?php the_post_thumbnail('hero-image'); ?>
        <div class="overlay"></div>
        <div class="hero-content">
            <?php
                if ($args['content'] !== null) {
                    echo $args['content'];
                }
            ?>
        </div>
    </div>
<?php } ?>