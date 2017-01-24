<?php
/**
 * Loading Resources
 * Add the extra static resources of the child theme after the main style file
 */

function loor_child_enqueue_styles() {

$parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'loor-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}

add_action( 'wp_enqueue_scripts', 'loor_child_enqueue_styles' );