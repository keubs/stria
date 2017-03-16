<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) )
    wp_die();

/**
 * Settings
 *
 * @param arr $wpsf_settings
 * @return arr
 */
function iconic_ecifw_settings( $wpsf_settings ) {

    $wpsf_settings = array(

        /**
         * Define: Tabs
         *
         * Define the tabs and their IDs
         */
        'tabs' => array(

            array(
                'id' => 'general',
                'title' => __('General', 'iconic-ecifw')
            ),

            array(
                'id' => 'effects',
                'title' => __('Effect Settings', 'iconic-ecifw')
            ),

        ),

        /**
         * Define: Sections
         *
         * Define the sections within our tabs, and give each
         * section a related tab ID
         */
        'sections' => array(

            array(
                'tab_id' => 'general',
                'section_id' => 'display',
                'section_title' => __('Display Settings', 'iconic-ecifw'),
                'section_description' => '',
                'section_order' => 10,
                'fields' => array(
                    array(
                        'id' => 'effect',
                        'title' => __('Effect', 'iconic-ecifw'),
                        'subtitle' => __('', 'iconic-ecifw'),
                        'type' => 'select',
                        'default' => 'fade',
                        'choices' => apply_filters( 'iconic_ecifw_effect_options', array(
                            'fade' => __('Fade on Hover', 'iconic-ecifw'),
                            'slide' => __('Slide', 'iconic-ecifw'),
                        ) )
                    ),
                )
            ),

            array(
                'tab_id' => 'general',
                'section_id' => 'colours',
                'section_title' => __('Colours', 'iconic-ecifw'),
                'section_description' => '',
                'section_order' => 20,
                'fields' => array(

                    array(
                        'id' => 'icons',
                        'title' => __('Icon Colours', 'iconic-ecifw'),
                        'subtitle' => __('The colour of any icons used.', 'iconic-ecifw'),
                        'type' => 'color',
                        'default' => '#333333'
                    ),

                )
            ),

            array(
                'tab_id' => 'effects',
                'section_id' => 'fade',
                'section_title' => __('Fade Settings', 'iconic-ecifw'),
                'section_description' => '',
                'section_order' => 10,
                'fields' => array(

                    array(
                        'id' => 'transition_speed',
                        'title' => __('Transition Speed (ms)', 'iconic-ecifw'),
                        'type' => 'number',
                        'default' => 300
                    ),

                )
            ),

            array(
                'tab_id' => 'effects',
                'section_id' => 'slide',
                'section_title' => __('Slide Settings', 'iconic-ecifw'),
                'section_description' => '',
                'section_order' => 20,
                'fields' => array(

                    array(
                        'id' => 'mode',
                        'title' => __('Mode', 'iconic-ecifw'),
                        'type' => 'select',
                        'default' => 'horizontal',
                        'choices' => array(
                            'horizontal' => __('Horizontal', 'iconic-ecifw'),
                            'vertical' => __('Vertical', 'iconic-ecifw')
                        )
                    ),

                    array(
                        'id' => 'image_count',
                        'title' => __('Image Count', 'iconic-ecifw'),
                        'subtitle' => __('Enter how many images should be displayed. Use -1 to display all available.', 'iconic-ecifw'),
                        'type' => 'number',
                        'default' => -1
                    ),

                    array(
                        'id' => 'navigation_icon_style',
                        'title' => __('Navigation Icon Style', 'iconic-ecifw'),
                        'subtitle' => __('Choose the icon style for the slider arrows.', 'iconic-ecifw'),
                        'type' => 'select',
                        'default' => 'angle',
                        'choices' => array(
                            'angle' => __('Angle', 'iconic-ecifw'),
                            'arrow-circle' => __('Arrow Circle', 'iconic-ecifw'),
                            'arrow-circle-o' => __('Arrow Circle Open', 'iconic-ecifw'),
                            'arrow' => __('Arrow', 'iconic-ecifw'),
                            'long-arrow' => __('Long Arrow', 'iconic-ecifw'),
                            'caret' => __('Caret', 'iconic-ecifw'),
                            'chevron' => __('Chevron', 'iconic-ecifw')
                        )
                    ),

                    array(
                        'id' => 'touch',
                        'title' => __('Touch Enabled?', 'iconic-ecifw'),
                        'subtitle' => __('When enabled, images can be swiped on touch devices.', 'iconic-ecifw'),
                        'type' => 'select',
                        'default' => 'y',
                        'choices' => array(
                            'y' => __('Yes', 'iconic-ecifw'),
                            'n' => __('No', 'iconic-ecifw')
                        )
                    ),

                    array(
                        'id' => 'transition',
                        'title' => __('Transition Effect', 'iconic-ecifw'),
                        'subtitle' => __('When sliding, apply this transition effect.', 'iconic-ecifw'),
                        'type' => 'select',
                        'default' => 'shrink_out',
                        'choices' => array(
                            'none' => __('None', 'iconic-ecifw'),
                            'shrink_out' => __('Shrink Out', 'iconic-ecifw')
                        )
                    ),

                    array(
                        'id' => 'transition_speed',
                        'title' => __('Transition Speed (ms)', 'iconic-ecifw'),
                        'type' => 'number',
                        'default' => 300
                    ),

                )
            )

        )

    );

    return $wpsf_settings;

}

add_filter( 'wpsf_register_settings_iconic_ecifw', 'iconic_ecifw_settings' );