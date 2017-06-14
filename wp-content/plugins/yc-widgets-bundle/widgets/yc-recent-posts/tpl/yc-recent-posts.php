<?php
    global $post;
?>

<div class="yumecommerce-recent-posts">
    <?php
        $ycpost_q = new WP_Query( apply_filters( 'widget_posts_args', array(
            'posts_per_page'      => $numberposts,
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true
        )));

        if ($ycpost_q->have_posts()) :
    ?>
    <ul class="recent-posts-container">
    <?php while ( $ycpost_q->have_posts() ) : $ycpost_q->the_post();
        $post_id = get_the_ID();
        $queried_post = get_post($post_id);
        $content = $queried_post->post_content;
        $content = apply_filters('wpautop', $content);
        $content = str_replace(']]>', ']]>', $content);
        $content = wp_trim_words( $content, $limit, '...' );
    ?>
        <li class="recent-post">
            <a class="recent-post-link" href="<?php the_permalink(); ?>">
                <?php if ( $useimage && has_post_thumbnail() ) :  ?>
                    <span class="recent-post-link-img">
                        <?php
                            $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'yumecommerce-thumbnail' );
                            the_post_thumbnail('yumecommerce-thumbnail', array( 'src' => get_template_directory_uri().'/img/icons/empty-post.png', 'data-src' => $thumb_url[0],   'class'  => 'lazy' )); 
                        ?>
                    </span>
                <?php endif; ?>
                <h4><?php the_title(); ?></h4>
            </a>
            <p class="post-date"> 
                <?php if ( $usedate ) :  ?>
                    <span><?php echo get_the_date(); ?></span>
                <?php endif; ?>
                <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) && $usecomments ) : ?>
                    | <?php comments_popup_link( esc_html__( 'Leave a comment', 'yc-widgets-bundle' ), esc_html__( '1 Comment', 'yc-widgets-bundle' ), esc_html__( '% Comments', 'yc-widgets-bundle' ) ); ?>
                <?php endif; ?>
            </p>
            <?php if ( $usecontent ) : ?>
                <p><?php echo esc_html__( $content ); ?></p>
            <?php endif; ?>
        </li>
    <?php endwhile; ?>
    </ul>
    <?php
        wp_reset_postdata();
        endif;
    ?>
</div>