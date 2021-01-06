<?php get_header(); ?>

<div class="container">
    <h1><?php _e('Ho ho ho, this wasn\'t to happen!', 'holideco'); ?></h1>
    <p><?php _e('You can try a page from our navigation or click on the button below. We apoligize for this inconvinience.', 'holideco'); ?></p>
    <a href="<?php echo site_url(); ?>" rel="noreferrer noopener" class="btn"><?php _e('Back to our home', 'holideco'); ?></a>
</div>

<?php get_footer(); ?>