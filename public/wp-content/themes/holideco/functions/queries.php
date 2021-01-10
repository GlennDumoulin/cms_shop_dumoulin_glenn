<?php

function adjustHomeQueries($query) {
    if(!is_admin() AND is_home() && is_main_query()) {
        $query->set('posts_per_page', '6');
    }
}

function adjustArchiveQueries($query) {
    if(!is_admin() AND is_archive() && is_main_query()) {
        $query->set('posts_per_page', '6');
    }
}

add_action('pre_get_posts', 'adjustHomeQueries');
add_action('pre_get_posts', 'adjustArchiveQueries');