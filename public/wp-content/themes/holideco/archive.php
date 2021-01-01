<?php get_header(); ?>

<div class="container page--archive">
    <h1>Archive: 
        <?php
            if (is_author()) {
                the_author();
            } elseif (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } else {
                echo 'Oops hier ging iets mis!';
            }
        ?>
    </h1>
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
    <?php get_template_part('components/pagination', null, array(
        'previous_label' => 'Vorige',
        'next_label' => 'Volgende',
    )) ?>
</div>

<?php get_footer(); ?>