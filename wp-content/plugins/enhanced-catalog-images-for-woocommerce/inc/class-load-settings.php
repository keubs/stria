<?php

if ( ! defined( 'WPINC' ) )
    wp_die();

/**
 * Load settings framework
 *
 * Class to load the settings framework. Keeps
 * everything contained ina  single place.
 *
 * @param str $name
 * @param str $shortname
 */
class Iconic_ECIFW_Load_Settings {

    /**
     * Name
     *
     * @access protected
     * @var string $name
     */
    protected $name;

    /**
     * Short Name
     *
     * @access protected
     * @var string $shortname
     */
    protected $shortname;

    /**
     * Option Group
     *
     * @access protected
     * @var string $option_group
     */
    protected $option_group = "iconic_ecifw";

    /**
     * Settings Framework
     *
     * @access protected
     * @var obj $settings_framework
     */
    protected $settings_framework;

    /**
     * Settings
     *
     * @access protected
     * @var arr $settings
     */
    public $settings;

    /**
     * Construct
     */
    public function __construct( $name = false, $shortname = false ) {

        $this->name = $name;
        $this->shortname = $shortname;

        $this->load_settings_framework();

    }

    /**
     * Load settings framework
     */
    public function load_settings_framework() {

        require_once( dirname(__FILE__) .'/vendor/wp-settings-framework/wp-settings-framework.php' );

        $this->settings_framework = new WordPressSettingsFramework( dirname(__FILE__) .'/admin/settings.php', $this->option_group );

        $this->settings = $this->settings_framework->get_settings();

        // Add admin menu
        add_action( 'admin_menu', array( $this, 'add_settings_page' ), 100 );

        // Validate Settings
        add_filter( $this->option_group .'_settings_validate', array( $this, 'validate_settings' ), 10, 1 );

    }

    /**
     * Admin: Add settings menu item
     */
    public function add_settings_page() {

        $this->settings_framework->add_settings_page( array(
            'parent_slug' => 'iconicwp',
            'page_title' => $this->name,
            'menu_title' => $this->shortname,
            'capability' => 'manage_woocommerce'
        ) );

    }

    /**
     * Admin: Validate Settings
     *
     * @param arr $settings Un-validated settings
     * @return arr $validated_settings
     */
    public function validate_settings( $settings ) {

        // add_settings_error( $setting, esc_attr( 'iconic-woothumbs-error' ), $message, 'error' );

        return $settings;

    }

}