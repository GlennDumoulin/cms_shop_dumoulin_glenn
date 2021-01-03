<?php get_header(); ?>

<div class="container page--archive">
    <h1>Archive: 
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
        <?php get_template_part('components/cards/cards') ?>
    </div>
    <?php get_template_part('components/pagination', null, array(
        'previous_label' => 'Vorige',
        'next_label' => 'Volgende',
    )) ?>
</div>

<?php get_footer(); ?>