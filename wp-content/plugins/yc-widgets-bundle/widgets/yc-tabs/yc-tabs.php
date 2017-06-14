<?php

/*
Widget Name: Tabs by YumeCommerce
Description: This widget Display Tabs.
Author: YumeCommerce
Author URI: http://yumecommerce.com/
*/

class YumeCommerce_Tabs_Widget extends SiteOrigin_Widget {

    function __construct() {
        parent::__construct(
            'yc-tabs',
            __( 'Tabs by YumeCommerce', 'yc-widgets-bundle' ),
            array(
                'description' => __( 'Tabs Component.', 'yc-widgets-bundle' ),
            ),
            array(),
            false,
            plugin_dir_path(__FILE__)
        );
    }

    function initialize_form(){

        return array(
			'widget_title' => array(
				'type' => 'text',
				'label' => __('Widget Title', 'yc-widgets-bundle'),
				'default' => ''
			),

            'repeater' => array(
                'type' => 'repeater',
                'label' => __( 'Tabs' , 'yc-widgets-bundle' ),
                'item_name'  => __( 'Tab', 'yc-widgets-bundle' ),
                'item_label' => array(
                    'selector'     => "[id*='tab_title']",
                    'update_event' => 'change',
                    'value_method' => 'val'
                ),
                'fields' => array(

                    'tab_icon' => array(
                        'type' => 'icon',
                        'label' => __('Icon', 'yc-widgets-bundle'),
                    ),

                    'tab_title' => array(
                        'type' => 'text',
                        'label' => __('Title', 'yc-widgets-bundle'),
                        'default' => ''
                    ),

                    'content' => array(
                        'type' => 'builder',
                        'builder_type' => 'layout_slider_builder',
                        'label' => __( 'Content builder', 'yc-widgets-bundle' ),
                    ),


                    'tab_content_wrap' => array(
                        'type' => 'section',
                        'label' => __( 'Content editor' , 'yc-widgets-bundle' ),
                        'hide' => true,
                        'fields' => array(
                            'tab_content' => array(
                                'type' => 'tinymce',
                                'label' => __( 'Content', 'yc-widgets-bundle' ),
                                'default' => '',
                                'rows' => 10,
                                'default_editor' => 'html',
                                'button_filters' => array(
                                    'mce_buttons' => array( $this, 'filter_mce_buttons' ),
                                    'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
                                    'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
                                    'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
                                    'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
                                ),
                            ),
                        ),
                    ), 
                ),
            ),

            'tabs_styling' => array(
                'type' => 'section',
                'label' => __( 'Widget styling' , 'yc-widgets-bundle' ),
                'hide' => true,
                'fields' => array(

                    'tab_effect' => array(
                        'type' => 'select',
                        'label' => __( 'Animation effect', 'yc-widgets-bundle' ),
                        'default' => 'slide',
                        'options' => array(
                            'fade' => __( 'Fade', 'yc-widgets-bundle' ),
                            'slide' => __( 'Slide', 'yc-widgets-bundle' ),
                        )
                    ),

                    'tab_icon_position' => array(
                        'type' => 'select',
                        'label' => __( 'Choose a icon position', 'yc-widgets-bundle' ),
                        'default' => 'left',
                        'options' => array(
                            'left' => __( 'Left', 'yc-widgets-bundle' ),
                            'right' => __( 'Right', 'yc-widgets-bundle' ),
                            'top' => __( 'Top', 'yc-widgets-bundle' ),
                        )
                    ),

                    'font_size' => array(
                        'type' => 'measurement',
                        'label' => __( 'Font size for tab', 'yc-widgets-bundle' )
                    ),

                    'font_weight' => array(
                        'type' => 'select',
                        'label' => __('Font weight for tab', 'yc-widgets-bundle'),
                        'options' => array(
                            '100' => '100',
                            '200' => '200',
                            '300' => '300',
                            '400' => '400',
                            '500' => '500',
                            '600' => '600',
                            '700' => '700',
                            '800' => '800',
                            '900' => '900',
                        ),
                        'default' => '700',
                    ),

                    'inactive_tab_color' => array(
                        'type' => 'color',
                        'label' => __( 'Inactive tab font color', 'yc-widgets-bundle' ),
                        'default' => ''
                    ),

                    'active_tab_color' => array(
                        'type' => 'color',
                        'label' => __( 'Active tab font color', 'yc-widgets-bundle' ),
                        'default' => ''
                    ),

                    'active_tab_bg_color' => array(
                        'type' => 'color',
                        'label' => __( 'Active tab background color', 'yc-widgets-bundle' ),
                        'default' => ''
                    ),

                    'tab_border_width' => array(
                        'type' => 'measurement',
                        'label' => __( 'Border width', 'yc-widgets-bundle' )
                    ),

                    'tab_border_color' => array(
                        'type' => 'color',
                        'label' => __( 'Tab border color', 'yc-widgets-bundle' ),
                        'default' => ''
                    ),                    

                    'tab_content_color' => array(
                        'type' => 'color',
                        'label' => __( 'Tab content color', 'yc-widgets-bundle' ),
                        'default' => ''
                    ),
                ),
            ),
        );
    }

	function get_template_name($instance) {
		return 'tabs-template';
	}

	function get_style_name($instance) {
		return 'tabs-style';
	}

    function get_less_variables( $instance ) {
        return array(
            'font_size' => $instance['tabs_styling']['font_size'],
            'font_weight' => $instance['tabs_styling']['font_weight'],
            'tab_border_width' => $instance['tabs_styling']['tab_border_width'],
            'tab_border_color' => $instance['tabs_styling']['tab_border_color'],
            'inactive_tab_color' => $instance['tabs_styling']['inactive_tab_color'],
            'active_tab_bg_color' => $instance['tabs_styling']['active_tab_bg_color'],
            'active_tab_color' => $instance['tabs_styling']['active_tab_color'],
            'tab_content_color' => $instance['tabs_styling']['tab_content_color'],
        );
    }

}
siteorigin_widget_register('yc-tabs', __FILE__, 'YumeCommerce_Tabs_Widget');