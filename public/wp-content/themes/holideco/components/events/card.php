<div class="col-12">
    <div class="event">
        <h4 class="event-date">
            <i data-feather="calendar"></i> <?php the_field('date'); ?>
        </h4>
        <h2 class="event-title">
            <?php the_title(); ?> <i data-feather="chevrons-down" class="event-btn"></i>
        </h2>
        <div class="event-content event-content-container">
            <p class="event-location">
                Locatie(s): 
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
</div>