<?php get_header(); ?>

<div class="container page--archive">
    <h1>
        Tag: <?php single_tag_title(); ?>
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
</div>

<?php get_footer(); ?>