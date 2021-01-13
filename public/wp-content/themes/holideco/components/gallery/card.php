<div class="col-lg-4 col-md-6 col-12">
    <div class="gallery-item">
        <div class="gallery-item-img">
            <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="gallery-item-content">
            <div>
                <h2>
                    <?php
                        $terms = get_the_terms (get_the_ID(), 'holiday');
                        if (!is_wp_error($terms)) {
                            $holiday_links = wp_list_pluck($terms, 'name'); 
                            $holiday = implode(", ", $holiday_links);
                            echo $holiday;
                        }
                        ?>
                </h2>
                <p>
                    <?php _e('By', 'holideco'); ?> <?php the_title(); ?>
                </p>
            </div>
            <div>
                <i data-feather="heart" class="gallery-item-btn"></i>
            </div>
        </div>
    </div>
</div>