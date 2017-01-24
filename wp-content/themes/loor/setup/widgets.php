<?php

// Add main sidebar    
// Add widget for custom sections
function loor_custom_widgets_init() {
    register_sidebar(array(
        'name'          => __( 'Blog widget area', 'loor' ),
        'id'            => 'main_sidebar',
        'description'   => __( 'Add widgets here to appear in your blog page.', 'loor' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>'
    ));
    register_sidebar(array(
        'name'          => __( 'Footer widget area', 'loor' ),
        'id'            => 'loor_footer',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => __( 'Shop widget area', 'loor' ),
        'id'            => 'shop_sidebar',
        'description'   => __( 'Only if you are using theme as a standard store. Add widgets here to appear in your shop page.', 'loor' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>'
    ));
}
add_action( 'widgets_init', 'loor_custom_widgets_init' );