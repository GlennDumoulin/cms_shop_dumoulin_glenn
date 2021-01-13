<?php get_header(); ?>

<div class="page--home">
    <h1 class="hidden"><?php _e('Welcome to HoliDeco!', 'holideco'); ?></h1>
    <section>
        <?php if (is_active_sidebar( 'hero-webshop' )) { ?>
            <aside class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'hero-webshop' ); ?>
            </aside>
        <?php } ?>
    </section>
    <section>
        <div class="row no-gutters">
            <div class="col-lg-5 col-md-6 col-12 section-info">
                <h2><?php _e('Wanna know who we are?', 'holideco'); ?></h2>
                <a href="http://holideco.local/over-ons" rel="noreferrer noopener" class="btn opacity"><?php _e('Discover it here', 'holideco'); ?></a>
                <h2><?php _e('Do you have other questions?', 'holideco'); ?></h2>
                <a href="http://holideco.local/contact" rel="noreferrer noopener" class="btn opacity"><?php _e('Don\'t panic and just ask us', 'holideco'); ?></a>
            </div>
            <div class="col-lg-7 col-md-6 col-12 section-image">
                <?php if (is_active_sidebar( 'logo-large' )) { ?>
                    <aside class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'logo-large' ); ?>
                    </aside>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="container">
        <section>
            <h1><?php _e('Recent events', 'holideco'); ?></h1>
            <div class="row recent-events">
                <?php get_template_part('components/events/card', 'loop', array(
                    'amount' => '2',
                )) ?>
            </div>
            <a href="<?php echo site_url('events') ; ?>" rel="noreferrer noopener" class="btn"><?php _e('See all events', 'holideco'); ?></a>
        </section>
        <section>
            <h1><?php _e('Recent posts', 'holideco'); ?></h1>
            <div class="row recent-posts">
                <?php get_template_part('components/posts/card', 'loop', array(
                    'amount' => '2',
                )) ?>
            </div>
            <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" rel="noreferrer noopener" class="btn"><?php _e('See all posts', 'holideco'); ?></a>
        </section>
    </div>
    <section>
        <?php if (is_active_sidebar( 'hero-galerij' )) { ?>
            <aside class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'hero-galerij' ); ?>
            </aside>
        <?php } ?>
    </section>
</div>

<?php get_footer(); ?>