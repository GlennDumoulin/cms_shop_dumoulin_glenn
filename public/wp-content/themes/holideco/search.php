<?php get_header(); ?>

<div class="container">
    <h1>
        Jouw resultaten voor '<?php the_search_query() ?>'
    </h1>

    <a href="<?php echo esc_url(site_url('zoeken')) ?>">
        Terug naar zoeken
    </a>

    <?php get_search_form() ?>

    <?php
    while (have_posts()) { the_post() ?>
        <div class="search-results">
            <?php get_template_part( 'components/search/result', null, array(
                'post_type' => get_post_type(),
            )) ?>
        </div>
    <?php } ?>

    <?php get_template_part('components/pagination', null, array(
        'previous_label' => 'Vorige resultaten',
        'next_label' => 'Volgende resultaten',
    )) ?>
</div>

<?php get_footer(); ?>