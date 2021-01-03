<?php get_header(); ?>

<div class="container page--archive">
    <h1>
        Tag: <?php single_tag_title(); ?>
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