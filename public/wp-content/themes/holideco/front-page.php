<?php get_header(); ?>

<div class="container page--home">
    <h1 class="hidden">Welkom bij HoliDeco!</h1>
    <section>
        <h1>Recente posts</h1>
        <div class="row recent-posts">
            <?php get_template_part( 'components/cards', null, array(
                'type' => 'post',
                'amount' => '2',
            )) ?>
        </div>
        <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" rel="noreferrer noopener" class="btn">Bekijk alle posts</a>
    </section>
</div>

<?php get_footer(); ?>