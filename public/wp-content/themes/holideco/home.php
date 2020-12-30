<?php get_header(); ?>

<div class="container page--nieuws">
    <h1>Nieuws</h1>
    <div class="row posts">
    <?php
        while (have_posts()) { the_post() ?>
                <div class="col-6">
                    <div class="card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card-img">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </div>
                            <div class="card-content">
                                <h2>
                                    <?php the_title(); ?>
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
                                    Geschreven door <?php the_author(); ?> op <?php the_date(); ?>
                                </em>
                            </div>
                        </a>
                    </div>
                </div>
        <?php }
    ?>
    </div>
    <div class="pagination">
        <?php previous_posts_link('<i data-feather="chevron-left"></i> Recentere posts') ?>
        <?php next_posts_link('Oudere posts <i data-feather="chevron-right"></i>') ?>
    </div>
</div>

<?php get_footer(); ?>