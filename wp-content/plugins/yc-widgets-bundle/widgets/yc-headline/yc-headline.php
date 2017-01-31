<?php

/*
Widget Name: Headline by YumeCommerce
Description: A rich headline.
Author: YumeCommerce
Author URI: http://yumecommerce.com/
*/

class YumeCommerce_Widget_Headline_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'yc-headline',
            __( 'Headline by YumeCommerce', 'yc-widgets-bundle' ),
            array(
                'description' => __( 'A rich headline widget.', 'yc-widgets-bundle' )
            ),
            array(),
            false,
            plugin_dir_path(__FILE__)
        );
    }

    function initialize_form(){
        return array(
            'yc_headline' => array(
                'type' => 'section',
                'label'  => __( 'Headline', 'yc-widgets-bundle' ),
                'hide'   => false,
                'fields' => array(
                    'text' => array(
                        'type' => 'text',
                        'label' => __( 'Text', 'yc-widgets-bundle' ),
                    ),
                    'tag' => array(
                        'type' => 'select',
                        'label' => __( 'Tag', 'yc-widgets-bundle' ),
                        'default' => 'h1',
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
                    'font_weight_title' => array(
                        'type' => 'select',
                        'label' => __('Font weight for title', 'yc-widgets-bundle'),
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
                    'font' => array(
                        'type' => 'font',
                        'label' => __( 'Font', 'yc-widgets-bundle' ),
                        'default' => 'default'
                    ),
                    'color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'yc-widgets-bundle'),
                    ),
                    'align' => array(
                        'type' => 'select',
                        'label' => __( 'Align', 'yc-widgets-bundle' ),
                        'default' => 'center',
                        'options' => array(
                            'center' => __( 'Center', 'yc-widgets-bundle' ),
                            'left' => __( 'Left', 'yc-widgets-bundle' ),
                            'right' => __( 'Right', 'yc-widgets-bundle' ),
                            'justify' => __( 'Justify', 'yc-widgets-bundle' )
                        )
                    ),
                    'fontstyle' => array(
                        'type' => 'select',
                        'label' => __( 'Font-style', 'yc-widgets-bundle' ),
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
                        'label' => __( 'Font size', 'yc-widgets-bundle' )
                    ),
                    'lineheight' => array(
                        'type' => 'measurement',
                        'label' => __( 'Line height', 'yc-widgets-bundle' )
                    ),
                    'letterspacing' => array(
                        'type' => 'measurement',
                        'label' => __( 'Letter-spacing', 'yc-widgets-bundle' )
                    ),
                    'margin' => array(
                        'type' => 'text',
                        'label' => __( 'Margin', 'yc-widgets-bundle' )
                    ),
                    'padding' => array(
                        'type' => 'text',
                        'label' => __( 'Padding', 'yc-widgets-bundle' )
                    ),
                    'tabletlayout' => array(
                        'type' => 'section',
                        'label' => __( 'Tablet Layout' , 'yc-widgets-bundle' ),
                        'hide' => true,
                        'fields' => array(
                            'use' => array(
                                'type' => 'checkbox',
                                'label' => __( 'Use different style for tablets?', 'yc-widgets-bundle' )
                            ),
                            'align' => array(
                                'type' => 'select',
                                'label' => __( 'Align', 'yc-widgets-bundle' ),
                                'default' => 'center',
                                'options' => array(
                                    'center' => __( 'Center', 'yc-widgets-bundle' ),
                                    'left' => __( 'Left', 'yc-widgets-bundle' ),
                                    'right' => __( 'Right', 'yc-widgets-bundle' ),
                                    'justify' => __( 'Justify', 'yc-widgets-bundle' )
                                )
                            ),
                            'size' => array(
                                'type' => 'measurement',
                                'label' => __( 'Font size', 'yc-widgets-bundle' )
                            ),
                            'lineheight' => array(
                                'type' => 'measurement',
                                'label' => __( 'Line height', 'yc-widgets-bundle' )
                            ),
                            'margin' => array(
                                'type' => 'text',
                                'label' => __( 'Margin', 'yc-widgets-bundle' )
                            ),
                            'padding' => array(
                                'type' => 'text',
                                'label' => __( 'Padding', 'yc-widgets-bundle' )
                            )
                        )
                    ),
                    'mobilelayout' => array(
                        'type' => 'section',
                        'label' => __( 'Mobile Layout' , 'yc-widgets-bundle' ),
                        'hide' => true,
                        'fields' => array(
                            'use' => array(
                                'type' => 'checkbox',
                                'label' => __( 'Use different style for mobile devices?', 'yc-widgets-bundle' )
                            ),
                            'align' => array(
                                'type' => 'select',
                                'label' => __( 'Align', 'yc-widgets-bundle' ),
                                'default' => 'center',
                                'options' => array(
                                    'center' => __( 'Center', 'yc-widgets-bundle' ),
                                    'left' => __( 'Left', 'yc-widgets-bundle' ),
                                    'right' => __( 'Right', 'yc-widgets-bundle' ),
                                    'justify' => __( 'Justify', 'yc-widgets-bundle' )
                                )
                            ),
                            'size' => array(
                                'type' => 'measurement',
                                'label' => __( 'Font size', 'yc-widgets-bundle' )
                            ),
                            'lineheight' => array(
                                'type' => 'measurement',
                                'label' => __( 'Line height', 'yc-widgets-bundle' )
                            ),
                            'margin' => array(
                                'type' => 'text',
                                'label' => __( 'Margin', 'yc-widgets-bundle' )
                            ),
                            'padding' => array(
                                'type' => 'text',
                                'label' => __( 'Padding', 'yc-widgets-bundle' )
                            )
                        )
                    )
                )
            ),
            'yc_sub_headline' => array(
                'type' => 'section',
                'label'  => __( 'Sub headline', 'yc-widgets-bundle' ),
                'hide'   => true,
                'fields' => array(
                    'text' => array(
                        'type' => 'text',
                        'label' => __('Text', 'yc-widgets-bundle')
                    ),
                    'tag' => array(
                        'type' => 'select',
                        'label' => __( 'Tag', 'yc-widgets-bundle' ),
                        'default' => 'h3',
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
                    'font_weight_sub_title' => array(
                        'type' => 'select',
                        'label' => __('Font weight for title', 'yc-widgets-bundle'),
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
                    'font' => array(
                        'type' => 'font',
                        'label' => __( 'Font', 'yc-widgets-bundle' ),
                        'default' => 'default'
                    ),
                    'color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'yc-widgets-bundle'),
                    ),
                    'align' => array(
                        'type' => 'select',
                        'label' => __( 'Align', 'yc-widgets-bundle' ),
                        'default' => 'center',
                        'options' => array(
                            'center' => __( 'Center', 'yc-widgets-bundle' ),
                            'left' => __( 'Left', 'yc-widgets-bundle' ),
                            'right' => __( 'Right', 'yc-widgets-bundle' ),
                            'justify' => __( 'Justify', 'yc-widgets-bundle' )
                        )
                    ),
                    'fontstyle' => array(
                        'type' => 'select',
                        'label' => __( 'Font-style', 'yc-widgets-bundle' ),
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
                        'label' => __( 'Font size', 'yc-widgets-bundle' )
                    ),
                    'lineheight' => array(
                        'type' => 'measurement',
                        'label' => __( 'Line height', 'yc-widgets-bundle' )
                    ),
                    'letterspacing' => array(
                        'type' => 'measurement',
                        'label' => __( 'Letter-spacing', 'yc-widgets-bundle' )
                    ),
                    'margin' => array(
                        'type' => 'text',
                        'label' => __( 'Margin', 'yc-widgets-bundle' )
                    ),
                    'padding' => array(
                        'type' => 'text',
                        'label' => __( 'Padding', 'yc-widgets-bundle' )
                    ),
                    'tabletlayout' => array(
                        'type' => 'section',
                        'label' => __( 'Tablet Layout' , 'yc-widgets-bundle' ),
                        'hide' => true,
                        'fields' => array(
                            'use' => array(
                                'type' => 'checkbox',
                                'label' => __( 'Use different style for tablets?', 'yc-widgets-bundle' )
                            ),
                            'align' => array(
                                'type' => 'select',
                                'label' => __( 'Align', 'yc-widgets-bundle' ),
                                'default' => 'center',
                                'options' => array(
                                    'center' => __( 'Center', 'yc-widgets-bundle' ),
                                    'left' => __( 'Left', 'yc-widgets-bundle' ),
                                    'right' => __( 'Right', 'yc-widgets-bundle' ),
                                    'justify' => __( 'Justify', 'yc-widgets-bundle' )
                                )
                            ),
                            'size' => array(
                                'type' => 'measurement',
                                'label' => __( 'Font size', 'yc-widgets-bundle' )
                            ),
                            'lineheight' => array(
                                'type' => 'measurement',
                                'label' => __( 'Line height', 'yc-widgets-bundle' )
                            ),
                            'margin' => array(
                                'type' => 'text',
                                'label' => __( 'Margin', 'yc-widgets-bundle' )
                            ),
                            'padding' => array(
                                'type' => 'text',
                                'label' => __( 'Padding', 'yc-widgets-bundle' )
                            )
                        )
                    ),
                    'mobilelayout' => array(
                        'type' => 'section',
                        'label' => __( 'Mobile Layout' , 'yc-widgets-bundle' ),
                        'hide' => true,
                        'fields' => array(
                            'use' => array(
                                'type' => 'checkbox',
                                'label' => __( 'Use different style for mobile devices?', 'yc-widgets-bundle' )
                            ),
                            'align' => array(
                                'type' => 'select',
                                'label' => __( 'Align', 'yc-widgets-bundle' ),
                                'default' => 'center',
                                'options' => array(
                                    'center' => __( 'Center', 'yc-widgets-bundle' ),
                                    'left' => __( 'Left', 'yc-widgets-bundle' ),
                                    'right' => __( 'Right', 'yc-widgets-bundle' ),
                                    'justify' => __( 'Justify', 'yc-widgets-bundle' )
                                )
                            ),
                            'size' => array(
                                'type' => 'measurement',
                                'label' => __( 'Font size', 'yc-widgets-bundle' )
                            ),
                            'lineheight' => array(
                                'type' => 'measurement',
                                'label' => __( 'Line height', 'yc-widgets-bundle' )
                            ),
                            'margin' => array(
                                'type' => 'text',
                                'label' => __( 'Margin', 'yc-widgets-bundle' )
                            ),
                            'padding' => array(
                                'type' => 'text',
                                'label' => __( 'Padding', 'yc-widgets-bundle' )
                            )
                        )
                    )
                )
            ),
            'yc_divider' => array(
                'type' => 'section',
                'label' => __( 'Divider', 'yc-widgets-bundle' ),
                'hide' => true,
                'fields' => array(
                    'style' => array(
                        'type' => 'select',
                        'label' => __( 'Style', 'yc-widgets-bundle' ),
                        'default' => 'none',
                        'options' => array(
                            'none' => __('None', 'yc-widgets-bundle'),
                            'solid' => __('Solid', 'yc-widgets-bundle'),
                            'dotted' => __('Dotted', 'yc-widgets-bundle'),
                            'dashed' => __('Dashed', 'yc-widgets-bundle'),
                            'double' => __('Double', 'yc-widgets-bundle'),
                            'groove' => __('Groove', 'yc-widgets-bundle'),
                            'ridge' => __('Ridge', 'yc-widgets-bundle'),
                            'inset' => __('Inset', 'yc-widgets-bundle'),
                            'outset' => __('Outset', 'yc-widgets-bundle'),
                        )
                    ),
                    'align' => array(
                        'type' => 'select',
                        'label' => __( 'Align', 'yc-widgets-bundle' ),
                        'default' => 'center',
                        'options' => array(
                            'center' => __( 'Center', 'yc-widgets-bundle' ),
                            'left' => __( 'Left', 'yc-widgets-bundle' ),
                            'right' => __( 'Right', 'yc-widgets-bundle' )
                        )
                    ),
                    'weight' => array(
                        'type' => 'measurement',
                        'label' => __( 'Weight', 'yc-widgets-bundle' ),
                        'default' => '1px'
                    ),
                    'color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'yc-widgets-bundle'),
                        'default' => '#EEEEEE'
                    ),
                    'width' => array(
                        'type' => 'measurement',
                        'label' => __('Max width', 'yc-widgets-bundle'),
                        'default' => '60px',
                    ),
                    'top_margin' => array(
                        'type' => 'measurement',
                        'label' => __('Top/Bottom Margin', 'yc-widgets-bundle'),
                        'default' => '20px',
                    )
                )
            )
        );
    }

    function get_style_name( $instance ) {
        return 'yc-headline';
    }

    function get_less_variables( $instance ) {
        $less_vars = array();

        // check for headline
        if ( ! empty( $instance['yc_headline'] ) ) {
            $headline_styles = $instance['yc_headline'];
            if ( ! empty( $headline_styles['tag'] ) ) {
                $less_vars['headline_tag'] = $headline_styles['tag'];
            }
            if ( ! empty( $headline_styles['align'] ) ) {
                $less_vars['headline_align'] = $headline_styles['align'];
            }
            if ( ! empty( $headline_styles['fontstyle'] ) ) {
                $less_vars['headline_fontstyle'] = $headline_styles['fontstyle'];
            }
            if ( ! empty( $headline_styles['color'] ) ) {
                $less_vars['headline_color'] = $headline_styles['color'];
            }
            if ( ! empty( $headline_styles['size'] ) ) {
                $less_vars['has_headline_size'] = 'true';
                $less_vars['headline_size'] = $headline_styles['size'];
            }
            if ( ! empty( $headline_styles['lineheight'] ) ) {
                $less_vars['has_headline_line_height'] = 'true';
                $less_vars['headline_line_height'] = $headline_styles['lineheight'];
            }
            if ( ! empty( $headline_styles['letterspacing'] ) ) {
                $less_vars['has_headline_letterspacing'] = 'true';
                $less_vars['headline_letterspacing'] = $headline_styles['letterspacing'];
            }
            if ( ! empty( $headline_styles['margin'] ) ) {
                $less_vars['has_headline_margin'] = 'true';
                $less_vars['headline_margin'] = $headline_styles['margin'];
            }
            if ( ! empty( $headline_styles['padding'] ) ) {
                $less_vars['has_headline_padding'] = 'true';
                $less_vars['headline_padding'] = $headline_styles['padding'];
            }
            if ( ! empty( $headline_styles['font'] ) ) {
                $font = siteorigin_widget_get_font( $headline_styles['font'] );
                $less_vars['headline_font'] = $font['family'];
                if ( ! empty( $font['weight'] ) ) {
                    $less_vars['headline_font_weight'] = $font['weight'];
                }
            }
            if ( ! empty( $headline_styles['font_weight_title'] ) ) {
                $less_vars['font_weight_title'] = $headline_styles['font_weight_title'];
            }

            


            // check for table layout style
            if ( $headline_styles['tabletlayout']['use'] ) {
                $less_vars['headline_tablelayout'] = 'true';

                if ( ! empty( $headline_styles['tabletlayout']['align'] ) ) {
                    $less_vars['tablelayout_headline_align'] = $headline_styles['tabletlayout']['align'];
                }
                if ( ! empty( $headline_styles['tabletlayout']['size'] ) ) {
                    $less_vars['tablelayout_headline_size'] = $headline_styles['tabletlayout']['size'];
                }
                if ( ! empty( $headline_styles['tabletlayout']['lineheight'] ) ) {
                    $less_vars['tablelayout_headline_line_height'] = $headline_styles['tabletlayout']['lineheight'];
                }
                if ( ! empty( $headline_styles['tabletlayout']['margin'] ) ) {
                    $less_vars['tablelayout_headline_margin'] = $headline_styles['tabletlayout']['margin'];
                }
                if ( ! empty( $headline_styles['tabletlayout']['padding'] ) ) {
                    $less_vars['tablelayout_headline_padding'] = $headline_styles['tabletlayout']['padding'];
                }
            }

            // check for table layout style
            if ( $headline_styles['mobilelayout']['use'] ) {
                $less_vars['headline_mobilelayout'] = 'true';

                if ( ! empty( $headline_styles['mobilelayout']['align'] ) ) {
                    $less_vars['mobilelayout_headline_align'] = $headline_styles['mobilelayout']['align'];
                }
                if ( ! empty( $headline_styles['mobilelayout']['size'] ) ) {
                    $less_vars['mobilelayout_headline_size'] = $headline_styles['mobilelayout']['size'];
                }
                if ( ! empty( $headline_styles['mobilelayout']['lineheight'] ) ) {
                    $less_vars['mobilelayout_headline_line_height'] = $headline_styles['mobilelayout']['lineheight'];
                }
                if ( ! empty( $headline_styles['mobilelayout']['margin'] ) ) {
                    $less_vars['mobilelayout_headline_margin'] = $headline_styles['mobilelayout']['margin'];
                }
                if ( ! empty( $headline_styles['mobilelayout']['padding'] ) ) {
                    $less_vars['mobilelayout_headline_padding'] = $headline_styles['mobilelayout']['padding'];
                }
            }
        }


        // check for sub headline
        if ( ! empty( $instance['yc_sub_headline'] ) ) {
            $sub_headline_styles = $instance['yc_sub_headline'];
            if ( ! empty( $sub_headline_styles['align'] ) ) {
                $less_vars['sub_headline_align'] = $sub_headline_styles['align'];
            }
            if ( ! empty( $sub_headline_styles['fontstyle'] ) ) {
                $less_vars['sub_headline_fontstyle'] = $sub_headline_styles['fontstyle'];
            }
            if ( ! empty( $sub_headline_styles['tag'] ) ) {
                $less_vars['sub_headline_tag'] = $sub_headline_styles['tag'];
            }
            if ( ! empty( $sub_headline_styles['color'] ) ) {
                $less_vars['sub_headline_color'] = $sub_headline_styles['color'];
            }
            if ( ! empty( $sub_headline_styles['size'] ) ) {
                $less_vars['has_sub_headline_size'] = 'true';
                $less_vars['sub_headline_size'] = $sub_headline_styles['size'];
            }
            if ( ! empty( $sub_headline_styles['lineheight'] ) ) {
                $less_vars['has_sub_headline_line_height'] = 'true';
                $less_vars['sub_headline_line_height'] = $sub_headline_styles['lineheight'];
            }
            if ( ! empty( $sub_headline_styles['letterspacing'] ) ) {
                $less_vars['has_sub_headline_letterspacing'] = 'true';
                $less_vars['sub_headline_letterspacing'] = $sub_headline_styles['letterspacing'];
            }
            if ( ! empty( $sub_headline_styles['margin'] ) ) {
                $less_vars['has_sub_headline_margin'] = 'true';
                $less_vars['sub_headline_margin'] = $sub_headline_styles['margin'];
            }
            if ( ! empty( $sub_headline_styles['padding'] ) ) {
                $less_vars['has_sub_headline_padding'] = 'true';
                $less_vars['sub_headline_padding'] = $sub_headline_styles['padding'];
            }
            if ( ! empty( $sub_headline_styles['font'] ) ) {
                $font = siteorigin_widget_get_font( $sub_headline_styles['font'] );
                $less_vars['sub_headline_font'] = $font['family'];
                if ( ! empty( $font['weight'] ) ) {
                    $less_vars['sub_headline_font_weight'] = $font['weight'];
                }
            }
            if ( ! empty( $sub_headline_styles['font_weight_sub_title'] ) ) {
                $less_vars['font_weight_sub_title'] = $sub_headline_styles['font_weight_sub_title'];
            }


            

            // check for table layout style
            if ( $sub_headline_styles['tabletlayout']['use'] ) {
                $less_vars['sub_headline_tablelayout'] = 'true';

                if ( ! empty( $sub_headline_styles['tabletlayout']['align'] ) ) {
                    $less_vars['tablelayout_sub_headline_align'] = $sub_headline_styles['tabletlayout']['align'];
                }
                if ( ! empty( $sub_headline_styles['tabletlayout']['size'] ) ) {
                    $less_vars['tablelayout_sub_headline_size'] = $sub_headline_styles['tabletlayout']['size'];
                }
                if ( ! empty( $sub_headline_styles['tabletlayout']['lineheight'] ) ) {
                    $less_vars['tablelayout_sub_headline_line_height'] = $sub_headline_styles['tabletlayout']['lineheight'];
                }
                if ( ! empty( $sub_headline_styles['tabletlayout']['margin'] ) ) {
                    $less_vars['tablelayout_sub_headline_margin'] = $sub_headline_styles['tabletlayout']['margin'];
                }
                if ( ! empty( $sub_headline_styles['tabletlayout']['padding'] ) ) {
                    $less_vars['tablelayout_sub_headline_padding'] = $sub_headline_styles['tabletlayout']['padding'];
                }
            }

            // check for table layout style
            if ( $sub_headline_styles['mobilelayout']['use'] ) {
                $less_vars['sub_headline_mobilelayout'] = 'true';

                if ( ! empty( $sub_headline_styles['mobilelayout']['align'] ) ) {
                    $less_vars['mobilelayout_sub_headline_align'] = $sub_headline_styles['mobilelayout']['align'];
                }
                if ( ! empty( $sub_headline_styles['mobilelayout']['size'] ) ) {
                    $less_vars['mobilelayout_sub_headline_size'] = $sub_headline_styles['mobilelayout']['size'];
                }
                if ( ! empty( $sub_headline_styles['mobilelayout']['lineheight'] ) ) {
                    $less_vars['mobilelayout_sub_headline_line_height'] = $sub_headline_styles['mobilelayout']['lineheight'];
                }
                if ( ! empty( $sub_headline_styles['mobilelayout']['margin'] ) ) {
                    $less_vars['mobilelayout_sub_headline_margin'] = $sub_headline_styles['mobilelayout']['margin'];
                }
                if ( ! empty( $sub_headline_styles['mobilelayout']['padding'] ) ) {
                    $less_vars['mobilelayout_sub_headline_padding'] = $sub_headline_styles['mobilelayout']['padding'];
                }
            }
        }

        // check for divider
        if ( ! empty( $instance['yc_divider'] ) ) {
            $divider_styles = $instance['yc_divider'];

            if ( ! empty( $divider_styles['style'] ) ) {
                $less_vars['divider_style'] = $divider_styles['style'];
            }
            if ( ! empty( $divider_styles['align'] ) ) {
                $less_vars['divider_align'] = $divider_styles['align'];
            }
            if ( ! empty( $divider_styles['weight'] ) ) {
                $less_vars['divider_weight'] = $divider_styles['weight'];
            }
            if ( ! empty( $divider_styles['color'] ) ) {
                $less_vars['divider_color'] = $divider_styles['color'];
            }
            if ( !empty( $divider_styles['top_margin'] ) ) {
                $less_vars['divider_top_margin'] = $divider_styles['top_margin'];
            }
            if ( !empty( $divider_styles['width'] ) ) {
                $less_vars['divider_width'] = $divider_styles['width'];
            }


        }

        return $less_vars;
    }

    function get_google_font_fields( $instance ) {

        return array(
            $instance['yc_headline']['font']  == 0 ? 'default' : $instance['yc_headline']['font'],
            $instance['yc_sub_headline']['font']  == 0 ? 'default' : $instance['yc_sub_headline']['font'],
        );
    }

    /**
     * Get the template for the headline widget
     *
     * @param $instance
     *
     * @return mixed|string
     */
    function get_template_name( $instance ) {
        return 'yc-headline';
    }

    /**
     * Get the template variables for the headline
     *
     * @param $instance
     * @param $args
     *
     * @return array
     */
    function get_template_variables( $instance, $args ) {
        if( empty( $instance ) ) return array();

        return array(
            'yc_headline' => $instance['yc_headline']['text'],
            'headline_tag' => $instance['yc_headline']['tag'],
            'yc_sub_headline' => $instance['yc_sub_headline']['text'],
            'sub_headline_tag' => $instance['yc_sub_headline']['tag'],
            'yc_has_divider' => ! empty( $instance['yc_divider'] ) && $instance['yc_divider']['style'] != 'none'
        );
    }
}

siteorigin_widget_register('yc-headline', __FILE__, 'YumeCommerce_Widget_Headline_Widget');
