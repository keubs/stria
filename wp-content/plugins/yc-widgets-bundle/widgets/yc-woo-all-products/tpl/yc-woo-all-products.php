<div class="yumecommerce-main-shop-nav">
    <?php
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) )
    {
        $product_categories = get_terms( 'product_cat' );

        $category = 'all';

        if ( isset($instance['category']) ) {
            $category = $instance['category'];
        }

        if ( $category == 'all' ) {
            echo '<ul class="yumecommerce-tab-links ld-visible">';
            foreach ( $product_categories as $category_name ) {
                echo '<li class="yumecommerce-tab-link ' . $category_name->slug . '">' . $category_name->name . '</li>';
            }
            echo '</ul>';
            
            echo '<div class="yumecommerce-select-links-container sm-visible"><select id="yumecommerce-select-links">';
            foreach ( $product_categories as $category_name_options ) {
                echo '<option class="yumecommerce-tab-link">' . $category_name_options->name . '</option>';
            }
            echo '</select></div>';
            
            foreach ( $product_categories as $product_category ) {
                echo '<div class="yumecommerce-tab-category '.$product_category->slug.'">';
                echo do_shortcode('[product_category columns="0" per_page="'.$per_page.'" orderby="'.$orderby.'" order="'.$order.'" category="'.$product_category->slug.'" ]');
                echo '</div>';
            }
        } else {
            echo '<div class="yumecommerce-woo-category '.$category.'">';
            echo do_shortcode('[product_category columns="0" per_page="'.$per_page.'"  orderby="'.$orderby.'" order="'.$order.'" category="'.$category.'" ]');
            echo '</div>';
        }
        
        if (!$product_categories)
        {
           esc_html_e( 'Add new categories and products in WooCommerce', 'yc-widgets-bundle' );
        }
    }
    else
    {
        esc_html_e( 'WooCommerce plugin is not active!', 'yc-widgets-bundle' );
    }
    ?>
</div>