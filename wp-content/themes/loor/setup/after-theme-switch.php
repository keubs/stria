<?php
/**
 * Custom functions for theme
 * 
 * @since 1.0
 */
 
function loor_after_switch_theme_settings() {
    // Make theme available for translation
    load_theme_textdomain( 'loor', get_template_directory() . '/languages' );
    
    // Allow woocommerce comments
    update_option( 'default_comment_status', 'open' );
    
    // Turn off AJAX add to cart buttons on archives
    update_option( 'woocommerce_enable_ajax_add_to_cart', 'no' );
    
    // Turn off lightbox in woocomerce
    update_option( 'woocommerce_enable_lightbox', 'no' );
    
    // Turn off redirect after add
    update_option( 'woocommerce_cart_redirect_after_add', 'no' );
    
    // Define image sizes
    $catalog = array(
        'width'     => '500',
        'height'    => '500',
        'crop'      => 1
    );

    $single = array(
        'width'     => '1024',
        'height'    => '1024',
        'crop'      => 1
    );

    $thumbnail = array(
        'width'     => '300',
        'height'    => '300',
        'crop'      => 1
    );

    // Image sizes
    update_option( 'shop_catalog_image_size', $catalog );
    update_option( 'shop_single_image_size', $single );
    update_option( 'shop_thumbnail_image_size', $thumbnail );

    update_option('thumbnail_size_w',300);
    update_option('thumbnail_size_h',300);
    update_option('medium_size_w',500);
    update_option('medium_size_h',500);
    update_option('large_size_w',1024);
    update_option('large_size_h',1024);
    
    
}

add_action( 'after_switch_theme', 'loor_after_switch_theme_settings', 1 );