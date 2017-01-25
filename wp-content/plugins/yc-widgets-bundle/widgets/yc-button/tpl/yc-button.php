<div class="yc-button-base">
	<?php
	if(!empty($instance['yc_button']['new_window'])) $button_attributes['target'] = '_blank';
	if(!empty($instance['yc_button']['url'])) $button_attributes['href'] = sow_esc_url($instance['yc_button']['url']);
	if(!empty($instance['yc_button']['attributes']['id'])) $button_attributes['id'] = esc_attr($instance['yc_button']['attributes']['id']);
	if(!empty($instance['yc_button']['attributes']['title'])) $button_attributes['title'] = esc_attr($instance['yc_button']['attributes']['title']);
	if(!empty($instance['yc_button']['attributes']['onclick'])) $button_attributes['onclick'] = esc_attr($instance['yc_button']['attributes']['onclick']);
	?>

	<a <?php foreach($button_attributes as $name => $val) echo $name . '="' . $val . '" ' ?>>
		<?php echo wp_kses_post($instance['yc_button']['text']) ?>
	</a>
</div>