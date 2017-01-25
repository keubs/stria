<?php
/*
Widget Name: Button by YumeCommerce
Description: A rich simple button widget.
Author: YumeCommerce
Author URI: http://yumecommerce.com/
*/

class YumeCommerce_Widget_Button_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'yc-button',
			__( 'Button by YumeCommerce', 'yc-widgets-bundle'),
			array(
				'description' => __( 'A rich simple button widget.', 'yc-widgets-bundle')
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
		);
	}

	function initialize() {
		$this->register_frontend_styles(
			array(
				array(
					'yc-button-style',
					plugin_dir_url(__FILE__) . 'css/style.css',
					array(),
					YC_BUNDLE_VERSION
				),
			)
		);
	}

	function initialize_form() {
		return array(
			'yc_button' => array(
                'type' => 'section',
                'label'  => __( 'Button', 'yc-widgets-bundle' ),
                'hide'   => false,
                'fields' => array(
					'text' => array(
						'type' => 'text',
						'label' => __('Button text', 'yc-widgets-bundle'),
					),
					'url' => array(
						'type' => 'link',
						'label' => __('Destination URL', 'yc-widgets-bundle'),
					),

					'new_window' => array(
						'type' => 'checkbox',
						'default' => false,
						'label' => __('Open in a new window', 'yc-widgets-bundle'),
					),
					'attributes' => array(
						'type' => 'section',
						'label' => __('Attributes', 'yc-widgets-bundle'),
						'hide' => false,
						'fields' => array(
							'id' => array(
								'type' => 'text',
								'label' => __('Button ID', 'yc-widgets-bundle'),
								'description' => __('An ID attribute allows you to target this button in Javascript.', 'yc-widgets-bundle'),
							),

							'title' => array(
								'type' => 'text',
								'label' => __('Title attribute', 'yc-widgets-bundle'),
								'description' => __('Adds a title attribute to the button link.', 'yc-widgets-bundle'),
							),

							'onclick' => array(
								'type' => 'text',
								'label' => __('Onclick', 'yc-widgets-bundle'),
								'description' => __('Run this Javascript when the button is clicked. Ideal for tracking.', 'yc-widgets-bundle'),
							),
						),
					),
				),
			),

			'design' => array(
				'type' => 'section',
				'label' => __('Design and layout', 'yc-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'align' => array(
						'type' => 'select',
						'label' => __('Align', 'yc-widgets-bundle'),
						'default' => 'center',
						'options' => array(
							'left' => __('Left', 'yc-widgets-bundle'),
							'center' => __('Center', 'yc-widgets-bundle'),
							'right' => __('Right', 'yc-widgets-bundle')
						),
					),
					'font_size' => array(
						'type' => 'measurement',
						'label' => __('Font size', 'yc-widgets-bundle'),
					),
					'letter_spacing' => array(
						'type' => 'measurement',
						'label' => __('Letter spacing', 'yc-widgets-bundle'),
					),
					'weight' => array(
						'type' => 'select',
						'label' => __('Font weight', 'yc-widgets-bundle'),
						'default' => 'normal',
						'options' => array(
							'normal' => __('Normal', 'yc-widgets-bundle'),
							'bold' => __('Bold', 'yc-widgets-bundle'),
							'100' => '100',
							'200' => '200',
							'300' => '300',
							'400' => '400',
							'500' => '500',
							'600' => '600',
							'700' => '700',
							'800' => '800'
						)
					),
					'border_radius' => array(
						'type' => 'measurement',
						'label' => __('Border radius', 'yc-widgets-bundle'),
						'default' => '5px'
					),
					'border_width' => array(
						'type' => 'measurement',
						'label' => __('Border width', 'yc-widgets-bundle'),
						'default' => '1px'
					),
					'max_width' => array(
						'type' => 'measurement',
						'label' => __('Width', 'yc-widgets-bundle')
					),
					'padding' => array(
						'type' => 'text',
						'label' => __('Padding', 'yc-widgets-bundle')
					),
					'margin' => array(
						'type' => 'text',
						'label' => __('Margin', 'yc-widgets-bundle')
					),

					'button_color' => array(
						'type' => 'section',
						'label' => __('Colors', 'yc-widgets-bundle'),
						'fields' => array(
							'button_background' => array(
							'type' => 'color',
							'label' => __('Button background', 'yc-widgets-bundle'),
							'default' => '#03A9F4'
							),

							'border_color' => array(
							'type' => 'color',
							'label' => __('Border color', 'yc-widgets-bundle'),
							'default' => '#03A9F4'
							),

							'text_color' => array(
							'type' => 'color',
							'label' => __('Text color', 'yc-widgets-bundle'),
							'default' => '#ffffff'
							)
						),
					),
					'hover_effect' => array(
						'type' => 'section',
						'label' => __('Hover effects', 'yc-widgets-bundle'),
						'fields' => array(
							'button_background' => array(
							'type' => 'color',
							'label' => __('Button background', 'yc-widgets-bundle'),
							'default' => '#e02142'
							),

							'border_color' => array(
							'type' => 'color',
							'label' => __('Border color', 'yc-widgets-bundle'),
							'default' => '#e02142'
							),

							'text_color' => array(
							'type' => 'color',
							'label' => __('Text color', 'yc-widgets-bundle'),
							'default' => '#ffffff'
							)
						),
					),
				),
			),

			't_m_layout' => array(
				'type' => 'section',
				'label' => __('Tablet and mobile Layout', 'yc-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					't_layout' => array(
						'type' => 'section',
						'label' => __('Tablet layout', 'yc-widgets-bundle'),
						'fields' => array(
							'use' => array(
                                'type' => 'checkbox',
                                'label' => __( 'Use different style for tablets?', 'yc-widgets-bundle' )
                            ),
                            'align' => array(
                            	'type' => 'select',
                            	'label' => __('Align', 'yc-widgets-bundle'),
                            	'default' => 'center',
                            	'options' => array(
                            		'left' => __('Left', 'yc-widgets-bundle'),
                            		'center' => __('Center', 'yc-widgets-bundle'),
                            		'right' => __('Right', 'yc-widgets-bundle')
                            	),
                            ),
                            'font_size' => array(
                            	'type' => 'measurement',
                            	'label' => __('Font size', 'yc-widgets-bundle'),
                            ),
                            'max_width' => array(
                            	'type' => 'measurement',
                            	'label' => __('Width', 'yc-widgets-bundle')
                            ),
                            'padding' => array(
                            	'type' => 'text',
                            	'label' => __('Padding', 'yc-widgets-bundle')
                            ),
                            'margin' => array(
                            	'type' => 'text',
                            	'label' => __('Margin', 'yc-widgets-bundle')
                            )
						),
					),
					'm_layout' => array(
						'type' => 'section',
						'label' => __('Mobile layout', 'yc-widgets-bundle'),
						'fields' => array(
							'use' => array(
                                'type' => 'checkbox',
                                'label' => __( 'Use different style for mobile devices?', 'yc-widgets-bundle' )
                            ),
                            'align' => array(
                            	'type' => 'select',
                            	'label' => __('Align', 'yc-widgets-bundle'),
                            	'default' => 'center',
                            	'options' => array(
                            		'left' => __('Left', 'yc-widgets-bundle'),
                            		'center' => __('Center', 'yc-widgets-bundle'),
                            		'right' => __('Right', 'yc-widgets-bundle')
                            	),
                            ),
                            'font_size' => array(
                            	'type' => 'measurement',
                            	'label' => __('Font size', 'yc-widgets-bundle'),
                            ),
                            'max_width' => array(
                            	'type' => 'measurement',
                            	'label' => __('Width', 'yc-widgets-bundle')
                            ),
                            'padding' => array(
                            	'type' => 'text',
                            	'label' => __('Padding', 'yc-widgets-bundle')
                            ),
                            'margin' => array(
                            	'type' => 'text',
                            	'label' => __('Margin', 'yc-widgets-bundle')
                            )
						),
					),
				),
			),
		);
	}

	function get_less_variables( $instance ) {
        $less_vars = array();

        // check for main button design
        if ( ! empty( $instance['design'] ) ) {
        	$button_styles = $instance['design'];

        	if ( ! empty( $button_styles['align'] ) ) {
        	    $less_vars['align'] = $button_styles['align'];
        	}

        	if ( ! empty( $button_styles['weight'] ) ) {
        	    $less_vars['weight'] = $button_styles['weight'];
        	}

        	if ( ! empty( $button_styles['font_size'] ) ) {
        	    $less_vars['font_size'] = $button_styles['font_size'];
        	}

        	if ( ! empty( $button_styles['letter_spacing'] ) ) {
        	    $less_vars['letter_spacing'] = $button_styles['letter_spacing'];
        	}

        	if ( ! empty( $button_styles['border_radius'] ) ) {
        	    $less_vars['border_radius'] = $button_styles['border_radius'];
        	}

        	if ( ! empty( $button_styles['border_width'] ) ) {
        	    $less_vars['border_width'] = $button_styles['border_width'];
        	}

        	if ( ! empty( $button_styles['max_width'] ) ) {
        	    $less_vars['max_width'] = $button_styles['max_width'];
        	}

        	if ( ! empty( $button_styles['padding'] ) ) {
        	    $less_vars['padding'] = $button_styles['padding'];
        	}

        	if ( ! empty( $button_styles['margin'] ) ) {
        	    $less_vars['margin'] = $button_styles['margin'];
        	}

        	// check for colors
        	if ( ! empty( $button_styles['button_color']['button_background'] ) ) {
        	    $less_vars['button_background'] = $button_styles['button_color']['button_background'];
        	}

        	if ( ! empty( $button_styles['button_color']['border_color'] ) ) {
        	    $less_vars['border_color'] = $button_styles['button_color']['border_color'];
        	}

        	if ( ! empty( $button_styles['button_color']['text_color'] ) ) {
        	    $less_vars['text_color'] = $button_styles['button_color']['text_color'];
        	}

        	// hover effect
        	if ( ! empty( $button_styles['hover_effect']['button_background'] ) ) {
        	    $less_vars['button_hover_background'] = $button_styles['hover_effect']['button_background'];
        	}

        	if ( ! empty( $button_styles['hover_effect']['border_color'] ) ) {
        	    $less_vars['border_hover_color'] = $button_styles['hover_effect']['border_color'];
        	}

        	if ( ! empty( $button_styles['hover_effect']['text_color'] ) ) {
        	    $less_vars['text_hover_color'] = $button_styles['hover_effect']['text_color'];
        	}
        }

        // resposive
        if ( ! empty( $instance['t_m_layout'] ) ) {
        	$t_m_layout = $instance['t_m_layout'];

        	// table
        	if ( $t_m_layout['t_layout']['use'] ) {
        		$less_vars['t_layout'] = 'true';

                if ( ! empty( $t_m_layout['t_layout']['align'] ) ) {
        	    	$less_vars['t_align'] = $t_m_layout['t_layout']['align'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['font_size'] ) ) {
        	    	$less_vars['t_font_size'] = $t_m_layout['t_layout']['font_size'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['max_width'] ) ) {
        	    	$less_vars['t_max_width'] = $t_m_layout['t_layout']['max_width'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['padding'] ) ) {
        	    	$less_vars['t_padding'] = $t_m_layout['t_layout']['padding'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['margin'] ) ) {
        	    	$less_vars['t_margin'] = $t_m_layout['t_layout']['margin'];
        		}
            }

            // mobile
            if ( $t_m_layout['m_layout']['use'] ) {
        		$less_vars['m_layout'] = 'true';

                if ( ! empty( $t_m_layout['m_layout']['align'] ) ) {
        	    	$less_vars['m_align'] = $t_m_layout['m_layout']['align'];
        		}

        		if ( ! empty( $t_m_layout['m_layout']['font_size'] ) ) {
        	    	$less_vars['m_font_size'] = $t_m_layout['m_layout']['font_size'];
        		}

        		if ( ! empty( $t_m_layout['m_layout']['max_width'] ) ) {
        	    	$less_vars['m_max_width'] = $t_m_layout['m_layout']['max_width'];
        		}

        		if ( ! empty( $t_m_layout['m_layout']['padding'] ) ) {
        	    	$less_vars['m_padding'] = $t_m_layout['m_layout']['padding'];
        		}

        		if ( ! empty( $t_m_layout['m_layout']['margin'] ) ) {
        	    	$less_vars['m_margin'] = $t_m_layout['m_layout']['margin'];
        		}
            }
        }
        return $less_vars;
    }

    function get_template_name($instance) {
		return 'yc-button';
	}

	function get_style_name( $instance ) {
        return 'yc-button';
    }
}

siteorigin_widget_register('yc-button', __FILE__, 'YumeCommerce_Widget_Button_Widget');
