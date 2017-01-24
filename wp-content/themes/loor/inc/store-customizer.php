<?php

/**
 * Add Customizer for store.
 */


function loor_store_customize_register($wp_customize) {
    $wp_customize->add_panel('loor_store_options', array(
		'priority' => 40,
		'title' => __('Store Options', 'loor')
	));
	// store heading
	$wp_customize->add_section('loor_store_option_category_heading', array(
		'priority' => 20,
		'title' => __('Categories', 'loor') ,
		'description' => __('', 'loor') ,
		'panel' => 'loor_store_options'
	));

	$wp_customize->add_setting( 'loor_store_category_heading_align', array( 
	    'default' => 'center',
	    'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control( 'loor_store_category_heading_align', array( 
        'type' => 'select', 
        'label' => __('Alignment', 'loor'), 
        'section' => 'loor_store_option_category_heading', 
        'choices' => array( 
            'left' => 'Left', 
            'center' => 'Center', 
            'right' => 'Right'
    )));

	$wp_customize->add_setting('loor_store_category_styling_uppercase', array(
		'default' => 'none',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_category_styling_uppercase', array(
		'type' => 'select',
		'label' => __('Uppercase', 'loor'),
		'section' => 'loor_store_option_category_heading',
		'choices' => array(
			'uppercase' => 'Yes',
			'none' => 'No'
		)
	));

	$wp_customize->add_setting('loor_store_category_styling_font_weight', array(
		'default' => '400',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_category_styling_font_weight', array(
		'type' => 'select',
		'label' => __('Font Weight', 'loor'),
		'section' => 'loor_store_option_category_heading',
		'choices' => array(
			'100' => '100',
			'200' => '200',
			'300' => '300',
			'400' => '400',
			'500' => '500',
			'600' => '600',
			'700' => '700',
			'800' => '800',
			'900' => '900',
		)
	));

	$wp_customize->add_setting('loor_store_option_category_font_size', array(
		'default' => '1em',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('loor_store_option_category_font_size', array(
		'label' => __('Font Size', 'loor'),
		'section' => 'loor_store_option_category_heading',
		'settings' => 'loor_store_option_category_font_size'
	));

	$wp_customize->add_setting('loor_store_option_category_bottom_indent', array(
		'default' => '30px',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('loor_store_option_category_bottom_indent', array(
		'label' => __('Bottom Indent', 'loor'),
		'section' => 'loor_store_option_category_heading',
		'settings' => 'loor_store_option_category_bottom_indent'
	));
    
	$wp_customize->add_setting('loor_store_category_color_title', array(
		'default' => '#cacaca',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_color_title', array(
		'label' => __('Font color', 'loor') ,
		'section' => 'loor_store_option_category_heading',
		'settings' => 'loor_store_category_color_title'
	)));
	$wp_customize->add_setting('loor_store_category_color_title_active', array(
		'default' => '#ccaf7e',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_color_title_active', array(
		'label' => __('Font color active', 'loor') ,
		'section' => 'loor_store_option_category_heading',
		'settings' => 'loor_store_category_color_title_active'
	)));
	$wp_customize->add_setting('loor_store_category_border_color_active', array(
		'default' => '#ccaf7e',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_border_color_active', array(
		'label' => __('Border color active', 'loor') ,
		'section' => 'loor_store_option_category_heading',
		'settings' => 'loor_store_category_border_color_active'
	)));


	// product category page styling
	$wp_customize->add_section('loor_store_category_styling', array(
		'priority' => 30,
		'title' => __('Product category styling', 'loor') ,
		'panel' => 'loor_store_options'
	));
	$wp_customize->add_setting('loor_store_category_styling_title', array(
		'default' => '#30373B',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_styling_title', array(
		'label' => __('Product title color', 'loor') ,
		'section' => 'loor_store_category_styling',
		'settings' => 'loor_store_category_styling_title'
	)));
	$wp_customize->add_setting('loor_store_category_styling_title_hover', array(
		'default' => '#ccaf7e',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_styling_title_hover', array(
		'label' => __('Product title color when mouse is over it', 'loor') ,
		'section' => 'loor_store_category_styling',
		'settings' => 'loor_store_category_styling_title_hover'
	)));
	$wp_customize->add_setting('loor_store_category_styling_price', array(
		'default' => '#bcbcbc',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_styling_price', array(
		'label' => __('Product price color', 'loor') ,
		'section' => 'loor_store_category_styling',
		'settings' => 'loor_store_category_styling_price'
	)));
	$wp_customize->add_setting('loor_store_category_styling_price_hover', array(
		'default' => '#828282',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_styling_price_hover', array(
		'label' => __('Product price color when mouse is over it', 'loor') ,
		'section' => 'loor_store_category_styling',
		'settings' => 'loor_store_category_styling_price_hover'
	)));
	$wp_customize->add_setting('loor_store_category_styling_title_uppercase', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_category_styling_title_uppercase', array(
		'type' => 'select',
		'label' => __('Uppercase', 'loor'),
		'section' => 'loor_store_category_styling',
		'choices' => array(
			'1' => 'Yes',
			'0' => 'No'
		)
	));
	$wp_customize->add_setting('loor_store_category_styling_text_align', array(
		'default' => 'center',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_category_styling_text_align', array(
		'type' => 'select',
		'label' => __('Alignment for text', 'loor') ,
		'section' => 'loor_store_category_styling',
		'choices' => array(
			'left' => 'Left',
			'center' => 'Center',
			'right' => 'Right'
		)
	));
	$wp_customize->add_setting('loor_store_category_styling_item_align', array(
		'default' => 'center',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_category_styling_item_align', array(
		'type' => 'select',
		'label' => __('Alignment for items', 'loor') ,
		'section' => 'loor_store_category_styling',
		'choices' => array(
			'flex-start' => 'Left',
			'center' => 'Center',
			'flex-end' => 'Right'
		)
	));
	$wp_customize->add_setting('loor_store_category_sale_label', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_category_sale_label', array(
		'type' => 'select',
		'label' => __('Show sale label', 'loor') ,
		'section' => 'loor_store_category_styling',
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));
	$wp_customize->add_setting('loor_store_category_sale_label_background', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_sale_label_background', array(
		'label' => __('Sale label background', 'loor') ,
		'section' => 'loor_store_category_styling',
		'settings' => 'loor_store_category_sale_label_background'
	)));
	$wp_customize->add_setting('loor_store_category_sale_label_border_color', array(
		'default' => '#545454',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_sale_label_border_color', array(
		'label' => __('Sale label border color', 'loor') ,
		'section' => 'loor_store_category_styling',
		'settings' => 'loor_store_category_sale_label_border_color'
	)));
	$wp_customize->add_setting('loor_store_category_sale_label_color', array(
		'default' => '#545454',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_category_sale_label_color', array(
		'label' => __('Sale label font color', 'loor') ,
		'section' => 'loor_store_category_styling',
		'settings' => 'loor_store_category_sale_label_color'
	)));
	$wp_customize->add_setting('loor_store_category_rollover_effect', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_category_rollover_effect', array(
		'type' => 'select',
		'label' => __('Use rollover effect', 'loor'),
		'description' => __('Will apply only after saving and refreshing the whole page', 'loor') ,
		'section' => 'loor_store_category_styling',
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));

	// number of items on a row
	$wp_customize->add_section('loor_store_option_number_of_items', array(
		'priority' => 30,
		'title' => __('Row control', 'loor') ,
		'description' => __('Change the number of products per row that are listed for each resolution below', 'loor') ,
		'panel' => 'loor_store_options'
	));
	$wp_customize->add_setting('loor_store_option_number_of_items_m', array(
		'default' => '2',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('loor_store_option_number_of_items_m', array(
		'label' => __('For mobiles', 'loor') ,
		'description' => __('less than 700px', 'loor') ,
		'section' => 'loor_store_option_number_of_items',
		'settings' => 'loor_store_option_number_of_items_m'
	));
	$wp_customize->add_setting('loor_store_option_number_of_items_t', array(
		'default' => '3',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('loor_store_option_number_of_items_t', array(
		'label' => __('For tablets', 'loor') ,
		'description' => __('700px and up', 'loor') ,
		'section' => 'loor_store_option_number_of_items',
		'settings' => 'loor_store_option_number_of_items_t'
	));
	$wp_customize->add_setting('loor_store_option_number_of_items_d', array(
		'default' => '4',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('loor_store_option_number_of_items_d', array(
		'label' => __('For desktops', 'loor') ,
		'description' => __('992px and up', 'loor') ,
		'section' => 'loor_store_option_number_of_items',
		'settings' => 'loor_store_option_number_of_items_d'
	));
	$wp_customize->add_setting('loor_store_option_number_of_items_ld', array(
		'default' => '5',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('loor_store_option_number_of_items_ld', array(
		'label' => __('For large desktops', 'loor') ,
		'description' => __('1200px and up', 'loor') ,
		'section' => 'loor_store_option_number_of_items',
		'settings' => 'loor_store_option_number_of_items_ld'
	));
	$wp_customize->add_setting('loor_store_option_gutter_mobile', array(
		'default' => '5',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('loor_store_option_gutter_mobile', array(
		'label' => __('Gutter spacing for mobile', 'loor') ,
		'description' => __('Gutter between items for mobile devices (700px and less)', 'loor') ,
		'section' => 'loor_store_option_number_of_items',
		'settings' => 'loor_store_option_gutter_mobile'
	));
	$wp_customize->add_setting('loor_store_option_gutter', array(
		'default' => '15',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('loor_store_option_gutter', array(
		'label' => __('Gutter spacing for tablets and desktops', 'loor') ,
		'description' => __('Gutter between items for tablets and desktops (700px and up)', 'loor') ,
		'section' => 'loor_store_option_number_of_items',
		'settings' => 'loor_store_option_gutter'
	));
	

	// product page styling
	$wp_customize->add_section('loor_store_page_styling', array(
		'priority' => 30,
		'title' => __('Product page styling', 'loor') ,
		'panel' => 'loor_store_options'
	));
	$wp_customize->add_setting('loor_store_page_styling_title_color', array(
		'default' => '#30373B',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_page_styling_title_color', array(
		'label' => __('Product title color', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_title_color'
	)));
	$wp_customize->add_setting('loor_store_page_styling_price_color', array(
		'default' => '#242629',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_page_styling_price_color', array(
		'label' => __('Product price color', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_price_color'
	)));
	$wp_customize->add_setting('loor_store_page_styling_tabs_color', array(
		'default' => '#989898',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_page_styling_tabs_color', array(
		'label' => __('Tab links color', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_tabs_color'
	)));
	$wp_customize->add_setting('loor_store_page_styling_active_tabs_color', array(
		'default' => '#dab98d',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_page_styling_active_tabs_color', array(
		'label' => __('Active tab color', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_active_tabs_color'
	)));
	$wp_customize->add_setting('loor_store_page_styling_tabs_border_color', array(
		'default' => '#efefef',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_page_styling_tabs_border_color', array(
		'label' => __('Tabs border color', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_tabs_border_color'
	)));
	$wp_customize->add_setting('loor_store_page_styling_woocommerce_message', array(
		'default' => '#8ec06c',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_page_styling_woocommerce_message', array(
		'label' => __('Background color for successful messages', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_woocommerce_message'
	)));
	$wp_customize->add_setting('loor_store_page_styling_woocommerce_message_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_page_styling_woocommerce_message_color', array(
		'label' => __('Text color for successful messages', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_woocommerce_message_color'
	)));
	$wp_customize->add_setting('loor_store_page_styling_woocommerce_message_error', array(
		'default' => '#ffebcd',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_page_styling_woocommerce_message_error', array(
		'label' => __('Background color for error messages', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_woocommerce_message_error'
	)));
	$wp_customize->add_setting('loor_store_page_styling_woocommerce_message_error_color', array(
		'default' => '#444444',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_page_styling_woocommerce_message_error_color', array(
		'label' => __('Text color for error messages', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_woocommerce_message_error_color'
	)));
	$wp_customize->add_setting('loor_store_page_text_back', array(
		'default' => '',
		'sanitize_callback' => 'wp_filter_post_kses'
	));
	$wp_customize->add_control('loor_store_page_text_back', array(
		'label' => __('Custom text for "Back to shop" link', 'loor'),
		'description' => __('If this field is empty, the default text will be shown.', 'loor'),
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_text_back'
	));
	$wp_customize->add_setting('loor_store_page_styling_arrow_color', array(
		'default' => 'black',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_page_styling_arrow_color', array(
		'type' => 'select',
		'label' => __('Color for arrows of product slider', 'loor'),
		'section' => 'loor_store_page_styling',
		'choices' => array(
			'black' => 'Black',
			'white' => 'White'
		)
	));

	$wp_customize->add_setting('loor_store_page_styling_gallery', array(
		'default' => 'theme',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_page_styling_gallery', array(
		'type' => 'select',
		'label' => __('Gallery for product', 'loor'),
		'description' => __('Type of gallery which will be used', 'loor'),
		'section' => 'loor_store_page_styling',
		'choices' => array(
			'standard' => 'Standard gallery',
			'theme' => 'Theme\'s gallery',
		)
	));

	$wp_customize->add_setting('loor_store_page_styling_zoom', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_page_styling_zoom', array(
		'type' => 'select',
		'label' => __('Use zoom effect', 'loor'),
		'description' => __('Enlarge product images on click. Will work only with theme\'s gallery.', 'loor'),
		'section' => 'loor_store_page_styling',
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));
	$wp_customize->add_setting('loor_store_page_styling_share', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_page_styling_share', array(
		'type' => 'select',
		'label' => __('Use share buttons', 'loor'),
		'description' => __('Add sharing buttons.', 'loor') ,
		'section' => 'loor_store_page_styling',
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));
	$wp_customize->add_setting('loor_store_page_styling_sale_label', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_page_styling_sale_label', array(
		'type' => 'select',
		'label' => __('Show sale label', 'loor') ,
		'section' => 'loor_store_page_styling',
		'description' => __('Show sale label on the product page', 'loor') ,
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));
	$wp_customize->add_setting('loor_store_page_styling_use_related_products', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_page_styling_use_related_products', array(
		'type' => 'select',
		'label' => __('Use related products', 'loor') ,
		'section' => 'loor_store_page_styling',
		'description' => __('Show related products on the product page', 'loor') ,
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));
	$wp_customize->add_setting('loor_store_page_styling_number_related_products', array(
		'default' => '5',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control('loor_store_page_styling_number_related_products', array(
		'label' => __('Number of related products', 'loor') ,
		'section' => 'loor_store_page_styling',
		'settings' => 'loor_store_page_styling_number_related_products'
	));
	
	// cart and checkout styling
	$wp_customize->add_section('loor_store_cart_checkout_style', array(
		'priority' => 40,
		'title' => __('Cart and checkout styling', 'loor') ,
		'panel' => 'loor_store_options'
	));
	$wp_customize->add_setting('loor_store_cart_checkout_style_cart_totals', array(
		'default' => '#f9f9f9',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_cart_checkout_style_cart_totals', array(
		'label' => __('Background for orders', 'loor'),
		'description' => __('Background color for orders and cart totals', 'loor'),
		'section' => 'loor_store_cart_checkout_style',
		'settings' => 'loor_store_cart_checkout_style_cart_totals'
	)));
	$wp_customize->add_setting('loor_store_cart_checkout_payment', array(
		'default' => '#f9f9f9',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_cart_checkout_payment', array(
		'label' => __('Background for payments', 'loor'),
		'description' => __('Background color for payment methods on the checkout page', 'loor'),
		'section' => 'loor_store_cart_checkout_style',
		'settings' => 'loor_store_cart_checkout_payment'
	)));
	$wp_customize->add_setting('loor_store_cart_checkout_payment_method_desc', array(
		'default' => '#eaeaef',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_cart_checkout_payment_method_desc', array(
		'label' => __('Background for payment description', 'loor'),
		'section' => 'loor_store_cart_checkout_style',
		'settings' => 'loor_store_cart_checkout_payment_method_desc'
	)));
	$wp_customize->add_setting('loor_store_cart_checkout_payment_method_desc_color', array(
		'default' => '#515151',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_cart_checkout_payment_method_desc_color', array(
		'label' => __('Color for payment description', 'loor'),
		'section' => 'loor_store_cart_checkout_style',
		'settings' => 'loor_store_cart_checkout_payment_method_desc_color'
	)));
	$wp_customize->add_setting('loor_store_cart_checkout_separator', array(
		'default' => '#dfdfdf',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'loor_store_cart_checkout_separator', array(
		'label' => __('Color for separator', 'loor'),
		'section' => 'loor_store_cart_checkout_style',
		'settings' => 'loor_store_cart_checkout_separator'
	)));
	$wp_customize->add_setting('loor_store_cart_checkout_hyphens', array(
		'default' => 'none',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_store_cart_checkout_hyphens', array(
		'type' => 'select',
		'label' => __('Hyphens for shipping labels', 'loor') ,
		'section' => 'loor_store_cart_checkout_style',
		'description' => __('In case you have long labels of shipping methods.', 'loor') ,
		'choices' => array(
			'none' => 'None',
			'manual' => 'Manual',
			'auto' => 'Auto'
		)
	));

	// standard store options
	$wp_customize->add_section('loor_standard_store_options', array(
		'priority' => 50,
		'title' => __('Standard store', 'loor') ,
		'panel' => 'loor_store_options',
		'description' => __('Options for main shop page for a standard store. You need to have the option "Standard Store" checked in "Theme Options".', 'loor'),
	));

	$wp_customize->add_setting('loor_standard_store_sidebar', array(
		'default' => 'shop-left-sidebar',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_standard_store_sidebar', array(
		'type' => 'select',
		'label' => __('Sidebar position', 'loor') ,
		'section' => 'loor_standard_store_options',
		'choices' => array(
			'shop-left-sidebar' => 'Left Sidebar',
			'shop-right-sidebar' => 'Right Sidebar'
		)
	));

	$wp_customize->add_setting('loor_standard_store_result_count', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_standard_store_result_count', array(
		'type' => 'select',
		'label' => __('Display result count', 'loor') ,
		'section' => 'loor_standard_store_options',
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));

	$wp_customize->add_setting('loor_standard_store_orderby', array(
		'default' => '1',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_standard_store_orderby', array(
		'type' => 'select',
		'label' => __('Display Order By and Products Per Page', 'loor') ,
		'section' => 'loor_standard_store_options',
		'choices' => array(
			'0' => 'No',
			'1' => 'Yes'
		)
	));

}
add_action('customize_register', 'loor_store_customize_register');


// if zoom is yes add class to body
// if sidebar is not set to the left side add class
function loor_item_page_styling_zoom() {
    if ( get_theme_mod( 'loor_store_page_styling_zoom', '1' ) == '1' && get_theme_mod( 'loor_store_page_styling_gallery', 'theme' ) == 'theme' ) {
        add_filter( 'body_class', 'loor_store_page_styling_zoom' );
        function loor_store_page_styling_zoom( $classes ) {
        	$classes[] = 'items-have-zoom';
        	return $classes;
        }
    }

    if ( get_theme_mod( 'loor_standard_store_sidebar', 'shop-left-sidebar' ) != 'shop-left-sidebar' ) {
        add_filter( 'body_class', 'loor_store_page_sidebar_position' );
        function loor_store_page_sidebar_position( $classes ) {
        	$classes[] = 'shop-right-sidebar';
        	return $classes;
        }
    }
}
add_action( 'wp_head', 'loor_item_page_styling_zoom' );

// add store style
function loor_store_customize_register_css() { ?>
    <!-- Store -->
    <style>
        ul.yumecommerce-tab-links {
            text-align: <?php echo get_theme_mod('loor_store_category_heading_align','center') ?>;
            text-transform: <?php echo get_theme_mod('loor_store_category_styling_uppercase','none') ?>;
            font-weight: <?php echo get_theme_mod('loor_store_category_styling_font_weight','400') ?>;
            font-size: <?php echo get_theme_mod('loor_store_option_category_font_size','1em') ?>;
            margin-bottom: <?php echo get_theme_mod('loor_store_option_category_bottom_indent','30px') ?>;
        }
        
        .woocommerce ul.products {
            justify-content: <?php echo get_theme_mod('loor_store_category_styling_item_align','center') ?>; 
        }
        
        
        ul.yumecommerce-tab-links li {
            color: <?php echo get_theme_mod('loor_store_category_color_title','#cacaca') ?>;
        }
        
        ul.yumecommerce-tab-links li.active,
        ul.yumecommerce-tab-links li:hover {
            color: <?php echo get_theme_mod('loor_store_category_color_title_active','#ccaf7e') ?>;
        }
        
        ul.yumecommerce-tab-links li:after,
        ul.yumecommerce-tab-links li.active:after {
            background: <?php echo get_theme_mod('loor_store_category_border_color_active','#ccaf7e') ?>;
        }
        
        .woocommerce .woocommerce-error,
        .woocommerce .woocommerce-error:before {
            background: <?php echo get_theme_mod('loor_store_page_styling_woocommerce_message_error','#ffebcd') ?>;
            color: <?php echo get_theme_mod('loor_store_page_styling_woocommerce_message_error_color','#444444') ?>;
        }
        
        .woocommerce .woocommerce-error a.button {
            color: <?php echo get_theme_mod('loor_store_page_styling_woocommerce_message_error_color','#444444') ?>;
        }
        
        .woocommerce .woocommerce-message,
        .woocommerce .woocommerce-info,
        .woocommerce .woocommerce-message:before {
            background: <?php echo get_theme_mod('loor_store_page_styling_woocommerce_message','#8ec06c') ?>;
            color: <?php echo get_theme_mod('loor_store_page_styling_woocommerce_message_color','#ffffff') ?>;
        }
        
        .woocommerce .woocommerce-message a.button {
            color: <?php echo get_theme_mod('loor_store_page_styling_woocommerce_message_color','#ffffff') ?>;
        }
        
        /* number items on a row */
        .woocommerce ul.products li.product {
            width: calc(100% / <?php echo get_theme_mod('loor_store_option_number_of_items_m','2'); ?> - <?php echo get_theme_mod('loor_store_option_gutter_mobile','5') * 2; ?>px);
            margin: <?php echo get_theme_mod('loor_store_option_gutter_mobile','5') ?>px;
        }

        .woocommerce ul.products {
        	margin-left: -<?php echo get_theme_mod('loor_store_option_gutter_mobile','5'); ?>px;
        	margin-right: -<?php echo get_theme_mod('loor_store_option_gutter_mobile','5'); ?>px;
        }
        
        /*  tablets  */
        @media (min-width: 700px) {
            .woocommerce ul.products li.product {
                width: calc(100% / <?php echo get_theme_mod('loor_store_option_number_of_items_t','3'); ?> - <?php echo get_theme_mod('loor_store_option_gutter','15') * 2; ?>px);
                margin: 0 <?php echo get_theme_mod('loor_store_option_gutter','15'); ?>px 30px;
            }

            .woocommerce ul.products {
            	margin-left: -<?php echo get_theme_mod('loor_store_option_gutter','15'); ?>px;
            	margin-right: -<?php echo get_theme_mod('loor_store_option_gutter','15'); ?>px;
            }
        }
        
        /*  Large devices (desktops, 62em - 992px and up)  */
        @media (min-width: 62em) {
            .woocommerce ul.products li.product {
                width: calc(100% / <?php echo get_theme_mod('loor_store_option_number_of_items_d','4'); ?> - <?php echo get_theme_mod('loor_store_option_gutter','15') * 2; ?>px);
                margin: 0 <?php echo get_theme_mod('loor_store_option_gutter','15'); ?>px 30px;
            }
        }
        
        /*  Extra large devices (large desktops, 75em - 1200px and up)  */
        @media (min-width: 75em) { 
            .woocommerce ul.products li.product {
                width: calc(100% / <?php echo get_theme_mod('loor_store_option_number_of_items_ld','5'); ?> - <?php echo get_theme_mod('loor_store_option_gutter','15') * 2; ?>px);
                margin: 0 <?php echo get_theme_mod('loor_store_option_gutter','15'); ?>px 35px;
            }
        }
        
        /* font color name */
        .woocommerce ul.products li.product a p {
            color: <?php echo get_theme_mod('loor_store_category_styling_title','#30373B') ?>; 
        }
        
        .woocommerce ul.products li.product:hover a p {
            color: <?php echo get_theme_mod('loor_store_category_styling_title_hover','#ccaf7e') ?>; 
        }
        
        .woocommerce ul.products li.product .price {
            color: <?php echo get_theme_mod('loor_store_category_styling_price','#bcbcbc') ?>; 
        }
        
        .woocommerce ul.products li.product:hover .price {
            color: <?php echo get_theme_mod('loor_store_category_styling_price_hover','#828282') ?>; 
        }
        
        <?php if (get_theme_mod('loor_store_category_styling_title_uppercase', '1') == '1') :  ?>
            .woocommerce ul.products li.product
            {
                text-transform: uppercase;
            }
        <?php endif; ?>
        
        .woocommerce ul.products li.product {
            text-align: <?php echo get_theme_mod('loor_store_category_styling_text_align','center') ?>; 
        }
        
        /* sale label style */
        <?php if (get_theme_mod('loor_store_category_sale_label', '1') == '0') :  ?>
            .woocommerce ul.products span.onsale {
                display: none;
            }
        <?php endif; ?>
        
        .woocommerce span.onsale {
            background-color: <?php echo get_theme_mod('loor_store_category_sale_label_background','#ffffff') ?>; 
            color: <?php echo get_theme_mod('loor_store_category_sale_label_color','#545454') ?>; 
            border: 1px solid <?php echo get_theme_mod('loor_store_category_sale_label_border_color','#545454') ?>; 
        }
        
        /* profuct page styling */
        a.woocommerce-review-link {
            color: <?php echo get_theme_mod('loor_main_font_color','#545454') ?>; 
        }
        
        .woocommerce div.product div.summary h1 {
            color: <?php echo get_theme_mod('loor_store_page_styling_title_color','#30373B') ?>;
        }
        
        .woocommerce div.product p.price,
        .woocommerce div.product span.price {
            color: <?php echo get_theme_mod('loor_store_page_styling_price_color','#242629') ?>; 
        }
        
        .woocommerce div.product p.price del span:after {
            background: <?php echo get_theme_mod('loor_store_page_styling_price_color','#242629') ?>; 
        }
        
        .woocommerce div.product .woocommerce-tabs ul.tabs li a {
            color: <?php echo get_theme_mod('loor_store_page_styling_tabs_color','#989898') ?>;
        }
        
        .woocommerce div.product .woocommerce-tabs ul.tabs li {
            border: 1px solid <?php echo get_theme_mod('loor_store_page_styling_tabs_border_color','#efefef') ?>;
        }
        
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
            color: <?php echo get_theme_mod('loor_store_page_styling_active_tabs_color','#dab98d') ?>;
        }
        

        
        .woocommerce #reviews #comments ol.commentlist li,
        .shop_attributes th:after {
            border-bottom: 1px dotted <?php echo get_theme_mod('loor_store_page_styling_tabs_border_color','#efefef') ?>;
        }
        
        <?php if (get_theme_mod('loor_store_page_styling_sale_label', '1') == '0') :  ?>
            .woocommerce-page span.onsale {
                display: none;
            }
        <?php endif; ?>
        
        .woocommerce .cart-collaterals, .woocommerce-page .cart-collaterals,
        .woocommerce-checkout #order_review {
            background: <?php echo get_theme_mod('loor_store_cart_checkout_style_cart_totals','#f9f9f9') ?>; 
        }
        
        .woocommerce-checkout .woocommerce .woocommerce-info {
            background: <?php echo get_theme_mod('loor_store_cart_checkout_style_cart_totals','#f9f9f9') ?>;
            border-top-color: <?php echo get_theme_mod('loor_store_cart_checkout_style_cart_totals','#f9f9f9') ?>;
        }
        
        .woocommerce-checkout #payment {
            background: <?php echo get_theme_mod('loor_store_cart_checkout_payment','#f9f9f9') ?>;
        }
        
        .woocommerce-checkout #payment div.payment_box {
            background-color: <?php echo get_theme_mod('loor_store_cart_checkout_payment_method_desc','#eaeaef') ?>;
            color: <?php echo get_theme_mod('loor_store_cart_checkout_payment_method_desc_color','#515151') ?>;
        }
        
        .woocommerce-checkout #payment div.payment_box:before {
            border: 1em solid <?php echo get_theme_mod('loor_store_cart_checkout_payment_method_desc','#eaeaef') ?>;
            border-right-color: transparent;
            border-left-color: transparent;
            border-top-color: transparent;
        }
        

        .woocommerce-checkout #payment ul.payment_methods,
        .woocommerce-checkout .woocommerce table.shop_table th,
        .woocommerce table.shop_table tfoot td,
        .woocommerce-cart .cart-collaterals .cart_totals table th,
        .woocommerce-cart .cart-collaterals .cart_totals table td,
        body.woocommerce-cart tr.cart_item td,
        .woocommerce table.shop_table tfoot th, 
        .woocommerce-checkout table.shop_table tr.cart_item td, 
        .woocommerce table.shop_table tfoot td {
            border-color: <?php echo get_theme_mod('loor_store_cart_checkout_separator','#dfdfdf') ?>;
        }

		/* hyphens for shipping labels */

		.woocommerce table.shop_table tr.shipping td {
			-ms-hyphens: <?php echo get_theme_mod('loor_store_cart_checkout_hyphens', 'none'); ?>;
			-moz-hyphens: <?php echo get_theme_mod('loor_store_cart_checkout_hyphens', 'none'); ?>;
			-webkit-hyphens: <?php echo get_theme_mod('loor_store_cart_checkout_hyphens', 'none'); ?>;
			hyphens: <?php echo get_theme_mod('loor_store_cart_checkout_hyphens', 'none'); ?>;
		}

        <?php if (get_theme_mod('loor_standard_store_result_count', '1') == '0') :  ?>
            .woocommerce-result-count {
                display: none;
            }
        <?php endif; ?>

        <?php if (get_theme_mod('loor_standard_store_orderby', '1') == '0') :  ?>
            form.woocommerce-ordering {
                display: none;
            }
        <?php endif; ?>

    </style>

<?php

}

add_action( 'wp_head', 'loor_store_customize_register_css' );