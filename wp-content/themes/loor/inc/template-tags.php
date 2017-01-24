<?php
/**
 * Custom YumeCommerce template tags
 * - Load social icons
 * - Show posts title
 * 
 * @since 1.0
 */
 
// get social icons from file
if ( !function_exists( 'loor_social_icons_print_svg' ) ) :
    function loor_social_icons_print_svg() {
        echo wp_remote_fopen( get_template_directory_uri() . "/img/icons/templateicons.svg");
    }
endif;

// show social icons if present
if ( !function_exists( 'loor_social_icons' ) ) :
    function loor_social_icons() {
        if( !get_theme_mod( 'icon-twitter' ) == '') : ?>
            <a href="<?php echo get_theme_mod( 'icon-twitter' ); ?>" target="_blank">
                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg>
            </a>
        <?php endif;
        if( !get_theme_mod( 'icon-instagram' ) == '') : ?>
            <a href="<?php echo get_theme_mod( 'icon-instagram' ); ?>" target="_blank">
                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use></svg>
            </a>
        <?php endif;
        if( !get_theme_mod( 'icon-facebook' ) == '') : ?>
            <a href="<?php echo get_theme_mod( 'icon-facebook' ); ?>" target="_blank">
                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg>
            </a>
        <?php endif;
        if( !get_theme_mod( 'icon-google' ) == '') : ?>
            <a href="<?php echo get_theme_mod( 'icon-google' ); ?>" target="_blank">
                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googlePlus"></use></svg>
            </a>
        <?php endif;
        if( !get_theme_mod( 'icon-tumblr' ) == '') : ?>
            <a href="<?php echo get_theme_mod( 'icon-tumblr' ); ?>" target="_blank">
                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#tumblr"></use></svg>
            </a>
        <?php endif;
        if( !get_theme_mod( 'icon-pinterest' ) == '') : ?>
            <a href="<?php echo get_theme_mod( 'icon-pinterest' ); ?>" target="_blank">
                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pinterest"></use></svg>
            </a>
        <?php endif;
    }
endif;

// add svg share icons
if ( !function_exists( 'loor_add_share_buttons' ) ) :
    function loor_add_share_buttons() {
        echo '<div class="a2a_kit a2a_kit_size_32 a2a_default_style ld-visible">';
            echo '<a class="a2a_button_facebook"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg></a>';
            echo '<a class="a2a_button_twitter"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>';
            echo '<a class="a2a_button_pinterest" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pinterest"></use></svg></a>';
            echo '<a class="a2a_button_google_plus"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googlePlus"></use></svg></a>';
        echo '</div>';
    }
endif;

function loor_hex_color_adjusting($hex, $steps) {
    // Negative = darker, positive = lighter
    $steps = max(-255, min(255, $steps));

    // Normalize into a six character long hex string
    $hex = str_replace('#', '', $hex);
    if (strlen($hex) == 3) {
        $hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
    }

    // Split into three parts: R, G and B
    $color_parts = str_split($hex, 2);
    $return = '#';

    foreach ($color_parts as $color) {
        $color   = hexdec($color); // Convert to decimal
        $color   = max(0,min(255,$color + $steps)); // Adjust color
        $return .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT); // Make two char hex code
    }

    return $return;
}

// generate title for posts and pages
function loor_page_title() {
    ?>
    <header class="taxonomy-header">
        <h1 class="taxonomy-title main-title">
    <?php
            if (is_home()) {
            if (get_option('page_for_posts', true)) {
              echo get_the_title(get_option('page_for_posts', true));
            } else {
              _e('Latest Posts', 'loor');
            }
          } elseif (is_archive()) {
            $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
            if ($term) {
              echo $term->name;
            } elseif (is_post_type_archive()) {
              echo get_queried_object()->labels->name;
            } elseif (is_day()) {
              printf(esc_html__('Daily Archives: %s', 'loor'), get_the_date());
            } elseif (is_month()) {
              printf(esc_html__('Monthly Archives: %s', 'loor'), get_the_date('F Y'));
            } elseif (is_year()) {
              printf(esc_html__('Yearly Archives: %s', 'loor'), get_the_date('Y'));
            } elseif (is_author()) {
              $author = get_queried_object();
              printf(esc_html__('Author Archives: %s', 'loor'), $author->display_name);
            } else {
              single_cat_title();
            }
            } elseif (is_search()) {
            printf(esc_html__('Search Results for %s', 'loor'), get_search_query());
            } elseif (is_404()) {
            esc_html_e('Not Found', 'loor');
            } else {
                the_title();
            }
        ?>
        <h1>
    </header>
    <?php
}