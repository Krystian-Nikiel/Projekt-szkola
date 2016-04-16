<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function sms_styles_scripts() {
    // fontello
    wp_enqueue_style( 'fontello-1', get_stylesheet_directory_uri() . '/fonts/fontello/css/fontello.css', array(), '', 'all' );
    // fontello
    wp_enqueue_style( 'fontello-2', get_stylesheet_directory_uri() . '/fonts/fontello/css/animation.css', array(), '', 'all' );
    // fontello
    wp_enqueue_style( 'fontello-3', get_stylesheet_directory_uri() . '/fonts/fontello/css/fontello-codes.css', array(), '', 'all' );
    // fontello
    wp_enqueue_style( 'fontello-4', get_stylesheet_directory_uri() . '/fonts/fontello/css/fontello-embedded.css', array(), '', 'all' );
}
add_action( 'wp_enqueue_scripts', 'sms_styles_scripts' );
register_nav_menus( array(
    'menu_glowne' => 'Nasze nowe menu główne'
));

/**
 * Tworzenie sidebara
 */
register_sidebar ( array(
  'id' 			  => 'proba',
  'name'          => 'main-sidebar',
  'description'   => 'Pasek boczny',
  'before_widget' => '<br><div class="col-md-12"><div class="panel panel-default no-corners">',
  'after_widget'  => '</div></div></div>',
  'before_title'  => '<div class="panel-heading"><h3 class="panel-title">',
  'after_title'   => '</h3></div><div class="panel-body">'
));
function add_custom_script() {

    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . "/js/custom-scripts.js", array('jquery'), "1.0", true );
  }
  add_action( 'wp_enqueue_scripts', 'add_custom_script' );
function custom_theme_setup() {
add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
require_once( TEMPLATEPATH . '/inc/wp-customizer.php' );



function new_excerpt_more($more) {
       global $post;
    return '<a href="'. get_permalink($post->ID) . '">More...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
$args = array(
	'type'            => 'monthly',
	'limit'           => '5',
	'format'          => 'html',
	'before'          => '<div class="akt"',
	'after'           => '</div>',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC',
        'post_type'     => 'post'
);
