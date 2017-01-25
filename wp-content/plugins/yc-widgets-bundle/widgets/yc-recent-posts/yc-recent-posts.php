<?php
/*
Widget Name: Recent posts by YumeCommerce
Description: 
Author: YumeCommerce
Author URI: http://yumecommerce.com/
*/

class YumeCommerce_Recent_Posts_Widget extends SiteOrigin_Widget {
    function __construct() {
        parent::__construct(
            'yc-recent-posts',
            __( 'Recent posts by YumeCommerce', 'yc-widgets-bundle' ),
            array(
                'description' => __( 'Show recent posts by YumeCommerce.', 'yc-widgets-bundle' ),
            ),
            array(),
            false,
            plugin_dir_path(__FILE__)
        );
    }

    function initialize_form(){

        return array(
            'numberposts' => array(
                'type' => 'number',
                'label' => __('Show at most', 'yc-widgets-bundle'),
                'default' => '3',
            ),
            'limit' => array(
                'type' => 'number',
                'label' => __('Limit content to number of words', 'yc-widgets-bundle'),
                'default' => '32',
            ),
            'usedate' => array(
                'type' => 'checkbox',
                'label' => __('Show the date', 'yc-widgets-bundle'),
                'default' => true,
            ),
            'usecomments' => array(
                'type' => 'checkbox',
                'label' => __('Show comments', 'yc-widgets-bundle'),
                'default' => true,
            ),
            'usecontent' => array(
                'type' => 'checkbox',
                'label' => __('Show the content', 'yc-widgets-bundle'),
                'default' => true,
            ),
            'useimage' => array(
                'type' => 'checkbox',
                'label' => __('Show the featured image', 'yc-widgets-bundle'),
                'default' => true,
            ),
            'align' => array(
                'type' => 'select',
                'label' => __( 'Content align', 'yc-widgets-bundle' ),
                'default' => 'left',
                'options' => array(
                    'center' => __( 'Center', 'yc-widgets-bundle' ),
                    'left' => __( 'Left', 'yc-widgets-bundle' ),
                    'right' => __( 'Right', 'yc-widgets-bundle' ),
                    'justify' => __( 'Justify', 'yc-widgets-bundle' )
                ),
            ),
        );
    }

    /**
     * Get the template for the headline widget
     */
    function get_template_name( $instance ) {
        return 'yc-recent-posts';
    }

    /**
     * Get the style of widget
     */
    function get_style_name( $instance ) {
        return 'yc-recent-posts';
    }

    function get_less_variables( $instance ) {
        $less_vars = array();

        if ( ! empty( $instance['numberposts'] ) ) {
            $less_vars['numberposts'] = $instance['numberposts'];
        }

        if ( ! empty( $instance['align'] ) ) {
            $less_vars['align'] = $instance['align'];
        }

        return $less_vars;

    }

    /**
     * Get the template variables for the headline
     */
    function get_template_variables( $instance, $args ) {
        if( empty( $instance ) ) return array();

        return array(
            'numberposts' => $instance['numberposts'] == false ? 3 : $instance['numberposts'],
            'limit' => $instance['limit'],
            'usedate' => $instance['usedate'],
            'usecomments' => $instance['usecomments'],
            'useimage' => $instance['useimage'],
            'usecontent' => $instance['usecontent'],
            
        );
    }
}

siteorigin_widget_register('yc-recent-posts', __FILE__, 'YumeCommerce_Recent_Posts_Widget');
