<?php
/**
 * Variable product add to cart
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 *
 * Modified to use radio buttons instead of dropdowns
 * @author 8manos
 */
if (!defined('ABSPATH')) {
  exit;
}

function get_variation_image($name, $option) {
  global $product;
  $variations = $product->get_available_variations();
  //var_dump($variations);
  foreach ($variations as $key => $value) {
    if ($value['attributes']['attribute_' . strtolower($name)] == $option) {
      //var_dump($value);
      if ( $value['is_in_stock'] && ( (int) $value['max_qty'] > 0 || is_null($value['max_qty']) ) ) {
        return $value['image_src'];
      } else {
        return false;
      }
    }
  }
}

function print_attribute_radio($checked_value, $value, $label, $name) {

  // This handles < 2.4.0 bw compatibility where text attributes were not sanitized.
  $checked = sanitize_title($checked_value) === $checked_value ? checked($checked_value, sanitize_title($value), false) : checked($checked_value, $value, false);

  $input_name = 'attribute_' . esc_attr($name);
  $esc_value = esc_attr($value);
  $id = esc_attr($name . '_v_' . $value);
  $filtered_label = apply_filters('woocommerce_variation_option_name', $label);


  if (get_option('wvi_show_titles') == 1) {
    printf('<input style="display:none;" type="radio" name="%1$s" value="%2$s" id="%3$s" %4$s><label for="%3$s">%5$s</label>', $input_name, $esc_value, $id, $checked, $filtered_label);
  } else {
    printf('<input style="display:none;" type="radio" name="%1$s" value="%2$s" id="%3$s" %4$s>', $input_name, $esc_value, $id, $checked);
  }
}

global $product;

$attribute_keys = array_keys($attributes);

do_action('woocommerce_before_add_to_cart_form');
?>

<form class="variations_form cart woocoomerce_variations_images" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint($product->id); ?>" data-product_variations="<?php echo htmlspecialchars(json_encode($available_variations)) ?>">
    <?php do_action('woocommerce_before_variations_form'); ?>

    <?php if (empty($available_variations) && false !== $available_variations) { ?>
      <p class="stock out-of-stock"><?php _e('This product is currently out of stock and unavailable.', 'woocommerce'); ?></p>
    <?php } else { ?>

      <?php if ((get_option('wvi_active_for_all') != 1) && (get_post_meta($product->id, 'wvi_product_use_variation_meta', true) == NULL)) { ?>
        <table class="variations" cellspacing="0">
            <tbody>
                <?php foreach ($attributes as $attribute_name => $options) : ?>
                  <tr>
                      <td class="label"><label for="<?php echo sanitize_title($attribute_name); ?>"><?php echo wc_attribute_label($attribute_name); ?></label></td>
                      <td class="value">
                          <?php
                          $selected = isset($_REQUEST['attribute_' . sanitize_title($attribute_name)]) ? wc_clean(urldecode($_REQUEST['attribute_' . sanitize_title($attribute_name)])) : $product->get_variation_default_attribute($attribute_name);
                          wc_dropdown_variation_attribute_options(array('options' => $options, 'attribute' => $attribute_name, 'product' => $product, 'selected' => $selected));
                          echo end($attribute_keys) === $attribute_name ? apply_filters('woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . __('Clear', 'woocommerce') . '</a>') : '';
                          ?>
                      </td>
                  </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?php } else { ?>

        <div class="variations" >

            <?php foreach ($attributes as $name => $options) : ?>
              <?php
              $sanitized_name = sanitize_title($name);
              if (isset($_REQUEST['attribute_' . $sanitized_name])) {
                $checked_value = $_REQUEST['attribute_' . $sanitized_name];
              } elseif (isset($selected_attributes[$sanitized_name])) {
                $checked_value = $selected_attributes[$sanitized_name];
              } else {
                $checked_value = '';
              }
              ?>

              <?php
              if (!empty($options)) {
                if (taxonomy_exists($name)) {
                  // Get terms if this is a taxonomy - ordered. We need the names too.
                  $terms = wc_get_product_terms($product->id, $name, array('fields' => 'all'));

                  echo '<div class="value" style="display:inline !important;">';
                  //Table template
                  if (get_option('wvi_variations_template') == 'template_01') {
                    ?><table><tr><?php
                    foreach ($terms as $term) {
                      if (!in_array($term->slug, $options)) {
                        continue;
                      }
                      $img = get_variation_image($name, $term->slug);
                      if (!$img) {
                        continue;
                      }
                      ?>
                      <td style="" class="td-box">
                      <center>
                          <?php
                          $variation_image_size = wvi_get_variation_image_size();
                          echo '<img  width="100px" data-radio_id="' . esc_attr(strtolower($name) . '_v_' . $term->slug) . '" class="wvi_img" src="' . $img . '"></img>';
                          print_attribute_radio($checked_value, $term->slug, $term->name, $sanitized_name);
                          ?>
                      </center>
                      </td>
                      <?php
                    }
                    ?></tr></table><?php
                  } elseif (get_option('wvi_variations_template') == 'template_02') {
                    
                  }
                  echo '</div>';
                } else {

                  echo '<div class="value" style="display:inline !important;">';
                  if (get_option('wvi_variations_template') == 'template_01') {
                    ?><table><?php
                    $lines = 0;
                    foreach ($options as $option) {   
                      if ($lines++ % intval(get_option('wvi_variations_count_per_row')) == 0) {
                        ?><tr><?php
                      } ?>
                      <td style="" class="td-box">
                      <center>
                      <?php
                      $img = get_variation_image($name, $option);
                      if (!$img) {
                        continue;
                      }
                      $sanitized_option = sanitize_title($option);
                      $variation_image_size = wvi_get_variation_image_size();
                      echo '<img width="100%" data-radio_id="' . esc_attr(strtolower($name) . '_v_' . $option) . '" class="wvi_img" src="' . $img . '"></img>';
                      print_attribute_radio($checked_value, $option, $option, $sanitized_name); ?>
                      </center>
                      </td>

                      <?php
                      if ($lines % intval(get_option('wvi_variations_count_per_row')) == 0) {
                        ?></tr><?php
                      }
                    }
                    ?></table><?php
                  } elseif (get_option('wvi_variations_template') == 'template_02') {
                    echo '<div class="wvi_contents">';
                    $lines = 0;
                    foreach ($options as $option) {
                      if ($lines++ % intval(get_option('wvi_variations_count_per_row')) == 0) {
                        echo "<tr>";
                      }
                      ?>
                      <div class="wvi_box">
                        <center>
                        <?php
                        $img = get_variation_image($name, $option);
                        if (!$img) {
                          continue;
                        }
                        echo '<img width="100%" data-radio_id="' . esc_attr(strtolower($name) . '_v_' . $option) . '" class="wvi_img" src="' . $img . '"></img>';
                        print_attribute_radio($checked_value, $option, $option, $sanitized_name);
                        ?>
                        </center>
                      </div>

                      <?php
                      if ($lines % intval(get_option('wvi_variations_count_per_row')) == 0) {
                        echo "</tr>";
                      }
                    }
                    echo '</div>';
                  }
                  echo '</div>';
                }
              }

              echo end($attribute_keys) === $name ? apply_filters('woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . __('Clear', 'woocommerce') . '</a>') : '';
              ?>

            <?php endforeach; ?>

        </div>

      <?php } ?>
      <?php do_action('woocommerce_before_add_to_cart_button'); ?>

      <div class="single_variation_wrap">
          <?php do_action('woocommerce_before_single_variation'); ?>

          <div class="woocommerce-variation single_variation"></div>

          <div class="woocommerce-variation-add-to-cart variations_button">
              <?php if (!$product->is_sold_individually()) : ?>
                <?php woocommerce_quantity_input(array('input_value' => isset($_POST['quantity']) ? wc_stock_amount($_POST['quantity']) : 1)); ?>
              <?php endif; ?>
              <button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
              <input type="hidden" name="add-to-cart" value="<?php echo absint($product->id); ?>" />
              <input type="hidden" name="product_id" value="<?php echo absint($product->id); ?>" />
              <input type="hidden" name="variation_id" class="variation_id" value="0" />
          </div>

          <?php do_action('woocommerce_after_single_variation'); ?>
      </div>

      <?php do_action('woocommerce_after_add_to_cart_button'); ?>

    <?php } ?>

    <?php do_action('woocommerce_after_variations_form'); ?>
</form>

<?php do_action('woocommerce_after_add_to_cart_form'); ?>

<?php if (get_option('wvi_custom_css')): ?>
  <style id="wvi_custom_css">
      <?php echo get_option('wvi_custom_css'); ?>
  </style>
<?php endif; ?>
