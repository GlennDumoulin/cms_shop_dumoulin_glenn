<?php get_header(); ?>

<div class="container page--archive">
    <h1>
        <?php _e('Archive:', 'holideco'); ?> 
        <?php
            if (is_author()) {
                the_author();
            } elseif (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } else {
                echo 'Oops hier ging iets mis!';
            }
        ?>
    </h1>
    <div class="row posts">
        <?php
            while (have_posts()) { the_post();
                get_template_part('components/posts/card');
            }
        ?>
    </div>
    <?php get_template_part('components/pagination', null, array(
        'previous_label' => 'Vorige',
        'next_label' => 'Volgende',
    )) ?>
</div>

<?php get_footer(); ?>