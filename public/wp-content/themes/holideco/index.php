<?php get_header(); ?>

<div class="container">
    <h1><?php _e('News', 'holideco'); ?></h1>
    <?php
        while (have_posts()) { the_post() ?>
            <div>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            </div>
        <?php }
    ?>
</div>

<?php get_footer(); ?>