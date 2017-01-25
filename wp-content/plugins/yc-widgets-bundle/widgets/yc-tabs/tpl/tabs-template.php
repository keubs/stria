<?php
$widget_title =  wp_kses_post($instance['widget_title']);
$tab_icon_position =  wp_kses_post($instance['tabs_styling']['tab_icon_position']);
$tab_effect =  wp_kses_post($instance['tabs_styling']['tab_effect']);
?>


<?php if ($widget_title) { ?>
    <h3 class="widget-title">
        <span><?php echo $widget_title ?></span>
    </h3>
<?php } ?>

<div class="soua-tab">

    <ul class="soua-tabs">
        <?php foreach( $instance['repeater'] as $i => $repeater ) : ?>
        <li><a href="#" data-effect="<?php echo $tab_effect; ?>"> 

        <?php if($tab_icon_position == 'top'):?>    
        <?php if(siteorigin_widget_get_icon( $repeater['tab_icon'])): ?>
        <div class="tab-icon tab-icon-top">
        <?php echo siteorigin_widget_get_icon( $repeater['tab_icon'] ); ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>

        <?php if($tab_icon_position == 'left'):?>    
        <?php if(siteorigin_widget_get_icon( $repeater['tab_icon'])): ?>
        <div class="tab-icon tab-icon-left">
        <?php echo siteorigin_widget_get_icon( $repeater['tab_icon'] ); ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>

        <?php echo $repeater['tab_title']; ?>

        <?php if($tab_icon_position == 'right'):?>   
        <?php if(siteorigin_widget_get_icon( $repeater['tab_icon'])): ?>
        <div class="tab-icon tab-icon-right">
        <?php echo siteorigin_widget_get_icon( $repeater['tab_icon'] ); ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>

        </a></li>
        <?php endforeach; ?>
    </ul> <!-- / tabs -->

    <div class="tab_content">
        <?php foreach( $instance['repeater'] as $i => $repeater ) : ?>
        <div class="tabs_item">
            <?php
                $content = $repeater['content'];
                $content_builder_id = substr( md5( json_encode( $content ) ), 0, 8 );
                echo siteorigin_panels_render( 'w'.$content_builder_id, true, $content );
                echo $repeater['tab_content_wrap']['tab_content']; 
            ?>
        </div> <!-- / tabs_item -->
        <?php endforeach; ?>
    </div> <!-- / tab_content -->
</div> <!-- / tab -->