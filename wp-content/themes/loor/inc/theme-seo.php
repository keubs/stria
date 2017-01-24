<?php
global $wp, $post;
if ( !is_search() && !is_404() ) {
	$current_url = get_permalink( $post->ID );
	$current_title = get_the_title();
	setup_postdata( $post ); 
	    $seo_description = get_the_excerpt();
	    $seo_description = strip_tags( $seo_description );
	    $seo_description = strip_shortcodes( $seo_description );
	    $seo_description = str_replace( array("\n", "\r", "\t"), '', $seo_description );
	    $seo_description = str_replace('"', "'", $seo_description);

	// get the image
	function get_social_image() {
		global $post;
		if ( !empty( $post ) ) {
			$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '', '' );
			if ( has_post_thumbnail( $post->ID ) ) {
				$socialimg = $src[0];
			} elseif ( is_front_page() && get_theme_mod('logo_image', get_template_directory_uri().'/demo-files/demo-logo.png') ) {
				$socialimg = get_theme_mod('logo_image', get_template_directory_uri().'/demo-files/demo-logo.png');
			} else {
			    $socialimg = '';
			}
			return $socialimg;
	    }
	}
	if ( ( is_home() ) || ( is_front_page() ) ) : ?>
	    <meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
	    <?php elseif ( is_single() || is_page() ) : ?>
	    <meta name="description" content="<?php echo esc_html( trim( strip_tags( $seo_description ) )); ?>"/>
	    <?php elseif ( is_category() ) : ?>
	    <meta name="description" content="<?php echo esc_html( trim( strip_tags( $seo_description ) )); ?>"/>
	<?php endif; 

	if ( is_singular() ) : ?>
	    <!-- facebook meta -->
		<meta property="og:type" content="article"/>
		<meta property="og:title" content="<?php echo esc_html( $current_title ); ?>"/>
		<meta property="og:site_name" content="<?php echo esc_html( get_bloginfo( "name" ) ); ?>"/>
	    <meta property="og:url" content="<?php echo esc_url( $current_url ); ?>"/>
		<meta property="og:description" content="<?php echo esc_html( trim( strip_tags( $seo_description ) )); ?>"/>
		<meta property="article:published_time" content="<?php echo esc_html( get_the_time( 'Y-m-j H:i' )); ?>">
		<meta property="article:modified_time" content="<?php echo esc_html( get_the_modified_time( 'Y-m-j H:i' )); ?>">
		<meta property="og:image" content="<?php echo esc_url( get_social_image() ); ?>"/>
		<!-- twitter meta -->
		<meta name="twitter:card" content="photo" />
	    <meta name="twitter:title" content="<?php echo esc_html(  $current_title ); ?>" />
	    <meta name="twitter:description" content="<?php echo esc_html( trim( strip_tags( $seo_description ) )); ?>" />
	    <meta name="twitter:image" content="<?php echo esc_html( get_social_image() ); ?>" />
	<?php endif;
}