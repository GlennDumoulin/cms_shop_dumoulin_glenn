<?php get_header(); ?>

<div class="container page--zoeken">
    <h1>
        <?php the_title(); ?>
    </h1>

    <?php get_search_form(); ?>

    <div class="row result-containers">
        <div class="col-4 pages-container"></div>
        <div class="col-4 posts-container"></div>
        <div class="col-4 events-container"></div>
    </div>
</div>

<?php get_footer(); ?>