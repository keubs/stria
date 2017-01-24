<?php
/**
 * Loor functions.
 */

    // Add css & js
    function loor_frontend_scripts_style() {
        
        // Load min main stylesheet
        wp_enqueue_style( 'loor-style', get_template_directory_uri() . '/style.css', array(), '1.0.6', 'all');
        
        // in footer
        wp_enqueue_script( 'jquery.lazy',  get_template_directory_uri() .'/js/jquery.lazy.min.js', array('jquery'), '1.7.3', true);
        
        wp_enqueue_script( 'velocity',  get_template_directory_uri() .'/js/velocity.min.js', array('jquery'), '1.2.3', true);
        wp_enqueue_script( 'jquery.parallax-scroll',  get_template_directory_uri() .'/js/jquery.parallax-scroll.js', array('jquery'), '1.0.0', true);
        
        wp_enqueue_script( 'swiper',  get_template_directory_uri() .'/js/swiper.min.js', array('jquery'), '1.0.0', true);

        if ( get_theme_mod( 'loor_store_page_styling_zoom', '1' ) == '1' ) {
            // This is fork version of https://github.com/jackmoore/zoom/tree/master
            wp_enqueue_script( 'loor-zoom',  get_template_directory_uri() .'/js/jquery.zoom.js', array('jquery'), '1.0.0', true);
        }
        
        wp_enqueue_script( 'loor-smooth-load',  get_template_directory_uri() .'/js/smthload.js', array('jquery'), '1.0.5', true);
        
        // Load masonry JS if masonry blog layout yes
        if ( get_theme_mod('loor_blog_layout', 'no-sidebar') == 'masonry' ) {
            wp_enqueue_script( 'masonry',  get_template_directory_uri() .'/js/masonry.pkgd.min.js', array('jquery'), '4.0.0', true);
        }
        
        // Theme main js file
        wp_enqueue_script( 'loor-main-js',  get_template_directory_uri() .'/js/main.js', array('jquery'), '1.0.6', true);
	    
	    // Comment reply js
	    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		    wp_enqueue_script( 'comment-reply' );
	    }
    }
    add_action( 'wp_enqueue_scripts', 'loor_frontend_scripts_style' );

    // Add custom style for customizer
    function loor_custom_style_customizer() { 
        wp_enqueue_style( 'loor-customizer-style', get_template_directory_uri() . '/css/cs-customizer.css', array(), '1.0.5', 'all');
    }
    add_action( 'customize_controls_print_styles', 'loor_custom_style_customizer' );
        
    // Remove website field from comments
    function loor_disable_comment_url($fields) { 
        unset($fields['url']);
        return $fields;
    }
    add_filter( 'comment_form_default_fields', 'loor_disable_comment_url' );
    
    // Add arrow icon to menu item with children
    function be_arrows_in_menus( $item_output, $item, $depth, $args ) {
	    if( in_array( 'menu-item-has-children', $item->classes ) ) {
		    $arrow = 0 == $depth ? '<i class="icon-arrow-down"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use></svg></i>' : '<i class="icon-arrow-right"></i>';
		    $item_output = str_replace( '</a>', $arrow . '</a>', $item_output );
	    }
	    return $item_output;
    }
    add_filter( 'walker_nav_menu_start_el', 'be_arrows_in_menus', 10, 4 );
    
    // Add class to body if show avatars yes
    function loor_show_avatars() {
        if ( get_option('show_avatars') ) {
            add_filter( 'body_class', 'q_show_avatars' );
            function q_show_avatars( $classes ) {
            	$classes[] = 'show-avatars';
            	return $classes;
            }
        }
    }
    add_action( 'wp_head', 'loor_show_avatars' );
    
    // Prevent page scroll when clicking the more link
    function loor_remove_more_link_scroll( $link ) {
    	$link = preg_replace( '|#more-[0-9]+|', '', $link );
    	return $link;
    }
    add_filter( 'the_content_more_link', 'loor_remove_more_link_scroll' );

    // Remove srcset
    // Clean the up the image from wp_get_attachment_image()
    function loor_remove_srcset($attr) {
        if ( isset( $attr['sizes'] ) ) {
            unset( $attr['sizes'] );
        }

        if ( isset( $attr['srcset'] ) ) {
            unset( $attr['srcset'] );
        }
        return $attr;
    }
    add_filter( 'wp_get_attachment_image_attributes', 'loor_remove_srcset', PHP_INT_MAX );

    // Override the calculated image sizes
    add_filter( 'wp_calculate_image_sizes', '__return_false',  PHP_INT_MAX );

    // Override the calculated image sources
    add_filter( 'wp_calculate_image_srcset', '__return_false', PHP_INT_MAX );

    // Remove the responsive stuff from the content
    remove_filter( 'the_content', 'wp_make_content_images_responsive' );

    // Update option of AddToAny plugin for transparent icons
    $options = get_option( 'addtoany_options' );
    if ( $options['additional_js_variables'] == '' ) {
        $options['additional_js_variables'] = 'a2a_config.icon_color = "transparent";';
        update_option('addtoany_options', $options);
    }

    // Remove WordPress Admin Bar CSS
    add_action('get_header', 'loor_remove_admin_bar_margin');
    function loor_remove_admin_bar_margin() {
        remove_action( 'wp_head', '_admin_bar_bump_cb' );
    }

    /**
     * Sets up theme defaults.
     * Loor stuff necessary for the theme
     *
     * @since  1.0
     */
    require get_template_directory() . '/setup/theme-defaults.php';

    /**
     * Add WooCommerce custom functions
     * - Check if woocomerce is active
     *
     * @since  1.0
     */
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        require get_template_directory() . '/inc/woocommerce.php';
    }

    /**
     * Setup the theme's widgets.
     *
     * @since  1.0
     */
    require get_template_directory() . '/setup/widgets.php';

    /**
     * Setup default settings after theme switch.
     *
     * @since  1.0
     */
    require get_template_directory() . '/setup/after-theme-switch.php';

    /**
     * Template tags
     *
     * @since  1.0
     */
    require get_template_directory() . '/inc/template-tags.php';

    /**
     * Registering prebuilt layouts
     *
     * @since  1.0
     */
    require get_template_directory() . '/setup/prebuilt_layouts.php';

    /**
     * Add sanitization functions.
     *
     * @since  1.0
     */
    require get_template_directory() . '/inc/sanitization-callbacks.php';

    /**
     * Add Customizer for sections.
     *
     * @since  1.0.6
     */
    require get_template_directory() . '/inc/customizer/class-loor-customizer.php';

    /**
     * Add Customizer for layout.
     *
     * @since  1.0
     */
    require get_template_directory() . '/inc/layout-customizer.php';

    /**
     * Add Customizer for typography.
     *
     * @since  1.0
     */
    require get_template_directory() . '/inc/typography/typography.php';

    /**
     * Add Customizer for sections.
     *
     * @since  1.0
     */
    require get_template_directory() . '/inc/sections-customizer.php';

    /**
     * Add Customizer for store.
     *
     * @since  1.0
     */
    require get_template_directory() . '/inc/store-customizer.php';

    /**
     * Add Customizer for footer.
     *
     * @since  1.0
     */
    require get_template_directory() . '/inc/footer-customizer.php';

    /**
     * Theme settings
     *
     * @since  1.0
     */
    require get_template_directory() . '/inc/theme-options.php';

    /**
     * Theme settings
     *
     * @since  1.0
     */
    require get_template_directory() . '/inc/tgm-plugin.php';

    /**
     * Theme dummy content import
     *
     * @since  1.0
     */
    require get_template_directory() .'/inc/one-click-demo-install.php';