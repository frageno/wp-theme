<?php 

function define_global_theme_options(){

    // Navigation
    $nav_layout = get_field('navigation', 'option');


    // Define the global variables

    define('NAVIGATION_LAYOUT', $nav_layout ? $nav_layout : 'Normal');

}

add_action( 'after_setup_theme', 'define_global_theme_options' );











