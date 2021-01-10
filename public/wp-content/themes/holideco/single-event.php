<?php get_header(); ?>

<div class="container event">
    <h1>
        <a href="<?php echo site_url('events'); ?>"><?php _e('Events', 'holideco'); ?></a> > <?php the_title(); ?>
    </h1>
    <div class="event-content event-content-container">
            <p class="event-location">
                <?php _e('Location(s):', 'holideco'); ?>
                <?php
                    $terms = get_the_terms (get_the_ID(), 'location');
                    if (!is_wp_error($terms)) {
                        $location_links = wp_list_pluck($terms, 'name'); 
                        $location = implode(", ", $location_links);
                        echo $location;
                    }
                ?>
            </p>
            <?php the_content(); ?>
        </div>
</div>

<?php get_footer(); ?>