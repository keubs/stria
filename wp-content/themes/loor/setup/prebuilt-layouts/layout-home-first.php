<?php

function loor_prebuilt_home_one_layouts($layouts){
    $layouts['home-page-one'] = array(
        // We'll add a title field
        'name' => __('Loor Layout One', 'loor'),
        'description' => __('Prebuilt layout of the first demo', 'loor'),
        'screenshot' => get_template_directory_uri() . '/demo-files/layout-1.png',
        'widgets' => 
          array (
            0 => 
            array (
              'frames' => 
              array (
                0 => 
                array (
                  'content' => 
                  array (
                    'widgets' => 
                    array (
                      0 => 
                      array (
                        'image' => 0,
                        'image_fallback' => get_template_directory_uri() . '/demo-files/layout-1/slide-text-1.png',
                        'size' => 'full',
                        'align' => 'default',
                        'title' => '',
                        'title_position' => 'hidden',
                        'alt' => '',
                        'url' => '',
                        'bound' => true,
                        'full_width' => true,
                        '_sow_form_id' => '577914b67c534',
                        'new_window' => false,
                        'panels_info' => 
                        array (
                          'class' => 'SiteOrigin_Widget_Image_Widget',
                          'raw' => false,
                          'grid' => 0,
                          'cell' => 0,
                          'id' => 0,
                          'widget_id' => 'b1a37d4f-98cc-4e2d-bf55-6e11b510d655',
                          'style' => 
                          array (
                            'class' => '',
                            'widget_css' => '',
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
                          'bottom_margin' => '',
                          'gutter' => '',
                          'padding' => '',
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
                        'weight' => 0.53161764705900005356653537091915495693683624267578125,
                      ),
                      1 => 
                      array (
                        'grid' => 0,
                        'weight' => 0.468382352941000001944615860338672064244747161865234375,
                      ),
                    ),
                  ),
                  'background' => 
                  array (
                    'image' => 0,
                    'image_fallback' => get_template_directory_uri() . '/demo-files/layout-1/main-bg.jpg',
                    'image_type' => 'cover',
                    'opacity' => 100,
                    'color' => '#333333',
                    'url' => '',
                    'so_field_container_state' => 'open',
                    'new_window' => false,
                    'videos' => 
                    array (
                    ),
                  ),
                ),
              ),
              'controls' => 
              array (
                'speed' => 800,
                'timeout' => 8000,
                'nav_color_hex' => '#FFFFFF',
                'nav_style' => 'ultra-thin',
                'nav_size' => 20,
                'swipe' => true,
                'so_field_container_state' => 'open',
              ),
              'design' => 
              array (
                'height' => '100vh',
                'height_unit' => 'vh',
                'padding' => '50px',
                'padding_unit' => 'px',
                'extra_top_padding' => '50vh',
                'extra_top_padding_unit' => 'vh',
                'padding_sides' => '10px',
                'padding_sides_unit' => 'px',
                'width' => '1280px',
                'width_unit' => 'px',
                'heading_color' => '#FFFFFF',
                'heading_size' => '38px',
                'heading_size_unit' => 'px',
                'heading_shadow' => 0,
                'text_size' => false,
                'text_size_unit' => 'px',
                'text_color' => '#F6F6F6',
                'so_field_container_state' => 'open',
              ),
              '_sow_form_id' => '576c07e49e2a6',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_LayoutSlider_Widget',
                'raw' => false,
                'grid' => 0,
                'cell' => 0,
                'id' => 0,
                'widget_id' => '55709898-418d-46de-a8e8-6d1621113706',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            1 => 
            array (
              'title' => '',
              'text' => '<p>© 2016 Your Site. All rights reserved.</p>',
              'text_selected_editor' => 'tinymce',
              'autop' => true,
              '_sow_form_id' => '5777beb918e74',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_Editor_Widget',
                'raw' => false,
                'grid' => 1,
                'cell' => 0,
                'id' => 1,
                'widget_id' => 'bf7176e9-f6b0-490d-97f0-5f9d18c4aa03',
                'style' => 
                array (
                  'background_display' => 'tile',
                  'font_color' => '#ffffff',
                ),
              ),
            ),
            2 => 
            array (
              'networks' => 
              array (
                0 => 
                array (
                  'name' => 'facebook',
                  'url' => 'https://www.facebook.com/yumecommerce',
                  'icon_color' => '#ffffff',
                  'button_color' => '#ffffff',
                ),
                1 => 
                array (
                  'name' => 'twitter',
                  'url' => 'https://twitter.com/YumeCommerce',
                  'icon_color' => '#ffffff',
                  'button_color' => '#ffffff',
                ),
                2 => 
                array (
                  'name' => 'instagram',
                  'url' => 'https://www.instagram.com/yumecommerce/',
                  'icon_color' => '#ffffff',
                  'button_color' => '#3d739c',
                ),
                3 => 
                array (
                  'name' => 'google-plus',
                  'url' => '#',
                  'icon_color' => '#ffffff',
                  'button_color' => '#dd4b39',
                ),
                4 => 
                array (
                  'name' => 'pinterest',
                  'url' => '#',
                  'icon_color' => '#ffffff',
                  'button_color' => '#db7c83',
                ),
              ),
              'design' => 
              array (
                'new_window' => true,
                'theme' => 'flat',
                'icon_size' => '1',
                'rounding' => '0',
                'padding' => '1',
                'align' => 'right',
                'margin' => '0.4',
                'so_field_container_state' => 'open',
                'hover' => false,
              ),
              '_sow_form_id' => '5777c179ca73e',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_SocialMediaButtons_Widget',
                'raw' => false,
                'grid' => 1,
                'cell' => 1,
                'id' => 2,
                'widget_id' => '63f0f8f3-1e2c-468a-9ccc-28cd4ab27bbf',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            3 => 
            array (
              'image' => 0,
              'image_fallback' => get_template_directory_uri() . '/demo-files/layout-1/circle.png',
              'size' => 'full',
              'align' => 'center',
              'title' => '',
              'title_position' => 'hidden',
              'alt' => '',
              'url' => '',
              'bound' => true,
              '_sow_form_id' => '5778cd5a8b9b1',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_Image_Widget',
                'grid' => 2,
                'cell' => 0,
                'id' => 3,
                'widget_id' => '6a383ae1-e2c8-4c06-8a20-c55be1b63459',
                'style' => 
                array (
                  'widget_css' => 'width: 95px;
        margin: 0 auto;',
                  'background_image_attachment' => false,
                  'background_display' => 'tile',
                ),
              ),
              'new_window' => false,
              'full_width' => false,
            ),
            4 => 
            array (
              'yc_headline' => 
              array (
                'text' => 'Donec 10 sapien commodo porta venenatis urna, elementum fermentum sapien',
                'tag' => 'h3',
                'font_weight_title' => '400',
                'font' => 'default',
                'color' => '#000000',
                'align' => 'center',
                'size' => '2.2em',
                'size_unit' => 'em',
                'lineheight' => '125%',
                'lineheight_unit' => '%',
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
                  'size' => '1.5em',
                  'size_unit' => 'em',
                  'lineheight' => '125%',
                  'lineheight_unit' => '%',
                  'margin' => '0 0 20px',
                  'padding' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_sub_headline' => 
              array (
                'text' => 'Fusce dapibus, tellus ac cursus, mauris condimentum nibh, ut fermentum justo sit amet risus. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                'tag' => 'h4',
                'font_weight_sub_title' => '400',
                'font' => 'default',
                'color' => '#989898',
                'align' => 'center',
                'size' => '1.4em',
                'size_unit' => 'em',
                'lineheight' => '155%',
                'lineheight_unit' => '%',
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
                  'use' => true,
                  'align' => 'center',
                  'size' => '1.1em',
                  'size_unit' => 'em',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
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
              '_sow_form_id' => '5778cd8f21941',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 2,
                'cell' => 0,
                'id' => 4,
                'widget_id' => '269b21d6-bfbc-4529-b3f6-84b29ddb425e',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            5 => 
            array (
              'yc_headline' => 
              array (
                'text' => 'Our products',
                'tag' => 'h3',
                'font_weight_title' => '400',
                'font' => 'default',
                'color' => '#000000',
                'align' => 'center',
                'size' => '2.3em',
                'size_unit' => 'em',
                'lineheight' => false,
                'lineheight_unit' => 'px',
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
                  'use' => true,
                  'align' => 'center',
                  'size' => '2em',
                  'size_unit' => 'em',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_sub_headline' => 
              array (
                'text' => 'We\'re really proud of our products',
                'tag' => 'h5',
                'font_weight_sub_title' => '400',
                'font' => 'default',
                'color' => '#989898',
                'align' => 'center',
                'size' => false,
                'size_unit' => 'px',
                'lineheight' => false,
                'lineheight_unit' => 'px',
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
                  'use' => true,
                  'align' => 'center',
                  'size' => '1em',
                  'size_unit' => 'em',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
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
              '_sow_form_id' => '5778d953b4306',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 3,
                'cell' => 0,
                'id' => 5,
                'widget_id' => 'e8d55723-3705-4ff7-8afb-e5fee4877ae4',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            6 => 
            array (
              'orderby' => 'date',
              'order' => 'asc',
              '_sow_form_id' => '576a3c7e238bb',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Woo_All_Products_Widget',
                'raw' => false,
                'grid' => 3,
                'cell' => 0,
                'id' => 6,
                'widget_id' => '85f71800-dd00-489c-a918-25ed2b747cac',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            7 => 
            array (
              'image' => 0,
              'image_fallback' => get_template_directory_uri() . '/demo-files/layout-1/person.png',
              'size' => 'full',
              'align' => 'center',
              'title' => '',
              'title_position' => 'hidden',
              'alt' => '',
              'url' => '',
              'bound' => true,
              '_sow_form_id' => '577c2422d9d81',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_Image_Widget',
                'grid' => 4,
                'cell' => 0,
                'id' => 7,
                'widget_id' => '9019fad6-892c-4b87-9bc1-40e072f73aea',
                'style' => 
                array (
                  'widget_css' => 'max-width: 265px;
        margin: 0 auto;',
                  'background_image_attachment' => false,
                  'background_display' => 'tile',
                ),
              ),
              'new_window' => false,
              'full_width' => false,
            ),
            8 => 
            array (
              'yc_headline' => 
              array (
                'text' => 'Duis mollis, est non',
                'tag' => 'h1',
                'font_weight_title' => '400',
                'font' => 'default',
                'color' => '#1d1d1d',
                'align' => 'left',
                'size' => false,
                'size_unit' => 'px',
                'lineheight' => false,
                'lineheight_unit' => 'px',
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
                  'use' => true,
                  'align' => 'left',
                  'size' => '2.3em',
                  'size_unit' => 'em',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_sub_headline' => 
              array (
                'text' => '— cras mattis consectetur purus sit amet fermentum feugiat',
                'tag' => 'h5',
                'font_weight_sub_title' => '400',
                'font' => 'default',
                'color' => '#dab98d',
                'align' => 'left',
                'size' => false,
                'size_unit' => 'px',
                'lineheight' => false,
                'lineheight_unit' => 'px',
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
                  'use' => true,
                  'align' => 'left',
                  'size' => '1em',
                  'size_unit' => 'em',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
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
              '_sow_form_id' => '5778daca236e3',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 4,
                'cell' => 1,
                'id' => 8,
                'widget_id' => '2aee2619-9c52-42dd-827a-ae91606eb4a4',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            9 => 
            array (
              'panels_data' => 
              array (
                'widgets' => 
                array (
                  0 => 
                  array (
                    'title' => '',
                    'text' => '<p>Integer non nisl at mauris pharetra eu eu mi. Sed vitae feugiat purus. Vivamus dignissim orci eros, nec aliquet odio varius non. Aenean placerat et quam scelerisque scelerisque posuere.</p><p>Fusce dapibus, tellus ac cursus commodo, tortor mauris fermentum massa justo sit amet risus. Cum tellus aim sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</p>',
                    'text_selected_editor' => 'tmce',
                    'autop' => true,
                    '_sow_form_id' => '56dc6244b9bbc',
                    'panels_info' => 
                    array (
                      'class' => 'SiteOrigin_Widget_Editor_Widget',
                      'grid' => 0,
                      'cell' => 0,
                      'id' => 0,
                      'widget_id' => 'bfc737f4-91f8-4067-b8f6-b454500aaa72',
                      'style' => 
                      array (
                        'class' => '',
                        'widget_css' => '',
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
                    'text' => '<p>Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.  Integer diam eros, semper interdum nisi eu, dapibus cursus ligula.</p><p><a href="/about/">More about</a></p>',
                    'text_selected_editor' => 'tmce',
                    'autop' => true,
                    '_sow_form_id' => '56dc62596b512',
                    'panels_info' => 
                    array (
                      'class' => 'SiteOrigin_Widget_Editor_Widget',
                      'raw' => false,
                      'grid' => 0,
                      'cell' => 1,
                      'id' => 1,
                      'widget_id' => '489d46bd-74d3-4cbf-ae35-4928b82f1d3f',
                      'style' => 
                      array (
                        'class' => '',
                        'widget_css' => '',
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
                      'bottom_margin' => '0px',
                      'gutter' => '',
                      'padding' => '',
                      'row_stretch' => '',
                      'collapse_order' => '',
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
              'builder_id' => '5778dd05056d7',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Panels_Widgets_Layout',
                'raw' => false,
                'grid' => 4,
                'cell' => 1,
                'id' => 9,
                'widget_id' => '85b461b3-e435-4645-8210-96b8c60c16c7',
                'style' => 
                array (
                  'widget_css' => 'line-height: 1.8;
        color: #949494;',
                  'background_display' => 'tile',
                ),
              ),
            ),
            10 => 
            array (
              'image' => 0,
              'image_fallback' => get_template_directory_uri() . '/demo-files/layout-1/wave.png',
              'size' => 'full',
              'align' => 'center',
              'title' => '',
              'title_position' => 'hidden',
              'alt' => '',
              'url' => '',
              'bound' => true,
              '_sow_form_id' => '5778dd902b309',
              'new_window' => false,
              'full_width' => false,
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_Image_Widget',
                'raw' => false,
                'grid' => 5,
                'cell' => 0,
                'id' => 10,
                'widget_id' => 'df0841f6-4088-4338-9b03-3d2ff7238839',
                'style' => 
                array (
                  'widget_css' => 'width: 100px;
        margin: 0 auto;',
                  'background_display' => 'tile',
                ),
              ),
            ),
            11 => 
            array (
              'yc_headline' => 
              array (
                'text' => 'Cras mattis consectetur fermentum. Morbi leo risus, porta vestibulum at eros. Duis mollis, est non commodo luctus nisi erat porttitor ligula eget lacinia odio sem nec eli.',
                'tag' => 'h4',
                'font_weight_title' => '400',
                'font' => 'default',
                'color' => '#000000',
                'align' => 'center',
                'size' => '1.3em',
                'size_unit' => 'em',
                'lineheight' => '150%',
                'lineheight_unit' => '%',
                'margin' => '-10px 0 0',
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
                'size' => false,
                'size_unit' => 'px',
                'lineheight' => false,
                'lineheight_unit' => 'px',
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
              '_sow_form_id' => '5778dda7025dd',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 5,
                'cell' => 0,
                'id' => 11,
                'widget_id' => '0e8447ac-f857-4572-bedf-6f72dcd7b8b6',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            12 => 
            array (
              'image' => 0,
              'image_fallback' => get_template_directory_uri() . '/demo-files/layout-1/wave.png',
              'size' => 'full',
              'align' => 'center',
              'title' => '',
              'title_position' => 'hidden',
              'alt' => '',
              'url' => '',
              'bound' => true,
              '_sow_form_id' => '5778dd9faa4a7',
              'new_window' => false,
              'full_width' => false,
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_Image_Widget',
                'raw' => false,
                'grid' => 5,
                'cell' => 0,
                'id' => 12,
                'widget_id' => 'f555c412-f57b-442a-a901-87e55ec05a6f',
                'style' => 
                array (
                  'widget_css' => 'width: 100px;
        margin: 0 auto;',
                  'background_display' => 'tile',
                ),
              ),
            ),
            13 => 
            array (
              'yc_headline' => 
              array (
                'text' => 'From our blog',
                'tag' => 'h3',
                'font_weight_title' => '400',
                'font' => 'default',
                'color' => '#000000',
                'align' => 'center',
                'size' => '2.3em',
                'size_unit' => 'em',
                'lineheight' => false,
                'lineheight_unit' => 'px',
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
                  'use' => true,
                  'align' => 'center',
                  'size' => '2em',
                  'size_unit' => 'em',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
                  'padding' => '',
                  'so_field_container_state' => 'open',
                ),
                'so_field_container_state' => 'open',
              ),
              'yc_sub_headline' => 
              array (
                'text' => 'The recent posts from the blog',
                'tag' => 'h5',
                'font_weight_sub_title' => '400',
                'font' => 'default',
                'color' => '#989898',
                'align' => 'center',
                'size' => false,
                'size_unit' => 'px',
                'lineheight' => false,
                'lineheight_unit' => 'px',
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
                  'use' => true,
                  'align' => 'center',
                  'size' => '1em',
                  'size_unit' => 'em',
                  'lineheight' => false,
                  'lineheight_unit' => 'px',
                  'margin' => '',
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
              '_sow_form_id' => '5779552ce211a',
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Widget_Headline_Widget',
                'raw' => false,
                'grid' => 6,
                'cell' => 0,
                'id' => 13,
                'widget_id' => 'e8d55723-3705-4ff7-8afb-e5fee4877ae4',
                'style' => 
                array (
                  'background_display' => 'tile',
                ),
              ),
            ),
            14 => 
            array (
              'numberposts' => 3,
              'perrow' => '3',
              'limit' => 20,
              'usedate' => true,
              'usecomments' => true,
              'useimage' => true,
              'align' => 'left',
              '_sow_form_id' => '576a47bee8e0d',
              'yc_posts_resp' => NULL,
              'panels_info' => 
              array (
                'class' => 'YumeCommerce_Recent_Posts_Widget',
                'raw' => false,
                'grid' => 6,
                'cell' => 0,
                'id' => 14,
                'widget_id' => 'd757513c-331f-4d37-b006-0eca77dbdd61',
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
                'id' => 'slider-parallax',
                'bottom_margin' => '0px',
                'row_stretch' => 'full-stretched',
                'background_display' => 'tile',
              ),
            ),
            1 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'id' => 'slider-bottom',
                'gutter' => '70px',
                'row_stretch' => 'full',
                'background_display' => 'tile',
              ),
            ),
            2 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'row_css' => 'max-width: 700px;
        margin: 0 auto;',
                'bottom_margin' => '120px',
                'padding' => '120px 0px 0px',
                'background_display' => 'tile',
              ),
            ),
            3 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'bottom_margin' => '120px',
                'background_display' => 'tile',
              ),
            ),
            4 => 
            array (
              'cells' => 2,
              'style' => 
              array (
                'row_css' => 'max-width: 1100px;
        margin: 0 auto;',
                'bottom_margin' => '120px',
                'padding' => '40px 0px 0px',
                'background_display' => 'tile',
              ),
            ),
            5 => 
            array (
              'cells' => 1,
              'style' => 
              array (
                'row_css' => 'max-width: 650px;
        margin: 0 auto;',
                'bottom_margin' => '100px',
                'background_display' => 'tile',
              ),
            ),
            6 => 
            array (
              'cells' => 1,
              'style' => 
              array (
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
              'weight' => 0.5,
            ),
            2 => 
            array (
              'grid' => 1,
              'weight' => 0.5,
            ),
            3 => 
            array (
              'grid' => 2,
              'weight' => 1,
            ),
            4 => 
            array (
              'grid' => 3,
              'weight' => 1,
            ),
            5 => 
            array (
              'grid' => 4,
              'weight' => 0.2800000000000000266453525910037569701671600341796875,
            ),
            6 => 
            array (
              'grid' => 4,
              'weight' => 0.7199999999999999733546474089962430298328399658203125,
            ),
            7 => 
            array (
              'grid' => 5,
              'weight' => 1,
            ),
            8 => 
            array (
              'grid' => 6,
              'weight' => 1,
            ),
          ),
        );
        return $layouts;

}
add_filter( 'siteorigin_panels_prebuilt_layouts', 'loor_prebuilt_home_one_layouts' );