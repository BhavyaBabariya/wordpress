<?php
function my_custom_theme_setup() {
    // Add support for featured images
    add_theme_support( 'post-thumbnails' );
    
    // Register a navigation menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-custom-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );

// Enqueue styles and scripts
function my_custom_theme_enqueue_scripts() {
    wp_enqueue_style( 'main-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts' );
