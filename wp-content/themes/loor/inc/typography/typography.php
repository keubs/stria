<?php

/**
 * Font customizer.
 */
require get_template_directory() . '/inc/typography/fonts-customizer.php';

// load js fonts
function loor_add_custom_customizer_script() {
	wp_enqueue_script( 'loor_custom_customizer_script', get_template_directory_uri() . '/inc/typography/js/controls.js', array( 'jquery', 'customize-controls' ), false, true ) ;
}
add_action( 'customize_controls_enqueue_scripts', 'loor_add_custom_customizer_script' );

// style for typography section
function loor_options_custom_style() {
  wp_register_style( 'loor_options_custom_style', get_template_directory_uri() . '/inc/typography/css/main.css' );
  wp_enqueue_style( 'loor_options_custom_style' );
}

add_action( 'admin_enqueue_scripts', 'loor_options_custom_style', 20 );