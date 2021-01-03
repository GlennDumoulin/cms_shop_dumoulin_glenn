<?php get_header(); ?>

<div class="container page--archive">
    <h1>
        Categorie: <?php single_cat_title(); ?>
    </h1>
    <div class="row posts">
        <?php get_template_part('components/cards/cards') ?>
    </div>
    <?php get_template_part('components/pagination', null, array(
        'previous_label' => 'Vorige',
        'next_label' => 'Volgende',
    )) ?>
    <div class="other-archives">
        <h2>Bekijk ook andere categorieën</h2>
        <?php wp_list_cats(); ?>
    </div>
</div>

<?php get_footer(); ?>