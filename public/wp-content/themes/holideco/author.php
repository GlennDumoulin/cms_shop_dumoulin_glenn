<?php get_header(); ?>

<div class="container page--archive">
    <h1>
        Auteur: <?php the_author(); ?>
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
        <h2>Bekijk ook andere auteurs</h2>
        <?php wp_list_authors(); ?>
    </div>
</div>

<?php get_footer(); ?>