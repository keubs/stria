<?php
/*
 * Plugin Name: YumeCommerce Widgets Bundle for SiteOrigin
 * Description: A collection of widgets.
 * Version: 1.0.5
 * Text Domain: yc-widgets-bundle
 * Domain Path: /languages
 * Author: YumeCommerce
 * Author URI: http://yumecommerce.com
 * Plugin URI: http://yumecommerce.com
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
*/

if ( ! defined( 'ABSPATH' ) ) exit;

define('YC_BUNDLE_VERSION', '1.0');
define('YC_BUNDLE_BASE_FILE', __FILE__);

if ( ! class_exists( 'YC_Widgets_Bundle' ) ) {
	/**
	 * Main class
	 */
	class YC_Widgets_Bundle {

		/**
		 * Instance of this class.
		 *
		 * @var object
		 */
		private static $instance = null;

		// protected $photoswipe_settings;

		/**
		 * Return an instance of this class.
		 *
		 * @return object A single instance of this class.
		 */
		public static function get_instance() {
			if ( null == self::$instance ) {
				self::$instance = new self;
				//self::$instance->includes();
			}
			return self::$instance;
		}

		private function includes() {
           require_once YC_BUNDLE_BASE_FILE . 'inc/yc-tab-class.php';
        }

		/**
		 * Initialize the plugin public actions.
		 */
		private function __construct() {
			add_action( 'init', array( $this, 'set_plugin_textdomain' ) );
			add_filter( 'siteorigin_widgets_widget_folders', array( &$this, 'path_extras_widgets' ) );
			add_filter( 'siteorigin_panels_widget_dialog_tabs', array( &$this, 'add_widget_tabs' ), 20  );
			add_filter( 'siteorigin_panels_widgets', array( &$this, 'set_widget_icon_group' ) );

			add_filter('siteorigin_panels_row_style_fields', array($this, 'row_style_fields'));
			add_filter('siteorigin_panels_row_style_attributes', array($this, 'row_style_attributes'), 10, 2);
			add_filter('siteorigin_panels_css_object', array($this, 'filter_css_object'), 10, 3);
		}

		function row_style_fields($fields) {
			$fields['yc_desktop_padding'] = array(
			    'name' => __('Padding', 'yc-widgets-bundle'),
			    'type' => 'measurement',
			    'group' => 'layout',
			    'description' => __('Padding for the row in desktop resolutions.', 'yc-widgets-bundle'),
			    'priority' => 21,
			    'multiple' => true
			);
			$fields['yc_tablet_padding'] = array(
			    'name' => __('Padding in Tablet resolution', 'yc-widgets-bundle'),
			    'type' => 'measurement',
			    'group' => 'layout',
			    'description' => __('Padding for the row in tablet resolutions.', 'yc-widgets-bundle'),
			    'priority' => 23,
			    'multiple' => true
			);
			$fields['yc_mobile_padding'] = array(
			    'name' => __('Padding in Mobile resolution', 'yc-widgets-bundle'),
			    'type' => 'measurement',
			    'group' => 'layout',
			    'description' => __('Top Padding for the row in mobile resolutions.', 'yc-widgets-bundle'),
			    'priority' => 25,
			    'multiple' => true
			);
			return $fields;
		}

		function row_style_attributes($attributes, $args) {
            if ( !empty($args['yc_desktop_padding']) || !empty($args['yc_tablet_padding']) || !empty($args['yc_mobile_padding']) ) {
                if (empty($attributes['class']))
                    $attributes['class'] = array();

                $attributes['class'][] = 'yc-row';
            }
            return $attributes;
        }

		function filter_css_object($css, $panels_data, $post_id) {
		    foreach ($panels_data['grids'] as $gi => $grid) {

		        $grid_id = !empty($grid['style']['id']) ? (string)sanitize_html_class($grid['style']['id']) : intval($gi);

		        $padding = (isset($grid['style']['yc_desktop_padding']) ? $grid['style']['yc_desktop_padding'] : null);

		        // Filter the bottom margin for this row with the arguments
		        if ($padding)
		            $css->add_row_css($post_id, $grid_id, '.yc-row', array('padding' => $padding . '!important'), 1920);

		        $padding = (isset($grid['style']['yc_tablet_padding']) ? $grid['style']['yc_tablet_padding'] : null);

		        // Filter the bottom margin for this row with the arguments
		        if ($padding)
		            $css->add_row_css($post_id, $grid_id, '.yc-row', array('padding' => $padding . '!important'), 960);

		        $padding = (isset($grid['style']['yc_mobile_padding']) ? $grid['style']['yc_mobile_padding'] : null);

		        // Filter the bottom margin for this row with the arguments
		        if ($padding)
		            $css->add_row_css($post_id, $grid_id, '.yc-row', array('padding' => $padding . '!important'), 478);
		    }
		    return $css;
		}

		/**
		 * Set the text domain for the plugin
		 *
		 * @action plugins_loaded
		 */
		function set_plugin_textdomain(){
			load_plugin_textdomain('yc-widgets-bundle', false, dirname( plugin_basename( __FILE__ ) ). '/languages/');
		}

		/**
		 * Set path for extra widgets
		 *
		 * @param $folders
		 *
		 * @return void
		 * @since 1.0.0
		 */
		function path_extras_widgets( $folders ) {
			$folders[] = plugin_dir_path ( __FILE__ ) . 'widgets/';

			return $folders;
		}

		/**
		 * Add Widgets Tabs for theme
		 *
		 * @param $tabs
		 *
		 * @return void
		 * @since 1.0.0
		 */
		function add_widget_tabs( $tabs ) {
			$tabs[] = array(
				'title' => __( 'YumeCommerce Widgets Bundle', 'yc-widgets-bundle' ),
				'filter' => array(
					'groups' => array( 'yc-widgets-bundle' )
				)
			);

			return $tabs;
		}

		/**
		 * Add Widgets icons and groups for all extra Widgets
		 *
		 * @param $widgets
		 *
		 */
		function set_widget_icon_group( $widgets ) {

			$yc_widgets = array(
				'YumeCommerce_Woo_All_Products_Widget',
				'YumeCommerce_Recent_Posts_Widget',
				'YumeCommerce_Widget_Headline_Widget',
				'YumeCommerce_Widget_Button_Widget',
				'YumeCommerce_Widget_Features_Widget',
				'YumeCommerce_Tabs_Widget',
			);

			foreach ( $yc_widgets as $yc_widget ) :

				if ( isset( $widgets[$yc_widget] ) ) :
					$widgets[$yc_widget]['groups'] = array( 'yc-widgets-bundle' );
					$widgets[$yc_widget]['icon']   = 'dashicons dashicons-screenoptions yumecommerce-icon-wb';
				endif;

			endforeach;

			return $widgets;
		}
	}

	add_action( 'plugins_loaded', array( 'YC_Widgets_Bundle', 'get_instance' ), 0 );
}