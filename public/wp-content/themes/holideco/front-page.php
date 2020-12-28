<?php get_header(); ?>

<div class="container page--home">
    <h1 class="hidden">Welkom bij HoliDeco!</h1>
    <section>
        <h1>Recente posts</h1>
        <div class="row recent-posts">
            <?php
                while (have_posts()) { the_post() ?>
                    <div class="col-6">
                        <div class="card">
                            <a href="<?php the_permalink(); ?>">
                                <div class="card-img">
                                    <img src="https://picsum.photos/200/100" />
                                </div>
                                <div class="card-content">
                                    <h2>
                                        <?php the_title() ?>
                                    </h2>
                                    <?php
                                        if (has_excerpt()) {
                                            the_excerpt();
                                        } else {
                                            echo '<p>' . wp_trim_words(get_the_content(), 20) . '</p>';
                                        }
                                    ?>
                                </div>
                                <div class="card-author">
                                    <em class="author">
                                        Geschreven door: <?php the_author() ?>
                                    </em>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
        <a href="<?php echo site_url('nieuws'); ?>" rel="noreferrer noopener" class="btn">Bekijk alle posts</a>
    </section>
</div>

<?php get_footer(); ?>