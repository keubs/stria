<?php

/**
 * Plugin Name: Enhanced Catalog Images for WooCommerce
 * Plugin URI: https://iconicwp.com
 * Description: Enhance your WooCommerce catalog images with multiple effects.
 * Version: 1.0.0
 * Author: Iconic <support@iconicwp.com>
 * Author URI: https://iconicwp.com
 * Text Domain: iconic-woo-enhanced-catalog-images
 *
 * @fs_premium_only /templates/premium/, /inc/class-premium.php, /assets/vendor/imagezoom.css, /assets/vendor/jquery.imagezoom.js, /assets/vendor/jquery.magnific-popup.min.js, /assets/vendor/lens.png, /assets/vendor/loading.gif, /assets/vendor/magnific-popup.css
 */
if ( !defined( 'WPINC' ) ) {
    wp_die();
}
require_once dirname( __FILE__ ) . '/inc/admin/freemius.php';
class Iconic_Woo_Enhanced_Catalog_Images
{
    /**
     * Long name
     *
     * @since 1.0.0
     * @access protected
     * @var string $name
     */
    protected  $name = 'Enhanced Catalog Images for WooCommerce' ;
    /**
     * Short name
     *
     * @since 1.0.0
     * @access protected
     * @var string $shortname
     */
    protected  $shortname = 'Enhanced Catalog Images' ;
    /**
     * Slug - Hyphen
     *
     * @since 1.0.0
     * @access protected
     * @var string $slug
     */
    protected  $slug = 'iconic-ecifw' ;
    /**
     * Slug - Underscore
     *
     * @since 1.0.0
     * @access protected
     * @var string $slug_alt
     */
    protected  $slug_alt ;
    /**
     * Class prefix
     *
     * @since 1.0.0
     * @access protected
     * @var string $class_prefix
     */
    protected  $class_prefix = 'Iconic_ECIFW_' ;
    /**
     * Version
     *
     * @since 1.0.0
     * @access protected
     * @var string $version
     */
    protected  $version = '1.0.0' ;
    /**
     * Plugin path
     *
     * @since 1.0.0
     * @access protected
     * @var string $plugin_path trailing slash
     */
    protected  $plugin_path ;
    /**
     * Plugin URL
     *
     * @since 1.0.0
     * @access protected
     * @var string $plugin_url trailing slash
     */
    public  $plugin_url ;
    /*
     * Variable to hold settings
     *
     * @var arr
     */
    public  $settings ;
    /*
     * Freemius
     *
     * @var obj
     */
    public  $freemius ;
    /**
     * @var JCK_Woo_Quickview_Template_Loader
     */
    public  $templates ;
    /**
     * Construct
     */
    public function __construct()
    {
        $this->textdomain();
        $this->set_constants();
        $this->load_classes();
        $this->load_dashboard();
        $this->init_settings();
        add_action( 'init', array( $this, 'initiate_hook' ) );
    }
    
    /**
     * Load textdomain
     */
    public function textdomain()
    {
        load_plugin_textdomain( 'iconic-woo-enhanced-catalog-images', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }
    
    /**
     * Set constants
     */
    public function set_constants()
    {
        $this->plugin_path = plugin_dir_path( __FILE__ );
        $this->plugin_url = plugin_dir_url( __FILE__ );
        $this->slug_alt = str_replace( '-', '_', $this->slug );
        $this->freemius = iconic_ecifw_fs();
    }
    
    /**
     * Load classes
     */
    private function load_classes()
    {
        spl_autoload_register( array( $this, 'autoload' ) );
        $this->templates = new Iconic_Template_Loader( $this->slug, 'enhanced-catalog-images-for-woocommerce', $this->plugin_path );
    }
    
    /**
     * Autoloader
     *
     * Classes should reside within /inc and follow the format of
     * Iconic_The_Name ~ class-the-name.php or Iconic_ECIFW_The_Name ~ class-the-name.php
     */
    private function autoload( $class_name )
    {
        /**
         * If the class being requested does not start with our prefix,
         * we know it's not one in our project
         */
        if ( 0 !== strpos( $class_name, 'Iconic_' ) && 0 !== strpos( $class_name, $this->class_prefix ) ) {
            return;
        }
        $file_name = strtolower( str_replace( array( $this->class_prefix, 'Iconic_', '_' ), array( '', '', '-' ), $class_name ) );
        // Compile our path from the current location
        $files = array(
            dirname( __FILE__ ) . '/inc/class-' . $file_name . '.php',
            dirname( __FILE__ ) . '/inc/class-' . $file_name . '__premium_only.php',
            dirname( __FILE__ ) . '/inc/vendor/class-' . $file_name . '.php',
            dirname( __FILE__ ) . '/inc/admin/class-' . $file_name . '.php',
            dirname( __FILE__ ) . '/inc/frontend/class-' . $file_name . '.php'
        );
        foreach ( $files as $file ) {
            // If a file is found
            if ( file_exists( $file ) ) {
                // Then load it up!
                require $file;
            }
        }
    }
    
    /**
     * Load dashboard
     */
    public function load_dashboard()
    {
        if ( !is_admin() ) {
            return;
        }
        Iconic_Dashboard::instance();
    }
    
    /**
     * Init Settings
     */
    protected function init_settings()
    {
        $settings = new Iconic_ECIFW_Load_Settings( $this->name, $this->shortname );
        $this->settings = apply_filters( 'iconic_ecifw_settings', $settings->settings );
    }
    
    /**
     * Init
     */
    public function initiate_hook()
    {
        
        if ( is_admin() ) {
            add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
            add_action( 'admin_enqueue_scripts', array( $this, 'admin_styles' ) );
        } else {
            add_action( 'wp_enqueue_scripts', array( $this, 'frontend_scripts' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'frontend_styles' ) );
            $this->remove_actions();
            $this->add_actions();
        }
    
    }
    
    /**
     * Frontend: Styles
     */
    public function frontend_styles()
    {
        wp_register_style(
            'slick-slider',
            $this->plugin_url . 'assets/vendor/slick.css',
            array(),
            $this->version
        );
        wp_register_style(
            'imagezoom',
            $this->plugin_url . 'assets/vendor/imagezoom.css',
            array(),
            $this->version
        );
        wp_register_style(
            'magnific-popup',
            $this->plugin_url . 'assets/vendor/magnific-popup.css',
            array(),
            $this->version
        );
        wp_register_style(
            'iconic-ecifw-styles',
            $this->plugin_url . 'assets/frontend/css/main.min.css',
            array(),
            $this->version
        );
        if ( $this->requires_slick() ) {
            wp_enqueue_style( 'slick-slider' );
        }
        if ( $this->requires_zoom() ) {
            wp_enqueue_style( 'imagezoom' );
        }
        if ( $this->requires_magnific() ) {
            wp_enqueue_style( 'magnific-popup' );
        }
        wp_enqueue_style( 'iconic-ecifw-styles' );
        add_action( 'wp_head', array( $this, 'dynamic_css' ) );
    }
    
    /**
     * Frontend: Dynamic CSS
     */
    public function dynamic_css()
    {
        $effect = $this->settings['general_display_effect'];
        if(!isset($this->settings['effects_thumbnails_column_count'])){
            $cols = 3;
        } else {
            $cols = $this->settings['effects_thumbnails_column_count'];
        }
        $css = array(
            'fade'               => array(
            '.iconic-ecifw-product-image--fade img:first-child' => array(
            'transition-duration' => sprintf( '%sms', $this->settings['effects_fade_transition_speed'] ),
        ),
        ),
            'slide'              => array(
            '.iconic-ecifw-product-image__arrow' => array(
            'color' => $this->settings['general_colours_icons'],
        ),
        ),
            'bullets-premium'    => array(
            '.iconic-ecifw-product-image--bullets .slick-dots li button'              => array(
            'background-color' => sprintf( 'rgba(%s, 0.5)', $this->hex2rgb( $this->settings['general_colours_icons'] ) ),
        ),
            '.iconic-ecifw-product-image--bullets .slick-dots li button:hover'        => array(
            'background-color' => sprintf( 'rgba(%s, 1)', $this->hex2rgb( $this->settings['general_colours_icons'] ) ),
        ),
            '.iconic-ecifw-product-image--bullets .slick-dots li.slick-active button' => array(
            'background-color' => 'transparent',
            'box-shadow'       => sprintf( '0 0 0 2px rgba(%s, 1)', $this->hex2rgb( $this->settings['general_colours_icons'] ) ),
        ),
        ),
            'thumbnails-premium' => array(
            '.iconic-ecifw-product-image__thumbnails'    => array(
            'margin' => sprintf(
            '%dpx -%dpx -%dpx',
            $this->settings['effects_thumbnails_spacing'],
            $this->settings['effects_thumbnails_spacing'] / 2,
            $this->settings['effects_thumbnails_spacing']
        ),
        ),
            '.iconic-ecifw-product-image__thumbnails li' => array(
            'padding' => sprintf( '0 %dpx %dpx', $this->settings['effects_thumbnails_spacing'] / 2, $this->settings['effects_thumbnails_spacing'] ),
            'width'   => sprintf( '%.04f%%', 100 / $cols ),
        ),
        ),
            'flip-premium'       => array(
            '.iconic-ecifw-product-image__flipper' => array(
            'transition-duration' => sprintf( '%dms', $this->settings['effects_flip_transition_speed'] ),
        ),
        ),
            'enlarge-premium'    => array(
            '.iconic-ecifw-product-image--enlarge img'       => array(
            'transition-duration' => sprintf( '%dms', $this->settings['effects_enlarge_transition_speed'] ),
        ),
            '.iconic-ecifw-product-image--enlarge:hover img' => array(
            'transform' => sprintf( 'scale(%.02f)', $this->settings['effects_enlarge_amount'] / 100 ),
        ),
        ),
            'pip-premium'        => array(
            '.iconic-ecifw-product-image__pip-switch'     => array(
            'width' => sprintf( '%d%%', $this->settings['effects_pip_width'] ),
        ),
            '.iconic-ecifw-product-image__pip-switch img' => array(
            'border-color' => $this->settings['effects_pip_border_color'],
        ),
        ),
            'modal-premium'      => array(
            '.iconic-ecifw-product-image__modal-button' => array(
            'color' => $this->settings['general_colours_icons'],
        ),
        ),
        );
        if ( !isset( $css[$effect] ) ) {
            return;
        }
        ?>
        <style type="text/css">

            <?php 
        foreach ( $css[$effect] as $selector => $declaration ) {
            ?>

                <?php 
            echo  $selector ;
            ?>
 {
                    <?php 
            foreach ( $declaration as $property => $value ) {
                ?>
                        <?php 
                echo  $property ;
                ?>
: <?php 
                echo  $value ;
                ?>
;
                    <?php 
            }
            ?>
                }

            <?php 
        }
        ?>

        </style>
        <?php 
    }
    
    /**
     * Frontend: Scripts
     */
    public function frontend_scripts()
    {
        wp_register_script(
            'slick-slider',
            $this->plugin_url . 'assets/vendor/slick.min.js',
            array( 'jquery' ),
            $this->version,
            true
        );
        wp_register_script(
            'imagezoom',
            $this->plugin_url . 'assets/vendor/jquery.imagezoom.js',
            array( 'jquery' ),
            $this->version,
            true
        );
        wp_register_script(
            'magnific-popup',
            $this->plugin_url . 'assets/vendor/jquery.magnific-popup.min.js',
            array( 'jquery' ),
            $this->version,
            true
        );
        wp_register_script(
            'iconic-ecifw-scripts',
            $this->plugin_url . 'assets/frontend/js/main.min.js',
            array( 'jquery' ),
            $this->version,
            true
        );
        if ( $this->requires_slick() ) {
            wp_enqueue_script( 'slick-slider' );
        }
        if ( $this->requires_zoom() ) {
            wp_enqueue_script( 'imagezoom' );
        }
        if ( $this->requires_magnific() ) {
            wp_enqueue_script( 'magnific-popup' );
        }
        wp_enqueue_script( 'iconic-ecifw-scripts' );
        $vars = array(
            'ajaxurl'  => admin_url( 'admin-ajax.php' ),
            'nonce'    => wp_create_nonce( $this->slug ),
            'settings' => $this->settings,
        );
        wp_localize_script( 'iconic-ecifw-scripts', 'iconic_ecifw_vars', $vars );
    }
    
    /**
     * Remove actions
     */
    public function remove_actions()
    {
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
        remove_action( 'woocommerce_before_shop_loop_item_title', 'avia_woocommerce_thumbnail', 10 );
    }
    
    /**
     * Add actions
     */
    public function add_actions()
    {
        add_action( 'woocommerce_before_shop_loop_item', array( $this, 'template_loop_product_thumbnail' ), 5 );
    }
    
    /**
     * Template loop product thumbnail
     */
    public function template_loop_product_thumbnail()
    {
        $effect = $this->settings['general_display_effect'];
        $template_name = 'product-image-' . $effect . '.php';
        $template = $this->templates->locate_template( $template_name );
        if ( !$template ) {
            return;
        }
        include $template;
    }
    
    /**
     * Helper: Get product images
     *
     * @param int $count
     * @return arr
     */
    public function get_product_images( $count = -1 )
    {
        global  $product, $post ;
        $images = array();
        $large_image_size = false;
        $image_size = apply_filters( 'single_product_archive_thumbnail_size', 'shop_catalog' );
        // Featured image
        $images[] = $this->get_product_thumbnail( $image_size );
        // Gallery images
        $attachment_ids = $product->get_gallery_attachment_ids();
        
        if ( $this->settings['general_display_effect'] == 'modal-premium' ) {
            $image_size = apply_filters( 'iconic_ecifw_large_size', 'large' );
            $post_thumbnail_id = get_post_thumbnail_id();
            
            if ( $post_thumbnail_id ) {
                $count = ( $count >= 1 ? $count + 1 : $count );
                $attachment_ids = ( $attachment_ids ? $attachment_ids : array() );
                array_unshift( $attachment_ids, get_post_thumbnail_id() );
            }
        
        }
        
        
        if ( $attachment_ids && !empty($attachment_ids) ) {
            
            if ( $this->settings['general_display_effect'] == 'thumbnails-premium' ) {
                $count = ( $count >= 1 ? $count + 1 : $count );
                $large_image_size = $image_size;
                $image_size = apply_filters( 'iconic_ecifw_thumbnail_size', 'thumbnail' );
                array_unshift( $attachment_ids, get_post_thumbnail_id() );
            }
            
            foreach ( $attachment_ids as $attachment_id ) {
                if ( count( $images ) == $count ) {
                    break;
                }
                $props = wc_get_product_attachment_props( $attachment_id, $post );
                
                if ( $large_image_size ) {
                    $large_image = wp_get_attachment_image_src( $attachment_id, $large_image_size );
                    if ( $large_image ) {
                        $props = array_merge( array(
                            'data-large-image'        => $large_image[0],
                            'data-large-image-srcset' => wp_get_attachment_image_srcset( $attachment_id, $large_image_size ),
                            'data-large-image-sizes'  => wp_get_attachment_image_sizes( $attachment_id, $large_image_size ),
                        ), $props );
                    }
                }
                
                $images[] = wp_get_attachment_image(
                    $attachment_id,
                    $image_size,
                    0,
                    $props
                );
            }
        }
        
        return $images;
    }
    
    /**
     * Get product thumbnail
     *
     * @param str $image_size
     * @return str
     */
    public function get_product_thumbnail( $image_size )
    {
        global  $post, $product ;
        
        if ( has_post_thumbnail() ) {
            $props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
            $image_id = get_post_thumbnail_id();
            $image_args = array(
                'title' => $props['title'],
                'alt'   => $props['alt'],
            );
            
            if ( $this->settings['general_display_effect'] == 'zoom-premium' ) {
                $large_image_size = apply_filters( 'iconic_ecifw_large_size', 'large' );
                $large_image = wp_get_attachment_image_src( $image_id, $large_image_size );
                $large_image_src = ( $large_image ? $large_image[0] : '' );
                $image_args['data-large-image'] = $large_image_src;
                $image_args['data-large-image-srcset'] = wp_get_attachment_image_srcset( $image_id, $large_image_size );
                $image_args['data-large-image-sizes'] = wp_get_attachment_image_sizes( $image_id, $large_image_size );
            }
            
            return wp_get_attachment_image(
                $image_id,
                $image_size,
                false,
                $image_args
            );
        } elseif ( wc_placeholder_img_src() ) {
            return wc_placeholder_img( $image_size );
        }
    
    }
    
    /**
     * Helper: get slick params
     *
     * If we're using a slider effect, get the slick params
     * for each product
     *
     * @return str
     */
    public function get_slick_params()
    {
        $slick_params = array();
        $effect = $this->settings['general_display_effect'];
        
        if ( $effect == 'slide' ) {
            $speed = ( empty($this->settings['effects_slide_transition_speed']) ? 300 : $this->settings['effects_slide_transition_speed'] );
            $mode = $this->settings['effects_slide_mode'];
            $touch = bool_from_yn( $this->settings['effects_slide_touch'] );
            $icon_style = $this->settings['effects_slide_navigation_icon_style'];
            $slick_params['swipe'] = $touch;
            $slick_params['touchMove'] = $touch;
            $slick_params['speed'] = $speed;
            
            if ( $mode == 'horizontal' ) {
                $slick_params['prevArrow'] = sprintf( '<i class="iconic-ecifw-icon-%s-left iconic-ecifw-product-image__arrow iconic-ecifw-product-image__arrow--prev"></i>', $icon_style );
                $slick_params['nextArrow'] = sprintf( '<i class="iconic-ecifw-icon-%s-right iconic-ecifw-product-image__arrow iconic-ecifw-product-image__arrow--next"></i>', $icon_style );
            }
            
            
            if ( $mode == 'vertical' ) {
                $slick_params['vertical'] = true;
                $slick_params['verticalSwiping'] = $touch;
                $slick_params['prevArrow'] = sprintf( '<i class="iconic-ecifw-icon-%s-up iconic-ecifw-product-image__arrow iconic-ecifw-product-image__arrow--up"></i>', $icon_style );
                $slick_params['nextArrow'] = sprintf( '<i class="iconic-ecifw-icon-%s-down iconic-ecifw-product-image__arrow iconic-ecifw-product-image__arrow--down"></i>', $icon_style );
            }
        
        }
        
        
        if ( $effect == 'bullets-premium' ) {
            $speed = ( empty($this->settings['effects_bullets_transition_speed']) ? 300 : $this->settings['effects_bullets_transition_speed'] );
            $mode = $this->settings['effects_bullets_mode'];
            $touch = bool_from_yn( $this->settings['effects_bullets_touch'] );
            $slick_params['dots'] = true;
            $slick_params['arrows'] = false;
            $slick_params['speed'] = $speed;
            $slick_params['swipe'] = $touch;
            $slick_params['touchMove'] = $touch;
            
            if ( $mode == 'vertical' ) {
                $slick_params['vertical'] = true;
                $slick_params['verticalSwiping'] = $touch;
            }
            
            if ( $mode == 'fade' ) {
                $slick_params['fade'] = true;
            }
        }
        
        return $this->convert_to_json_attribute( apply_filters( 'iconic_ecifw_slick_params', $slick_params ) );
    }
    
    /**
     * Helper: Convert to JSON attribute
     *
     * @param arr $array
     * @return str
     */
    public function convert_to_json_attribute( $array )
    {
        return esc_attr( htmlspecialchars( json_encode( $array ), ENT_QUOTES, 'UTF-8' ) );
    }
    
    /**
     * Helper: Requires slick
     *
     * Does the chosen effect require slick?
     *
     * @return bool
     */
    public function requires_slick()
    {
        switch ( $this->settings['general_display_effect'] ) {
            case 'slide':
            case 'bullets-premium':
                return true;
            default:
                return false;
        }
    }
    
    /**
     * Helper: Requires zoom
     *
     * Does the chosen effect require zoom?
     *
     * @return bool
     */
    public function requires_zoom()
    {
        switch ( $this->settings['general_display_effect'] ) {
            case 'zoom-premium':
                return true;
            default:
                return false;
        }
    }
    
    /**
     * Helper: Requires magnific
     *
     * Does the chosen effect require magnific?
     *
     * @return bool
     */
    public function requires_magnific()
    {
        switch ( $this->settings['general_display_effect'] ) {
            case 'modal-premium':
                return true;
            default:
                return false;
        }
    }
    
    /**
     * Admin: Styles
     */
    public function admin_styles()
    {
        global  $post, $pagenow ;
        wp_register_style(
            'iconic-ecifw-admin-styles',
            $this->plugin_url . 'assets/admin/css/main.min.css',
            array(),
            $this->version
        );
        wp_enqueue_style( 'iconic-ecifw-admin-styles' );
    }
    
    /**
     * Admin: Scripts
     */
    public function admin_scripts()
    {
        global  $post, $pagenow ;
        wp_register_script(
            'iconic-ecifw-admin-scripts',
            $this->plugin_url . 'assets/admin/js/main.min.js',
            array( 'jquery' ),
            $this->version,
            true
        );
        wp_enqueue_script( 'iconic-ecifw-admin-scripts' );
    }
    
    /**
     * Hex to RGB
     *
     * @param str $hex
     * @return str
     */
    public function hex2rgb( $hex )
    {
        $hex = str_replace( '#', '', $hex );
        
        if ( strlen( $hex ) == 3 ) {
            $r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
            $g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
            $b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
        } else {
            $r = hexdec( substr( $hex, 0, 2 ) );
            $g = hexdec( substr( $hex, 2, 2 ) );
            $b = hexdec( substr( $hex, 4, 2 ) );
        }
        
        $rgb = array( $r, $g, $b );
        return implode( ',', $rgb );
    }

}
$iconic_woo_enhanced_catalog_images = new Iconic_Woo_Enhanced_Catalog_Images();