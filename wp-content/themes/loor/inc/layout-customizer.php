<?php
/**
 * YumeCommerce layout customizer functionality
 *
 * @since 1.0
 */
 

function loor_layout_customize_register($wp_customize) {
	// layout options
	$wp_customize->add_panel('loor_site_main', array(
		'priority' => 1,
		'title' => __('Main Options', 'loor')
	));
	$wp_customize->add_section('loor_site_main_section', array(
		'priority' => 10,
		'title' => __('Layout options', 'loor') ,
		'description' => __('', 'loor') ,
		'panel' => 'loor_site_main'
	));
	$wp_customize->add_setting('loor_site_main_layout', array(
		'default' => 'wide',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_site_main_layout', array(
		'type' => 'select',
		'label' => 'Layout',
		'description' => __('', 'loor') ,
		'section' => 'loor_site_main_section',
		'choices' => array(
			'boxed' => 'Boxed',
			'wide' => 'Wide'
		)
	));
	$wp_customize->add_setting('loor_body_background', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_body_background', array(
		'label' => __('Main content', 'loor'),
		'description' => __('Main content background color', 'loor') ,
		'section' => 'loor_site_main_section',
		'settings' => 'loor_body_background'
	)));
	$wp_customize->add_setting('loor_html_background', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_html_background', array(
		'label' => __('Background color', 'loor'),
		'description' => __('The background color of your site that is displayed behind your boxed content area. This option is only available if you select the boxed layout.', 'loor') ,
		'section' => 'loor_site_main_section',
		'settings' => 'loor_html_background'
	)));
	$wp_customize->add_setting('loor_html_background_url', array(
		'default' => '',
		'sanitize_callback' => 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'loor_html_background_url', array(
		'label' => __('Background Image', 'loor'),
		'description' => __('The background image of your site. This option is only available if you select the boxed layout.', 'loor') ,
		'section' => 'loor_site_main_section',
		'settings' => 'loor_html_background_url'
	)));
	$wp_customize->add_setting('loor_html_background_repeat', array(
		'default' => 'repeat',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_html_background_repeat', array(
		'type' => 'select',
		'label' => __('Background repeat', 'loor'),
		'section' => 'loor_site_main_section',
		'choices' => array(
			'no-repeat' => 'No-repeat',
			'repeat' => 'Repeat'
		)
	));
	$wp_customize->add_setting('loor_html_background_size', array(
		'default' => 'auto',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_html_background_size', array(
		'type' => 'select',
		'label' => __('Background size', 'loor'),
		'section' => 'loor_site_main_section',
		'choices' => array(
			'auto' => 'auto',
			'cover' => 'Cover',
			'contain' => 'Contain'
		)
	));
	$wp_customize->add_setting('loor_html_background_attachment', array(
		'default' => 'scroll',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_html_background_attachment', array(
		'type' => 'select',
		'label' => __('Background attachment', 'loor'),
		'section' => 'loor_site_main_section',
		'choices' => array(
			'auto' => 'auto',
			'scroll' => 'Scroll',
			'fixed' => 'Fixed'
		)
	));

	
	// colors
	$wp_customize->add_section('loor_main_colors', array(
		'priority' => 30,
		'title' => __('General styling', 'loor') ,
		'description' => __('Choose colors here. The color settings of some particular parts like a head, footer, product and etc. You can edit in the "Site options" and "Store options" tab.', 'loor') ,
		'panel' => 'loor_site_main'
	));
	$wp_customize->add_setting('loor_main_font_color', array(
		'default' => '#545454',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_font_color', array(
		'label' => __('Main font color', 'loor') ,
		'description' => __('Main font color for content', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_main_font_color'
	)));
	$wp_customize->add_setting('loor_main_them_color', array(
		'default' => '#ccaf7e',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_them_color', array(
		'label' => __('Theme color', 'loor') ,
		'description' => __('Font color for rating stars, active tabs and anchor links', 'loor'),
		'section' => 'loor_main_colors',
		'settings' => 'loor_main_them_color'
	)));
	
	// buttons style
	$wp_customize->add_setting('loor_button_background_color', array(
		'default' => '#242628',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_button_background_color', array(
		'label' => __('Button background', 'loor') ,
		'description' => __('Color for background of buttons', 'loor'),
		'section' => 'loor_main_colors',
		'settings' => 'loor_button_background_color'
	)));
	$wp_customize->add_setting('loor_button_font_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_button_font_color', array(
		'label' => __('Button font color', 'loor') ,
		'description' => __('Color for font of buttons', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_button_font_color'
	)));
	$wp_customize->add_setting('loor_button_border_color', array(
		'default' => '#242628',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_button_border_color', array(
		'label' => __('Button border color', 'loor') ,
		'description' => __('Color for border of buttons', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_button_border_color'
	)));
	$wp_customize->add_setting('loor_button_background_color_hover', array(
		'default' => '#B99B62',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_button_background_color_hover', array(
		'label' => __('Button highlight background', 'loor') ,
		'description' => __('Background color for button when mouse is over it', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_button_background_color_hover'
	)));
	$wp_customize->add_setting('loor_button_font_color_hover', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_button_font_color_hover', array(
		'label' => __('Button highlight font', 'loor') ,
		'description' => __('Font color for button when mouse is over it', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_button_font_color_hover'
	)));
	$wp_customize->add_setting('loor_button_border_color_hover', array(
		'default' => '#B99B62',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_button_border_color_hover', array(
		'label' => __('Button highlight border', 'loor') ,
		'description' => __('Border color for button when mouse is over it', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_button_border_color_hover'
	)));
	$wp_customize->add_setting('loor_button_border_radius', array(
		'default' => '0',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('loor_button_border_radius', array(
		'label' => __('Border radius for buttons in px.', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_button_border_radius'
	));
	$wp_customize->add_setting('loor_button_letter_spacing', array(
		'default' => '1',
		'sanitize_callback' => 'wp_filter_post_kses'
	));
	$wp_customize->add_control('loor_button_letter_spacing', array(
		'label' => __('Letter spacing for buttons in px.', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_button_letter_spacing'
	));
	
	$wp_customize->add_setting('loor_inputs_border_radius', array(
		'default' => '2',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('loor_inputs_border_radius', array(
		'label' => __('Border radius for inputs in px.', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_inputs_border_radius'
	));
	
	$wp_customize->add_setting('loor_site_loading', array(
		'default' => 'black',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_site_loading', array(
		'type' => 'select',
		'label' => 'Loading icon',
		'description' => __('Color for loading icon', 'loor'),
		'section' => 'loor_main_colors',
		'choices' => array(
			'white' => 'White',
			'black' => 'Black'
		)
	));

	// select style
	$wp_customize->add_setting('loor_select_border_color', array(
		'default' => '#d9d9d9',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_select_border_color', array(
		'label' => __('Border color of the form field', 'loor') ,
		'description' => __('Style for input, textarea and select box', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_select_border_color'
	)));
	$wp_customize->add_setting('loor_select_font_color', array(
		'default' => '#555555',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_select_font_color', array(
		'label' => __('Font color of the form field', 'loor') ,
		'description' => __('Style for input, textarea and select box', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_select_font_color'
	)));
	$wp_customize->add_setting('loor_select_background_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_select_background_color', array(
		'label' => __('Background color of the form field', 'loor') ,
		'description' => __('Style for input, textarea and select box', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_select_background_color'
	)));
	$wp_customize->add_setting('loor_select_arrow_color', array(
		'default' => '#d9d9d9',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_select_arrow_color', array(
		'label' => __('Arrow color of the select box ', 'loor') ,
		'description' => __('Color for arrow of select box', 'loor') ,
		'section' => 'loor_main_colors',
		'settings' => 'loor_select_arrow_color'
	)));

	// Blog styling
	$wp_customize->add_section('loor_blog_colors', array(
		'priority' => 30,
		'title' => __('Blog styling', 'loor') ,
		'description' => __('Edit the color and layout settings for the blog page, posts and single pages.', 'loor') ,
		'panel' => 'loor_site_main'
	));
	$wp_customize->add_setting('loor_blog_layout', array(
		'default' => 'no-sidebar',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_blog_layout', array(
		'type' => 'select',
		'label' => 'Blog layout',
		'section' => 'loor_blog_colors',
		'choices' => array(
			'no-sidebar' => 'Full width, no sidebar',
			'left-sidebar' => 'With left sidebar',
			'right-sidebar' => 'With right sidebar',
			'masonry' => 'Masonry'
		)
	));
	$wp_customize->add_setting('loor_main_blog_sidebar_widget_title_color', array(
		'default' => '#545454',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_blog_sidebar_widget_title_color', array(
		'label' => __('Sidebar widget title color', 'loor') ,
		'section' => 'loor_blog_colors',
		'settings' => 'loor_main_blog_sidebar_widget_title_color'
	)));
	$wp_customize->add_setting('loor_main_blog_sidebar_link_color', array(
		'default' => '#ccaf7e',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_blog_sidebar_link_color', array(
		'label' => __('Sidebar links color', 'loor') ,
		'section' => 'loor_blog_colors',
		'settings' => 'loor_main_blog_sidebar_link_color'
	)));
	$wp_customize->add_setting('loor_main_blog_sidebar_link_color_hover', array(
		'default' => '#1A1A1A',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_blog_sidebar_link_color_hover', array(
		'label' => __('Sidebar links color when mouse is over it', 'loor') ,
		'section' => 'loor_blog_colors',
		'settings' => 'loor_main_blog_sidebar_link_color_hover'
	)));
	$wp_customize->add_setting('loor_main_blog_title_color', array(
		'default' => '#1A1A1A',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_blog_title_color', array(
		'label' => __('Font color for titles', 'loor') ,
		'section' => 'loor_blog_colors',
		'settings' => 'loor_main_blog_title_color'
	)));
	$wp_customize->add_setting('loor_main_blog_title_border_color', array(
		'default' => '#f0f0f0',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_blog_title_border_color', array(
		'label' => __('Underline color', 'loor') ,
		'section' => 'loor_blog_colors',
		'settings' => 'loor_main_blog_title_border_color'
	)));
	$wp_customize->add_setting('loor_main_blog_tags_color', array(
		'default' => '#ACACAC',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_blog_tags_color', array(
		'label' => __('Font color for tags', 'loor') ,
		'description' => __('Font color for date, tags and captions.', 'loor') ,
		'section' => 'loor_blog_colors',
		'settings' => 'loor_main_blog_tags_color'
	)));
	$wp_customize->add_setting('loor_main_blog_links_color_hover', array(
		'default' => '#ccaf7e',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_blog_links_color_hover', array(
		'label' => __('Font color for links', 'loor') ,
		'description' => __('Font color for tags and titles when mouse is over them', 'loor') ,
		'section' => 'loor_blog_colors',
		'settings' => 'loor_main_blog_links_color_hover'
	)));
	$wp_customize->add_setting('loor_main_blog_separator_color', array(
		'default' => '#F1F1F1',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_main_blog_separator_color', array(
		'label' => __('Color of separator', 'loor') ,
		'section' => 'loor_blog_colors',
		'settings' => 'loor_main_blog_separator_color'
	)));
}
add_action('customize_register', 'loor_layout_customize_register');


// Add layout class to body
function loor_main_layout_option() {
	add_filter('body_class', 'loor_site_main_layout_class_boxed');
	function loor_site_main_layout_class_boxed($classes) {
		$layout = get_theme_mod('loor_site_main_layout', 'wide');
		$classes[] = $layout;
		return $classes;
	}
}
add_action('wp_head', 'loor_main_layout_option');

// Add class to body sidebar theme option
function loor_sidebar_theme_option() {
	if (is_archive() || is_home() || is_search()) {
		add_filter('body_class', 'q_blog_theme_option');
		function q_blog_theme_option($classes) {
			$blog_layout = get_theme_mod('loor_blog_layout', 'no-sidebar');
			$classes[] = $blog_layout;
			return $classes;
		}
	}
}
add_action('wp_head', 'loor_sidebar_theme_option');

// Add class to body if customizer is active and we are on single product page
function itIsSinglePageAndCustomizerOn() {
	global $wp_customize;
	if (isset($wp_customize) && in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))) && is_product()) {
	    add_filter('body_class', 'addClassItIsSinglePageAndCustomizerOn');
	    function addClassItIsSinglePageAndCustomizerOn($classes) {
		    $classes[] = 'itIsSinglePageAndCustomizerOn';
		    return $classes;
		}
	}
}
add_action('wp_head', 'itIsSinglePageAndCustomizerOn');


function loor_css_customizer() { ?>
<style>
	/* main */
	html { 
	    background-color: <?php echo get_theme_mod('loor_html_background','#ffffff') ?>; 
	    background-image: url(<?php echo get_theme_mod('loor_html_background_url','') ?>); 
	    background-repeat: <?php echo get_theme_mod('loor_html_background_repeat','repeat') ?>;
	    background-size: <?php echo get_theme_mod('loor_html_background_size','auto') ?>;
	    background-attachment: <?php echo get_theme_mod('loor_html_background_attachment','scroll') ?>;   
	}

	div.bodyBoxed, 
	.top-position-product,
	.top-position-product::before,
	#overlay_preloader { 
	    background: <?php echo get_theme_mod('loor_body_background','#ffffff') ?>; 
	}
	        
    .yumecommerce-sidebar .widget-title {
        color: <?php echo get_theme_mod('loor_main_blog_sidebar_widget_title_color','#545454') ?>; 
    }
    
    .yumecommerce-sidebar a {
        color: <?php echo get_theme_mod('loor_main_blog_sidebar_link_color','#ccaf7e') ?>; 
    }
    
    .yumecommerce-sidebar a:hover {
        color: <?php echo get_theme_mod('loor_main_blog_sidebar_link_color_hover','#1A1A1A') ?>; 
    }
    
    /* colors */
    body {
        color: <?php echo get_theme_mod('loor_main_font_color','#545454') ?>; 
    }
    
        
    ::selection {
        background: <?php echo get_theme_mod('loor_main_them_color','#ccaf7e') ?>;
        color: <?php echo get_theme_mod('loor_html_background','#ffffff') ?>; 
    }
    
    .yumecommerce-post-tags {
        border-left: 2px solid <?php echo get_theme_mod('loor_main_them_color','#ccaf7e') ?>;
    }
    
    .swiper-pagination-bullet-active {
        border: 1px solid <?php echo get_theme_mod('loor_main_them_color','#ccaf7e') ?>;
    }
    
    input[type="radio"]:checked:before {
        background: <?php echo get_theme_mod('loor_main_them_color','#ccaf7e') ?>;
    }
    
    .swiper-pagination-bullet {
        background: <?php echo get_theme_mod('loor_main_font_color','#545454') ?>; 
    }
    
    .post-navigation a:before,
    .author-title a:before,
    .yumecommerce-post-comments a:before,
    .yumecommerce-post-intro a.more-link:before,
    .reply a.comment-reply-link:before {
        background-color: <?php echo get_theme_mod('loor_main_them_color','#ccaf7e') ?>;
    }

    .wp-caption-text {
        color: <?php echo get_theme_mod('loor_main_font_color','#545454') ?>;
    }
    
    .top-position-product svg .top-position-product-container-arrow,
    .a2a_default_style a svg path {
        fill: <?php echo get_theme_mod('loor_main_font_color','#545454') ?>; 
    }
    
    .woocommerce p.stars a.star-1:after, 
    .woocommerce p.stars a.star-2:after, 
    .woocommerce p.stars a.star-3:after, 
    .woocommerce p.stars a.star-4:after, 
    .woocommerce p.stars a.star-5:after,
    .star-rating,
    .woocommerce .star-rating:before,
    a,
    .woocommerce div.product .stock {
        color: <?php echo get_theme_mod('loor_main_them_color','#ccaf7e') ?>;
    }

    .woocommerce a.remove {
    	color: <?php echo get_theme_mod('loor_main_them_color','#ccaf7e') ?> !important; 
    }

    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range {
    	background-color: <?php echo get_theme_mod('loor_main_them_color','#ccaf7e') ?>;
    }

    .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content {
	    background-color: <?php echo loor_hex_color_adjusting( get_theme_mod('loor_main_them_color','#ccaf7e'), 30) ?>;
	}
    
    .yumecommerce-main-page-heading {
    	color: <?php echo get_theme_mod('loor_main_title_color','#313131') ?>; 
    }
    
    /* buttons style */
    button,
    input[type="submit"],
    .woocommerce div.product form.cart .button,
    .woocommerce #respond input#submit, 
    .woocommerce a.button, 
    .woocommerce button.button, 
    .woocommerce input.button,
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt,
    .woocommerce a.added_to_cart,
	.woocommerce input.button:disabled[disabled],
	.woocommerce input.button:disabled[disabled]:hover,
    .woocommerce button.button.alt:disabled[disabled],
    .woocommerce button.button.alt:disabled,
    .woocommerce button.button.alt:disabled[disabled]:hover,
    .woocommerce button.button.alt:disabled:hover {
        background: <?php echo get_theme_mod('loor_button_background_color', '#242628') ?>;
        color: <?php echo get_theme_mod('loor_button_font_color', '#fff') ?>;
        border: 1px solid <?php echo get_theme_mod('loor_button_border_color', '#242628') ?>;
        border-radius: <?php echo get_theme_mod('loor_button_border_radius', '0') ?>px !important;
        letter-spacing: <?php echo get_theme_mod('loor_button_letter_spacing', '1') ?>px;
    }
    
    button:hover,
    input[type="submit"]:hover,
    .woocommerce div.product form.cart .button:hover,
    .woocommerce #respond input#submit:hover, 
    .woocommerce a.button:hover, 
    .woocommerce button.button:hover, 
    .woocommerce input.button:hover,
    .woocommerce #respond input#submit.alt:hover,
    .woocommerce a.button.alt:hover,
    .woocommerce button.button.alt:hover,
    .woocommerce input.button.alt:hover,
    .woocommerce a.added_to_cart:hover,
    .woocommerce button.single_add_to_cart_button:hover {
        background: <?php echo get_theme_mod('loor_button_background_color_hover','#B99B62') ?>;
        color: <?php echo get_theme_mod('loor_button_font_color_hover','#fff') ?>;
        border: 1px solid <?php echo get_theme_mod('loor_button_border_color_hover','#B99B62') ?>;
    }
    
    /* select and input style  */
    input[type="text"],
    input[type="email"],
    input[type="password"],
    select,
    input[type="tel"],
    textarea,
    .single-product.woocommerce .woocommerce-message, .single-product.woocommerce .woocommerce-error {
        border-radius: <?php echo get_theme_mod('loor_inputs_border_radius', '2') ?>px;
    }
    .woocommerce div.product form.cart .variations select,
    .woocommerce .quantity .qty,
    .woocommerce-cart table.cart td.actions .coupon .input-text,
    .quantity-button,
    select,
    input:not([type='submit']),
    textarea {
        background: <?php echo get_theme_mod('loor_select_background_color','#ffffff') ?>;
        color: <?php echo get_theme_mod('loor_select_font_color','#555555') ?>;
        border: 1px solid <?php echo get_theme_mod('loor_select_border_color','#d9d9d9') ?> !important;
    }
    
    ::-webkit-input-placeholder {
        color: <?php echo get_theme_mod('loor_select_font_color','#555555') ?>;
    }
    
    input::-moz-placeholder {
        color: <?php echo get_theme_mod('loor_select_font_color','#555555') ?>;
    }
    
    input:-ms-input-placeholder {
        color: <?php echo get_theme_mod('loor_select_font_color','#555555') ?>;
    }
    
    #shipping_method label:before {
        border: 1px solid <?php echo get_theme_mod('loor_select_border_color','#d9d9d9') ?>;
        background: <?php echo get_theme_mod('loor_select_background_color','#ffffff') ?>;
    }
    
    span.select-arrow svg path {
        fill: <?php echo get_theme_mod('loor_select_arrow_color','#d9d9d9') ?>;
    }
    
    /* blog colors */    
    .main-title,
    a.yumecommerce-post-link,
    .taxonomy-title {
        color: <?php echo get_theme_mod('loor_main_blog_title_color','#1A1A1A') ?>;
    }
    
    .main-title:after {
        background: <?php echo get_theme_mod('loor_main_blog_title_border_color','#f0f0f0') ?>;
    }
    
    .yumecommerce-post-date,
    .yumecommerce-post-tags,
    .yumecommerce-post-tags a,
    .yumecommerce-post-thumbnail figcaption,
    dd.gallery-caption,
    .yumecommerce-post-pagination a,
    .yumecommerce-post-category,
    .yumecommerce-post-category a {
        color: <?php echo get_theme_mod('loor_main_blog_tags_color','#ACACAC') ?>;
    }
    
    .yumecommerce-post-tags a:hover,
    a.yumecommerce-post-link:hover,
    .yumecommerce-post-pagination a:hover,
    .yumecommerce-post-category a:hover {
        color: <?php echo get_theme_mod('loor_main_blog_links_color_hover','#ccaf7e') ?>;
    }
    
    hr,
    .yumecommerce-post-container,
    ul#comment-list .comment-body,
    .comment-navigation {
        border: 0;
        border-bottom: 1px solid <?php echo get_theme_mod('loor_main_blog_separator_color','#F1F1F1') ?>;
    }
    
    .post-navigation {
        border-bottom: 1px solid <?php echo get_theme_mod('loor_main_blog_separator_color','#F1F1F1') ?>;
        border-top: 1px solid <?php echo get_theme_mod('loor_main_blog_separator_color','#F1F1F1') ?>;
    }
    
    .post-navigation .nav-next {
        border-left: 1px solid <?php echo get_theme_mod('loor_main_blog_separator_color','#F1F1F1') ?>;
    }
    
    .author-info {
        border-top: 1px solid <?php echo get_theme_mod('loor_main_blog_separator_color','#F1F1F1') ?>;
    }
    
    <?php if ( get_theme_mod('loor_main_blog_category_show', '0') == '0' ) : ?>
        .yumecommerce-post-category {
            display: none;
        }
    <?php endif; ?>
    
</style>

<?php
}

add_action( 'wp_head', 'loor_css_customizer' );