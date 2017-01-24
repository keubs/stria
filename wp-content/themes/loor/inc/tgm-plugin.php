<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/inc/tgm-plugin/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'loor_register_required_plugins' );

function loor_register_required_plugins() {
    /*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
        array(
			'name'                  => __('WooCommerce', 'loor'),
			'slug'                  => 'woocommerce',
			'required'              => true,
		),
		array(
			'name'     				=> __('Contact Form 7', 'loor'),
			'slug'     				=> 'contact-form-7',
			'required' 				=> false,
		),
		array(
			'name'     				=> __('Page Builder by SiteOrigin', 'loor'),
			'slug'     				=> 'siteorigin-panels',
			'required' 				=> true,
		),
		array(
			'name'     				=> __('SiteOrigin Widgets Bundle', 'loor'),
			'slug'     				=> 'so-widgets-bundle',
			'required' 				=> true,
		),
		array(
			'name'     				=> __('One Click Demo Import', 'loor'),
			'slug'     				=> 'one-click-demo-import',
			'required' 				=> false,
		),
		array(
			'name'     				=> __('Envato Market', 'loor'),
			'slug'     				=> 'envato-market',
			'source'   				=> get_template_directory() . '/plugins/envato-market.zip',
			'required' 				=> false, 
			'version' 				=> '1.0.0-RC2', 
		),
		array(
			'name'     				=> __('AddToAny Share Buttons', 'loor'),
			'slug'     				=> 'add-to-any',
			'required' 				=> false,
		),
		array(
			'name'     				=> __('YumeCommerce Widgets Bundle for SiteOrigin', 'loor'),
			'slug'     				=> 'yc-widgets-bundle',
			'source'   				=> get_template_directory() . '/plugins/yc-widgets-bundle.zip',
			'required' 				=> true, 
			'version' 				=> '1.0.5',
		),
        array(
            'name'     				=> __('Slider Revolution', 'loor'),
            'slug'     				=> 'revslider',
            'source'   				=> get_template_directory() . '/plugins/revslider.zip',
            'required' 				=> true,
            'version' 				=> '5.3.0.1',
        ),
    );
    
    $config = array(
		'id'           => 'loor',				   // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);
    tgmpa( $plugins, $config );
}