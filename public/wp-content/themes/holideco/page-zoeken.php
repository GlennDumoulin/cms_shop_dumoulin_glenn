<?php get_header(); ?>

<div class="container page--zoeken">
    <h1>
        <?php the_title(); ?>
    </h1>

    <?php get_search_form(); ?>

    <div class="row result-containers">
        <div class="col-lg-4 col-md-6 col-12 pages-container"></div>
        <div class="col-lg-4 col-md-6 col-12 posts-container"></div>
        <div class="col-lg-4 col-md-6 col-12 events-container"></div>
    </div>
</div>

<?php get_footer(); ?>