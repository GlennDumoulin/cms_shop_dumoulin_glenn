<div class="col-lg-6 col-12">
    <div class="card">
        <a href="<?php the_permalink(); ?>">
            <div class="card-img">
                <?php the_post_thumbnail('medium_large'); ?>
            </div>
            <div class="card-content">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <?php
                    if (has_excerpt()) {
                        the_excerpt();
                    } else {
                        echo '<p>' . wp_trim_words(get_the_content(), 15) . '</p>';
                    }
                ?>
            </div>
            <div class="card-author">
                <em class="author">
                    <?php _e('Written by', 'holideco'); ?> <?php the_author(); ?> <?php _e('on', 'holideco'); ?> <?php echo get_the_date(); ?>
                </em>
            </div>
        </a>
    </div>
</div>