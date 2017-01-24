<?php
/**
 * Custom functions for WooCommerce
 *
 * @since 1.0
 */

// remove woocomerce sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Add shop sidebar
function loor_add_woocommerce_sidebar(){
    if ( is_active_sidebar( 'shop_sidebar' ) && ( is_shop() || is_product_category() || is_product_tag() ) ) {
        echo '<div class="yumecommerce-shop-sidebar yumecommerce-sidebar">';
        dynamic_sidebar( 'shop_sidebar' );
        echo '</div>';
    }
}
add_action( 'woocommerce_sidebar', 'loor_add_woocommerce_sidebar' );

// if shop sidebar is active add class
function loor_woocommerce_sidebar_is_active() {
    if ( is_active_sidebar( 'shop_sidebar' ) && ( is_shop() || is_product_category() || is_product_tag() ) ) {
        add_filter( 'body_class', 'loor_woocommerce_sidebar_class' );
        function loor_woocommerce_sidebar_class( $classes ) {
            $classes[] = 'woocommerce-sidebar-active';
            return $classes;
        }
    }
}
add_action( 'wp_head', 'loor_woocommerce_sidebar_is_active' );

// remove woocommerce style smallscreen
add_filter( 'woocommerce_enqueue_styles', 'loor_woo_dequeue_styles' );
function loor_woo_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-smallscreen'] );
    return $enqueue_styles;
}

// add woocommerce class to body to fix widgets on the main page
function loor_woocommerce_body_class() {
    add_filter( 'body_class', 'add_woocommerce_class' );
    function add_woocommerce_class( $classes ) {
        $classes[] = 'woocommerce';
        return $classes;
    }
    // add class to body if option of redirect yes
    if ( get_option( 'woocommerce_cart_redirect_after_add' ) === 'yes' ) {
        add_filter( 'body_class', 'loor_redirect_to_cart' );
        function loor_redirect_to_cart( $classes ) {
            $classes[] = 'redirect-after-add';
            return $classes;
        }
    }
}
add_action( 'wp_head', 'loor_woocommerce_body_class' );

// add swiper gallery if yes
if ( get_theme_mod('loor_store_page_styling_gallery', 'theme') == 'theme' ) {

    // Dequeue prettyPhoto
    function loor_prettyphoto_dequeue_script() {
        wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
        wp_dequeue_script( 'prettyPhoto' );
        wp_dequeue_script( 'prettyPhoto-init' );
    }
    add_action( 'wp_enqueue_scripts', 'loor_prettyphoto_dequeue_script', 100 );

    function woocommerce_show_product_thumbnails() {

        global $post, $product, $woocommerce;

        $post_thumbnail_id = array();

        $attachment_ids = $product->get_gallery_attachment_ids();
        $post_thumbnail_id[] = get_post_thumbnail_id();

        if ( $attachment_ids ) {
            $loop       = 0;
            $columns    = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );

            $attachment_ids = array_merge($post_thumbnail_id, $attachment_ids);
            ?>
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <?php

                    foreach ( $attachment_ids as $attachment_id ) {

                        $classes = array( 'zoom' );

                        $image_link = wp_get_attachment_url( $attachment_id );

                        if ( ! $image_link )
                            continue;

                        $image_title    = esc_attr( get_the_title( $attachment_id ) );
                        $image_caption  = esc_attr( get_post_field( 'post_excerpt', $attachment_id ) );

                        $image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_single_image_size' ), 0, $attr = array(
                            'title' => $image_title,
                            'alt'   => $image_title

                        ) );
                        $imagesrc = wp_get_attachment_image_src( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_single_image_size' ) );
                        $image_class = esc_attr( implode( ' ', $classes ) );

                        echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<div class="swiper-slide"><img src="%s"></div>',
                            $imagesrc[0] ), $attachment_id, $post->ID, $image_class );
                    }

                    ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next swiper-button-<?php echo get_theme_mod('loor_store_page_styling_arrow_color', 'black'); ?> ld-visible"></div>
                <div class="swiper-button-prev swiper-button-<?php echo get_theme_mod('loor_store_page_styling_arrow_color', 'black'); ?> ld-visible"></div>
            </div>
            <?php
        }
    }
}

// change product title (h3) of main shop section
if (  ! function_exists( 'woocommerce_template_loop_product_title' ) ) {
    function woocommerce_template_loop_product_title() { ?>
        <p><?php the_title(); ?></p>
    <?php }
}

// remove woocommerce breadcrumbs
add_action( 'init', 'loor_remove_wc_breadcrumbs' );
function loor_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

// change order of rendering woocommerce single product page
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 15 );

// change position of cross sell
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_after_cart', 'woocommerce_cross_sell_display', 10 );

// add empty stars after title
add_filter( 'woocommerce_single_product_summary', 'loor_empty_stars', 11 );
function loor_empty_stars() {
    global $product;
    if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' || $product->post->comment_status === 'closed' ) {
        return;
    }
    else {
        $rating_count = $product->get_rating_count();
        $review_count = $product->get_review_count();
        $average      = $product->get_average_rating();

        if ( $rating_count === 0 ) : ?>
            <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <div class="star-rating" title="<?php printf( __( 'Rated %s out of 5', 'loor' ), $average ); ?>">
        			<span style="width:<?php echo ( ( $average / 5 ) * 100 ); ?>%">
        				<strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( __( 'out of %s5%s', 'loor' ), '<span itemprop="bestRating">', '</span>' ); ?>
                        <?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'loor' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
        			</span>
                </div>
                <?php if ( comments_open() ) : ?><a href="#reviews" class="woocommerce-review-link" rel="nofollow"> <?php esc_html_e( 'There are no reviews yet', 'loor' ); ?></a><?php endif ?>
            </div>
        <?php endif;
    }
}

// add product tab woocommerce
add_filter( 'woocommerce_product_tabs', 'loor_new_product_tab' );
function loor_new_product_tab( $tabs ) {
    // Adds new tab
    $tabs['yumecommerce_product_tab'] = array(
        'title'     => esc_html__( 'Product', 'loor' ),
        'priority'  => 5,
        'callback'  => 'loor_new_product_tab_content'
    );
    global $product;
    // Rename the additional information tab
    // Check if product has attributes, dimensions or weight
    if( $product->has_attributes() || $product->has_dimensions() || $product->has_weight() ) {
        $tabs['additional_information']['title'] = esc_html__( 'Info', 'loor' );
        $tabs['additional_information']['priority'] = 15;
    }
    return $tabs;
}
function loor_new_product_tab_content() {
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
    do_action( 'woocommerce_single_product_summary' );
}

// add wrapper element for product
add_action('woocommerce_before_single_product_summary', 'add_wrapper_product_element_start', 5);
function add_wrapper_product_element_start() {
    echo '<div class="yumecommerce-single-product">';
}
add_action('woocommerce_after_single_product_summary', 'add_wrapper_product_element_end', 14);
function add_wrapper_product_element_end() {
    echo '</div>';
}


// add wrapper element for product summary
add_action('woocommerce_before_single_product_summary', 'loor_add_wrapper_element_start', 30);
function loor_add_wrapper_element_start() {
    echo '<div class="yumecommerce-summary">';
}
add_action('woocommerce_after_single_product_summary', 'loor_add_wrapper_element_end', 12);
function loor_add_wrapper_element_end() {
    echo '</div>';
}

// add share butttons after price
add_action('woocommerce_single_product_summary', 'loor_add_share_buttons_after_price', 14);
function loor_add_share_buttons_after_price() {
    if (get_theme_mod('loor_store_page_styling_share', '1') == '1') {
        if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); }
    }
}

// change position of error messages
// put it after price and share buttons
remove_action( 'woocommerce_before_single_product', 'wc_print_notices' );
add_action( 'woocommerce_single_product_summary', 'wc_print_notices', 15 );

// change rating function for single product
// remove () in a link
// change link to a just link tab
function woocommerce_template_single_rating() {
    global $product;
    if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
        return;
    }
    $rating_count = $product->get_rating_count();
    $review_count = $product->get_review_count();
    $average      = $product->get_average_rating();
    if ( $rating_count > 0 ) : ?>

        <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
            <div class="star-rating">
                    <span style="width:<?php echo ( ( $average / 5 ) * 100 ); ?>%">
                        <strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( __( 'out of %s5%s', 'loor' ), '<span itemprop="bestRating">', '</span>' ); ?>
                        <?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'loor' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
                    </span>
            </div>
            <?php if ( comments_open() ) : ?><a href="#tab-reviews" class="woocommerce-review-link" rel="nofollow"><?php printf( _n( '%s customer review', '%s customer reviews', $review_count, 'loor' ), '<span itemprop="reviewCount" class="count">' . $review_count . '</span>' ); ?></a><?php endif ?>
        </div>
    <?php endif;
}

// add counter to mini cart
function loor_mini_cart_counter() {
    echo '<span class="count" data-count="' . WC()->cart->get_cart_contents_count() .'"></span>';
}

// create lazy loading attr
if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {
    // Get the product thumbnail, or the placeholder if not set.
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
        global $post;
        if ( has_post_thumbnail() ) {
            $domsxe = simplexml_load_string(get_the_post_thumbnail($post->ID, 'shop_catalog'));
            if ( $domsxe ) {
                $thumbnailsrc = $domsxe->attributes()->src;
                return '<div class="yumecommerce-thumbnail">' . get_the_post_thumbnail( $post->ID, $size, $attr = array( 'src' => get_template_directory_uri()."/img/icons/empty.png", 'data-src' => $thumbnailsrc, 'class' => 'first-image lazy' ) ) . '</div>';
            }
        } elseif ( wc_placeholder_img_src() ) {
            return wc_placeholder_img( $size );
        }
    }
}

// create lazy loading attr and second image
if( get_theme_mod( 'loor_store_category_rollover_effect','1' ) == '1') {
    if ( ! class_exists( 'WC_pif' ) ) {
        class WC_pif {
            public function __construct() {
                add_action( 'woocommerce_before_shop_loop_item_title', array( $this, 'woocommerce_template_loop_second_product_thumbnail' ), 11 );
                add_filter( 'post_class', array( $this, 'product_has_gallery' ) );
            }
            // Add pif-has-gallery class to products that have a gallery
            function product_has_gallery( $classes ) {
                global $product;
                $post_type = get_post_type( get_the_ID() );
                if ( ! is_admin() ) {

                    if ( $post_type == 'product' ) {

                        $attachment_ids = $product->get_gallery_attachment_ids();

                        if ( $attachment_ids ) {
                            $classes[] = 'yumecommerce-product-rollover';
                        }
                    }
                }
                return $classes;
            }
            // Display second thumbnails
            function woocommerce_template_loop_second_product_thumbnail() {
                global $product, $woocommerce;
                $attachment_ids = $product->get_gallery_attachment_ids();
                if ( $attachment_ids != null ) {
                    if ( isset($attachment_ids[0]) ) {
                        $secondary_image_id = $attachment_ids[0];
                        $secondary_image_attributes = wp_get_attachment_image_src( $secondary_image_id, 'shop_catalog' );
                        echo wp_get_attachment_image( $secondary_image_id, 'shop_catalog', '', $attr = array( 'src' => get_template_directory_uri()."/img/icons/empty.png", 'data-src' => $secondary_image_attributes['0'], 'class' => 'secondary-image lazy' ) );
                    }
                }
            }
        }
        $WC_pif = new WC_pif();
    }
}

// remove related products if yes
// if no get number
if ( get_theme_mod('loor_store_page_styling_use_related_products', '1') == 0 ) {
    function wc_remove_related_products( $args ) {
        return array();
    }
    add_filter('woocommerce_related_products_args','wc_remove_related_products', 10);
}
else
{
    // Change number of related products on product page
    function woo_related_products_limit() {
        global $product;
        $args['posts_per_page'] = get_theme_mod('loor_store_page_styling_number_related_products', '5');
        return $args;
    }
    add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
    function jk_related_products_args( $args ) {
        $args['posts_per_page'] = get_theme_mod('loor_store_page_styling_number_related_products', '5');
        $args['columns'] = 1;
        return $args;
    }
}

// add next and previous for single product
add_action( 'woocommerce_single_product_summary', 'loor_store_navigation_links', 1 );
function loor_store_navigation_links(){
    if ( is_product() ) {
        $previous = get_previous_post();
        $next = get_next_post();
        echo '<div class="store-navigation-links">';
        if ( $next ) {
            printf( '<a href="%1$s">%2$s</a>',
                get_permalink( $next->ID ),
                esc_html__( 'Previous', 'loor' )
            );
        }
        if ( $next && $previous ) {
            echo '<span class="store-navigation-links-separator">|</span>';
        }
        if ( $previous ) {
            printf( '<a class="link-nav-right" href="%1$s">%2$s</a>',
                get_permalink( $previous->ID ),
                esc_html__( 'Next', 'loor' )
            );
        }
        echo '</div>';
    }
}

// add back to shop before product summary
add_action( 'woocommerce_before_single_product_summary', 'loor_back_to_store_button', 1 );
function loor_back_to_store_button(){
    $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
    ?>
    <div class="top-position-product ld-visible">
        <?php
        // link to the main shop page if option standart store is on
        if ( get_option('loor_standard_store') == 'true' ) {
            echo '<a href="'.$shop_page_url.'" class="standard-store-back-link"></a>';
        }
        ?>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
				<polygon class="top-position-product-container-arrow" points="15,7 4.4,7 8.4,3 7,1.6 0.6,8 0.6,8 0.6,8 7,14.4 8.4,13 4.4,9 15,9 "></polygon>
			</svg>
        <p>
            <?php
            if ( get_theme_mod('loor_store_page_text_back','') != '' ) {
                esc_html_e( get_theme_mod('loor_store_page_text_back','') );
            }
            else {
                esc_html_e('BACK TO SHOP', 'loor');
            }
            ?>
        </p>
    </div>
    <?php
}

// change number of thumbnails per row in product galleries
// in case using standard gallery
add_filter ( 'woocommerce_product_thumbnails_columns', 'loor_product_thumbnails_columns_gallery' );
function loor_product_thumbnails_columns_gallery() {
    return 4;
}

// get current users preference
function loor_get_products_per_page(){

    global $woocommerce;

    $option_number_of_items = get_theme_mod('loor_store_option_number_of_items_ld','5');

    $default = $option_number_of_items * 7;
    $count = $default;
    $options = loor_get_products_per_page_options();

    // capture form data and store in session
    if(isset($_POST['loor-woocommerce-products-per-page'])){

        // set products per page from dropdown
        $products_max = intval($_POST['loor-woocommerce-products-per-page']);
        if($products_max != 0 && $products_max >= -1){

            if(is_user_logged_in()){

                $user_id = get_current_user_id();
                $limit = get_user_meta( $user_id, '_product_per_page', true );

                if(!$limit){
                    add_user_meta( $user_id, '_product_per_page', $products_max);
                }else{
                    update_user_meta( $user_id, '_product_per_page', $products_max, $limit);
                }
            }

            $woocommerce->session->loor_product_per_page = $products_max;
            return $products_max;
        }
    }

    // load product limit from user meta
    if(is_user_logged_in() && !isset($woocommerce->session->loor_product_per_page)){
        $user_id = get_current_user_id();
        $limit = get_user_meta( $user_id, '_product_per_page', true );
        if(array_key_exists($limit, $options)){
            $woocommerce->session->loor_product_per_page = $limit;
            return $limit;
        }
    }

    // load product limit from session
    if(isset($woocommerce->session->loor_product_per_page)){

        // set products per page from woo session
        $products_max = intval($woocommerce->session->loor_product_per_page);
        if($products_max != 0 && $products_max >= -1){
            return $products_max;
        }
    }

    return $count;
}
add_filter('loop_shop_per_page','loor_get_products_per_page');

// fetch list of avaliable options
function loor_get_products_per_page_options(){
    $option_number_of_items = get_theme_mod('loor_store_option_number_of_items_ld','5');
    $options = apply_filters( 'loor_products_per_page', array(
        $option_number_of_items * 7 => $option_number_of_items * 7,
        $option_number_of_items * 11 => $option_number_of_items * 11,
        $option_number_of_items * 15 => $option_number_of_items * 15,
        $option_number_of_items * 19 => $option_number_of_items * 19,
        $option_number_of_items * 23 => $option_number_of_items * 23,
        -1 => esc_html__('All', 'loor'),
    ));
    return $options;
}

// display dropdown form to change amount of products displayed
function loor_woocommerce_products_per_page(){
    $options = loor_get_products_per_page_options();
    $current_value = loor_get_products_per_page();
    ?>
    <form action="" method="POST" class="woocommerce-products-per-page woocommerce-ordering">
        <select name="loor-woocommerce-products-per-page" class="orderby" onchange="this.form.submit()">
            <?php foreach($options as $value => $name): ?>
                <option value="<?php echo $value; ?>" <?php selected($value, $current_value); ?>><?php echo $name; ?></option>
            <?php endforeach; ?>
        </select>
    </form>
    <?php
}
add_action('woocommerce_before_shop_loop', 'loor_woocommerce_products_per_page', 20);