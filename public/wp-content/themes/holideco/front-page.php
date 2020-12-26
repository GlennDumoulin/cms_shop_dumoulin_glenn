<?php get_header(); ?>

<div class="container">
    <h1 class="hidden">Welkom bij HoliDeco!</h1>
    <h1>Recente posts</h1>
    <div class="row">
        <?php
            while (have_posts()) { the_post() ?>
                <div class="col-6">
                    <div class="card">
                        <a href="<?php the_permalink(); ?>">
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
                        </a>
                        <div>
                            <em class="author">
                                Geschreven door: <?php the_author_posts_link() ?>
                            </em>
                        </div>
                    </div>
                </div>
            <?php }
        ?>
    </div>
</div>

<?php get_footer(); ?>