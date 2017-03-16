<?php
/**
 * Product image template - fade
 */

if ( ! defined( 'WPINC' ) )
    wp_die();

global $iconic_woo_enhanced_catalog_images;

$images = $iconic_woo_enhanced_catalog_images->get_product_images( 2 );

if( empty( $images ) )
    return;

$image_count = count( $images );

?>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="iconic-ecifw-product-image <?php if( $image_count > 1 ) echo "iconic-ecifw-product-image--fade"; ?>">
    <?php foreach( $images as $image ) { ?>
        <?php echo $image; ?>
    <?php } ?>
</a>