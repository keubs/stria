<?php
/**
 * The template for displaying the single page
 *
 * @author YumeCommerce
 * @version 1.0
 *
 **/
?>

<div id="yumecommerce-page">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/BlogPosting">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<header class="yumecommerce-article-header">
                <h1 itemprop="headline" class="main-title"><?php the_title(); ?></h1>
                
                <?php if ( is_single() ) : ?>
                    <h4 class="yumecommerce-post-date"><time itemprop="datePublished" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time></h4>
                <?php endif; ?>
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <figure class="yumecommerce-post-thumbnail">
                        <?php
                            $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "yumecommerce-blog-large" );
                            the_post_thumbnail('yumecommerce-blog-large', array( 'src' => get_template_directory_uri()."/img/icons/empty-post.png", 'data-src' => $thumb_url[0],   'class'  => 'lazy' )); 
                            if (get_post( get_post_thumbnail_id() )->post_excerpt) : ?>
                                <figcaption><?php echo get_post( get_post_thumbnail_id() )->post_excerpt ?></figcaption>
                        <?php endif; ?>
                    </figure>
                <?php endif; ?>
            </header>
            
            <?php 
                
                the_content();
                
                wp_link_pages( array(
				    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'loor' ) . '</span>',
				    'after'       => '</div>',
				    'link_before' => '<span>',
				    'link_after'  => '</span>',
				    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'loor' ) . ' </span>%',
				    'separator'   => '<span class="screen-reader-text">, </span>',
			    ) );
                
                endwhile; endif;
           
            // Add meta for single post page
            if ( is_single() ) : 
            ?>
                
            <div class="yumecommerce-post-meta">
                <div class="yumecommerce-post-tags">
                    <?php the_tags(); ?>
                </div>
            </div>
            
            <?php
                if ( '' !== get_the_author_meta( 'description' ) ) {
                    get_template_part( 'biography' );
                }
                    
                // Previous/next post navigation.
                the_post_navigation( array(
                    'next_text' => '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="post-title">%title</span>',
                ) );

                endif;
            ?>
            </article>    
                
            <?php 
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                   comments_template();
                endif;
			?>
			
    
</div>