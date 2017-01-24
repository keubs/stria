<?php

/**
 * YumeCommerce sections customizer functionality
 * Header
 * Slider
 * Recent posts
 */


function loor_sections_customize_register($wp_customize) {
    $wp_customize->add_panel('loor_site', array(
		'priority' => 30,
		'title' => __('Site Options', 'loor')
	));
	// site options section header
	$wp_customize->add_section('loor_site_top', array(
		'priority' => 20,
		'title' => __('Header', 'loor'),
		'panel' => 'loor_site'
	));

	// header logo
	$wp_customize->add_setting('logo_image', array(
		'default' => get_template_directory_uri() . '/demo-files/demo-logo.png',
		'sanitize_callback' => 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
		'label' => __('Logo', 'loor') ,
		'section' => 'loor_site_top',
        'description' => __('If there is no image uploaded, the site\'s name text will be used instead.', 'loor') ,
		'settings' => 'logo_image'
	)));

	// header style
	$wp_customize->add_setting('header_background', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background', array(
		'label' => __('Background', 'loor') ,
		'section' => 'loor_site_top',
		'settings' => 'header_background'
	)));
	$wp_customize->add_setting('header_border_color', array(
		'default' => '#ebebeb',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_border_color', array(
		'label' => __('Border bottom color', 'loor') ,
		'section' => 'loor_site_top',
		'settings' => 'header_border_color'
	)));
	$wp_customize->add_setting('header_color', array(
		'default' => '#1d1d1d',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_color', array(
		'label' => __('Font color', 'loor') ,
		'section' => 'loor_site_top',
		'settings' => 'header_color'
	)));
	$wp_customize->add_setting('header_color_hover', array(
		'default' => '#b99b62',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_color_hover', array(
		'label' => __('Color when mouse is over it', 'loor') ,
		'section' => 'loor_site_top',
		'settings' => 'header_color_hover'
	)));
	$wp_customize->add_setting('header_background_cart_counter_circle', array(
		'default' => '#ccaf7e',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background_cart_counter_circle', array(
		'label' => __('Background for cart\'s circle', 'loor'),
		'section' => 'loor_site_top',
		'settings' => 'header_background_cart_counter_circle'
	)));
	$wp_customize->add_setting('header_text_cart_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_text_cart_color', array(
		'label' => __('Font color for cart\'s circle', 'loor') ,
		'section' => 'loor_site_top',
		'settings' => 'header_text_cart_color'
	)));
	$wp_customize->add_setting('loor_header_background_use', array(
		'default' => '0',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_header_background_use', array(
		'type' => 'select',
		'label' => __('Transparent background', 'loor') ,
		'description' => __('Only for top of the front page', 'loor') ,
		'section' => 'loor_site_top',
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));
	$wp_customize->add_setting('loor_header_background_use_color_before', array(
		'default' => '#1d1d1d',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_header_background_use_color_before', array(
		'label' => __('Font color before', 'loor') ,
		'description' => __('In case you use transparent ', 'loor'),
		'section' => 'loor_site_top',
		'settings' => 'loor_header_background_use_color_before'
	)));
	$wp_customize->add_setting('loor_header_background_use_color_after', array(
		'default' => '#1d1d1d',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_header_background_use_color_after', array(
		'label' => __('Font color after', 'loor') ,
		'description' => __('In case you use transparent background for header you can change menu font color when page is scrolled', 'loor'),
		'section' => 'loor_site_top',
		'settings' => 'loor_header_background_use_color_after'
	)));
	$wp_customize->add_setting('loor_header_logo_image_before', array(
		'default' => '',
		'sanitize_callback' => 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'loor_header_logo_image_before', array(
		'label' => __('Logo before', 'loor') ,
		'section' => 'loor_site_top',
		'settings' => 'loor_header_logo_image_before'
	)));
	$wp_customize->add_setting('loor_header_logo_image_after', array(
		'default' => '',
		'sanitize_callback' => 'esc_url'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'loor_header_logo_image_after', array(
		'label' => __('Logo after', 'loor') ,
		'section' => 'loor_site_top',
		'description' => __('Inversed logo', 'loor') ,
		'settings' => 'loor_header_logo_image_after'
	)));
	$wp_customize->add_setting('loor_header_cart_use', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_header_cart_use', array(
		'type' => 'select',
		'label' => __('Display cart icon', 'loor'),
		'section' => 'loor_site_top',
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));

	// Recent posts section
	$wp_customize->add_section('loor_recent_posts', array(
		'priority' => 70,
		'title' => __('Recent posts section', 'loor') ,
		'panel' => 'loor_site'
	));
	
	$wp_customize->add_setting('loor_recent_post_title_color', array(
		'default' => '#323232',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_recent_post_title_color', array(
		'label' => __('Font color for title', 'loor') ,
		'section' => 'loor_recent_posts',
		'settings' => 'loor_recent_post_title_color'
	)));
	$wp_customize->add_setting('loor_recent_post_title_color_hover', array(
		'default' => '#CCAF7E',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_recent_post_title_color_hover', array(
		'label' => __('Color for title when mouse is over it', 'loor') ,
		'section' => 'loor_recent_posts',
		'settings' => 'loor_recent_post_title_color_hover'
	)));
	$wp_customize->add_setting('loor_recent_post_text_color', array(
		'default' => '#949494',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_recent_post_text_color', array(
		'label' => __('Font color for texts', 'loor') ,
		'section' => 'loor_recent_posts',
		'settings' => 'loor_recent_post_text_color'
	)));
}
add_action( 'customize_register', 'loor_sections_customize_register');

/**
 * Add some customizer options to body
 * - Transparent background 
 */
function loor_header_background_front_page() {
    if ( get_theme_mod( 'loor_header_background_use', '0' ) == '1' && is_front_page() ) {
        add_filter( 'body_class', 'header_background_use' );
        function header_background_use( $classes ) {
        	$classes[] = 'header-background';
        	return $classes;
        }
    }
}
add_action( 'wp_head', 'loor_header_background_front_page' );

function loor_sections_customize_register_css() { ?>
<!-- Sections -->
<style>
    /* header background */
    header.bodyBoxed {
        background: <?php echo get_theme_mod('header_background','#ffffff') ?>;
        border-bottom: 1px solid <?php echo get_theme_mod('header_border_color','#ebebeb') ?>;
    }
    
    #close-icon,
    #mobile-nav,
    #screen-nav ul.nav > li > ul.sub-menu {
       background: <?php echo get_theme_mod('header_background','#ffffff') ?>; 
    }
    
    
    /* header font color */
    .logo a,
    #screen-nav ul li a,
    #mobile-nav ul li a,
    #mobile-nav #mobile-nav-text { 
        color: <?php echo get_theme_mod('header_color','#1d1d1d') ?>; 
    }
    
    #close-icon g,
    #nav-icon,
    #cart-icon,
    #screen-nav svg,
    #mobile-nav svg{
        fill: <?php echo get_theme_mod('header_color','#1d1d1d') ?>;
    }
    
    /* header font color hover */
    #screen-nav ul li a:hover,
    #mobile-nav ul li a:hover {
        color: <?php echo get_theme_mod('header_color_hover','#B99B62') ?>;
    }
    
    /* cart circle background & cart circle color */
    header.bodyBoxed span.count:after {
        background: <?php echo get_theme_mod('header_background_cart_counter_circle','#ccaf7e') ?>;
        color: <?php echo get_theme_mod('header_text_cart_color','#ffffff') ?>;
    }

    <?php if ( get_theme_mod( 'loor_header_background_use', '0' ) == '1' && is_front_page() )  : ?>
    	/* transparent header */
        header.bodyBoxed { 
            background: transparent; 
            border-color: transparent; -webkit-transition: all .4s cubic-bezier(0, 0, 0.58, 1); transition: all .4s cubic-bezier(0, 0, 0.58, 1); }
            
        .fixed-header header.bodyBoxed,
        .fixed-header-item header.bodyBoxed,
        .fixed-header-item-closed header.bodyBoxed { 
            background: <?php echo get_theme_mod('header_background','#ffffff') ?>; 
            border-bottom: 1px solid <?php echo get_theme_mod('header_border_color','#ebebeb') ?>; 
        }

        header.bodyBoxed #screen-nav ul.nav > li > ul.sub-menu { 
            background: transparent;
            box-shadow: none;
        }
        
        .fixed-header header.bodyBoxed #screen-nav ul.nav > li > ul.sub-menu, 
        .fixed-header-item header.bodyBoxed #screen-nav ul.nav > li > ul.sub-menu,
        .fixed-header-item-closed header.bodyBoxed #screen-nav ul.nav > li > ul.sub-menu { 
            background: <?php echo get_theme_mod('header_background','#ffffff') ?>;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.05);
        }
        
    	/*  font color before */
        #screen-nav ul li a,
        .logo a { 
            color: <?php echo get_theme_mod('loor_header_background_use_color_before','#1d1d1d') ?>; 
        }
        
        #cart-icon,
        #nav-icon,
        #screen-nav svg {
            fill: <?php echo get_theme_mod('loor_header_background_use_color_before','#1d1d1d') ?>;
        }
        
    	/* font color after */
        .fixed-header header.bodyBoxed #screen-nav ul li a, 
        .fixed-header-item header.bodyBoxed #screen-nav ul li a, 
        .fixed-header-item-closed header.bodyBoxed #screen-nav ul li a,

        .fixed-header header.bodyBoxed .logo a,
        .fixed-header-item header.bodyBoxed .logo a,
        .fixed-header-item-closed header.bodyBoxed .logo a {
            color: <?php echo get_theme_mod('loor_header_background_use_color_after','#1d1d1d') ?>;
        }
        
        
        .fixed-header header.bodyBoxed #screen-nav ul li a:hover, 
        .fixed-header-item header.bodyBoxed #screen-nav ul li a:hover, 
        .fixed-header-item-closed header.bodyBoxed #screen-nav ul li a:hover {
            color: <?php echo get_theme_mod('header_color_hover','#B99B62') ?>;
        }
        
        .fixed-header header.bodyBoxed #cart-icon,
        .fixed-header-item header.bodyBoxed #cart-icon,
        .fixed-header-item-closed header.bodyBoxed #cart-icon,
        .fixed-header header.bodyBoxed #nav-icon,
        .fixed-header-item header.bodyBoxed #nav-icon,
        .fixed-header-item-closed header.bodyBoxed #nav-icon,
        .fixed-header #screen-nav svg,
        .fixed-header-item #screen-nav svg,
        .fixed-header-item-closed #screen-nav svg {
            fill: <?php echo get_theme_mod('loor_header_background_use_color_after','#1d1d1d') ?>;
        }
        
    	/* two logotypes */
        img.logo-image-before {
            opacity: 1;
        }
        
        img.logo-image-after {
            position: absolute;
            right: 0;
            margin: auto;
            left: 0;
            top: 0;
            opacity: 0;
        }
        
        /*  Large devices (desktops, 62em - 992px and up)  */
        @media (min-width: 62em) {
            img.logo-image-after
            {
                right: auto;
            }
        }
        
        .fixed-header header.bodyBoxed img.logo-image-before,
        .fixed-header-item header.bodyBoxed img.logo-image-before,
        .fixed-header-item-closed header.bodyBoxed img.logo-image-before {
    		opacity: 0;  
        }
        
        .fixed-header header.bodyBoxed img.logo-image-after,
        .fixed-header-item header.bodyBoxed img.logo-image-after,
        .fixed-header-item-closed header.bodyBoxed img.logo-image-after {
    		opacity: 1;
        }
    <?php endif; ?>

	<?php if ( get_theme_mod( 'loor_header_cart_use', '1' ) == '0' ) : ?>
		.yumecommerceCart {
			display: none;
		}
	<?php endif; ?>

    
    /* Recent posts */
    ul.recent-posts-container li a.recent-post-link {
       color: <?php echo get_theme_mod('loor_recent_post_title_color','#323232') ?>; 
    }
    
    ul.recent-posts-container li a.recent-post-link:hover h4 {
       color: <?php echo get_theme_mod('loor_recent_post_title_color_hover','#CCAF7E') ?>; 
    }
    
    ul.recent-posts-container li p {
        color: <?php echo get_theme_mod('loor_recent_post_text_color','#949494') ?>; 
    }
</style>

<?php
}

add_action( 'wp_head', 'loor_sections_customize_register_css' );