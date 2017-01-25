<?php
$last_row = floor( ( count($instance['yc_features']['features']) - 1 ) / $instance['layout']['per_row'] );
?>
<div class="yc-features-list">
	<?php foreach( $instance['yc_features']['features'] as $i => $feature ) : ?>

		<?php if( $i % $instance['layout']['per_row'] == 0 && $i != 0 ) : ?>
			<div class="yc-features-clear"></div>
		<?php endif; ?>

		<div class="yc-features-feature <?php if(  floor( $i / $instance['layout']['per_row'] ) == $last_row ) echo 'yc-features-feature-last-row' ?>">

			<?php if( !empty( $feature['more_url'] ) && $instance['yc_features']['icon_link'] ) echo '<a href="' . sow_esc_url( $feature['more_url'] ) . '" ' . ( $instance['yc_features']['new_window'] ? 'target="_blank"' : '' ) . '>'; ?>
			<div class="yc-icon-container">
			<?php
				if( !empty($feature['icon_image']) ||  !empty($feature['icon']) ) { ?>
					<div class="yc-icon">
						<?php
						if( !empty($feature['icon_image']) ) {
							$attachment = wp_get_attachment_image_src( $feature['icon_image'], 'full' );
							echo '<img src="' . sow_esc_url($attachment[0]) . '" alt="" >';
						}
						else {
							$icon_styles = array();
							if(!empty($feature['icon_color'])) $icon_styles[] = 'color: '.$feature['icon_color'];
							echo siteorigin_widget_get_icon($feature['icon'], $icon_styles);
						} ?> 
					</div> 
				<?php } ?>
				<?php 
				// if title yes
				?>
				<?php if( !empty($feature['title']) ) : ?>
					<<?php echo $instance['layout']['tag']; ?> class="yc-feature-title">
						<?php if( !empty( $feature['more_url'] ) && $instance['yc_features']['title_link'] ) echo '<a href="' . sow_esc_url( $feature['more_url'] ) . '" ' . ( $instance['yc_features']['new_window'] ? 'target="_blank"' : '' ) . '>'; ?>
						<?php echo wp_kses_post( $feature['title'] ) ?>
						<?php if( !empty( $feature['more_url'] ) && $instance['yc_features']['title_link'] ) echo '</a>'; ?>
					</<?php echo $instance['layout']['tag']; ?>>
				<?php endif; ?>
			</div>
			<?php if( !empty( $feature['more_url'] ) && $instance['yc_features']['icon_link'] ) echo '</a>'; ?>

			<div class="textwidget">
				<?php if(!empty($feature['text'])) : ?>
					<p class="yc-text-text"><?php echo wp_kses_post( $feature['text'] ) ?></p>
				<?php endif; ?>

				<?php if(!empty($feature['more_text'])) : ?>
					<p class="yc-more-text">
						<?php if( !empty( $feature['more_url'] ) ) echo '<a href="' . sow_esc_url( $feature['more_url'] ) . '" ' . ( $instance['yc_features']['new_window'] ? 'target="_blank"' : '' ) . '>'; ?>
						<?php echo wp_kses_post( $feature['more_text'] ) ?>
						<?php if( !empty( $feature['more_url'] ) ) echo '</a>'; ?>
					</p>
				<?php endif; ?>
			</div>
		</div>

	<?php endforeach; ?>

</div>
