<?php
/**
 * The template part for displaying an Author biography
 *
 * @author YumeCommerce
 * @version 1.0
 *
 */
?>

<div class="author-info">
	<div class="author-avatar">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	</div>
	<div class="author-description">
		<h4 class="author-title">
		    <span class="author-heading"><?php esc_html_e( 'Written by', 'loor' ); ?></span> 
		    <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author(); ?></a>
	    </h4>
		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
		</p>
	</div>
</div>
