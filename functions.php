<?php

/**
 * Theme support
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

/**
 * Styles
 */
wp_enqueue_style( 'ja-bootstrap', get_stylesheet_directory_uri() . '/bootstrap/bootstrap-grid.min.css' );
wp_enqueue_style( 'ja-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,900' );
wp_enqueue_style( 'ja-style', get_stylesheet_directory_uri() . '/style.css' );

/**
 * Scripts
 */
wp_enqueue_script( 'ja-script', get_template_directory_uri() . '/js/script.js', array('jquery'),'0.1', true );

/**
 * Show admin bar
 */
function my_function_admin_bar() {
    return false;
}
add_filter('show_admin_bar', 'my_function_admin_bar');