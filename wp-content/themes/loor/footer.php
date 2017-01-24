<?php
/**
 * The template for displaying the footer
 *
 * @author YumeCommerce
 * @version 1.0
 *
 **/

// Get template part for footer layout
$footer_layout = get_theme_mod( 'loor_footer_layout', 'standard' );

?>

    <div id="yumecommerce-custom-footer-widgets">
        <?php if ( is_active_sidebar( 'loor_footer' ) ) : ?>
        <div class="custom-section yumecommerce-section-footer">
            <?php dynamic_sidebar( 'loor_footer' ); ?>
        </div>
        <?php endif; ?>
    </div>
    <footer class="footer footer-<?php echo $footer_layout; ?>">
        <?php get_template_part('inc/parts/footer/footer', $footer_layout); ?>
    </footer>
</div>
<!-- end #container -->
</div> 
<!-- end boxed section -->

<?php wp_footer(); ?>

</body>
</html>