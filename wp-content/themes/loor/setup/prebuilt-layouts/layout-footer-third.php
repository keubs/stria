<?php

function loor_prebuilt_footer_three_layouts($layouts){
    $layouts['footer-three'] = array(
        'name' => __('Contacts Section', 'loor'),
        'description' => __('Footer layout for footer widget area', 'loor'),
        'screenshot' => get_template_directory_uri() . '/demo-files/footer-3.png',
        'widgets' =>
            array (
                0 =>
                    array (
                        'image' => 0,
                        'image_fallback' => get_template_directory_uri() . '/demo-files/layout-3/leaf-bg-1.png',
                        'size' => 'full',
                        'align' => 'default',
                        'title' => '',
                        'title_position' => 'hidden',
                        'alt' => '',
                        'url' => '',
                        'bound' => true,
                        '_sow_form_id' => '57df8cea92639',
                        'panels_info' =>
                            array (
                                'class' => 'SiteOrigin_Widget_Image_Widget',
                                'grid' => 0,
                                'cell' => 0,
                                'id' => 0,
                                'widget_id' => 'b85a9112-90c1-4ebd-81a9-7d7f43902ab9',
                                'style' =>
                                    array (
                                        'class' => 'absolute-left hide-on-mobile hide-on-tablet',
                                        'widget_css' => 'max-width: 120px;
transform: translateY(-70px);',
                                        'background_image_attachment' => false,
                                        'background_display' => 'tile',
                                    ),
                            ),
                        'new_window' => false,
                        'full_width' => false,
                    ),
                1 =>
                    array (
                        'image' => 0,
                        'image_fallback' => get_template_directory_uri() . '/demo-files/layout-3/bookpage-logo.png',
                        'size' => 'full',
                        'align' => 'center',
                        'title' => '',
                        'title_position' => 'hidden',
                        'alt' => '',
                        'url' => '',
                        'bound' => true,
                        '_sow_form_id' => '57de527d08e4c',
                        'panels_info' =>
                            array (
                                'class' => 'SiteOrigin_Widget_Image_Widget',
                                'grid' => 0,
                                'cell' => 0,
                                'id' => 1,
                                'widget_id' => '431e2d1e-4442-4d5a-b2d1-c7051bd71f60',
                                'style' =>
                                    array (
                                        'class' => 'smaller-width-on-mobile',
                                        'widget_css' => 'width: 270px;
margin: 0 auto;',
                                        'padding' => '0px 0px 55px 0px',
                                        'background_image_attachment' => false,
                                        'background_display' => 'tile',
                                    ),
                            ),
                        'new_window' => false,
                        'full_width' => false,
                    ),
                2 =>
                    array (
                        'yc_features' =>
                            array (
                                'features' =>
                                    array (
                                        0 =>
                                            array (
                                                'icon' => 'ionicons-android-pin',
                                                'icon_color' => '#000000',
                                                'icon_image' => 0,
                                                'title' => 'ADDRESS',
                                                'text' => 'US, 48 Park Avenue,New York NY 10016',
                                                'more_text' => '',
                                                'more_url' => '',
                                            ),
                                        1 =>
                                            array (
                                                'icon' => 'typicons-phone',
                                                'icon_color' => '#000000',
                                                'icon_image' => 0,
                                                'title' => 'GET IN TOUCH',
                                                'text' => '(+45) 234-345-33 <br />(+1) 071-234-56',
                                                'more_text' => '',
                                                'more_url' => '',
                                            ),
                                        2 =>
                                            array (
                                                'icon' => 'typicons-mail',
                                                'icon_color' => '#000000',
                                                'icon_image' => 0,
                                                'title' => 'EMAIL',
                                                'text' => 'myemail@example.com <br />support@example.com',
                                                'more_text' => '',
                                                'more_url' => '',
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
                                        'font_weight' => '700',
                                        'font_style' => 'normal',
                                        'size' => false,
                                        'size_unit' => 'px',
                                        'color' => '#000000',
                                        'so_field_container_state' => 'open',
                                    ),
                                'text_options' =>
                                    array (
                                        'font' => 'default',
                                        'font_weight' => '400',
                                        'font_style' => 'normal',
                                        'size' => false,
                                        'size_unit' => 'px',
                                        'color' => '#bababa',
                                        'so_field_container_state' => 'open',
                                    ),
                                'more_text_options' =>
                                    array (
                                        'font' => 'default',
                                        'font_weight' => '400',
                                        'font_style' => 'normal',
                                        'size' => false,
                                        'size_unit' => 'px',
                                        'color' => false,
                                        'so_field_container_state' => 'closed',
                                    ),
                                'so_field_container_state' => 'open',
                            ),
                        'layout' =>
                            array (
                                'i_position' => 'next-to-feature',
                                't_align' => 'left',
                                'container_size' => '40px',
                                'container_size_unit' => 'px',
                                'per_row' => 3,
                                'tag' => 'p',
                                'title_margin' => '0 0 10px',
                                'title_padding' => '',
                                'text_margin' => '0px',
                                'text_padding' => '0 0 0 20px',
                                'gutter' => '25px',
                                'gutter_unit' => 'px',
                                'so_field_container_state' => 'open',
                            ),
                        't_m_layout' =>
                            array (
                                't_layout' =>
                                    array (
                                        'per_row' => 3,
                                        'i_position' => 'next-to-title',
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
                                        'i_position' => 'center',
                                        'align' => 'center',
                                        'title_margin' => '0px',
                                        'title_padding' => '',
                                        'text_margin' => '',
                                        'text_padding' => '0 0 30px',
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
                        '_sow_form_id' => '57de529424115',
                        'panels_info' =>
                            array (
                                'class' => 'YumeCommerce_Widget_Features_Widget',
                                'raw' => false,
                                'grid' => 0,
                                'cell' => 0,
                                'id' => 2,
                                'widget_id' => '2d66d0f4-9895-46b7-a108-33369f88087c',
                                'style' =>
                                    array (
                                        'class' => 'small-width',
                                        'widget_css' => 'max-width: 800px;
margin: 0 auto;',
                                        'background_display' => 'tile',
                                    ),
                            ),
                    ),
                3 =>
                    array (
                        'image' => 0,
                        'image_fallback' => get_template_directory_uri() . '/demo-files/layout-3/leaf-bg-2.png',
                        'size' => 'full',
                        'align' => 'default',
                        'title' => '',
                        'title_position' => 'hidden',
                        'alt' => '',
                        'url' => '',
                        'bound' => true,
                        '_sow_form_id' => '57df8d850b5cd',
                        'panels_info' =>
                            array (
                                'class' => 'SiteOrigin_Widget_Image_Widget',
                                'grid' => 0,
                                'cell' => 0,
                                'id' => 3,
                                'widget_id' => '703bef88-74d8-4ba4-9d6c-8dbf77619def',
                                'style' =>
                                    array (
                                        'class' => 'absolute-right hide-on-mobile hide-on-tablet',
                                        'widget_css' => 'max-width: 100px;
transform: translateY(-90px);',
                                        'background_image_attachment' => false,
                                        'background_display' => 'tile',
                                    ),
                            ),
                        'new_window' => false,
                        'full_width' => false,
                    ),
            ),
        'grids' =>
            array (
                0 =>
                    array (
                        'cells' => 1,
                        'style' =>
                            array (
                                'id' => 'footer-contacts',
                                'row_stretch' => 'full',
                                'background_display' => 'tile',
                                'yc_desktop_padding' => '80px 0px 100px 0px',
                                'yc_mobile_padding' => '40px 0px 20px 0px',
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
            ),

    );
    return $layouts;

}
add_filter( 'siteorigin_panels_prebuilt_layouts', 'loor_prebuilt_footer_three_layouts' );