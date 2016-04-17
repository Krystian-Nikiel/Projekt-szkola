<?php

function theme_enqueue_styles() {
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_filter( 'excerpt_length', function( $length ){
  return 50;
}, 999 );

add_filter( 'excerpt_more', function( $more ){

  global $post;
  return ' <a href="'. get_permalink($post->ID) . '" class="read-more">Czytaj więcej</a>';

}, 999 );

add_filter( 'post_thumbnail_html', function ( $html, $post_id, $post_image_id ) {

  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;

}, 10, 3 );

add_action( 'pre_get_posts', function( $query ){

  $paged = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;

  $query->set( 'posts_per_page', 4 );
  $query->set( 'ignore_sticky_posts', true );
  $query->set( 'paged', $paged );

});

add_action( 'template_redirect', function(){

  if( is_404() ){
    wp_redirect( site_url() );
  }

});

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
  'before_widget' => '<div class="margintop animated fadeIn">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3 class="panel-title">',
  'after_title'   => '</h3></div><div class="panel-body">'
));
function add_custom_script() {

  wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . "/js/custom-scripts.js", array('jquery'), "1.0", true );
  wp_enqueue_script( 'facebook_part1', get_stylesheet_directory_uri() . "/js/facebook_part1.", array('jquery'), "1.0", true );
}
add_action( 'wp_enqueue_scripts', 'add_custom_script' );
function custom_theme_setup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
require_once( TEMPLATEPATH . '/inc/wp-customizer.php' );
