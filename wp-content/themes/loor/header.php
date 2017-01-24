<?php
/**
 * The template for displaying the header
 *
 * @author YumeCommerce
 * @version 1.0
 *
 **/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <!-- main icons -->
    <?php loor_social_icons_print_svg(); ?>

    <!-- mobile navigation -->
    <div id="mobile-nav">
		<?php wp_nav_menu(array( 'menu_class' => 'mobile-nav', 'theme_location' => 'loor_top_nav')); ?>
		<div id="mobile-nav-text">
		    <span><?php echo esc_attr( get_theme_mod('footer_text', '2016 Your Site. All rights reserved.') ); ?></span>
	    </div>
	</div>
    <div id="nav-obfuscator"></div>

	<!-- shop header -->
	<header class="bodyBoxed">
		<div class="header">
		    <div id="close-icon" class="sm-visible">
		        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
		            <g xmlns="http://www.w3.org/2000/svg" fill="#444" transform="scale(0.0234375 0.0234375)">
		                <path d="M426.667 170.667q17.667 0 30.167 12.5t12.5 30.167q0 18-12.667 30.333l-225.667 225.667h665q17.667 0 30.167 12.5t12.5 30.167-12.5 30.167-30.167 12.5h-665l225.667 225.667q12.667 12.333 12.667 30.333 0 17.667-12.5 30.167t-30.167 12.5q-18 0-30.333-12.333l-298.667-298.667q-12.333-13-12.333-30.333t12.333-30.333l298.667-298.667q12.667-12.333 30.333-12.333z"/>
		            </g>
		        </svg>
		    </div>
			<div id="nav-icon" class="sm-visible">
			    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="16" height="16" viewBox="0 0 768 768">
                    <path d="M96 160h576q13.25 0 22.625 9.375t9.375 22.625-9.375 22.625-22.625 9.375h-576q-13.25 0-22.625-9.375t-9.375-22.625 9.375-22.625 22.625-9.375zM96 544h576q13.25 0 22.625 9.375t9.375 22.625-9.375 22.625-22.625 9.375h-576q-13.25 0-22.625-9.375t-9.375-22.625 9.375-22.625 22.625-9.375zM96 352h576q13.25 0 22.625 9.375t9.375 22.625-9.375 22.625-22.625 9.375h-576q-13.25 0-22.625-9.375t-9.375-22.625 9.375-22.625 22.625-9.375z"/>
                </svg>
			</div>

			    <div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					    <?php if ( get_theme_mod('logo_image', get_template_directory_uri().'/demo-files/demo-logo.png') !== '' ) : ?>
    						<?php if ( get_theme_mod( 'loor_header_background_use', '0' ) == '1' && get_theme_mod( 'loor_header_logo_image_before', '' ) !== '' && is_front_page() ) : ?>
    						    <img class="logo-image-before" src="<?php echo esc_url( get_theme_mod('loor_header_logo_image_before', '') ); ?>" alt="<?php bloginfo('name'); ?>">
    						    <img class="logo-image-after" src="<?php echo esc_url( get_theme_mod('loor_header_logo_image_after', '') ); ?>" alt="<?php bloginfo('name'); ?>">
    						<?php else : ?>
    							<img src="<?php echo esc_url( get_theme_mod('logo_image', get_template_directory_uri().'/demo-files/demo-logo.png') ); ?>" alt="<?php bloginfo('name'); ?>">
    						<?php endif; ?>
    					<?php else : ?>
    					    <h4 class="site-title"><?php bloginfo( 'name' ); ?></h4>
    					<?php endif; ?>
					</a>
				</div>

				<div class="yumecommerceCart">
					<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
						<a href="<?php echo WC()->cart->get_cart_url(); ?>">
								<span id="cart-icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="16px" height="16px" viewBox="0 0 768 768">
										<path d="M384 0q32.5 0 62.125 12.75t51 34.125 34.125 51 12.75 62.125v32h128v480q0 39.75-28.125 67.875t-67.875 28.125h-384q-39.75 0-67.875-28.125t-28.125-67.875v-480h128v-32q0-32.5 12.75-62.125t34.125-51 51-34.125 62.125-12.75zM608 672v-416h-448v416q0 13.25 9.375 22.625t22.625 9.375h384q13.25 0 22.625-9.375t9.375-22.625zM384 64q-39.75 0-67.875 28.125t-28.125 67.875v32h192v-32q0-39.75-28.125-67.875t-67.875-28.125z"/>
									</svg>
								</span>
							<?php
							// add mini cart widget
							the_widget( 'WC_Widget_Cart' );

							// add counder data
							if ( !is_cart() && !is_checkout() ) {
								loor_mini_cart_counter();
							}
							?>
						</a>
					<?php endif ?>
				</div>

				<div id="screen-nav" class="ld-visible">
					<?php wp_nav_menu(array(
						'menu_class' => 'nav',
						'theme_location' => 'loor_top_nav'
					)); ?>
				</div>
		</div>
	</header>

	<!-- shop iframe containers -->
	<div id="overlay_preloader">
	    <div id="overlay_preloader_icon">
	        <?php if ( get_theme_mod('loor_site_loading', 'black') == 'black' ) : ?>
	            <img src="<?php echo get_template_directory_uri() . "/img/icons/loading.png"; ?>" alt="loading">
	        <?php else : ?>
	            <img src="<?php echo get_template_directory_uri() . "/img/icons/loading-white.png"; ?>" alt="loading">
	        <?php endif; ?>
	   </div>
	</div>
	<div class="content" id="producrContent"></div>

<div class="bodyBoxed">
<div id="maincontainer">