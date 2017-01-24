<?php
/**
 * The template for displaying the 404 pages (not found)
 *
 * @author YumeCommerce
 * @version 1.0
 *
 **/
?>

<?php
get_header(); ?>


	<div class="container fullscreen">
		<div class="row not-found">
			<section class="error-404 ">
					<h1 class="head-404">404</h1>
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'loor' ); ?></h1>
			</section>
		</div>
	</div>

<?php get_footer(); ?>
