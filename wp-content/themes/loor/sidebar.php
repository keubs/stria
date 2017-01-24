<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @author YumeCommerce
 * @version 1.0
 *
 */
?>

<?php if ( is_active_sidebar( 'main_sidebar' )  ) : ?>
	<div class="yumecommerce-sidebar ld-visible" role="complementary">
		<?php dynamic_sidebar( 'main_sidebar' ); ?>
	</div>
<?php endif; ?>
