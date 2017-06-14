<?php
/*
Widget Name: WooCommerce all products by YumeCommerce
Description: Widget shows all products from WooCommerce and separates them by categories.
Author: YumeCommerce
Author URI: http://yumecommerce.com/
*/

class YumeCommerce_Woo_All_Products_Widget extends SiteOrigin_Widget {
    function __construct() {
        parent::__construct(
            'yc-woo-all-products',
            __( 'WooCommerce all products by YumeCommerce', 'yc-widgets-bundle' ),
            array(
                'description' => __( 'Widget shows all products from WooCommerce and separates them by categories.', 'yc-widgets-bundle' ),
            ),
            array(),
            false,
            plugin_dir_path(__FILE__)
        );
    }

    function initialize_form(){

        // get all woo category
        $category_options = array("all" => "All");

        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
            if ( taxonomy_exists('product_cat') ) {
                $product_categories = get_terms( 'product_cat' );
                foreach ( $product_categories as $category ) {
                    $add_category = array("$category->slug" => "$category->name");
                    $category_options = array_merge($category_options, $add_category);
                }
            }
        }

        return array(
            'category' => array(
                'type' => 'select',
                'label' => __( 'Category', 'yc-widgets-bundle' ),
                'description' => __( 'This options should be modified and saved in backend.', 'yc-widgets-bundle' ),
                'default' => 'all',
                'options' => $category_options,
            ),

            'orderby' => array(
                'type' => 'select',
                'label' => __( 'Order by', 'yc-widgets-bundle' ),
                'default' => 'date',
                'options' => array(
                    'menu_order' => __( 'Menu order', 'yc-widgets-bundle' ),
                    'title' => __( 'Title', 'yc-widgets-bundle' ),
                    'date' => __( 'Date', 'yc-widgets-bundle' ),
                    'rand' => __( 'Rand', 'yc-widgets-bundle' ),
                    'id' => __( 'ID', 'yc-widgets-bundle' ),
                )
            ),
            'order' => array(
                'type' => 'select',
                'label' => __( 'Order', 'yc-widgets-bundle' ),
                'default' => 'asc',
                'options' => array(
                    'asc' => __( 'Asc', 'yc-widgets-bundle' ),
                    'desc' => __( 'Desc', 'yc-widgets-bundle' ),
                )
            ),
            'per_page' => array(
                'type' => 'number',
                'default' => '-1',
                'label' => __( 'Per page', 'yc-widgets-bundle' ),
                'description' => __( 'Determines how many products to show. Put -1 to show all products from category.', 'yc-widgets-bundle' ),
            ),
        );
    }

    /**
     * Get the template for the headline widget
     */
    function get_template_name( $instance ) {
        return 'yc-woo-all-products';
    }

    /**
     * Get the template variables for the headline
     */
    function get_template_variables( $instance, $args ) {
        return array(
            'orderby' => $instance['orderby'],
            'order' => $instance['order'],
            'per_page' => ! empty( $instance['per_page'] ) ? $instance['per_page'] : '-1',
        );
    }
}

siteorigin_widget_register('yc-woo-all-products', __FILE__, 'YumeCommerce_Woo_All_Products_Widget');
