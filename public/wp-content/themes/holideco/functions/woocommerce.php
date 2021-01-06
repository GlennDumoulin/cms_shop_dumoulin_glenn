<?php

function addWoocommerceSupport() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'addWoocommerceSupport' );