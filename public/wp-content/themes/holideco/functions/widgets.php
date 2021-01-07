<?php

function footerWidgets() {
    register_sidebar( array(
        'name' => __( 'Footer Form', 'footer-form' ),
        'id' => 'footer-form',
        'description' => __( 'Description', 'footer-form' ),
        'before_widget' => '<div class="footer-form">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar( array(
        'name' => __( 'Footer Address', 'footer-address' ),
        'id' => 'footer-address',
        'description' => __( 'Description', 'footer-address' ),
        'before_widget' => '<div class="footer-address">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

function frontpageWidgets() {
    register_sidebar( array(
        'name' => __( 'Webshop Area', 'hero-webshop' ),
        'id' => 'hero-webshop',
        'description' => __( 'Description', 'hero-webshop' ),
        'before_widget' => '<div class="hero-webshop">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar( array(
        'name' => __( 'Galery Area', 'hero-galerij' ),
        'id' => 'hero-galerij',
        'description' => __( 'Description', 'hero-galerij' ),
        'before_widget' => '<div class="hero-galerij">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar( array(
        'name' => __( 'Large Logo', 'logo-large' ),
        'id' => 'logo-large',
        'description' => __( 'Description', 'logo-large' ),
        'before_widget' => '<div class="logo-large">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

function bannerWidget() {
    register_sidebar( array(
        'name' => __( 'Banner Area', 'banner' ),
        'id' => 'banner',
        'description' => __( 'Description', 'banner' ),
        'before_widget' => '<div class="banner">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action( 'widgets_init', 'footerWidgets' );
add_action( 'widgets_init', 'frontpageWidgets' );
add_action( 'widgets_init', 'bannerWidget' );