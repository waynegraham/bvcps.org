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
require_once( 'library/admin.php' );            // core functions (don't remove)
require_once( 'library/custom-post-type.php' ); // you can disable this if you like
//require_once( 'library/bootstrap.php' );        // bootstrap functions
require_once( 'library/wp_bootstrap_navwalker.php' );

register_nav_menus(
  array(
    'primary' => __( 'Primary Menu', 'goodview' ),
  )
);

function goodview_register_sidebars()
{
  register_sidebar(
    array(
      'id' => 'sidebar1',
      'name' => 'Main Sidebar',
      'description' => 'Used on every page BUT the homepage page template',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => 'Homepage Sidebar',
    	'description' => 'Used only on the homepage page template.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));

  register_sidebar(
    array(
      'id' => 'footer1',
      'name' => 'Footer 1',
      'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    )
  );

  register_sidebar(
    array(
      'id' => 'footer2',
      'name' => 'Footer 2',
      'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    )
  );

  register_sidebar(
    array(
      'id' => 'footer3',
      'name' => 'Footer 3',
      'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    )
  );

}

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
    'alert',
    get_template_directory_uri() . '/js/bootstrap/alert.js',
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
  wp_enqueue_script('alert');
  wp_enqueue_script('carousel');
  wp_enqueue_script('retina');

}

add_action( 'wp_enqueue_scripts', 'bv_theme_styles' );
add_action( 'wp_enqueue_scripts', 'bv_theme_js' );

function goodview_widgets_init()
{
  register_sidebar(

  );
}

// enable shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );



