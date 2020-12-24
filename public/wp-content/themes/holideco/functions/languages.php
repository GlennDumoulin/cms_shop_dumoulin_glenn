<?php

function my_theme_load_theme_textdomain() {
    load_theme_textdomain('presidency', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'my_theme_load_theme_textdomain');