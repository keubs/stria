<?php

// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
    wp_die();
}
// Create a helper function for easy SDK access.
function iconic_ecifw_fs()
{
    global  $iconic_ecifw_fs, $iconic_woo_enhanced_catalog_images ;
    
    if ( !isset( $iconic_ecifw_fs ) ) {
        // Include Freemius SDK.
        require_once dirname( __FILE__ ) . '/../vendor/freemius/start.php';
        $iconic_ecifw_fs = fs_dynamic_init( array(
            'id'             => '444',
            'slug'           => 'enhanced-catalog-images-for-woocommerce',
            'type'           => 'plugin',
            'public_key'     => 'pk_51bc21e5b161ab3013dcbb0708b12',
            'is_premium'     => false,
            'has_addons'     => false,
            'has_paid_plans' => true,
            'menu'           => array(
            'slug'    => 'iconic-ecifw-settings',
            'account' => false,
            'contact' => false,
            'support' => false,
            'pricing' => false,
            'parent'  => array(
            'slug' => 'iconicwp',
        ),
        ),
            'is_live'        => true,
        ) );
    }
    
    return $iconic_ecifw_fs;
}

/**
 * Add buttons to freemius sub pages on our
 * settings page
 */
function iconic_ecifw_output_freemius_notices()
{
    global  $iconic_ecifw_fs ;
    $buttons = array();
    
    if ( $iconic_ecifw_fs->is_not_paying() ) {
        $buttons[] = array(
            'label' => __( 'Upgrade', 'iconic-ecifw' ),
            'href'  => $iconic_ecifw_fs->get_upgrade_url(),
            'class' => 'button button--iconic-ecifw-upgrade',
        );
        if ( $iconic_ecifw_fs->is_registered() ) {
            $buttons[] = array(
                'label' => __( 'Manage License', 'iconic-ecifw' ),
                'href'  => $iconic_ecifw_fs->get_account_url(),
                'class' => 'button',
            );
        }
    } else {
        $buttons[] = array(
            'label' => __( 'Manage License', 'iconic-ecifw' ),
            'href'  => $iconic_ecifw_fs->get_account_url(),
            'class' => 'button',
        );
    }
    
    ?>

    <div class="iconic-ecifw-buttons">
        <?php 
    foreach ( $buttons as $button ) {
        ?>
            <a href="<?php 
        echo  $button['href'] ;
        ?>
" class="<?php 
        echo  $button['class'] ;
        ?>
"><?php 
        echo  $button['label'] ;
        ?>
</a>
        <?php 
    }
    ?>
    </div>

    <?php 
}

add_action( 'wpsf_before_settings_iconic_ecifw', 'iconic_ecifw_output_freemius_notices', 10 );
/**
 * Highlight admin top level and submenu when viewing freemius pages
 */
function iconic_ecifw_menu_highlight()
{
    global  $plugin_page, $submenu_file ;
    
    if ( iconic_ecifw_is_settings_page() ) {
        $submenu_file = 'iconic-ecifw-settings';
        $plugin_page = 'iconicwp';
    }

}

add_action( 'admin_head', 'iconic_ecifw_menu_highlight' );
/**
 * Check if we're on the plugin's settings page
 */
function iconic_ecifw_is_settings_page()
{
    if ( !isset( $_GET['page'] ) ) {
        return false;
    }
    if ( strpos( $_GET['page'], 'iconic-ecifw-' ) === false ) {
        return false;
    }
    return true;
}

/**
 * Inject custom pricing page styles
 */
function iconic_ecifw_freemius_styles()
{
    if ( !iconic_ecifw_is_settings_page() ) {
        return;
    }
    global  $iconic_woo_enhanced_catalog_images ;
    $_GET['custom_css'] = $iconic_woo_enhanced_catalog_images->plugin_url . 'assets/admin/css/freemius.css';
}

add_action( 'admin_head', 'iconic_ecifw_freemius_styles' );