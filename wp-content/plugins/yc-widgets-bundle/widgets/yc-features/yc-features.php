<?php
/*
Widget Name: Features by YumeCommerce
Description: Rich features with icons.
Author: YumeCommerce
Author URI: http://yumecommerce.com/
*/

class YumeCommerce_Widget_Features_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'yc-features',
			__( 'Features by YumeCommerce', 'yc-widgets-bundle' ),
			array(
				'description' => __( 'Displays a list of features.', 'yc-widgets-bundle' ),
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
					'yc-features-style',
					plugin_dir_url(__FILE__) . 'css/style.css',
					array(),
					YC_BUNDLE_VERSION
				)
			)
		);
	}

	function initialize_form(){
		return array(
			'yc_features' => array(
                'type' => 'section',
                'label'  => __( 'Features', 'yc-widgets-bundle' ),
                'hide'   => false,
                'fields' => array(
					'features' => array(
						'type' => 'repeater',
						'label' => __('Features', 'yc-widgets-bundle'),
						'item_name' => __('Feature', 'yc-widgets-bundle'),
						'item_label' => array(
							'selector' => "[id*='features-title']",
							'update_event' => 'change',
							'value_method' => 'val'
						),
						'fields' => array(

							'icon' => array(
								'type' => 'icon',
								'label' => __('Icon', 'yc-widgets-bundle'),
							),

							'icon_color' => array(
								'type' => 'color',
								'label' => __('Icon color', 'yc-widgets-bundle'),
								'default' => '#000000',
							),

							'icon_image' => array(
								'type' => 'media',
								'library' => 'image',
								'label' => __('Icon image', 'yc-widgets-bundle'),
								'description' => __('Use your own icon image.', 'yc-widgets-bundle'),
							),

							'title' => array(
								'type' => 'text',
								'label' => __('Title text', 'yc-widgets-bundle'),
							),

							'text' => array(
								'type' => 'text',
								'label' => __('Text', 'yc-widgets-bundle')
							),

							'more_text' => array(
								'type' => 'text',
								'label' => __('More link text', 'yc-widgets-bundle'),
							),

							'more_url' => array(
								'type' => 'link',
								'label' => __('More link URL', 'yc-widgets-bundle'),
							),
						),
					),
					'title_link' => array(
						'type' => 'checkbox',
						'label' => __('Link feature title to more URL', 'yc-widgets-bundle'),
						'default' => false,
					),

					'icon_link' => array(
						'type' => 'checkbox',
						'label' => __('Link icon to more URL', 'yc-widgets-bundle'),
						'default' => false,
					),

					'new_window' => array(
						'type' => 'checkbox',
						'label' => __('Open more URL in a new window', 'yc-widgets-bundle'),
						'default' => false,
					),
				),
			),

			'fonts' => array(
				'type' => 'section',
				'label' => __( 'Fonts', 'yc-widgets-bundle' ),
				'hide' => true,
				'fields' => array(
					'title_options' => array(
						'type' => 'section',
						'label' => __( 'Title', 'yc-widgets-bundle' ),
						'hide' => false,
						'fields' => array(
							'font' => array(
								'type' => 'font',
								'label' => __( 'Font', 'yc-widgets-bundle' ),
								'default' => 'default'
							),
                            'font_weight' => array(
                                'type' => 'select',
                                'label' => __('Font weight', 'yc-widgets-bundle'),
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
                                'default' => '400',
                            ),
                            'font_style' => array(
                                'type' => 'select',
                                'label' => __( 'Font style', 'yc-widgets-bundle' ),
                                'default' => 'normal',
                                'options' => array(
                                    'normal' => __( 'Normal', 'yc-widgets-bundle' ),
                                    'italic' => __( 'Italic', 'yc-widgets-bundle' ),
                                    'oblique' => __( 'Oblique', 'yc-widgets-bundle' ),
                                    'inherit' => __( 'Inherit', 'yc-widgets-bundle' )
                                )
                            ),
							'size' => array(
								'type' => 'measurement',
								'label' => __( 'Size', 'yc-widgets-bundle' ),
							),
							'color' => array(
								'type' => 'color',
								'label' => __( 'Color', 'yc-widgets-bundle' ),
							)
						)
					),

					'text_options' => array(
						'type' => 'section',
						'label' => __( 'Text', 'yc-widgets-bundle' ),
						'hide' => true,
						'fields' => array(
							'font' => array(
								'type' => 'font',
								'label' => __( 'Font', 'yc-widgets-bundle' ),
								'default' => 'default'
							),
                            'font_weight' => array(
                                'type' => 'select',
                                'label' => __('Font weight', 'yc-widgets-bundle'),
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
                                'default' => '400',
                            ),
                            'font_style' => array(
                                'type' => 'select',
                                'label' => __( 'Font style', 'yc-widgets-bundle' ),
                                'default' => 'normal',
                                'options' => array(
                                    'normal' => __( 'Normal', 'yc-widgets-bundle' ),
                                    'italic' => __( 'Italic', 'yc-widgets-bundle' ),
                                    'oblique' => __( 'Oblique', 'yc-widgets-bundle' ),
                                    'inherit' => __( 'Inherit', 'yc-widgets-bundle' )
                                )
                            ),
							'size' => array(
								'type' => 'measurement',
								'label' => __( 'Size', 'yc-widgets-bundle' ),
							),
							'color' => array(
								'type' => 'color',
								'label' => __( 'Color', 'yc-widgets-bundle' ),
							)
						)
					),

					'more_text_options' => array(
						'type' => 'section',
						'label' => __( 'More Link', 'yc-widgets-bundle' ),
						'hide' => true,
						'fields' => array(
							'font' => array(
								'type' => 'font',
								'label' => __( 'Font', 'yc-widgets-bundle' ),
								'default' => 'default'
							),
                            'font_weight' => array(
                                'type' => 'select',
                                'label' => __('Font weight', 'yc-widgets-bundle'),
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
                                'default' => '400',
                            ),
                            'font_style' => array(
                                'type' => 'select',
                                'label' => __( 'Font style', 'yc-widgets-bundle' ),
                                'default' => 'normal',
                                'options' => array(
                                    'normal' => __( 'Normal', 'yc-widgets-bundle' ),
                                    'italic' => __( 'Italic', 'yc-widgets-bundle' ),
                                    'oblique' => __( 'Oblique', 'yc-widgets-bundle' ),
                                    'inherit' => __( 'Inherit', 'yc-widgets-bundle' )
                                )
                            ),
							'size' => array(
								'type' => 'measurement',
								'label' => __( 'Size', 'yc-widgets-bundle' ),
							),
							'color' => array(
								'type' => 'color',
								'label' => __( 'Color', 'yc-widgets-bundle' ),
							)
						)
					),
				),
			),

			'layout' => array(
                'type' => 'section',
                'hide' => true,
                'label'  => __( 'Layout', 'yc-widgets-bundle' ),
                'fields' => array(
                	'i_position' => array(
						'type' => 'select',
						'label' => __('Icon position', 'yc-widgets-bundle'),
						'default' => 'next-to-title',
						'options' => array(
							'left' => __('Left', 'yc-widgets-bundle'),
							'center' => __('Center', 'yc-widgets-bundle'),
							'right' => __('Right', 'yc-widgets-bundle'),
							'next-to-title' => __('Next to title', 'yc-widgets-bundle'),
							'next-to-feature' => __('Next to feature', 'yc-widgets-bundle')		
						),
					),

                	't_align' => array(
						'type' => 'select',
						'label' => __('Text align', 'yc-widgets-bundle'),
						'default' => 'left',
						'options' => array(
							'left' => __('Left', 'yc-widgets-bundle'),
							'center' => __('Center', 'yc-widgets-bundle'),
							'right' => __('Right', 'yc-widgets-bundle')	
						),
					),

					'container_size' => array(
						'type' => 'measurement',
						'label' => __('Height and width for icon images', 'yc-widgets-bundle'),
						'default' => '60px',
					),

					'per_row' => array(
						'type' => 'number',
						'label' => __('Features per row', 'yc-widgets-bundle'),
						'default' => 3,
					),

					'tag' => array(
                        'type' => 'select',
                        'label' => __( 'Title tag', 'yc-widgets-bundle' ),
                        'default' => 'h5',
                        'options' => array(
                            'p' => __( 'p', 'yc-widgets-bundle' ),
                            'h1' => __( 'H1', 'yc-widgets-bundle' ),
                            'h2' => __( 'H2', 'yc-widgets-bundle' ),
                            'h3' => __( 'H3', 'yc-widgets-bundle' ),
                            'h4' => __( 'H4', 'yc-widgets-bundle' ),
                            'h5' => __( 'H5', 'yc-widgets-bundle' ),
                            'h6' => __( 'H6', 'yc-widgets-bundle' ),
                        )
                    ),

					'title_margin' => array(
						'type' => 'text',
						'label' => __('Margin for title', 'yc-widgets-bundle')
					),
					'title_padding' => array(
						'type' => 'text',
						'label' => __('Padding for title', 'yc-widgets-bundle')
					),
					'text_margin' => array(
						'type' => 'text',
						'label' => __('Margin for text', 'yc-widgets-bundle')
					),
					'text_padding' => array(
						'type' => 'text',
						'label' => __('Padding for text', 'yc-widgets-bundle')
					),
					'gutter' => array(
						'type' => 'measurement',
						'label' => __('Gutter', 'yc-widgets-bundle'),
						'default' => '25px',
					),
				),
			),
			't_m_layout' => array(
                'type' => 'section',
                'hide' => true,
                'label'  => __( 'Tablet & mobile layout', 'yc-widgets-bundle' ),
                'fields' => array(
                	't_layout' => array(
						'type' => 'section',
						'label' => __('Tablet layout', 'yc-widgets-bundle'),
						'fields' => array(
							'use' => array(
                                'type' => 'checkbox',
                                'label' => __( 'Use different style for tablets?', 'yc-widgets-bundle' )
                            ),
                            'per_row' => array(
        						'type' => 'number',
        						'label' => __('Features per row', 'yc-widgets-bundle'),
        						'default' => 3,
        					),
        					'i_position' => array(
								'type' => 'select',
								'label' => __('Icon position', 'yc-widgets-bundle'),
								'default' => 'next-to-title',
								'options' => array(
									'left' => __('Left', 'yc-widgets-bundle'),
									'center' => __('Center', 'yc-widgets-bundle'),
									'right' => __('Right', 'yc-widgets-bundle'),
									'next-to-title' => __('Next to title', 'yc-widgets-bundle'),
									'next-to-feature' => __('Next to feature', 'yc-widgets-bundle')		
								),
							),
        					'align' => array(
								'type' => 'select',
								'label' => __('Text align', 'yc-widgets-bundle'),
								'default' => 'left',
								'options' => array(
									'left' => __('Left', 'yc-widgets-bundle'),
									'center' => __('Center', 'yc-widgets-bundle'),
									'right' => __('Right', 'yc-widgets-bundle')	
								),
							),
							'title_margin' => array(
								'type' => 'text',
								'label' => __('Margin for title', 'yc-widgets-bundle')
							),
							'title_padding' => array(
								'type' => 'text',
								'label' => __('Padding for title', 'yc-widgets-bundle')
							),
							'text_margin' => array(
								'type' => 'text',
								'label' => __('Margin for text', 'yc-widgets-bundle')
							),
							'text_padding' => array(
								'type' => 'text',
								'label' => __('Padding for text', 'yc-widgets-bundle')
							),
							'title_size' => array(
								'type' => 'measurement',
								'label' => __( 'Font size for title', 'yc-widgets-bundle' ),
							),
							'text_size' => array(
								'type' => 'measurement',
								'label' => __( 'Font size for text', 'yc-widgets-bundle' ),
							),
							'more_size' => array(
								'type' => 'measurement',
								'label' => __( 'Font size for more link', 'yc-widgets-bundle' ),
							),
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
                            'per_row' => array(
        						'type' => 'number',
        						'label' => __('Features per row', 'yc-widgets-bundle'),
        						'default' => 1,
        					),
        					'i_position' => array(
								'type' => 'select',
								'label' => __('Icon position', 'yc-widgets-bundle'),
								'default' => 'next-to-title',
								'options' => array(
									'left' => __('Left', 'yc-widgets-bundle'),
									'center' => __('Center', 'yc-widgets-bundle'),
									'right' => __('Right', 'yc-widgets-bundle'),
									'next-to-title' => __('Next to title', 'yc-widgets-bundle'),
									'next-to-feature' => __('Next to feature', 'yc-widgets-bundle')		
								),
							),
        					'align' => array(
								'type' => 'select',
								'label' => __('Text align', 'yc-widgets-bundle'),
								'default' => 'left',
								'options' => array(
									'left' => __('Left', 'yc-widgets-bundle'),
									'center' => __('Center', 'yc-widgets-bundle'),
									'right' => __('Right', 'yc-widgets-bundle')	
								),
							),
							'title_margin' => array(
								'type' => 'text',
								'label' => __('Margin for title', 'yc-widgets-bundle')
							),
							'title_padding' => array(
								'type' => 'text',
								'label' => __('Padding for title', 'yc-widgets-bundle')
							),
							'text_margin' => array(
								'type' => 'text',
								'label' => __('Margin for text', 'yc-widgets-bundle')
							),
							'text_padding' => array(
								'type' => 'text',
								'label' => __('Padding for text', 'yc-widgets-bundle')
							),
							'title_size' => array(
								'type' => 'measurement',
								'label' => __( 'Font size for title', 'yc-widgets-bundle' ),
							),
							'text_size' => array(
								'type' => 'measurement',
								'label' => __( 'Font size for text', 'yc-widgets-bundle' ),
							),
							'more_size' => array(
								'type' => 'measurement',
								'label' => __( 'Font size for more link', 'yc-widgets-bundle' ),
							),
						),
					),
				),
			),
		);
	}

	

	function get_less_variables( $instance ) {
		$less_vars = array();

		$fonts = $instance['fonts'];
		$styleable_text_fields = array( 'title', 'text', 'more_text' );

		foreach ( $styleable_text_fields as $field_name ) {
			if ( ! empty( $fonts[$field_name.'_options'] ) ) {
				$styles = $fonts[$field_name.'_options'];
				if ( ! empty( $styles['size'] ) ) {
					$less_vars[$field_name.'_size'] = $styles['size'];
				}
                if ( ! empty( $styles['font_weight'] ) ) {
                    $less_vars[$field_name.'_font_weight_number'] = $styles['font_weight'];
                }
                if ( ! empty( $styles['font_style'] ) ) {
                    $less_vars[$field_name.'_font_style'] = $styles['font_style'];
                }
				if ( ! empty( $styles['color'] ) ) {
					$less_vars[$field_name.'_color'] = $styles['color'];
				}
				if ( ! empty( $styles['font'] ) ) {
					$font = siteorigin_widget_get_font( $styles['font'] );
					$less_vars[$field_name.'_font'] = $font['family'];
					if ( ! empty( $font['weight'] ) ) {
						$less_vars[$field_name.'_font_weight'] = $font['weight'];
					}
				}
			}
		}

		// check for icon style
		if ( ! empty( $instance['layout'] ) ) {
        	$layout = $instance['layout'];

        	if ( ! empty( $layout['t_align'] ) ) {
        	    $less_vars['t_align'] = $layout['t_align'];
        	}

        	if ( ! empty( $layout['container_size'] ) ) {
        	    $less_vars['container_size'] = $layout['container_size'];
        	}

        	if ( ! empty( $layout['per_row'] ) ) {
        	    $less_vars['per_row'] = $layout['per_row'];
        	}

        	if ( ! empty( $layout['title_margin'] ) ) {
        	    $less_vars['title_margin'] = $layout['title_margin'];
        	}

        	if ( ! empty( $layout['title_padding'] ) ) {
        	    $less_vars['title_padding'] = $layout['title_padding'];
        	}

        	if ( ! empty( $layout['text_margin'] ) ) {
        	    $less_vars['text_margin'] = $layout['text_margin'];
        	}

        	if ( ! empty( $layout['text_padding'] ) ) {
        	    $less_vars['text_padding'] = $layout['text_padding'];
        	}

        	if ( ! empty( $layout['gutter'] ) ) {
        	    $less_vars['gutter'] = $layout['gutter'];
        	}

        	
        }

        // resposive
        if ( ! empty( $instance['t_m_layout'] ) ) {
        	$t_m_layout = $instance['t_m_layout'];

        	// table
        	if ( $t_m_layout['t_layout']['use'] ) {
        		$less_vars['t_layout'] = 'true';

        		if ( ! empty( $t_m_layout['t_layout']['per_row'] ) ) {
        	    	$less_vars['t_per_row'] = $t_m_layout['t_layout']['per_row'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['align'] ) ) {
        	    	$less_vars['table_align'] = $t_m_layout['t_layout']['align'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['title_margin'] ) ) {
        	    	$less_vars['table_title_margin'] = $t_m_layout['t_layout']['title_margin'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['title_padding'] ) ) {
        	    	$less_vars['table_title_padding'] = $t_m_layout['t_layout']['title_padding'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['text_margin'] ) ) {
        	    	$less_vars['table_text_margin'] = $t_m_layout['t_layout']['text_margin'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['text_padding'] ) ) {
        	    	$less_vars['table_text_padding'] = $t_m_layout['t_layout']['text_padding'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['title_size'] ) ) {
        	    	$less_vars['t_title_size'] = $t_m_layout['t_layout']['title_size'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['text_size'] ) ) {
        	    	$less_vars['t_text_size'] = $t_m_layout['t_layout']['text_size'];
        		}

        		if ( ! empty( $t_m_layout['t_layout']['more_size'] ) ) {
        	    	$less_vars['t_more_size'] = $t_m_layout['t_layout']['more_size'];
        		}
			}

        	// mobile
        	if ( $t_m_layout['m_layout']['use'] ) {
        		$less_vars['m_layout'] = 'true';
        	
	        	if ( ! empty( $t_m_layout['m_layout']['per_row'] ) ) {
	        	    $less_vars['m_per_row'] = $t_m_layout['m_layout']['per_row'];
	        	}

	        	if ( ! empty( $t_m_layout['m_layout']['align'] ) ) {
	        	    $less_vars['m_align'] = $t_m_layout['m_layout']['align'];
	        	}

	        	if ( ! empty( $t_m_layout['m_layout']['title_margin'] ) ) {
        	    	$less_vars['m_title_margin'] = $t_m_layout['m_layout']['title_margin'];
        		}

        		if ( ! empty( $t_m_layout['m_layout']['title_padding'] ) ) {
        	    	$less_vars['m_title_padding'] = $t_m_layout['m_layout']['title_padding'];
        		}

        		if ( ! empty( $t_m_layout['m_layout']['text_margin'] ) ) {
        	    	$less_vars['m_text_margin'] = $t_m_layout['m_layout']['text_margin'];
        		}

        		if ( ! empty( $t_m_layout['m_layout']['text_padding'] ) ) {
        	    	$less_vars['m_text_padding'] = $t_m_layout['m_layout']['text_padding'];
        		}

    			if ( ! empty( $t_m_layout['m_layout']['title_size'] ) ) {
    		    	$less_vars['m_title_size'] = $t_m_layout['m_layout']['title_size'];
    			}

    			if ( ! empty( $t_m_layout['m_layout']['text_size'] ) ) {
    		    	$less_vars['m_text_size'] = $t_m_layout['m_layout']['text_size'];
    			}

    			if ( ! empty( $t_m_layout['m_layout']['more_size'] ) ) {
    		    	$less_vars['m_more_size'] = $t_m_layout['m_layout']['more_size'];
    			}
        	}
        }
       
		return $less_vars;
	}

	function get_template_name($instance) {
		return 'yc-features';
	}

	function get_style_name($instance){
		return 'yc-features';
	}

	function get_google_font_fields( $instance ) {

		$fonts = $instance['fonts'];

		return array(
			$fonts['title_options']['font'],
			$fonts['text_options']['font'],
			$fonts['more_text_options']['font'],
		);
	}

	/**
	 * Get the template variables for the headline
	 */
	function get_template_variables( $instance, $args ) {
	    if( empty( $instance ) ) return array();

	    return array(
	        'tablet_use' => $instance['t_m_layout']['t_layout']['use'],
	        'mobile_use' => $instance['t_m_layout']['m_layout']['use'],
	        'desktop_ip' => $instance['layout']['i_position'],
	        'tablet_ip' => $instance['t_m_layout']['t_layout']['i_position'],
	        'mobile_ip' => $instance['t_m_layout']['m_layout']['i_position'],
	    );
	}

	
}

siteorigin_widget_register('yc-features', __FILE__, 'YumeCommerce_Widget_Features_Widget');
