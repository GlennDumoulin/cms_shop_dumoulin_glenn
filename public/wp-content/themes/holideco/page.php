<?php get_header(); ?>

<div class="page--<?php echo strtolower(get_the_title()); ?>">
    <?php if (has_post_thumbnail()) { ?>
        <?php get_template_part('components/hero', null, array(
            'content' => get_the_content(),
        )); ?>

        <div class="container">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>
    <?php } else { ?>
        <div class="container">
            <h1>
                <?php the_title(); ?>
            </h1>
            <div>
                <?php the_content(); ?>
            </div>
        </div>
    <?php } ?>
</div>

<?php get_footer(); ?>