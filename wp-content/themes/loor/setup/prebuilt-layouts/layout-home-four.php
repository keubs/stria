<?php

function loor_prebuilt_home_four_layouts($layouts){
    $layouts['home-page-four'] = array(
        // We'll add a title field
        'name' => __('Loor Layout Four', 'loor'),
        'description' => __('Prebuilt layout of the fourth demo', 'loor'),
        'screenshot' => get_template_directory_uri() . '/demo-files/layout-4.png',
        'widgets' => 
          array (
            0 => 
            array (
              'title' => '',
              'text' => '[rev_slider alias="loor-watch-slider"]',
              'filter' => false,
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 0,
                'cell' => 0,
                'id' => 0,
                'widget_id' => 'd222ba57-41cf-44f5-a73b-a63d7f8de51b',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            1 => 
            array (
              'networks' => 
              array (
                0 => 
                array (
                  'name' => 'facebook',
                  'url' => 'https://www.facebook.com/',
                  'icon_color' => '#ffffff',
                  'button_color' => '#000000',
                ),
                1 => 
                array (
                  'name' => 'twitter',
                  'url' => 'https://twitter.com/',
                  'icon_color' => '#ffffff',
                  'button_color' => '#000000',
                ),
                2 => 
                array (
                  'name' => 'instagram',
                  'url' => 'https://instagram.com/',
                  'icon_color' => '#ffffff',
                  'button_color' => '#000000',
                ),
              ),
              'design' => 
              array (
                'new_window' => true,
                'theme' => 'wire',
                'hover' => true,
                'icon_size' => '1',
                'rounding' => '1.5',
                'padding' => '0.5',
                'align' => 'left',
                'margin' => '0.1',
                'so_field_container_state' => 'open',
              ),
              '_sow_form_id' => '57fd20a6d3b94',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_SocialMediaButtons_Widget',
                'raw' => false,
                'grid' => 1,
                'cell' => 0,
                'id' => 1,
                'widget_id' => 'b0f5117b-9a50-4c77-ba9a-03d510c083cf',
                'style' => 
                array (
                  'widget_css' => 'margin-bottom: -15px !important;',
                  'background_display' => 'tile',
                ),
              ),
            ),
            2 => 
            array (
              'title' => '',
              'text' => '2016 Your Site. All rights reserved. ',
              'filter' => false,
              'panels_info' => 
              array (
                'class' => 'WP_Widget_Text',
                'raw' => false,
                'grid' => 1,
                'cell' => 0,
                'id' => 2,
                'widget_id' => 'e9b9684a-f3c8-44fb-b89a-5657db9c9f61',
                'style' => 
                array (
                  'widget_css' => 'opacity: 0.5;',
                  'background_display' => 'tile',
                ),
              ),
            ),
            3 => 
            array (
              'panels_data' => 
              array (
                'widgets' => 
                array (
                  0 => 
                  array (
                    'image' => 110,
                    'image_fallback' => '',
                    'size' => 'full',
                    'align' => 'center',
                    'title' => '',
                    'title_position' => 'hidden',
                    'alt' => '',
                    'url' => '',
                    'bound' => true,
                    'full_width' => true,
                    '_sow_form_id' => '5804a3fe8ecea',
                    'panels_info' => 
                    array (
                      'class' => 'SiteOrigin_Widget_Image_Widget',
                      'grid' => 0,
                      'cell' => 0,
                      'id' => 0,
                      'widget_id' => 'c89b3598-0f40-4d81-92b9-75b596efacf5',
                      'style' => 
                      array (
                        'class' => '',
                        'widget_css' => '',
                        'iw-visible-screen' => 'iw-all',
                        'iw-visible-layout' => 'iw-all',
                        'padding' => '',
                        'background' => '',
                        'background_image_attachment' => '0',
                        'background_display' => 'tile',
                        'border_color' => '',
                        'font_color' => '',
                        'link_color' => '',
                      ),
                    ),
                    'new_window' => false,
                  ),
                  1 => 
                  array (
                    'yc_headline' => 
                    array (
                      'text' => 'A CLOSER LOOK',
                      'tag' => 'p',
                      'font_weight_title' => '700',
                      'font' => 'default',
                      'color' => '#dab98d',
                      'align' => 'left',
                      'fontstyle' => 'normal',
                      'size' => '12px',
                      'size_unit' => 'px',
                      'lineheight' => '12px',
                      'lineheight_unit' => 'px',
                      'letterspacing' => '2px',
                      'letterspacing_unit' => 'px',
                      'margin' => '0px',
                      'padding' => '',
                      'tabletlayout' => 
                      array (
                        'align' => 'center',
                        'size' => false,
                        'size_unit' => 'px',
                        'lineheight' => false,
                        'lineheight_unit' => 'px',
                        'margin' => '',
                        'padding' => '',
                        'so_field_container_state' => 'closed',
                        'use' => false,
                      ),
                      'mobilelayout' => 
                      array (
                        'align' => 'center',
                        'size' => false,
                        'size_unit' => 'px',
                        'lineheight' => false,
                        'lineheight_unit' => 'px',
                        'margin' => '',
                        'padding' => '',
                        'so_field_container_state' => 'closed',
                        'use' => false,
                      ),
                      'so_field_container_state' => 'open',
                    ),
                    'yc_sub_headline' => 
                    array (
                      'text' => 'Launched in 1985 ',
                      'tag' => 'h3',
                      'font_weight_sub_title' => '800',
                      'font' => 'default',
                      'color' => '#ffffff',
                      'align' => 'left',
                      'fontstyle' => 'normal',
                      'size' => '50px',
                      'size_unit' => 'px',
                      'lineheight' => '50px',
                      'lineheight_unit' => 'px',
                      'letterspacing' => false,
                      'letterspacing_unit' => 'px',
                      'margin' => '25px 0 10px',
                      'padding' => '',
                      'tabletlayout' => 
                      array (
                        'align' => 'center',
                        'size' => false,
                        'size_unit' => 'px',
                        'lineheight' => false,
                        'lineheight_unit' => 'px',
                        'margin' => '',
                        'padding' => '',
                        'so_field_container_state' => 'closed',
                        'use' => false,
                      ),
                      'mobilelayout' => 
                      array (
                        'use' => true,
                        'align' => 'left',
                        'size' => '30px',
                        'size_unit' => 'px',
                        'lineheight' => '40px',
                        'lineheight_unit' => 'px',
                        'margin' => '5px 0 0',
                        'padding' => '',
                        'so_field_container_state' => 'open',
                      ),
                      'so_field_container_state' => 'open',
                    ),
                    'yc_divider' => 
                    array (
                      'style' => 'none',
                      'align' => 'center',
                      'weight' => '1px',
                      'weight_unit' => 'px',
                      'color' => '#EEEEEE',
                      'width' => '60px',
                      'width_unit' => 'px',
                      'top_margin' => '20px',
                      'top_margin_unit' => 'px',
                      'so_field_container_state' => 'closed',
                    ),
                    '_sow_form_id' => '57fd284207fab',
                    'panels_info' => 
                    array (
                      'class' => 'YumeCommerce_Widget_Headline_Widget',
                      'raw' => false,
                      'grid' => 0,
                      'cell' => 1,
                      'id' => 1,
                      'widget_id' => 'c378099b-7fdf-49cf-9b33-1b846254e790',
                      'style' => 
                      array (
                        'class' => '',
                        'widget_css' => '',
                        'iw-visible-screen' => 'iw-all',
                        'iw-visible-layout' => 'iw-all',
                        'padding' => '',
                        'background' => '',
                        'background_image_attachment' => '0',
                        'background_display' => 'tile',
                        'border_color' => '',
                        'font_color' => '',
                        'link_color' => '',
                      ),
                    ),
                  ),
                  2 => 
                  array (
                    'title' => '',
                    'text' => '<h5 style="line-height: 32px;"><em>Design serves to enhance the legibility of the watch’s functions, provides genuine added value and becomes an identifying feature.</em></h5>',
                    'text_selected_editor' => 'tmce',
                    'autop' => true,
                    '_sow_form_id' => '57fd2aa6ce64b',
                    'panels_info' => 
                    array (
                      'class' => 'SiteOrigin_Widget_Editor_Widget',
                      'raw' => false,
                      'grid' => 0,
                      'cell' => 1,
                      'id' => 2,
                      'widget_id' => 'e1583923-962b-43bf-9a4c-77a6f2cd04a2',
                      'style' => 
                      array (
                        'class' => '',
                        'widget_css' => '',
                        'iw-visible-screen' => 'iw-all',
                        'iw-visible-layout' => 'iw-all',
                        'padding' => '',
                        'background' => '',
                        'background_image_attachment' => '0',
                        'background_display' => 'tile',
                        'border_color' => '',
                        'font_color' => '#ffffff',
                        'link_color' => '',
                      ),
                    ),
                  ),
                  3 => 
                  array (
                    'widget_title' => '',
                    'repeater' => 
                    array (
                      0 => 
                      array (
                        'tab_icon' => '',
                        'tab_title' => 'BEST WAY',
                        'content' => 
                        array (
                          'widgets' => 
                          array (
                            0 => 
                            array (
                              'yc_headline' => 
                              array (
                                'text' => '01.',
                                'tag' => 'h3',
                                'font_weight_title' => '500',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'left',
                                'fontstyle' => 'normal',
                                'size' => '85px',
                                'size_unit' => 'px',
                                'lineheight' => '35px',
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '0px',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'open',
                              ),
                              'yc_sub_headline' => 
                              array (
                                'text' => '',
                                'tag' => 'h3',
                                'font_weight_sub_title' => '700',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'center',
                                'fontstyle' => 'normal',
                                'size' => false,
                                'size_unit' => 'px',
                                'lineheight' => false,
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'closed',
                              ),
                              'yc_divider' => 
                              array (
                                'style' => 'none',
                                'align' => 'center',
                                'weight' => '1px',
                                'weight_unit' => 'px',
                                'color' => '#EEEEEE',
                                'width' => '60px',
                                'width_unit' => 'px',
                                'top_margin' => '20px',
                                'top_margin_unit' => 'px',
                                'so_field_container_state' => 'closed',
                              ),
                              '_sow_form_id' => '57ffc5f25da0c',
                              'panels_info' => 
                              array (
                                'class' => 'YumeCommerce_Widget_Headline_Widget',
                                'raw' => false,
                                'grid' => 0,
                                'cell' => 0,
                                'id' => 0,
                                'widget_id' => '449ddb2e-3dfa-489a-9db1-7c7749e454b3',
                                'style' => 
                                array (
                                  'class' => '',
                                  'widget_css' => '',
                                  'iw-visible-screen' => 'iw-all',
                                  'iw-visible-layout' => 'iw-all',
                                  'padding' => '',
                                  'background' => '',
                                  'background_image_attachment' => '0',
                                  'background_display' => 'tile',
                                  'border_color' => '',
                                  'font_color' => '',
                                  'link_color' => '',
                                ),
                              ),
                            ),
                            1 => 
                            array (
                              'yc_headline' => 
                              array (
                                'text' => 'Integer non nisl at mauris faucibus pharetra eu eumi. Sed vitae feugiat purus. Vivamus dignissim orci eros neco aliquet odio varius no. Aenean placerat et quam scelerisque scelerisque posuere.',
                                'tag' => 'h5',
                                'font_weight_title' => '400',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'left',
                                'fontstyle' => 'normal',
                                'size' => '15px',
                                'size_unit' => 'px',
                                'lineheight' => '28px',
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '0px',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'open',
                              ),
                              'yc_sub_headline' => 
                              array (
                                'text' => '',
                                'tag' => 'h3',
                                'font_weight_sub_title' => '700',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'center',
                                'fontstyle' => 'normal',
                                'size' => false,
                                'size_unit' => 'px',
                                'lineheight' => false,
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'closed',
                              ),
                              'yc_divider' => 
                              array (
                                'style' => 'none',
                                'align' => 'center',
                                'weight' => '1px',
                                'weight_unit' => 'px',
                                'color' => '#EEEEEE',
                                'width' => '60px',
                                'width_unit' => 'px',
                                'top_margin' => '20px',
                                'top_margin_unit' => 'px',
                                'so_field_container_state' => 'closed',
                              ),
                              '_sow_form_id' => '57ffc9a9c3556',
                              'panels_info' => 
                              array (
                                'class' => 'YumeCommerce_Widget_Headline_Widget',
                                'grid' => 0,
                                'cell' => 1,
                                'id' => 1,
                                'widget_id' => '93120bf2-bba7-407c-9f8c-6599febba4e5',
                                'style' => 
                                array (
                                  'class' => '',
                                  'widget_css' => '',
                                  'iw-visible-screen' => 'iw-all',
                                  'iw-visible-layout' => 'iw-all',
                                  'padding' => '',
                                  'background' => '',
                                  'background_image_attachment' => '0',
                                  'background_display' => 'tile',
                                  'border_color' => '',
                                  'font_color' => '',
                                  'link_color' => '',
                                ),
                              ),
                            ),
                          ),
                          'grids' => 
                          array (
                            0 => 
                            array (
                              'cells' => 2,
                              'style' => 
                              array (
                                'id' => '',
                                'class' => '',
                                'cell_class' => '',
                                'row_css' => '',
                                'iw-visible-screen' => 'iw-all',
                                'iw-visible-layout' => 'iw-all',
                                'bottom_margin' => '',
                                'gutter' => '',
                                'padding' => '15px 0px 0px 0px',
                                'row_stretch' => '',
                                'collapse_order' => '',
                                'yc_desktop_padding' => '',
                                'yc_tablet_padding' => '',
                                'yc_mobile_padding' => '',
                                'background' => '',
                                'background_image_attachment' => '0',
                                'background_display' => 'tile',
                                'border_color' => '',
                              ),
                            ),
                          ),
                          'grid_cells' => 
                          array (
                            0 => 
                            array (
                              'grid' => 0,
                              'weight' => 0.2485294117640000077784634413546882569789886474609375,
                            ),
                            1 => 
                            array (
                              'grid' => 0,
                              'weight' => 0.7514705882359999922215365586453117430210113525390625,
                            ),
                          ),
                        ),
                        'tab_content_wrap' => 
                        array (
                          'tab_content' => '',
                          'tab_content_selected_editor' => 'html',
                          'so_field_container_state' => 'closed',
                        ),
                      ),
                      1 => 
                      array (
                        'tab_icon' => '',
                        'tab_title' => 'OUR PASSION',
                        'content' => 
                        array (
                          'widgets' => 
                          array (
                            0 => 
                            array (
                              'yc_headline' => 
                              array (
                                'text' => '02.',
                                'tag' => 'h3',
                                'font_weight_title' => '500',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'left',
                                'fontstyle' => 'normal',
                                'size' => '85px',
                                'size_unit' => 'px',
                                'lineheight' => '35px',
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '0px',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'open',
                              ),
                              'yc_sub_headline' => 
                              array (
                                'text' => '',
                                'tag' => 'h3',
                                'font_weight_sub_title' => '700',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'center',
                                'fontstyle' => 'normal',
                                'size' => false,
                                'size_unit' => 'px',
                                'lineheight' => false,
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'closed',
                              ),
                              'yc_divider' => 
                              array (
                                'style' => 'none',
                                'align' => 'center',
                                'weight' => '1px',
                                'weight_unit' => 'px',
                                'color' => '#EEEEEE',
                                'width' => '60px',
                                'width_unit' => 'px',
                                'top_margin' => '20px',
                                'top_margin_unit' => 'px',
                                'so_field_container_state' => 'closed',
                              ),
                              '_sow_form_id' => '57ffc5f25da0c',
                              'panels_info' => 
                              array (
                                'class' => 'YumeCommerce_Widget_Headline_Widget',
                                'raw' => false,
                                'grid' => 0,
                                'cell' => 0,
                                'id' => 0,
                                'widget_id' => '449ddb2e-3dfa-489a-9db1-7c7749e454b3',
                                'style' => 
                                array (
                                  'class' => '',
                                  'widget_css' => '',
                                  'iw-visible-screen' => 'iw-all',
                                  'iw-visible-layout' => 'iw-all',
                                  'padding' => '',
                                  'background' => '',
                                  'background_image_attachment' => '0',
                                  'background_display' => 'tile',
                                  'border_color' => '',
                                  'font_color' => '',
                                  'link_color' => '',
                                ),
                              ),
                            ),
                            1 => 
                            array (
                              'yc_headline' => 
                              array (
                                'text' => 'Donec 10 sapien commodo porta venenatis urna, elementum fermentum sapienFusce dapibus, tellus ac cursus, mauris condimentum nibh, ut fermentum justo sit amet risus commodo porta.',
                                'tag' => 'h5',
                                'font_weight_title' => '400',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'left',
                                'fontstyle' => 'normal',
                                'size' => '15px',
                                'size_unit' => 'px',
                                'lineheight' => '28px',
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '0px',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'open',
                              ),
                              'yc_sub_headline' => 
                              array (
                                'text' => '',
                                'tag' => 'h3',
                                'font_weight_sub_title' => '700',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'center',
                                'fontstyle' => 'normal',
                                'size' => false,
                                'size_unit' => 'px',
                                'lineheight' => false,
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'closed',
                              ),
                              'yc_divider' => 
                              array (
                                'style' => 'none',
                                'align' => 'center',
                                'weight' => '1px',
                                'weight_unit' => 'px',
                                'color' => '#EEEEEE',
                                'width' => '60px',
                                'width_unit' => 'px',
                                'top_margin' => '20px',
                                'top_margin_unit' => 'px',
                                'so_field_container_state' => 'closed',
                              ),
                              '_sow_form_id' => '57ffc9a9c3556',
                              'panels_info' => 
                              array (
                                'class' => 'YumeCommerce_Widget_Headline_Widget',
                                'raw' => false,
                                'grid' => 0,
                                'cell' => 1,
                                'id' => 1,
                                'widget_id' => '93120bf2-bba7-407c-9f8c-6599febba4e5',
                                'style' => 
                                array (
                                  'class' => '',
                                  'widget_css' => '',
                                  'iw-visible-screen' => 'iw-all',
                                  'iw-visible-layout' => 'iw-all',
                                  'padding' => '',
                                  'background' => '',
                                  'background_image_attachment' => '0',
                                  'background_display' => 'tile',
                                  'border_color' => '',
                                  'font_color' => '',
                                  'link_color' => '',
                                ),
                              ),
                            ),
                          ),
                          'grids' => 
                          array (
                            0 => 
                            array (
                              'cells' => 2,
                              'style' => 
                              array (
                                'id' => '',
                                'class' => '',
                                'cell_class' => '',
                                'row_css' => '',
                                'iw-visible-screen' => 'iw-all',
                                'iw-visible-layout' => 'iw-all',
                                'bottom_margin' => '',
                                'gutter' => '',
                                'padding' => '15px 0px 0px 0px',
                                'row_stretch' => '',
                                'collapse_order' => '',
                                'yc_desktop_padding' => '',
                                'yc_tablet_padding' => '',
                                'yc_mobile_padding' => '',
                                'background' => '',
                                'background_image_attachment' => '0',
                                'background_display' => 'tile',
                                'border_color' => '',
                              ),
                            ),
                          ),
                          'grid_cells' => 
                          array (
                            0 => 
                            array (
                              'grid' => 0,
                              'weight' => 0.2485294117640000077784634413546882569789886474609375,
                            ),
                            1 => 
                            array (
                              'grid' => 0,
                              'weight' => 0.7514705882359999922215365586453117430210113525390625,
                            ),
                          ),
                        ),
                        'tab_content_wrap' => 
                        array (
                          'tab_content' => '',
                          'tab_content_selected_editor' => 'html',
                          'so_field_container_state' => 'closed',
                        ),
                      ),
                      2 => 
                      array (
                        'tab_icon' => '',
                        'tab_title' => 'WE OFFER',
                        'content' => 
                        array (
                          'widgets' => 
                          array (
                            0 => 
                            array (
                              'yc_headline' => 
                              array (
                                'text' => '03.',
                                'tag' => 'h3',
                                'font_weight_title' => '500',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'left',
                                'fontstyle' => 'normal',
                                'size' => '85px',
                                'size_unit' => 'px',
                                'lineheight' => '35px',
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '0px',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'open',
                              ),
                              'yc_sub_headline' => 
                              array (
                                'text' => '',
                                'tag' => 'h3',
                                'font_weight_sub_title' => '700',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'center',
                                'fontstyle' => 'normal',
                                'size' => false,
                                'size_unit' => 'px',
                                'lineheight' => false,
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'closed',
                              ),
                              'yc_divider' => 
                              array (
                                'style' => 'none',
                                'align' => 'center',
                                'weight' => '1px',
                                'weight_unit' => 'px',
                                'color' => '#EEEEEE',
                                'width' => '60px',
                                'width_unit' => 'px',
                                'top_margin' => '20px',
                                'top_margin_unit' => 'px',
                                'so_field_container_state' => 'closed',
                              ),
                              '_sow_form_id' => '57ffc5f25da0c',
                              'panels_info' => 
                              array (
                                'class' => 'YumeCommerce_Widget_Headline_Widget',
                                'raw' => false,
                                'grid' => 0,
                                'cell' => 0,
                                'id' => 0,
                                'widget_id' => '449ddb2e-3dfa-489a-9db1-7c7749e454b3',
                                'style' => 
                                array (
                                  'class' => '',
                                  'widget_css' => '',
                                  'iw-visible-screen' => 'iw-all',
                                  'iw-visible-layout' => 'iw-all',
                                  'padding' => '',
                                  'background' => '',
                                  'background_image_attachment' => '0',
                                  'background_display' => 'tile',
                                  'border_color' => '',
                                  'font_color' => '',
                                  'link_color' => '',
                                ),
                              ),
                            ),
                            1 => 
                            array (
                              'yc_headline' => 
                              array (
                                'text' => 'Integer non nisl at mauris pharetra eu eu mi. Sed vitae feugiat purus. Vivamus dignissim orci eros, nec aliquet odio varius non. Aenean placerat et quam scelerisque scelerisque posuere.',
                                'tag' => 'h5',
                                'font_weight_title' => '400',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'left',
                                'fontstyle' => 'normal',
                                'size' => '15px',
                                'size_unit' => 'px',
                                'lineheight' => '28px',
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '0px',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'open',
                              ),
                              'yc_sub_headline' => 
                              array (
                                'text' => '',
                                'tag' => 'h3',
                                'font_weight_sub_title' => '700',
                                'font' => 'default',
                                'color' => false,
                                'align' => 'center',
                                'fontstyle' => 'normal',
                                'size' => false,
                                'size_unit' => 'px',
                                'lineheight' => false,
                                'lineheight_unit' => 'px',
                                'letterspacing' => false,
                                'letterspacing_unit' => 'px',
                                'margin' => '',
                                'padding' => '',
                                'tabletlayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'mobilelayout' => 
                                array (
                                  'align' => 'center',
                                  'size' => false,
                                  'size_unit' => 'px',
                                  'lineheight' => false,
                                  'lineheight_unit' => 'px',
                                  'margin' => '',
                                  'padding' => '',
                                  'so_field_container_state' => 'closed',
                                  'use' => false,
                                ),
                                'so_field_container_state' => 'closed',
                              ),
                              'yc_divider' => 
                              array (
                                'style' => 'none',
                                'align' => 'center',
                                'weight' => '1px',
                                'weight_unit' => 'px',
                                'color' => '#EEEEEE',
                                'width' => '60px',
                                'width_unit' => 'px',
                                'top_margin' => '20px',
                                'top_margin_unit' => 'px',
                                'so_field_container_state' => 'closed',
                              ),
                              '_sow_form_id' => '57ffc9a9c3556',
                              'panels_info' => 
                              array (
                                'class' => 'YumeCommerce_Widget_Headline_Widget',
                                'raw' => false,
                                'grid' => 0,
                                'cell' => 1,
                                'id' => 1,
                                'widget_id' => '93120bf2-bba7-407c-9f8c-6599febba4e5',
                                'style' => 
                                array (
                                  'class' => '',
                                  'widget_css' => '',
                                  'iw-visible-screen' => 'iw-all',
                                  'iw-visible-layout' => 'iw-all',
                                  'padding' => '',
                                  'background' => '',
                                  'background_image_attachment' => '0',
                                  'background_display' => 'tile',
                                  'border_color' => '',
                                  'font_color' => '',
                                  'link_color' => '',
                                ),
                              ),
                            ),
                          ),
                          'grids' => 
                          array (
                            0 => 
                            array (
                              'cells' => 2,
                              'style' => 
                              array (
                                'id' => '',
                                'class' => '',
                                'cell_class' => '',
                                'row_css' => '',
                                'iw-visible-screen' => 'iw-all',
                                'iw-visible-layout' => 'iw-all',
                                'bottom_margin' => '',
                                'gutter' => '',
                                'padding' => '15px 0px 0px 0px',
                                'row_stretch' => '',
                                'collapse_order' => '',
                                'yc_desktop_padding' => '',
                                'yc_tablet_padding' => '',
                                'yc_mobile_padding' => '',
                                'background' => '',
                                'background_image_attachment' => '0',
                                'background_display' => 'tile',
                                'border_color' => '',
                              ),
                            ),
                          ),
                          'grid_cells' => 
                          array (
                            0 => 
                            array (
                              'grid' => 0,
                              'weight' => 0.2485294117640000077784634413546882569789886474609375,
                            ),
                            1 => 
                            array (
                              'grid' => 0,
                              'weight' => 0.7514705882359999922215365586453117430210113525390625,
                            ),
                          ),
                        ),
                        'tab_content_wrap' => 
                        array (
                          'tab_content' => '',
                          'tab_content_selected_editor' => 'html',
                          'so_field_container_state' => 'open',
                        ),
                      ),
                    ),
                    'tabs_styling' => 
                    array (
                      'tab_effect' => 'slide',
                      'tab_icon_position' => 'left',
                      'font_size' => false,
                      'font_size_unit' => 'px',
                      'font_weight' => '700',
                      'inactive_tab_color' => '#ffffff',
                      'active_tab_color' => '#ffffff',
                      'active_tab_bg_color' => false,
                      'tab_border_width' => '3px',
                      'tab_border_width_unit' => 'px',
                      'tab_border_color' => '#dab98d',
                      'tab_content_color' => '#ffffff',
                      'so_field_container_state' => 'open',
                    ),
                    '_sow_form_id' => '57ff8121bba4e',
                    'panels_info' => 
                    array (
                      'class' => 'YumeCommerce_Tabs_Widget',
                      'raw' => false,
                      'grid' => 0,
                      'cell' => 1,
                      'id' => 3,
                      'widget_id' => 'cf0ba404-7ed7-4418-8808-92554a14a78a',
                      'style' => 
                      array (
                        'class' => '',
                        'widget_css' => '',
                        'iw-visible-screen' => 'iw-all',
                        'iw-visible-layout' => 'iw-all',
                        'padding' => '30px 0px 0px 0px',
                        'background' => '',
                        'background_image_attachment' => '0',
                        'background_display' => 'tile',
                        'border_color' => '',
                        'font_color' => '#ffffff',
                        'link_color' => '',
                      ),
                    ),
                  ),
                  4 => 
                  array (
                    'title' => '',
                    'text' => '<p>Pellentesque habitant tristique senectu netus malesuada scelerisque scelerisque turpis egestas. Nam tempor eleifend diam, nec rutrum turpis gravida. Sed viverra suscipit mi, eget consequat leo tristique sed.</p>',
                    'text_selected_editor' => 'tmce',
                    'autop' => true,
                    '_sow_form_id' => '57ffd4a1b7e58',
                    'panels_info' => 
                    array (
                      'class' => 'SiteOrigin_Widget_Editor_Widget',
                      'raw' => false,
                      'grid' => 0,
                      'cell' => 1,
                      'id' => 4,
                      'widget_id' => 'c7787c0c-f2a2-46ff-9524-35292464abbe',
                      'style' => 
                      array (
                        'class' => '',
                        'widget_css' => 'font-size: 13px;
                opacity: 0.7;
                line-height: 25px;',
                        'iw-visible-screen' => 'iw-all',
                        'iw-visible-layout' => 'iw-all',
                        'padding' => '',
                        'background' => '',
                        'background_image_attachment' => '0',
                        'background_display' => 'tile',
                        'border_color' => '',
                        'font_color' => '',
                        'link_color' => '',
                      ),
                    ),
                  ),
                ),
                'grids' => 
                array (
                  0 => 
                  array (
                    'cells' => 2,
                    'style' => 
                    array (
                      'id' => '',
                      'class' => 'average-width',
                      'cell_class' => '',
                      'row_css' => '',
                      'iw-visible-screen' => 'iw-all',
                      'iw-visible-layout' => 'iw-all',
                      'bottom_margin' => '',
                      'gutter' => '',
                      'padding' => '',
                      'row_stretch' => '',
                      'collapse_order' => '',
                      'yc_desktop_padding' => '0px 0px 0px 0px',
                      'yc_tablet_padding' => '0px 0px 0px 0px',
                      'yc_mobile_padding' => '0px 0px 0px 0px',
                      'background' => '',
                      'background_image_attachment' => '0',
                      'background_display' => 'tile',
                      'border_color' => '',
                    ),
                  ),
                ),
                'grid_cells' => 
                array (
                  0 => 
                  array (
                    'grid' => 0,
                    'weight' => 0.5,
                  ),
                  1 => 
                  array (
                    'grid' => 0,
                    'weight' => 0.5,
                  ),
                ),
              ),
              'builder_id' => '5804ad4219945',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Panels_Widgets_Layout',
                'raw' => false,
                'grid' => 2,
                'cell' => 0,
                'id' => 3,
                'widget_id' => 'a6469df2-b2d0-4db7-ab26-ce6075caf42d',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            4 => 
            array (
              'yc_features' => 
              array (
                'features' => 
                array (
                  0 => 
                  array (
                    'icon' => '',
                    'icon_color' => '#000000',
                    'icon_image' => 0,
                    'title' => 'Morbi leo risus, porta vestibulum at eros.',
                    'text' => 'Fusce dapibus, tellus ac cursus commodo, tor mauris fermentum massa justo sit amet risus. Cum tellus aim sociis natoque penatibu.',
                    'more_text' => 'More details',
                    'more_url' => '#',
                  ),
                  1 => 
                  array (
                    'icon' => '',
                    'icon_color' => '#000000',
                    'icon_image' => 0,
                    'title' => 'Purus sit amet fermentum portac feugiat tor.',
                    'text' => 'Cras mattis consectetur purus sit amet. Morbi leo risus, porta ac consectetur ac, vestibulum Duis mollis, est non commodo luctus.',
                    'more_text' => 'More details',
                    'more_url' => '#',
                  ),
                  2 => 
                  array (
                    'icon' => '',
                    'icon_color' => '#000000',
                    'icon_image' => 0,
                    'title' => 'Integer diam eros, semper interdum dapibus.  ',
                    'text' => 'Cum tellus aim sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus cras mattis consectetur purus sit.',
                    'more_text' => 'More details',
                    'more_url' => '#',
                  ),
                ),
                'so_field_container_state' => 'open',
                'title_link' => false,
                'icon_link' => false,
                'new_window' => false,
              ),
              'fonts' => 
              array (
                'title_options' => 
                array (
                  'font' => 'default',
                  'font_weight' => '800',
                  'font_style' => 'normal',
                  'size' => '22px',
                  'size_unit' => 'px',
                  'color' => '#000000',
                  'so_field_container_state' => 'open',
                ),
                'text_options' => 
                array (
                  'font' => 'default',
                  'font_weight' => '400',
                  'font_style' => 'normal',
                  'size' => '15px',
                  'size_unit' => 'px',
                  'color' => '#b0b1b1',
                  'so_field_container_state' => 'open',
                ),
                'more_text_options' => 
                array (
                  'font' => 'default',
                  'font_weight' => '700',
                  'font_style' => 'normal',
                  'size' => false,
                  'size_unit' => 'px',
                  'color' => '#e4c29e',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'layout' => 
              array (
                'i_position' => 'left',
                't_align' => 'left',
                'container_size' => '0px',
                'container_size_unit' => 'px',
                'per_row' => 3,
                'tag' => 'h4',
                'title_margin' => '0 0 20px',
                'title_padding' => '',
                'text_margin' => '',
                'text_padding' => '',
                'gutter' => '25px',
                'gutter_unit' => 'px',
                'so_field_container_state' => 'open',
              ),
              't_m_layout' => 
              array (
                't_layout' => 
                array (
                  'per_row' => 3,
                  'i_position' => 'next-to-feature',
                  'align' => 'left',
                  'title_margin' => '',
                  'title_padding' => '',
                  'text_margin' => '',
                  'text_padding' => '',
                  'title_size' => false,
                  'title_size_unit' => 'px',
                  'text_size' => false,
                  'text_size_unit' => 'px',
                  'more_size' => false,
                  'more_size_unit' => 'px',
                  'so_field_container_state' => 'open',
                  'use' => false,
                ),
                'm_layout' => 
                array (
                  'use' => true,
                  'per_row' => 1,
                  'i_position' => 'left',
                  'align' => 'left',
                  'title_margin' => '0 0 20px',
                  'title_padding' => '',
                  'text_margin' => '0 0 40px',
                  'text_padding' => '',
                  'title_size' => false,
                  'title_size_unit' => 'px',
                  'text_size' => false,
                  'text_size_unit' => 'px',
                  'more_size' => false,
                  'more_size_unit' => 'px',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              '_sow_form_id' => '57fd2ea5c8239',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Features_Widget',
                'raw' => false,
                'grid' => 3,
                'cell' => 0,
                'id' => 4,
                'widget_id' => 'b90e14c1-78a5-48af-a5e6-248059af716f',
                'style' => 
                array (
                  'class' => 'average-width',
                  'widget_css' => 'line-height: 28px;',
                  'background_display' => 'tile',
                ),
              ),
            ),
            5 => 
            array (
              'yc_headline' => 
              array (
                'text' => 'BROWSE WATCHES',
                'tag' => 'p',
                'font_weight_title' => '700',
                'font' => 'default',
                'color' => '#ffffff',
                'align' => 'center',
                'fontstyle' => 'normal',
                'size' => '12px',
                'size_unit' => 'px',
                'lineheight' => '12px',
                'lineheight_unit' => 'px',
                'letterspacing' => '2px',
                'letterspacing_unit' => 'px',
                'margin' => '0px',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_sub_headline' => 
              array (
                'text' => 'Shop Featured Collection',
                'tag' => 'h3',
                'font_weight_sub_title' => '800',
                'font' => 'default',
                'color' => '#ffffff',
                'align' => 'center',
                'fontstyle' => 'normal',
                'size' => '50px',
                'size_unit' => 'px',
                'lineheight' => '50px',
                'lineheight_unit' => 'px',
                'letterspacing' => false,
                'letterspacing_unit' => 'px',
                'margin' => '25px 0 10px',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'use' => true,
                  'align' => 'center',
                  'size' => '30px',
                  'size_unit' => 'px',
                  'lineheight' => '40px',
                  'lineheight_unit' => 'px',
                  'margin' => '10px 0 30px',
                  'padding' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_divider' => 
              array (
                'style' => 'none',
                'align' => 'center',
                'weight' => '1px',
                'weight_unit' => 'px',
                'color' => '#EEEEEE',
                'width' => '60px',
                'width_unit' => 'px',
                'top_margin' => '20px',
                'top_margin_unit' => 'px',
                'so_field_container_state' => 'closed',
              ),
              '_sow_form_id' => '5800b9a256c1f',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 4,
                'cell' => 0,
                'id' => 5,
                'widget_id' => 'a96c52b9-886d-4e21-a67a-26b1ea06766f',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            6 => 
            array (
              'category' => 'all',
              'orderby' => 'date',
              'order' => 'asc',
              'per_page' => -1,
              '_sow_form_id' => '5800ba4dbd594',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Woo_All_Products_Widget',
                'raw' => false,
                'grid' => 4,
                'cell' => 0,
                'id' => 6,
                'widget_id' => 'f86a20ee-2679-403c-9560-4731d6c1eb2c',
                'style' => 
                array (
                  'class' => 'average-width',
                  'background_display' => 'tile',
                ),
              ),
            ),
            7 => 
            array (
              'yc_headline' => 
              array (
                'text' => 'LUXURY DETAILS',
                'tag' => 'p',
                'font_weight_title' => '700',
                'font' => 'default',
                'color' => '#e4c29e',
                'align' => 'left',
                'fontstyle' => 'normal',
                'size' => '12px',
                'size_unit' => 'px',
                'lineheight' => '12px',
                'lineheight_unit' => 'px',
                'letterspacing' => '2px',
                'letterspacing_unit' => 'px',
                'margin' => '5px 0 0',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'use' => true,
                  'align' => 'left',
                  'size' => '12px',
                  'size_unit' => 'px',
                  'lineheight' => '12px',
                  'lineheight_unit' => 'px',
                  'margin' => '5px 0 0',
                  'padding' => '10px 0 0',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_sub_headline' => 
              array (
                'text' => 'Design of Product',
                'tag' => 'h3',
                'font_weight_sub_title' => '800',
                'font' => 'default',
                'color' => '#000000',
                'align' => 'left',
                'fontstyle' => 'normal',
                'size' => '50px',
                'size_unit' => 'px',
                'lineheight' => '50px',
                'lineheight_unit' => 'px',
                'letterspacing' => false,
                'letterspacing_unit' => 'px',
                'margin' => '25px 0 10px',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'use' => true,
                  'align' => 'left',
                  'size' => '30px',
                  'size_unit' => 'px',
                  'lineheight' => '40px',
                  'lineheight_unit' => 'px',
                  'margin' => '5px 0 0',
                  'padding' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_divider' => 
              array (
                'style' => 'none',
                'align' => 'center',
                'weight' => '1px',
                'weight_unit' => 'px',
                'color' => '#EEEEEE',
                'width' => '60px',
                'width_unit' => 'px',
                'top_margin' => '20px',
                'top_margin_unit' => 'px',
                'so_field_container_state' => 'closed',
              ),
              '_sow_form_id' => '580261992db49',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 5,
                'cell' => 0,
                'id' => 7,
                'widget_id' => 'a96c52b9-886d-4e21-a67a-26b1ea06766f',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            8 => 
            array (
              'title' => '',
              'text' => '<h5 style="font-size: 15px; line-height: 28px;">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper.</h5><h5 style="font-size: 15px; line-height: 28px; margin-top: 25px;">Integer non nisl at mauris faucibus pharetra eu eu mi. Sed vitae feugiat purus. Vivamus dignissim orci eros, nec aliquet odio varius non. Aenean placerat et quam scelerisque scelerisque posuere. Fusce odi, rutrum vitae velit vitae, varius neque. Justo se mi ultrices suscipit an amet risus.</h5><h5> </h5><h5 style="font-size: 15px; line-height: 28px;"><em><strong>Launched Word</strong> - in 1985 by fine watch collector</em></h5>',
              'text_selected_editor' => 'tmce',
              'autop' => true,
              '_sow_form_id' => '5802624e1c3ba',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_Editor_Widget',
                'raw' => false,
                'grid' => 5,
                'cell' => 0,
                'id' => 8,
                'widget_id' => '7829a7e5-a51f-4cc4-8aba-f57a47e84697',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            9 => 
            array (
              'yc_button' => 
              array (
                'text' => 'MORE ABOUT',
                'url' => '',
                'attributes' => 
                array (
                  'id' => '',
                  'title' => '',
                  'onclick' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
                'new_window' => false,
              ),
              'design' => 
              array (
                'align' => 'left',
                'font_size' => '12px',
                'font_size_unit' => 'px',
                'letter_spacing' => '1px',
                'letter_spacing_unit' => 'px',
                'weight' => '600',
                'border_radius' => '0px',
                'border_radius_unit' => 'px',
                'border_width' => '0px',
                'border_width_unit' => 'px',
                'max_width' => false,
                'max_width_unit' => 'px',
                'padding' => '1.2em 2.6em',
                'margin' => '20px 0 0',
                'button_color' => 
                array (
                  'button_background' => '#dab98d',
                  'border_color' => '#dab98d',
                  'text_color' => '#ffffff',
                  'so_field_container_state' => 'open',
                ),
                'hover_effect' => 
                array (
                  'button_background' => '#000000',
                  'border_color' => '#000000',
                  'text_color' => '#ffffff',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              't_m_layout' => 
              array (
                't_layout' => 
                array (
                  'align' => 'center',
                  'font_size' => false,
                  'font_size_unit' => 'px',
                  'max_width' => false,
                  'max_width_unit' => 'px',
                  'padding' => '',
                  'margin' => '',
                  'so_field_container_state' => 'open',
                  'use' => false,
                ),
                'm_layout' => 
                array (
                  'align' => 'center',
                  'font_size' => false,
                  'font_size_unit' => 'px',
                  'max_width' => false,
                  'max_width_unit' => 'px',
                  'padding' => '',
                  'margin' => '',
                  'so_field_container_state' => 'open',
                  'use' => false,
                ),
                'so_field_container_state' => 'open',
              ),
              '_sow_form_id' => '58026a41d9f4e',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Button_Widget',
                'raw' => false,
                'grid' => 5,
                'cell' => 0,
                'id' => 9,
                'widget_id' => 'a7f9d938-3f7a-4f15-80fe-0b8ef08e5d87',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            10 => 
            array (
              'image' => 109,
              'image_fallback' => '',
              'size' => 'full',
              'align' => 'default',
              'title' => '',
              'title_position' => 'hidden',
              'alt' => '',
              'url' => '',
              'bound' => true,
              'full_width' => true,
              '_sow_form_id' => '58026e3401b0f',
              'new_window' => false,
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_Image_Widget',
                'raw' => false,
                'grid' => 5,
                'cell' => 1,
                'id' => 10,
                'widget_id' => 'da83ade7-098a-4571-8b45-71454db2e1fc',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            11 => 
            array (
              'yc_headline' => 
              array (
                'text' => '“',
                'tag' => 'h1',
                'font_weight_title' => '700',
                'font' => 'default',
                'color' => '#ffffff',
                'align' => 'center',
                'fontstyle' => 'normal',
                'size' => '80px',
                'size_unit' => 'px',
                'lineheight' => '80px',
                'lineheight_unit' => 'px',
                'letterspacing' => false,
                'letterspacing_unit' => 'px',
                'margin' => '0px',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'use' => true,
                  'align' => 'center',
                  'size' => '60px',
                  'size_unit' => 'px',
                  'lineheight' => '50px',
                  'lineheight_unit' => 'px',
                  'margin' => '0px',
                  'padding' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_sub_headline' => 
              array (
                'text' => '',
                'tag' => 'h3',
                'font_weight_sub_title' => '700',
                'font' => 'default',
                'color' => false,
                'align' => 'center',
                'fontstyle' => 'normal',
                'size' => false,
                'size_unit' => 'px',
                'lineheight' => false,
                'lineheight_unit' => 'px',
                'letterspacing' => false,
                'letterspacing_unit' => 'px',
                'margin' => '',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'so_field_container_state' => 'closed',
              ),
              'yc_divider' => 
              array (
                'style' => 'none',
                'align' => 'center',
                'weight' => '1px',
                'weight_unit' => 'px',
                'color' => '#EEEEEE',
                'width' => '60px',
                'width_unit' => 'px',
                'top_margin' => '20px',
                'top_margin_unit' => 'px',
                'so_field_container_state' => 'closed',
              ),
              '_sow_form_id' => '57fd3e1386df6',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 6,
                'cell' => 0,
                'id' => 11,
                'widget_id' => '723cb4af-564e-4474-9d49-1c81b6de3655',
                'style' => 
                array (
                  'class' => 'margin-bottom-none',
                  'background_display' => 'tile',
                ),
              ),
            ),
            12 => 
            array (
              'yc_headline' => 
              array (
                'text' => 'The World\'s Finest Luxury Watch',
                'tag' => 'h1',
                'font_weight_title' => '800',
                'font' => 'default',
                'color' => '#ffffff',
                'align' => 'center',
                'fontstyle' => 'normal',
                'size' => '50px',
                'size_unit' => 'px',
                'lineheight' => '55px',
                'lineheight_unit' => 'px',
                'letterspacing' => false,
                'letterspacing_unit' => 'px',
                'margin' => '0 0 30px',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'use' => true,
                  'align' => 'center',
                  'size' => '30px',
                  'size_unit' => 'px',
                  'lineheight' => '40px',
                  'lineheight_unit' => 'px',
                  'margin' => '0 0 20px',
                  'padding' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_sub_headline' => 
              array (
                'text' => '— From the UK —',
                'tag' => 'h5',
                'font_weight_sub_title' => '400',
                'font' => 'default',
                'color' => '#c3b38b',
                'align' => 'center',
                'fontstyle' => 'italic',
                'size' => '16px',
                'size_unit' => 'px',
                'lineheight' => false,
                'lineheight_unit' => 'px',
                'letterspacing' => false,
                'letterspacing_unit' => 'px',
                'margin' => '0px',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_divider' => 
              array (
                'style' => 'none',
                'align' => 'center',
                'weight' => '1px',
                'weight_unit' => 'px',
                'color' => '#EEEEEE',
                'width' => '60px',
                'width_unit' => 'px',
                'top_margin' => '20px',
                'top_margin_unit' => 'px',
                'so_field_container_state' => 'closed',
              ),
              '_sow_form_id' => '57fd3e331adb7',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 6,
                'cell' => 0,
                'id' => 12,
                'widget_id' => '2935d75f-dd33-4b55-9464-139e5d969af1',
                'style' => 
                array (
                  'widget_css' => 'max-width: 500px;
                margin: 0 auto;',
                  'background_display' => 'tile',
                ),
              ),
            ),
            13 => 
            array (
              'numberposts' => 3,
              'limit' => 32,
              'usedate' => true,
              'align' => 'center',
              '_sow_form_id' => '57fd424ee361e',
              'usecomments' => false,
              'usecontent' => false,
              'useimage' => false,
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Recent_Posts_Widget',
                'raw' => false,
                'grid' => 7,
                'cell' => 0,
                'id' => 13,
                'widget_id' => 'fef45b9a-86b6-444c-9bd4-cb0ca828631e',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            14 => 
            array (
              'yc_headline' => 
              array (
                'text' => 'FEEL THE TIME',
                'tag' => 'p',
                'font_weight_title' => '700',
                'font' => 'default',
                'color' => '#9b9b9b',
                'align' => 'center',
                'fontstyle' => 'normal',
                'size' => '12px',
                'size_unit' => 'px',
                'lineheight' => '12px',
                'lineheight_unit' => 'px',
                'letterspacing' => '2px',
                'letterspacing_unit' => 'px',
                'margin' => '0px',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_sub_headline' => 
              array (
                'text' => 'Around the World',
                'tag' => 'h3',
                'font_weight_sub_title' => '800',
                'font' => 'default',
                'color' => '#030202',
                'align' => 'center',
                'fontstyle' => 'normal',
                'size' => '50px',
                'size_unit' => 'px',
                'lineheight' => '50px',
                'lineheight_unit' => 'px',
                'letterspacing' => false,
                'letterspacing_unit' => 'px',
                'margin' => '25px 0 50px',
                'padding' => '',
                'tabletlayout' => 
                array (
                  'align' => 'center',
                  'size' => false,
                  'size_unit' => 'px',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'closed',
                  'use' => false,
                ),
                'mobilelayout' => 
                array (
                  'use' => true,
                  'align' => 'center',
                  'size' => '30px',
                  'size_unit' => 'px',
                  'lineheight' => '40px',
                  'lineheight_unit' => 'px',
                  'margin' => '5px 0 30px',
                  'padding' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_divider' => 
              array (
                'style' => 'none',
                'align' => 'center',
                'weight' => '1px',
                'weight_unit' => 'px',
                'color' => '#EEEEEE',
                'width' => '60px',
                'width_unit' => 'px',
                'top_margin' => '20px',
                'top_margin_unit' => 'px',
                'so_field_container_state' => 'closed',
              ),
              '_sow_form_id' => '5800f7382f433',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 8,
                'cell' => 0,
                'id' => 14,
                'widget_id' => 'a96c52b9-886d-4e21-a67a-26b1ea06766f',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            15 => 
            array (
              'panels_data' => 
              array (
                'widgets' => 
                array (
                  0 => 
                  array (
                    'title' => '',
                    'text' => '<h3 style="margin-bottom: 20px;"><strong><span style="color: #000000;">Find What Matters</span></strong></h3><p><span style="color: #979797;">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus vestibulum id ligula porta.</span></p><p> </p><p><strong>Address: </strong><span style="color: #979797;">Montblanc Simplo<br /> </span><strong>Email: </strong><span style="color: #979797;">example@yourcompany.com</span></p>',
                    'text_selected_editor' => 'tmce',
                    'autop' => true,
                    '_sow_form_id' => '5800f79027a72',
                    'panels_info' => 
                    array (
                      'class' => 'SiteOrigin_Widget_Editor_Widget',
                      'raw' => false,
                      'grid' => 0,
                      'cell' => 0,
                      'id' => 0,
                      'widget_id' => '2ce8f90e-cc3c-4ccc-a4a1-ee80a2c6470c',
                      'style' => 
                      array (
                        'class' => '',
                        'widget_css' => '',
                        'iw-visible-screen' => 'iw-all',
                        'iw-visible-layout' => 'iw-all',
                        'padding' => '',
                        'background' => '',
                        'background_image_attachment' => '0',
                        'background_display' => 'tile',
                        'border_color' => '',
                        'font_color' => '',
                        'link_color' => '',
                      ),
                    ),
                  ),
                  1 => 
                  array (
                    'title' => '',
                    'text' => '<h3><span style="color: #000000; margin-bottom: 30px; display: block;"><strong>+99 (0) 344 673 5689</strong></span></h3><p><span style="color: #000000;"><strong>Global Presence</strong></span></p><p><span style="color: #979797;">Fusce dapibus, tellus ac cursus commodo.</span></p><p><span style="color: #000000;"><strong>Contact Us</strong></span></p><p><span style="color: #979797;">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</span></p>',
                    'text_selected_editor' => 'tmce',
                    'autop' => true,
                    '_sow_form_id' => '5800f7d067a63',
                    'panels_info' => 
                    array (
                      'class' => 'SiteOrigin_Widget_Editor_Widget',
                      'grid' => 0,
                      'cell' => 1,
                      'id' => 1,
                      'widget_id' => '3f5ed590-8be9-408f-97a4-8f375e602f6a',
                      'style' => 
                      array (
                        'class' => '',
                        'widget_css' => '',
                        'iw-visible-screen' => 'iw-all',
                        'iw-visible-layout' => 'iw-all',
                        'padding' => '48px 0px 0px 0px',
                        'background' => '',
                        'background_image_attachment' => '0',
                        'background_display' => 'tile',
                        'border_color' => '',
                        'font_color' => '',
                        'link_color' => '',
                      ),
                    ),
                  ),
                ),
                'grids' => 
                array (
                  0 => 
                  array (
                    'cells' => 2,
                    'style' => 
                    array (
                      'id' => '',
                      'class' => 'small-width',
                      'cell_class' => '',
                      'row_css' => '',
                      'iw-visible-screen' => 'iw-all',
                      'iw-visible-layout' => 'iw-all',
                      'bottom_margin' => '',
                      'gutter' => '60px',
                      'padding' => '',
                      'row_stretch' => '',
                      'collapse_order' => '',
                      'yc_desktop_padding' => '40px 30px 60px 30px',
                      'yc_tablet_padding' => '',
                      'yc_mobile_padding' => '',
                      'background' => '#ffffff',
                      'background_image_attachment' => '0',
                      'background_display' => 'tile',
                      'border_color' => '',
                    ),
                  ),
                ),
                'grid_cells' => 
                array (
                  0 => 
                  array (
                    'grid' => 0,
                    'weight' => 0.5,
                  ),
                  1 => 
                  array (
                    'grid' => 0,
                    'weight' => 0.5,
                  ),
                ),
              ),
              'builder_id' => '58029c02acd93',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Panels_Widgets_Layout',
                'raw' => false,
                'grid' => 8,
                'cell' => 0,
                'id' => 15,
                'widget_id' => '1065e082-82b4-41a8-a5fa-54090eb06661',
                'style' => 
                array (
                  'widget_css' => 'position: relative;
                z-index: 99;
                font-size: 14px;
                line-height: 25px;',
                  'background_display' => 'tile',
                ),
              ),
            ),
            16 => 
            array (
              'map_center' => 'Raymond Weil',
              'api_key_section' => 
              array (
                'api_key' => '',
                'so_field_container_state' => 'open',
              ),
              'settings' => 
              array (
                'map_type' => 'interactive',
                'width' => '640',
                'height' => '480',
                'zoom' => 12,
                'draggable' => true,
                'disable_default_ui' => true,
                'keep_centered' => true,
                'so_field_container_state' => 'open',
                'scroll_zoom' => false,
              ),
              'markers' => 
              array (
                'marker_at_center' => true,
                'marker_icon' => 0,
                'info_display' => 'click',
                'so_field_container_state' => 'open',
                'markers_draggable' => false,
                'marker_positions' => 
                array (
                ),
              ),
              'styles' => 
              array (
                'style_method' => 'raw_json',
                'styled_map_name' => '',
                'raw_json_map_styles' => '[
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#d3d3d3"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "stylers": [
                            {
                                "color": "#808080"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#b3b3b3"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "weight": 1.8
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#d7d7d7"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ebebeb"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#a7a7a7"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#efefef"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#696969"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#737373"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#d6d6d6"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {},
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#dadada"
                            }
                        ]
                    }
                ]',
                'custom_map_styles' => 
                array (
                  0 => 
                  array (
                    'map_feature' => 'road_highway',
                    'element_type' => 'labels',
                    'color' => '#d3d3d3',
                    'visibility' => false,
                  ),
                ),
                'so_field_container_state' => 'open',
              ),
              'directions' => 
              array (
                'origin' => '',
                'destination' => '',
                'travel_mode' => 'driving',
                'so_field_container_state' => 'closed',
                'avoid_highways' => false,
                'avoid_tolls' => false,
                'waypoints' => 
                array (
                ),
                'optimize_waypoints' => false,
              ),
              '_sow_form_id' => '5800fb4c9f559',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_GoogleMap_Widget',
                'raw' => false,
                'grid' => 9,
                'cell' => 0,
                'id' => 16,
                'widget_id' => '3d6b5361-8840-4503-9823-bac7f7a5ab92',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
          ),
          'grids' => 
          array (
            0 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'bottom_margin' => '0px',
                'row_stretch' => 'full-stretched',
                'background_display' => 'tile',
              ),
            ),
            1 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'id' => 'slider-bottom-watch',
                'class' => 'hide-on-mobile',
                'bottom_margin' => '0px',
                'background_display' => 'tile',
              ),
            ),
            2 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'bottom_margin' => '0px',
                'row_stretch' => 'full-stretched',
                'background' => '#0f0e16',
                'background_image_attachment' => 107,
                'background_display' => 'cover',
                'yc_desktop_padding' => '135px 20px 135px 20px',
                'yc_mobile_padding' => '100px 15px 100px 15px',
              ),
            ),
            3 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'bottom_margin' => '0px',
                'background_display' => 'tile',
                'yc_desktop_padding' => '130px 0px 130px 0px',
                'yc_mobile_padding' => '65px 0px 35px 0px',
              ),
            ),
            4 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'row_stretch' => 'full',
                'background' => '#090b0e',
                'background_image_attachment' => 107,
                'background_display' => 'cover',
                'yc_desktop_padding' => '135px 150px 135px 150px',
                'yc_tablet_padding' => '100px 0px 100px 0px',
                'yc_mobile_padding' => '100px 0px 100px 0px',
              ),
            ),
            5 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'class' => 'average-width',
                'gutter' => '60px',
                'collapse_order' => 'right-top',
                'background_display' => 'tile',
                'yc_desktop_padding' => '130px 0px 130px 0px',
                'yc_mobile_padding' => '65px 0px 65px 0px',
              ),
            ),
            6 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'row_stretch' => 'full-stretched',
                'background' => '#000000',
                'background_image_attachment' => 108,
                'background_display' => 'parallax',
                'yc_desktop_padding' => '120px 0px 120px 0px',
                'yc_mobile_padding' => '60px 0px 60px 0px',
              ),
            ),
            7 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'class' => 'linebreaker average-width',
                'background_display' => 'tile',
                'yc_desktop_padding' => '135px 0px 135px 0px',
                'yc_mobile_padding' => '45px 0px 45px 0px',
              ),
            ),
            8 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'bottom_margin' => '0px',
                'row_stretch' => 'full',
                'background' => '#f3f3f3',
                'background_display' => 'tile',
                'yc_desktop_padding' => '135px 0px 0px 0px',
                'yc_mobile_padding' => '65px 0px 0px 0px',
              ),
            ),
            9 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'class' => 'remove-margin-before-footer',
                'row_css' => 'position: relative;
                z-index: 98;
                margin-top: -90px;',
                'row_stretch' => 'full-stretched',
                'background_display' => 'tile',
              ),
            ),
          ),
          'grid_cells' => 
          array (
            0 => 
            array (
              'grid' => 0,
              'weight' => 1,
            ),
            1 => 
            array (
              'grid' => 1,
              'weight' => 1,
            ),
            2 => 
            array (
              'grid' => 2,
              'weight' => 1,
            ),
            3 => 
            array (
              'grid' => 3,
              'weight' => 1,
            ),
            4 => 
            array (
              'grid' => 4,
              'weight' => 1,
            ),
            5 => 
            array (
              'grid' => 5,
              'weight' => 0.5,
            ),
            6 => 
            array (
              'grid' => 5,
              'weight' => 0.5,
            ),
            7 => 
            array (
              'grid' => 6,
              'weight' => 1,
            ),
            8 => 
            array (
              'grid' => 7,
              'weight' => 1,
            ),
            9 => 
            array (
              'grid' => 8,
              'weight' => 1,
            ),
            10 => 
            array (
              'grid' => 9,
              'weight' => 1,
            ),
          ),
        );
        return $layouts;

}
add_filter( 'siteorigin_panels_prebuilt_layouts', 'loor_prebuilt_home_four_layouts' );