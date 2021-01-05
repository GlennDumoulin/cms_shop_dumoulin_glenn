<?php get_header(); ?>

<div class="page--home">
    <h1 class="hidden">Welkom bij HoliDeco!</h1>
    <section>
        <?php if (is_active_sidebar( 'hero-webshop' )) { ?>
            <aside class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'hero-webshop' ); ?>
            </aside>
        <?php } ?>
    </section>
    <section>
        <div class="row no-gutters">
            <div class="col-4 section-info">
                <h2>Benieuwd wie wij zijn?</h2>
                <a href="http://holideco.local/over-ons" rel="noreferrer noopener" class="btn opacity">Ontdek het hier</a>
                <h2>Heb je nog vragen?</h2>
                <a href="http://holideco.local/contact" rel="noreferrer noopener" class="btn opacity">Aarzel niet en contacteer ons</a>
            </div>
            <div class="col-8 section-image">
                <img src="http://holideco.local/wp-content/uploads/2021/01/holideco_logo.png" class="attachment-large size-large wp-post-image" alt loading="lazy">
            </div>
        </div>
    </section>
    <div class="container">
        <section>
            <h1>Recente events</h1>
            <div class="row recent-events">
                <?php get_template_part('components/events/card', 'loop', array(
                    'amount' => '2',
                )) ?>
            </div>
            <a href="<?php echo site_url('events') ; ?>" rel="noreferrer noopener" class="btn">Bekijk alle events</a>
        </section>
        <section>
            <h1>Recente posts</h1>
            <div class="row recent-posts">
                <?php get_template_part('components/posts/card', 'loop', array(
                    'amount' => '2',
                )) ?>
            </div>
            <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" rel="noreferrer noopener" class="btn">Bekijk alle posts</a>
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