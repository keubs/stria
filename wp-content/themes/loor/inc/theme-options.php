<?php
/**
 * Create some basic theme options
 */

function loor_display_custom_css() {
?>
    <p><b><?php esc_html_e( 'Custom CSS', 'loor' ); ?></b><br><span class="description"><?php esc_html_e( 'Enter your custom CSS code. It will be included in the head section of the page and will overwrite the main CSS styling.', 'loor' ); ?></span></p>
    <textarea type="text" name="loor_custom_css" id="loor_custom_css" /><?php echo get_option('loor_custom_css'); ?></textarea>
<?php
}

function loor_display_custom_js() {
?>
    <p><b><?php esc_html_e( 'Custom JavaScript', 'loor' ); ?></b><br><span class="description"><?php esc_html_e( 'This javascript code will be loaded in the footer. Do not pass script tags.', 'loor' ); ?></span></p>
    <textarea type="text" name="loor_custom_js" id="loor_custom_js" /><?php echo get_option('loor_custom_js'); ?></textarea>
<?php
}

function loor_display_seo() {
?>
    <p><b><?php esc_html_e( 'Theme SEO', 'loor' ); ?></b><br><span class="description"><?php esc_html_e( 'If you are using an external SEO plug-in you should disable this option.', 'loor' ); ?></span></p>
    <input name="loor_theme_seo" type="checkbox" id="loor_theme_seo" value="true" <?php checked('true', get_option('loor_theme_seo') ); ?> />
    <label for="loor_theme_seo"><?php esc_html_e( 'Use theme SEO', 'loor' ); ?></label>
<?php
}

function loor_display_standard_store() {
?>
    <p><b><?php esc_html_e( 'Standard Store', 'loor' ); ?></b><br><span class="description"><?php esc_html_e( 'Turn on this option if you want to use the theme as a standard store with a shop page, tags, and separate categories. Otherwise, the theme will work as a one-page store. ', 'loor' ); ?></span></p>
    <input name="loor_standard_store" type="checkbox" id="loor_standard_store" value="true" <?php checked('true', get_option('loor_standard_store') ); ?> />
    <label for="loor_standard_store"><?php esc_html_e( 'Use as a standard store', 'loor' ); ?></label>
<?php
}

function loor_display_copyright() {
?>
    <p><b><?php esc_html_e( 'YumeCommerce copyright', 'loor' ); ?></b><br><span class="description"><?php esc_html_e( 'You definitely can remove footer copyright but if you appreciate our work, please leave the credits.', 'loor' ); ?></span></p>
    <input name="loor_theme_copyright" type="checkbox" id="loor_theme_copyright" value="true" <?php checked('true', get_option('loor_theme_copyright') ); ?> />
    <label for="loor_theme_copyright"><?php esc_html_e( 'Remove copyright from footer', 'loor' ); ?></label>
<?php
}

function loor_display_theme_panel_fields() {
add_settings_section("section", "All Settings", 'loor_text_callback', "loor-theme-options");
    add_settings_field("loor_custom_css", "Custom CSS", "loor_display_custom_css", "loor-theme-options", "section");
    add_settings_field("loor_custom_js", "Custom JavaScript", "loor_display_custom_js", "loor-theme-options", "section");
    add_settings_field("loor_theme_seo", "Use theme SEO", "loor_display_seo", "loor-theme-options", "section");
    add_settings_field("loor_standard_store", "Use Standard Store", "loor_display_standard_store", "loor-theme-options", "section");
    add_settings_field("loor_theme_copyright", "Remove copyright from footer", "loor_display_copyright", "loor-theme-options", "section");
    register_setting("section", "loor_custom_js");
    register_setting("section", "loor_custom_css");
    register_setting("section", "loor_theme_seo");
    register_setting("section", "loor_standard_store");
    register_setting("section", "loor_theme_copyright");
}
add_action("admin_init", "loor_display_theme_panel_fields");

function loor_text_callback( $arg ) {
    echo '<p class="theme-option-description">' . esc_html__( 'You can change the site style and behaviour by adding custom scripts to all pages within your site using the custom code areas below.', 'loor' ) . '<br>' .
    esc_html__( 'To access the Customizer mode, go to Appearance > Customize.', 'loor' ) . '</p>';
}

function loor_theme_settings_page() {
?>
    <div class="wrap">
    <h1><?php esc_html_e('Theme Options', 'loor'); ?></h1>
    <form method="post" action="options.php">
        <?php
        settings_fields("section");
        do_settings_sections("loor-theme-options");      
        submit_button(); 
        ?>          
    </form>
	</div>
<?php
}

function loor_add_theme_menu_item() {
	add_theme_page(  esc_html__('Theme Options', 'loor'), esc_html__('Theme Options', 'loor'), "manage_options", "yumecommerce-theme-panel", "loor_theme_settings_page", null, 99);
}

add_action("admin_menu", "loor_add_theme_menu_item");

function loor_general_seo() {
	require get_template_directory() . '/inc/theme-seo.php';
}

function loor_load_social_share() {
	if ( get_option('loor_theme_seo') ) {
		add_action( 'wp_enqueue_scripts', 'loor_general_seo' );
	}
}
add_action( 'init', 'loor_load_social_share' );

// add inline custom css
function loor_custom_css_load_init() {
    if ( get_option('loor_custom_css') ) {
        $custom_css = get_option('loor_custom_css');
        wp_add_inline_style( 'loor-style', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'loor_custom_css_load_init' );

// load custom js
function loor_custom_js_load_init() {
    if ( get_option('loor_custom_js') ) {
        $custom_script = get_option('loor_custom_js');
        wp_add_inline_script( 'loor-main-js', $custom_script );
    }
}
add_action( 'wp_enqueue_scripts', 'loor_custom_js_load_init' );

// redirect to the main page if current page is main shop page
function loor_redirect_main_shop() {
    if ( !is_admin() ) {
        if ( is_shop() || is_product_tag() || is_product_category() ) {
            wp_redirect( home_url() ); exit;
        }
    }
}

// add class to body for standard store
function loor_standard_store_class() {  
    add_filter( 'body_class', 'loor_add_standard_store_class' );
    function loor_add_standard_store_class( $classes ) {
        $classes[] = 'standard-store';
        return $classes;
    }
}

function loor_load_standard_store_option() {
    if ( get_option('loor_standard_store') != 'true' ) {
        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
            // redirect to the main page from store archive pages
            add_action( 'wp', 'loor_redirect_main_shop' );
        }
    } else {
        // add special class for standard store
        add_action( 'wp_head', 'loor_standard_store_class' );
    }
}
add_action( 'init', 'loor_load_standard_store_option' );


// hide copyright if yes
function loor_load_css_remove_copyright() {
    if ( get_option('loor_theme_copyright') ) {
        $css = '.yumecommerce-theme-copyright { display: none; }';
        wp_add_inline_style( 'loor-style', $css );
    }
}
add_action( 'wp_enqueue_scripts', 'loor_load_css_remove_copyright' );


// Enqueue custom styles for theme settings
function loor_theme_options_custom_style() {
  wp_register_style( 'loor-theme-options-style', get_template_directory_uri() . '/css/themeoptions-custom-style.css' );
  wp_enqueue_style( 'loor-theme-options-style' );
}
add_action( 'admin_enqueue_scripts', 'loor_theme_options_custom_style', 20 );