<?php get_header(); ?>

<div class="container page--zoeken">
    <h1>
        Zoekresultaten voor <?php the_search_query() ?>
    </h1>

    <a href="<?php echo esc_url(site_url('zoeken')) ?>" title="Terug naar zoeken" class="back-btn">
        <i data-feather="arrow-left-circle"></i>
    </a>

    <?php get_search_form() ?>

    <ul class="all-results">
        <?php
        while (have_posts()) { the_post() ?>
            <?php get_template_part( 'components/search/result', null, array(
                'post_type' => get_post_type(),
            )) ?>
        <?php } ?>
    </ul>

    <?php get_template_part('components/pagination', null, array(
        'previous_label' => 'Vorige resultaten',
        'next_label' => 'Volgende resultaten',
    )) ?>
</div>

<?php get_footer(); ?>