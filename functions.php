<?php

/* * Enable thumbnails */
add_theme_support( 'post-thumbnails' );

/* * Enable menus */
add_theme_support( 'menus' );

/*
 * Show admin bar
 */
function my_function_admin_bar() {
    return true;
}
add_filter('show_admin_bar', 'my_function_admin_bar');