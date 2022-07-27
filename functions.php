<?php 

require locate_template('/functions/func-helpers.php');

// Add theme support

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in our CSS
function wphierarchy_enqueue_styles(){
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri(  ) . '/style.css', [], time(), 'all');
    wp_enqueue_style( 'app-css', get_stylesheet_directory_uri(  ) . '/rescources/css/app.css', ['main-css'], time(), 'all');
}

add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles');

// Load in our JS

function wphierarchy_enqueue_scripts(){
    wp_enqueue_script('script-js', get_stylesheet_directory_uri(  ) . '/assets/js/script.js', [], time(), true );
}

add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_scripts');

// Register Menu Locations

register_nav_menus([
    'main-menu' => esc_html__( 'Main Menu', 'wphierarchy' ),
]);

// Setup Widgets Areas

function wphierarchy_widgets_init(){
    register_sidebar([
        'name'          => esc_html__('Main sidebar', 'wphieraarchy'),
        'id'            => 'main-sidebar',
        'description'   => esc_html__('Add widgets for main sidebar here', 'wphieraarchy'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'wphierarchy_widgets_init');

// Register ACF Options Page

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}




?>