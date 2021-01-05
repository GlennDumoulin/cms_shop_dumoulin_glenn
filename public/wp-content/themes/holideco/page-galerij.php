<?php get_header(); ?>

<div class="page--galerij">
    <?php if (has_post_thumbnail()) { ?>
        <?php get_template_part('components/hero', null, array(
            'content' => get_the_content(),
        )); ?>

        <div class="container">
            <h1>
                <?php the_title(); ?>
            </h1>
            <div class="row gallery">
                <?php
                    $paged = (get_query_var( 'paged' ) ) ? get_query_var('paged') : 1;
                    $gallery = new WP_Query(array(
                        'post_type' => 'gallery_item',
                        'posts_per_page' => '9',
                        'paged' => $paged,
                    ));

                    while ($gallery->have_posts()) { $gallery->the_post();
                        get_template_part('components/gallery/card');
                    }
                ?>
            </div>
            <?php get_template_part('components/pagination', null, array(
                'previous_label' => 'Vorige afbeeldingen',
                'next_label' => 'Volgende afbeeldingen',
                'items' => $gallery,
            )) ?>
        </div>
    <?php } wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>