<?php

function contactWidgets() {
    register_sidebar( array(
        'name' => __( 'Contact Area', 'contact-form' ),
        'id' => 'contact-form',
        'description' => __( 'Description', 'contact-form' ),
        'before_widget' => '<div class="contact-form">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

function footerWidgets() {
    register_sidebar( array(
        'name' => __( 'Footer Area', 'footer-form' ),
        'id' => 'footer-form',
        'description' => __( 'Description', 'footer-form' ),
        'before_widget' => '<div class="footer-form">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action( 'widgets_init', 'contactWidgets' );
add_action( 'widgets_init', 'footerWidgets' );