<?php
/**
 * Sets up theme default pages and registers support for various WordPress features
 * 
 * @since 1.0
 */
 
// Add image size for thumbnail of recent posts
add_image_size( 'yumecommerce-thumbnail', 760, 345, array( 'center', 'center' ) );
add_image_size( 'yumecommerce-blog-large', 1024, 465, array( 'center', 'center' ) );

function loor_register_my_menus() {
  register_nav_menus(
    array(
      'loor_top_nav' => __( 'Header Menu', 'loor' ),
      'loor_footer_nav' => __( 'Footer Menu', 'loor' )
    )
  );
}
add_action( 'init', 'loor_register_my_menus' );
 
function loor_setup() {
    // Make theme available for translation.
    load_theme_textdomain( 'loor', get_template_directory() . '/languages' );
    
    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
    // support for thumbnails
    add_theme_support( 'post-thumbnails' );
    
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );
    
    // support for woocommerce
    add_theme_support('woocommerce');
    
    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'caption',
	) );
	
	if ( ! isset( $content_width ) ) {
	    $content_width = 700;
	}
}
add_action( 'after_setup_theme', 'loor_setup' );

// make required widgets active all the time
function loor_filter_active_widgets($active) {
  $active['yc-headline'] = true;
  $active['yc-recent-posts'] = true;
  $active['yc-woo-all-products'] = true;
  $active['yc-button'] = true;
  $active['yc-features'] = true;
  $active['yc-tabs'] = true;
  $active['sow-button'] = true;
  $active['sow-contact-form'] = true;
  $active['sow-image'] = true;
  return $active;
}
add_filter( 'siteorigin_widgets_active_widgets', 'loor_filter_active_widgets' );
