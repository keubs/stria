<?php
/**
 * The template for displaying comments
 *
 * @author YumeCommerce
 * @version 1.0
 *
 **/
 
if ( post_password_required() ) {
	return;
}
?>

<section id="yumecommerce-comments">

	<?php if ( have_comments() ) : ?>
	
	<!-- comments-area -->
	
		<h4 class="comments-title">
			<?php
				printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments for &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'loor' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h4>
		
        <!-- comments-list -->
        
		<ul id="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ul',
					'short_ping'  => true,
					'avatar_size' => 56,
					'format' => 'html5'
				) );
			?>
		</ul>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		
		    <!-- comments-navigation -->
		    
        	<nav class="comment-navigation">
        		<h4 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'loor' ); ?></h4>
        		<div class="nav-links">
        			<?php
        				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'loor' ) ) ) :
        					echo $prev_link;
        				endif;
        
        				if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'loor' ) ) ) :
        					echo $next_link;
        				endif; 
        			?>
        		</div>
        	</nav>
        <?php endif; ?>

	<?php endif; ?>

	<?php comment_form(array(
		'comment_notes_before' => '<p class="address-will-not-be-published">' . esc_html__('Your email address will not be published.', 'loor') . '</p>', 
		'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
		'title_reply_after' => '</h4>',
	)); ?>

</section>
