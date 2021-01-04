<?php

function loadFiles()
{
    wp_enqueue_style('main-styles', get_stylesheet_uri());
    wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    wp_enqueue_script('main-js', get_theme_file_uri('app.js'), null, '1.0', true);
    wp_enqueue_script('feather-icons', 'https://unpkg.com/feather-icons');
}

add_action('wp_enqueue_scripts', 'loadFiles');
