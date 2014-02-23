<?php
/**
 * Author: Wayne Graham
 * URL: http://github.com/waynegraham/goodview
 *
 * Custom functions for WP theme.
 */

// Get Bones Core Up & Running!
//
//
require_once( 'library/bones.php' );            // core functions (don't remove)
require_once( 'library/bootstrap.php' );        // bootstrap functions
require_once( 'library/custom-post-type.php' ); // you can disable this if you like

if ( ! isset( $content_width ) ) {
  $content_width = 800;
}

function bv_theme_styles()
{
  wp_register_style(
    'bootstrap',
    get_template_directory_uri() . '/css/styles.css',
    array(),
    '1.0',
    'all'
  );

  wp_enqueue_style( 'bootstrap' );
}

function bv_theme_js()
{
  wp_register_script(
    'dropdown',
    get_template_directory_uri() . '/js/bootstrap/dropdown.js',
    array('jquery'),
    '1.2',
    true
  );

  wp_register_script(
    'carousel',
    get_template_directory_uri() . '/js/bootstrap/carousel.js',
    array('jquery'),
    '1.2',
    true
  );

  wp_register_script(
    'retina',
    get_template_directory_uri() . '/js/retina.min.js',
    array(),
    '1.2',
    true
  );

  wp_enqueue_script('dropdown');
  wp_enqueue_script('carousel');
  wp_enqueue_script('retina');

}

add_action( 'wp_enqueue_scripts', 'bv_theme_styles' );
add_action( 'wp_enqueue_scripts', 'bv_theme_js' );


