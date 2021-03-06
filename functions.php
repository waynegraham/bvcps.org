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
  $content_width = 1200;
}

add_image_size( 'wpbs-featured', 780, 300, true );
add_image_size( 'wpbs-featured-home', 970, 311, true);
add_image_size( 'wpbs-featured-carousel', 970, 400, true);

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
    'goodview',
    get_template_directory_uri() . '/js/goodview.min.js',
    array('jquery'),
    '1.0',
    true
  );

  wp_register_script(
    'bootstrap',
    '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js',
    array('jquery'),
    '3.1.1',
    true
  );

  wp_enqueue_script('goodview');
  wp_enqueue_script('bootstrap');

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

function good_view_closings() {

	$labels = array(
		'name'                => _x( 'closings', 'Post Type General Name', 'goodview' ),
		'singular_name'       => _x( 'closing', 'Post Type Singular Name', 'goodview' ),
		'menu_name'           => __( 'School Closings', 'goodview' ),
		'parent_item_colon'   => __( '', 'goodview' ),
		'all_items'           => __( '', 'goodview' ),
		'view_item'           => __( 'View Closing', 'goodview' ),
		'add_new_item'        => __( 'Add New Closing', 'goodview' ),
		'add_new'             => __( 'Add New', 'goodview' ),
		'edit_item'           => __( 'Edit Closing', 'goodview' ),
		'update_item'         => __( 'Update Closing', 'goodview' ),
		'search_items'        => __( 'Search Closings', 'goodview' ),
		'not_found'           => __( 'Not found', 'goodview' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'goodview' ),
	);
	$args = array(
		'label'               => __( 'closings', 'goodview' ),
		'description'         => __( 'School', 'goodview' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		//'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'post',
	);
	register_post_type( 'closings', $args );

}

// Hook into the 'init' action
add_action( 'init', 'good_view_closings', 0 );


function custom_excerpt_length( $length ) {
	return 20;
}
//add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
