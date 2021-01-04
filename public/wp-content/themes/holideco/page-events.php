<?php get_header(); ?>

<div class="page--events">
    <?php if (has_post_thumbnail()) { ?>
        <?php get_template_part('components/hero', null, array(
            'content' => get_the_content(),
        )); ?>

        <div class="container">
            <h1>
                <?php the_title(); ?>
            </h1>
            <div class="row events">
                <?php
                    $paged = (get_query_var( 'paged' ) ) ? get_query_var('paged') : 1;
                    $events = new WP_Query(array(
                        'post_type' => 'event',
                        'posts_per_page' => '8',
                        'paged' => $paged,
                    ));

                    while ($events->have_posts()) { $events->the_post();
                        get_template_part('components/events/card');
                    }
                ?>
            </div>
            <?php get_template_part('components/pagination', null, array(
                'previous_label' => 'Recentere events',
                'next_label' => 'Oudere events',
                'items' => $events,
            )) ?>
        </div>
    <?php } wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>