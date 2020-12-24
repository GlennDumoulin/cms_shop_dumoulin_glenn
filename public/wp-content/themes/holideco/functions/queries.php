<?php

function adjustHomeQueries($query) {
    if(!is_admin() AND is_home() && is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}

add_action('pre_get_posts', 'adjustHomeQueries');