<div class="footer-social-icons">
    <?php loor_social_icons(); ?>
</div>
<?php wp_nav_menu(array( 'depth' => 1, 'theme_location' => 'loor_footer_nav', 'container_class' => 'menu-footer-container' )); ?>
<div class="copyrights">
    <p><?php echo esc_attr( get_theme_mod('footer_text', '2016 Your Site. All rights reserved.') ); ?>
    	<span class="yumecommerce-theme-copyright">Created by <a href="http://yumecommerce.com"  target="_blank">YumeCommerce</a></span>
    </p>
</div>
