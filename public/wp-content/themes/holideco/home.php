<?php get_header(); ?>

<div class="container page--nieuws">
    <h1>Nieuws</h1>
    <div class="row posts">
        <?php get_template_part('components/cards/cards') ?>
    </div>
    <?php get_template_part('components/pagination', null, array(
        'previous_label' => 'Recentere posts',
        'next_label' => 'Oudere posts',
    )) ?>
</div>

<?php get_footer(); ?>