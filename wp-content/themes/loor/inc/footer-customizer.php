<?php
/**
 * YumeCommerce footer customizer functionality
 *
 * @since 1.0
 */


function loor_footer_customize_register($wp_customize) {
	// Widget footer
	$wp_customize->add_section('loor_site_footer_widget_area', array(
		'priority' => 70,
		'title' => __('Footer widget area', 'loor') ,
		'panel' => 'loor_site'
	));

	$wp_customize->add_setting('loor_site_footer_widget_area_background', array(
		'default' => '#f5f5f5',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_site_footer_widget_area_background', array(
		'label' => __('Background color', 'loor') ,
		'section' => 'loor_site_footer_widget_area',
		'settings' => 'loor_site_footer_widget_area_background'
	)));

	$wp_customize->add_setting('loor_site_footer_widget_area_border_top_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_site_footer_widget_area_border_top_color', array(
		'label' => __('Border top color', 'loor') ,
		'section' => 'loor_site_footer_widget_area',
		'settings' => 'loor_site_footer_widget_area_border_top_color'
	)));

	$wp_customize->add_setting('loor_site_footer_widget_area_text_color', array(
		'default' => '#93979F',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_site_footer_widget_area_text_color', array(
		'label' => __('Font color', 'loor') ,
		'section' => 'loor_site_footer_widget_area',
		'settings' => 'loor_site_footer_widget_area_text_color'
	)));

	$wp_customize->add_setting('loor_site_footer_widget_area_text_color_hover', array(
		'default' => '#CCAF7E',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_site_footer_widget_area_text_color_hover', array(
		'label' => __('Color for links when mouse is over it', 'loor') ,
		'section' => 'loor_site_footer_widget_area',
		'settings' => 'loor_site_footer_widget_area_text_color_hover'
	)));

	$wp_customize->add_setting('loor_site_footer_widget_area_font_color_title', array(
		'default' => '#93979F',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_site_footer_widget_area_font_color_title', array(
		'label' => __('Font color for titles', 'loor') ,
		'section' => 'loor_site_footer_widget_area',
		'settings' => 'loor_site_footer_widget_area_font_color_title'
	)));

	// Footer
	$wp_customize->add_section('loor_site_footer', array(
		'priority' => 80,
		'title' => __('Footer', 'loor') ,
		'panel' => 'loor_site'
	));

	// Footer layout
	$wp_customize->add_setting( 'loor_footer_layout', array(
		'default' => 'standard',
		'sanitize_callback' => 'loor_sanitize_choices',
	));

	$wp_customize->add_control( new Loor_Custom_Radio_Image_Control( $wp_customize, 'loor_footer_layout', array(
		'settings' => 'loor_footer_layout',
		'section' => 'loor_site_footer',
		'label' => __( 'Footer Layout', 'loor' ),
		'choices' => array(
			'standard' => get_template_directory_uri() . '/img/customizer/footer/ft-1.png',
			'center' => get_template_directory_uri() . '/img/customizer/footer/ft-2.png',
			'one-line-no-nav' => get_template_directory_uri() . '/img/customizer/footer/ft-3.png',
		),
	)));

	$wp_customize->add_setting('footer_text', array(
		'default' => 'Your Site. All rights reserved.',
		'sanitize_callback' => 'wp_filter_post_kses'
	));
	$wp_customize->add_control('footer_text', array(
		'label' => __('Copyright text', 'loor') ,
		'description' => 'Add a custom copyright text at the bottom of your site.',
		'section' => 'loor_site_footer',
		'settings' => 'footer_text'
	));
	$wp_customize->add_setting('loor_footer_background', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_footer_background', array(
		'label' => __('Background color', 'loor') ,
		'section' => 'loor_site_footer',
		'settings' => 'loor_footer_background'
	)));
	$wp_customize->add_setting('loor_footer_border_top_color', array(
		'default' => '#f5f5f5',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_footer_border_top_color', array(
		'label' => __('Border top color', 'loor') ,
		'section' => 'loor_site_footer',
		'settings' => 'loor_footer_border_top_color'
	)));
	$wp_customize->add_setting('loor_footer_text_color', array(
		'default' => '#93979F',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_footer_text_color', array(
		'label' => __('Font color', 'loor') ,
		'section' => 'loor_site_footer',
		'settings' => 'loor_footer_text_color'
	)));
	$wp_customize->add_setting('loor_footer_text_color_hover', array(
		'default' => '#CCAF7E',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_footer_text_color_hover', array(
		'label' => __('Font color for links when mouse is over it', 'loor') ,
		'section' => 'loor_site_footer',
		'settings' => 'loor_footer_text_color_hover'
	)));

	// links for social icons
	$wp_customize->add_section('loor_social_icons', array(
		'priority' => 90,
		'title' => __('Social icons', 'loor') ,
		'description' => __('Shows social icons in the footer', 'loor') ,
		'panel' => 'loor_site'
	));

	$wp_customize->add_setting('icon-twitter', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('icon-twitter', array(
		'label' => __('Twitter link', 'loor') ,
		'section' => 'loor_social_icons',
		'settings' => 'icon-twitter'
	));
	$wp_customize->add_setting('icon-instagram', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('icon-instagram', array(
		'label' => __('Instagram link', 'loor') ,
		'section' => 'loor_social_icons',
		'settings' => 'icon-instagram'
	));
	$wp_customize->add_setting('icon-facebook', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('icon-facebook', array(
		'label' => __('Facebook link', 'loor') ,
		'section' => 'loor_social_icons',
		'settings' => 'icon-facebook'
	));
	$wp_customize->add_setting('icon-google', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('icon-google', array(
		'label' => __('Google+ link', 'loor') ,
		'section' => 'loor_social_icons',
		'settings' => 'icon-google'
	));
	$wp_customize->add_setting('icon-tumblr', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('icon-tumblr', array(
		'label' => __('Tumblr link', 'loor') ,
		'section' => 'loor_social_icons',
		'settings' => 'icon-tumblr'
	));
	$wp_customize->add_setting('icon-pinterest', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('icon-pinterest', array(
		'label' => __('Pinterest link', 'loor') ,
		'section' => 'loor_social_icons',
		'settings' => 'icon-pinterest'
	));
}
add_action( 'customize_register', 'loor_footer_customize_register');

function loor_footer_customize_register_css() { ?>
<!-- Footer -->
<style>
    /* Footer widget area */
    #yumecommerce-custom-footer-widgets {
        background-color: <?php echo get_theme_mod('loor_site_footer_widget_area_background','#f5f5f5') ?>;
        border-top: 1px solid <?php echo get_theme_mod('loor_site_footer_widget_area_border_top_color','#ffffff') ?>;
        color: <?php echo get_theme_mod('loor_site_footer_widget_area_text_color','#93979F') ?>;
    }
    
    #yumecommerce-custom-footer-widgets a {
        color: <?php echo get_theme_mod('loor_site_footer_widget_area_text_color','#93979F') ?>;
    }
    
    #yumecommerce-custom-footer-widgets a:hover {
        color: <?php echo get_theme_mod('loor_site_footer_widget_area_text_color_hover','#CCAF7E') ?>;
    }
    
    #yumecommerce-custom-footer-widgets .widget-title {
        color: <?php echo get_theme_mod('loor_site_footer_widget_area_font_color_title','#93979F') ?>;
    }
    
    /* Footer */
    footer.footer {
        background-color: <?php echo get_theme_mod('loor_footer_background','#ffffff') ?>;
        border-top: 1px solid <?php echo get_theme_mod('loor_footer_border_top_color','#f5f5f5') ?>;
        color: <?php echo get_theme_mod('loor_footer_text_color','#93979F') ?>;
    }
    
    footer.footer a {
        color: <?php echo get_theme_mod('loor_footer_text_color','#93979F') ?>;
    }
    
    .footer-social-icons svg
    {
        fill: <?php echo get_theme_mod('loor_footer_text_color','#93979F') ?>;
    }
    
    footer.footer a:hover {
        color: <?php echo get_theme_mod('loor_footer_text_color_hover','#CCAF7E') ?>;
    }
    
    .footer-social-icons a:first-child:before {
        background-color: <?php echo get_theme_mod('loor_footer_border_top_color','#dfdfdf') ?>;
    }
</style>

<?php
}

add_action( 'wp_head', 'loor_footer_customize_register_css' );