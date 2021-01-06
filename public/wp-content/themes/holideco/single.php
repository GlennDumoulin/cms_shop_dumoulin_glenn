<?php get_header(); ?>

<div class="container post">
    <div class="row post-info">
        <div class="col-6 post-info--main">
            <h1>
                <a href="<?php echo site_url('nieuws'); ?>"><?php _e('News', 'holideco'); ?></a> > <?php the_title(); ?>
            </h1>
            <div class="post-info--item">
                <h4><?php _e('Author', 'holideco'); ?></h4>
                <?php the_author_posts_link(); ?>
            </div>
            <div class="post-info--item">
                <h4><?php _e('Categories', 'holideco'); ?></h4>
                <?php 
                    if (!has_category('Uncategorized')) {
                        the_category(null);
                    }
                    else { ?>
                        <span><?php _e('No categories', 'holideco'); ?></span>
                    <?php }
                ?>
            </div>
            <div class="post-info--item">
                <h4><?php _e('Tags', 'holideco'); ?></h4>
                <?php 
                    if (has_tag()) {
                        the_tags('', null, '');
                    }
                    else { ?>
                        <span><?php _e('No tags', 'holideco'); ?></span>
                    <?php }
                ?>
            </div>
        </div>
        <div class="col-6 post-info--img">
            <?php the_post_thumbnail('large'); ?>
        </div>
    </div>
    <div class="post-content"><?php the_content(); ?></div>
</div>

<?php get_footer(); ?>