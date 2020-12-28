<?php

function adjustHomeQueries($query) {
    if(!is_admin() AND is_home() && is_main_query()) {
        $query->set('posts_per_page', '2');
    }
}

add_action('pre_get_posts', 'adjustHomeQueries');