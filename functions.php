<?php

/*
 * Show admin bar
 */
function my_function_admin_bar() {
    return true;
}
add_filter('show_admin_bar', 'my_function_admin_bar');