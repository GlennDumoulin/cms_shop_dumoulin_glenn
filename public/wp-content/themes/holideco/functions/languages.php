<?php

function loadTextdomain() {
    load_theme_textdomain('holideco', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'loadTextdomain');