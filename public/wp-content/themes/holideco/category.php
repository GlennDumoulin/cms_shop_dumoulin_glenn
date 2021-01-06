<?php get_header(); ?>

<div class="container page--archive">
    <h1>
        <?php _e('Category:', 'holideco'); ?> <?php single_cat_title(); ?>
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
    <div class="other-archives">
        <h2><?php _e('Also watch other categories', 'holideco'); ?></h2>
        <?php wp_list_cats(); ?>
    </div>
</div>

<?php get_footer(); ?>