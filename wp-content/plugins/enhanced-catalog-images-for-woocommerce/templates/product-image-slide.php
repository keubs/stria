<?php
/**
 * Product image template - horizontal slide
 */

if ( ! defined( 'WPINC' ) )
    wp_die();

global $iconic_woo_enhanced_catalog_images;

$images = $iconic_woo_enhanced_catalog_images->get_product_images( $iconic_woo_enhanced_catalog_images->settings['effects_slide_image_count'] );

if( empty( $images ) )
    return;

$image_count = count( $images );
$slick_params = $iconic_woo_enhanced_catalog_images->get_slick_params();

?>

<div class="iconic-ecifw-product-image iconic-ecifw-product-image--slide iconic-ecifw-product-image--<?php echo $iconic_woo_enhanced_catalog_images->settings['effects_slide_mode']; ?>-slide" <?php if( $image_count > 1 ) { printf('data-slick="%s"', $slick_params ); } ?>>
    <?php $i = 1; foreach( $images as $image ) { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="<?php if( $i > 1 ) echo 'iconic-ecifw-hidden'; ?>"><?php echo $image; ?></a>
    <?php $i++; } ?>
</div>