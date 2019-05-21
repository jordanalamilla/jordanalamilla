<?php

// Latest web projects 
$args = [
    'post_type'         => 'web_project',
    'posts_per_page'    => 3,
];

include( 'gallery.php' );

// Latest art projects 
$args = [
    'post_type'         => 'art_project',
    'posts_per_page'    => 3,
];

include( 'gallery.php' );