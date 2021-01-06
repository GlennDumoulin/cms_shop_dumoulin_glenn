<?php get_header(); ?>

<div class="container page--nieuws">
    <h1><?php _e('News', 'holideco'); ?></h1>
    <div class="row posts">
        <?php
            while (have_posts()) { the_post();
                get_template_part('components/posts/card');
            }
        ?>
    </div>
    <?php get_template_part('components/pagination', null, array(
        'previous_label' => 'Recentere posts',
        'next_label' => 'Oudere posts',
    )) ?>
</div>

<?php get_footer(); ?>