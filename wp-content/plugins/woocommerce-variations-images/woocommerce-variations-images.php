<?php
/*
	Plugin Name: WooCommerce Variations Images
	Description: Replace the variation-drop-down menu with the variation images
	Version: 1.0
	Last Edited: 05.09.2016
	Author: Henning Orth / E-VANCE
	Author URI: http://www.e-vance.net
	License: GPL V3
 */

if (!defined('ABSPATH'))
  exit; // Exit if accessed directly

// Check if WooCommerce is active
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

  class WC_Radio_Buttons {

    private $plugin_path;
    private $plugin_url;

    public function __construct() {
      add_filter('woocommerce_locate_template', array($this, 'locate_template'), 10, 3);
      add_action('wp_enqueue_scripts', array($this, 'load_scripts'), 999);
    }

    public function get_plugin_path() {

      if ($this->plugin_path) {
        return $this->plugin_path;
      }

      return $this->plugin_path = plugin_dir_path(__FILE__);
    }

    public function get_plugin_url() {

      if ($this->plugin_url) {
        return $this->plugin_url;
      }

      return $this->plugin_url = plugin_dir_url(__FILE__);
    }

    public function locate_template($template, $template_name, $template_path) {
      global $woocommerce;
      global $product;

      $_template = $template;

      if (!$template_path) {
        $template_path = $woocommerce->template_url;
      }

      $plugin_path = $this->get_plugin_path() . 'templates/';

      // Look within passed path within the theme - this is priority
      $template = locate_template(array(
        $template_path . $template_name,
        $template_name
      ));

      // Modification: Get the template from this plugin, if it exists
      if (!$template && file_exists($plugin_path . $template_name)) {
        $template = $plugin_path . $template_name;
      } else {
        $template = $_template;
      }

      return $template;
    }

    function load_scripts() {
      
	$product = new WC_Product(get_the_ID());
	
      if (is_product()) {
        if ( (get_option('wvi_active_for_all') != 1) && (get_post_meta($product->id, 'wvi_product_use_variation_meta', true) == NULL) ) {
          
        } else {
          wp_deregister_script('wc-add-to-cart-variation');
          wp_register_script('wc-add-to-cart-variation', $this->get_plugin_url() . 'assets/js/frontend/add-to-cart-variation.js');
        }
        wp_enqueue_style('woocommerce-variations-images-css', $this->get_plugin_url() . 'assets/css/woocommerce-variations-images.css');
      }
    }

  }

  new WC_Radio_Buttons();
}

/**
 * Register a custom menu page.
 */
function wvi_register_settings_menu_page() {
  add_submenu_page('woocommerce', __('WooCommerce Variations Images', 'wvi_textdomain'), 'WooCommerce Variations Images', 'manage_options', 'wvi-settings', 'wvi_register_my_menu_page_settings_page');
}

if (is_admin()) { // admin actions
  add_action('admin_init', 'wvi_register_settings');
  add_action('admin_menu', 'wvi_register_settings_menu_page');
} else {
  // non-admin enqueues, actions, and filters
}

function wvi_register_settings() {
  //register our settings
  register_setting('wvi-plugin-settings-group', 'wvi_active_for_all');
  register_setting('wvi-plugin-settings-group', 'wvi_show_titles');
  register_setting('wvi-plugin-settings-group', 'wvi_variations_count_per_row');
  register_setting('wvi-plugin-settings-group', 'wvi_variations_template');
  register_setting('wvi-plugin-settings-group', 'wvi_variations_image_size');
  register_setting('wvi-plugin-settings-group', 'wvi_custom_css');
}

/**
 * Display a custom menu page
 */
function wvi_register_my_menu_page_settings_page() {
  ?>
  <div class="wrap">
      <h1>General Settings</h1>
  </div>
  <form method="post" action="options.php">
      <?php settings_fields('wvi-plugin-settings-group'); ?>
  <?php do_settings_sections('wvi-plugin-settings-group'); ?>
      <table class="form-table">
          <tbody>
              <tr>
                  <th scope="row"><label for="wvi_active_for_all"><?php echo __('Display variation images for all products', 'wvi_textdomain'); ?></label></th>
                  <td>
                      <fieldset>
                          <label for="wvi_active_for_all">
                              <input type="checkbox" value="1" <?php echo get_option('wvi_active_for_all') == 1 ? 'checked' : ''; ?> id="wvi_active_for_all" name="wvi_active_for_all">
                              If checked, variation images will be shown for each product despite of the product's "Display variation images" option value
				  </label>
                      </fieldset>
                  </td>
              </tr>
              <tr>
                  <th scope="row"><label for="wvi_show_titles"><?php echo __('Show Titles', 'wvi_textdomain'); ?></label></th>
                  <td>
                      <fieldset>
                          <legend class="screen-reader-text"><span>Variation Titles</span></legend>
                          <label for="wvi_show_titles">
                              <input type="checkbox" value="1" <?php echo get_option('wvi_show_titles') == 1 ? 'checked' : ''; ?> id="wvi_show_titles" name="wvi_show_titles">
                              Show variation title under the image.</label>
                      </fieldset>
                  </td>
              </tr>
              <tr>
                  <th scope="row"><label for="wvi_variations_count_per_row"><?php echo __('Variations count per row', 'wvi_textdomain'); ?></label></th>
                  <td>
                      <input type="text" class="regular-text"  value="<?php echo esc_attr(get_option('wvi_variations_count_per_row')); ?>" aria-describedby="tagline-description" id="wvi_variations_count_per_row" name="wvi_variations_count_per_row">
                      <p id="tagline-description" class="description">How many variations to show per row.</p>
                  </td>
              </tr>

              <tr>
                  <th scope="row"><label for="wvi_variations_count_per_row"><?php echo __('Variation image size', 'wvi_textdomain'); ?></label></th>
                  <td>
                      <select name="wvi_variations_image_size" id="wvi_variations_image_size">
                          <option value="full" <?php echo get_option('wvi_variations_image_size') == 'full' ? 'selected' : ''; ?> >Full</option>
                          <option value="medium" <?php echo get_option('wvi_variations_image_size') == 'medium' ? 'selected' : ''; ?> >Medium</option>
                          <option value="thumbnail" <?php echo get_option('wvi_variations_image_size') == 'thumbnail' ? 'selected' : ''; ?> >Thumbnail</option>
                          <option value="shop_thumbnail" <?php echo get_option('wvi_variations_image_size') == 'shop_thumbnail' ? 'selected' : ''; ?> >Shop Thumbnail</option>
                          <option value="shop_catalog" <?php echo get_option('wvi_variations_image_size') == 'shop_catalog' ? 'selected' : ''; ?> >Shop Catalog</option>
                          <option value="shop_single" <?php echo get_option('wvi_variations_image_size') == 'shop_single' ? 'selected' : ''; ?> >Shop Single</option>

                      </select>
                      <p id="tagline-description" class="description">The variation image size to be displayed.</p>
                  </td>
              </tr>	  
              <tr>
                  <th scope="row"><label for="wvi_variations_count_per_row"><?php echo __('Variations Template', 'wvi_textdomain'); ?></label></th>
                  <td>
                      <select name="wvi_variations_template" id="wvi_variations_template">
                          <option value="template_01" <?php echo get_option('wvi_variations_template') == 'template_01' ? 'selected' : ''; ?> >Table Template</option>
                          <option value="template_02" <?php echo get_option('wvi_variations_template') == 'template_02' ? 'selected' : ''; ?> >DIV Template</option>
                      </select>
                      <p id="tagline-description" class="description">The template used to display the variations table.</p>
                  </td>
              </tr>

              <tr>
                  <th scope="row"><label for="wvi_custom_css"><?php echo __('Custom CSS', 'wvi_textdomain'); ?></label></th>
                  <td>
                      <textarea class="regular-text"  rows="5" cols="38"  aria-describedby="tagline-description" id="wvi_custom_css" name="wvi_custom_css"><?php echo get_option('wvi_custom_css'); ?></textarea>
                      <p id="tagline-description" class="description">Customize the template CSS here (.wvi_contents, .wvi_box).</p>
                  </td>
              </tr>


          </tbody>
      </table>

      <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
  </form>

  <?php
}

// Define the custom box
add_action('add_meta_boxes', 'wvi_product_use_variation');

// Do something with the data entered
add_action('save_post', 'wvi_product_use_variation_save');

// Adds a box to the main column on the Product post_type edit screens
function wvi_product_use_variation() {
  if (get_option('wvi_active_for_all') != 1) {
    add_meta_box('wvi_product_use_variation', 'Variation images', 'wvi_product_use_variation_call', 'product', 'normal', 'high');
  }
}

// Prints the box content
function wvi_product_use_variation_call($post) {
  // Use nonce for verification
  wp_nonce_field(plugin_basename(__FILE__), 'wvi_product_use_variation_noncename');
  $field_value = get_post_meta($post->ID, 'wvi_product_use_variation_meta', true);
  ?>
  <p>
      <input type="checkbox" name="wvi_product_use_variation_meta" id="wvi_product_use_variation_meta" <?php echo ($field_value != NULL) ? 'checked' : ''; ?>>
      <label for="wvi_product_use_variation_meta"><strong>Display variation images</strong></label>
      <br>
      <em>If this is checked, then the product variations will be displayed as images instead of using the default dropbox.</em>
  </p>
  <?php
}

// When the post is saved, saves our custom data
function wvi_product_use_variation_save($post_id) {

  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times
  if (( isset($_POST['wvi_product_use_variation_noncename']) ) && (!wp_verify_nonce($_POST['wvi_product_use_variation_noncename'], plugin_basename(__FILE__)) ))
    return;

  // Check permissions
  if (( isset($_POST['post_type']) ) && ( 'page' == $_POST['post_type'] )) {
    if (!current_user_can('edit_page', $post_id)) {
      return;
    }
  } else {
    if (!current_user_can('edit_post', $post_id)) {
      return;
    }
  }

  // OK, we're authenticated: we need to find and save the data
  if (isset($_POST['wvi_product_use_variation_meta'])) {
    update_post_meta($post_id, 'wvi_product_use_variation_meta', $_POST['wvi_product_use_variation_meta']);
  } else {
    update_post_meta($post_id, 'wvi_product_use_variation_meta', null);
  }
}

function wvi_get_variation_image_size() {
  $sizes = get_image_sizes();
  if (isset($sizes[get_option('wvi_variations_image_size')])) {
    return $sizes[get_option('wvi_variations_image_size')];
  }
}

// Change WooCommerce Variation Image Size to 'thumbnail'
// currently 'shop_single'
// =============================================================================

function change_wc_variation_image_size($child_id, $instance, $variation) {
  $attachment_id = get_post_thumbnail_id($variation->get_variation_id());
  $size = (get_option('wvi_variations_image_size') == NULL) ? 'thumbnail' : get_option('wvi_variations_image_size');
  $attachment = wp_get_attachment_image_src($attachment_id, $size);
  $image_src = $attachment ? current($attachment) : '';
  $child_id['image_src'] = $image_src;

  return $child_id;
}

add_filter('woocommerce_available_variation', 'change_wc_variation_image_size', 10, 3);

//Tools
function get_image_sizes() {
  global $_wp_additional_image_sizes;

  $sizes = array();

  foreach (get_intermediate_image_sizes() as $_size) {
    if (in_array($_size, array('thumbnail', 'medium', 'medium_large', 'large'))) {
      $sizes[$_size]['width'] = get_option("{$_size}_size_w");
      $sizes[$_size]['height'] = get_option("{$_size}_size_h");
      $sizes[$_size]['crop'] = (bool) get_option("{$_size}_crop");
    } elseif (isset($_wp_additional_image_sizes[$_size])) {
      $sizes[$_size] = array(
        'width' => $_wp_additional_image_sizes[$_size]['width'],
        'height' => $_wp_additional_image_sizes[$_size]['height'],
        'crop' => $_wp_additional_image_sizes[$_size]['crop'],
      );
    }
  }

  return $sizes;
}
