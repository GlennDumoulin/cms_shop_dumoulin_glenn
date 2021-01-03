<?php
    $loop = new WP_Query( array(
        'post_type' => $args['type'] ? $args['type'] : null,
        'posts_per_page' => $args['amount'] ? $args['amount'] : 6,
    ));

    while ($loop->have_posts()) {
        $loop->the_post() ?>
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
    <?php } wp_reset_postdata();
?>