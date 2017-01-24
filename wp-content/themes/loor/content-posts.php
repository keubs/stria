<?php
/**
 * The template for displaying blog or archive posts
 *
 * @author YumeCommerce
 * @version 1.0
 *
 **/
?>

<div id="yumecommerce-page">
    
    <?php loor_page_title(); ?>
    
    <?php get_sidebar(); ?>
    
    <div class="yumecommerce-posts-container">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
    	    <div <?php post_class('yumecommerce-post-container'); ?>>
    	        <h4 class="yumecommerce-post-date"><?php echo get_the_date(); ?></h4>
        	    <a class="yumecommerce-post-link" href="<?php the_permalink(); ?>">
            	    <h3 class="yumecommerce-post-title"><span><?php the_title(); ?></span></h3>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php if ( get_theme_mod('loor_blog_layout', 'no-sidebar') == 'masonry' ) : ?>
                            <figure class="yumecommerce-post-thumbnail">
                                <div>
                            <?php
                                if ( is_sticky($post->ID) ) {
                                    the_post_thumbnail( 'large' ); 
                                } else {
                                    the_post_thumbnail( 'medium' ); 
                                }
                            ?>
                                </div>
                            <?php    
                                if (get_post( get_post_thumbnail_id() )->post_excerpt) : ?>
                                    <figcaption><?php echo get_post( get_post_thumbnail_id() )->post_excerpt ?></figcaption>
                                <?php endif; ?>
                            </figure>
                        <?php else : ?>
                            <figure class="yumecommerce-post-thumbnail">
                                <div>
                            <?php
                                $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "yumecommerce-blog-large" );
                                the_post_thumbnail('yumecommerce-blog-large', array( 'src' => get_template_directory_uri()."/img/icons/empty-post.png", 'data-src' => $thumb_url[0],   'class'  => 'lazy' )); 
                            ?>
                                </div>
                            <?php
                                if (get_post( get_post_thumbnail_id() )->post_excerpt) : ?>
                                    <figcaption><?php echo get_post( get_post_thumbnail_id() )->post_excerpt ?></figcaption>
                                <?php endif; ?>
                            </figure>
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
                
        	    <div class="yumecommerce-post-intro">
        	        <?php the_content(__( 'Read more', 'loor' )); ?>
        	   </div>
        	   
        	    <div class="yumecommerce-post-meta">
        	    
        	        <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
                    <div class="yumecommerce-post-comments">
                            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'loor' ), __( '1 Comment', 'loor' ), __( '% Comments', 'loor' ) ); ?></span>
                        </div>
                    <?php endif; ?>
        	    
                    <?php 
                    $posttags = get_the_tags();
                    if ( $posttags ) : ?>
                        <div class="yumecommerce-post-tags">
                            <?php the_tags('', ', ', ''); ?>
                        </div>
                    <?php endif; ?>
                </div>
    			
    		</div>
    	<?php endwhile; ?>

        <?php else : ?>
            <div <?php post_class('yumecommerce-post-container'); ?>>
                <?php esc_html_e('Sorry, no content to show', 'loor'); ?>
             </div>
        <?php endif; ?>
    </div>
        
    <div class="yumecommerce-post-pagination">
    	<?php
    		the_posts_pagination( array(
    		    'prev_text'          => __( 'Previous page', 'loor' ),
    			'next_text'          => __( 'Next page', 'loor' )
    		));
    	?>
    </div>
</div>