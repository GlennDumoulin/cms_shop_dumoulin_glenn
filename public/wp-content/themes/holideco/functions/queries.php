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

function adjustSearchQueries($query) {
    if(!is_admin() AND is_search() && is_main_query()) {
        $query->set('posts_per_page', '10');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}

add_action('pre_get_posts', 'adjustHomeQueries');
add_action('pre_get_posts', 'adjustArchiveQueries');
add_action('pre_get_posts', 'adjustSearchQueries');