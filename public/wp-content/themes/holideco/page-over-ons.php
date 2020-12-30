<?php get_header(); ?>

<div class="page--over-ons">
    <?php get_template_part('components/hero', null, array(
        'content' => get_the_content(),
    )); ?>

    <div class="container">
        <?php if (have_rows('row')) {
            while (have_rows('row')) {
                the_row();
    
                $image= get_sub_field('image');
                $title= get_sub_field('title');
                $desc= get_sub_field('description');
                $align= get_sub_field('align'); ?>
    
            <div class="row <?php echo $align ?>">
                <div class="col-6 image">
                    <?php if (!empty($image)) {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </div>
    
                <div class="col-6">
                    <?php if ($title) {
                        echo '<h2>'. $title . '</h2>';
                    } ?>
                    <?php if ($desc) {
                        echo '<p>'. $desc . '</p>';
                    } ?>
                </div>
            </div>
            <?php
            }
        }?>
    </div>
</div>

<?php get_footer(); ?>