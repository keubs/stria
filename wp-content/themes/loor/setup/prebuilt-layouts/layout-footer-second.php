<?php

function loor_prebuilt_footer_two_layouts($layouts){
    $layouts['footer-two'] = array(
        'name' => __('Newsletter Form', 'loor'),
        'description' => __('Footer layout for footer widget area', 'loor'),
        'screenshot' => get_template_directory_uri() . '/demo-files/footer-2.png',
        'widgets' =>
            array (
                0 =>
                    array (
                        'title' => 'Newsletter',
                        'display_title' => true,
                        'settings' =>
                            array (
                                'to' => 'test@yourmail.com',
                                'default_subject' => '',
                                'subject_prefix' => '',
                                'success_message' => '<p>Hi. It is just the layout example of a subscription form. Replace it with any special subscription widget or any other widget.</p>',
                                'success_message_selected_editor' => 'tinymce',
                                'submit_text' => 'Send',
                                'so_field_container_state' => 'closed',
                            ),
                        'fields' =>
                            array (
                                0 =>
                                    array (
                                        'type' => 'email',
                                        'label' => 'Your Email',
                                        'description' => '',
                                        'required' =>
                                            array (
                                                'required' => true,
                                                'missing_message' => 'Please enter a valid email address',
                                                'so_field_container_state' => 'open',
                                            ),
                                        'options' =>
                                            array (
                                            ),
                                    ),
                            ),
                        'spam' =>
                            array (
                                'recaptcha' =>
                                    array (
                                        'site_key' => '',
                                        'secret_key' => '',
                                        'theme' => 'light',
                                        'type' => 'image',
                                        'size' => 'normal',
                                        'so_field_container_state' => 'open',
                                        'use_captcha' => false,
                                    ),
                                'akismet' =>
                                    array (
                                        'use_akismet' => true,
                                        'spam_action' => 'error',
                                        'so_field_container_state' => 'open',
                                    ),
                                'so_field_container_state' => 'closed',
                            ),
                        'design' =>
                            array (
                                'container' =>
                                    array (
                                        'background' => false,
                                        'padding' => '0px',
                                        'padding_unit' => 'px',
                                        'border_color' => false,
                                        'border_width' => '0px',
                                        'border_width_unit' => 'px',
                                        'border_style' => 'solid',
                                        'so_field_container_state' => 'open',
                                    ),
                                'labels' =>
                                    array (
                                        'font' => 'default',
                                        'size' => false,
                                        'size_unit' => 'px',
                                        'color' => false,
                                        'position' => 'inside',
                                        'width' => false,
                                        'width_unit' => 'px',
                                        'align' => 'left',
                                        'so_field_container_state' => 'open',
                                    ),
                                'descriptions' =>
                                    array (
                                        'size' => '0.9em',
                                        'size_unit' => 'em',
                                        'color' => '#999999',
                                        'style' => 'italic',
                                        'so_field_container_state' => 'open',
                                    ),
                                'errors' =>
                                    array (
                                        'background' => '#f5f5f5',
                                        'border_color' => '#f5f5f5',
                                        'text_color' => '#ec666a',
                                        'padding' => '0px',
                                        'padding_unit' => 'px',
                                        'margin' => '0px',
                                        'margin_unit' => 'px',
                                        'so_field_container_state' => 'open',
                                    ),
                                'submit' =>
                                    array (
                                        'styled' => true,
                                        'background_color' => '#ffffff',
                                        'background_gradient' => 0.0,
                                        'border_color' => '#d9d9d9',
                                        'border_style' => 'solid',
                                        'border_width' => '1px',
                                        'border_width_unit' => 'px',
                                        'border_radius' => 0.0,
                                        'text_color' => '#5a5a5a',
                                        'font_size' => false,
                                        'font_size_unit' => 'px',
                                        'weight' => '500',
                                        'padding' => '10px',
                                        'padding_unit' => 'px',
                                        'inset_highlight' => 50.0,
                                        'so_field_container_state' => 'open',
                                    ),
                                'focus' =>
                                    array (
                                        'style' => 'none',
                                        'color' => '#9e9e9e',
                                        'width' => '1px',
                                        'width_unit' => 'px',
                                        'so_field_container_state' => 'open',
                                    ),
                                'so_field_container_state' => 'open',
                            ),
                        '_sow_form_id' => '577d60c3b3158',
                        'panels_info' =>
                            array (
                                'class' => 'SiteOrigin_Widgets_ContactForm_Widget',
                                'grid' => 0,
                                'cell' => 0,
                                'id' => 0,
                                'widget_id' => 'f215b0cf-f438-47f7-b0c8-4e6dcb2d3a9c',
                                'style' =>
                                    array (
                                        'class' => 'newsletter-form',
                                        'background_image_attachment' => false,
                                        'background_display' => 'tile',
                                        'font_color' => '#000000',
                                    ),
                            ),
                    ),
                1 =>
                    array (
                        'title' => '',
                        'text' => '<p style="text-align: center;">Sign up to be the first to learn about new product introductions, restocks and events.</p>',
                        'text_selected_editor' => 'tinymce',
                        'autop' => true,
                        '_sow_form_id' => '577d62e5a54f5',
                        'panels_info' =>
                            array (
                                'class' => 'SiteOrigin_Widget_Editor_Widget',
                                'raw' => false,
                                'grid' => 0,
                                'cell' => 0,
                                'id' => 1,
                                'widget_id' => 'b96238af-7cad-4b93-bd10-df359d1243bd',
                                'style' =>
                                    array (
                                        'widget_css' => 'font-size: 0.8em;',
                                        'background_display' => 'tile',
                                        'font_color' => '#a5a5a5',
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
                                'id' => 'newsletter-form',
                                'row_css' => 'max-width: 400px;
        margin: 0 auto;',
                                'background_display' => 'tile',
                                'yc_desktop_padding' => '60px 0px',
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
add_filter( 'siteorigin_panels_prebuilt_layouts', 'loor_prebuilt_footer_two_layouts' );