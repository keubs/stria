<?php

function loor_prebuilt_footer_one_layouts($layouts){
    $layouts['footer-one'] = array(
        'name' => __('About Us Section', 'loor'),
        'description' => __('Footer layout for footer widget area', 'loor'),
        'screenshot' => get_template_directory_uri() . '/demo-files/footer-1.png',
        'widgets' => 
          array (
            0 => 
            array (
              'title' => '',
              'text' => '<h2 style="text-align: center;">・ LOOR ・</h2><h5> </h5><h5 style="text-align: center;">LOOR doesn’t look like a standard e-commerce template, it provides better user experience and gives fresh new approach to you and your clients.</h5><p style="text-align: center;">The theme ideally suitable for any kind of business to sell small amount of goods.</p><h6 style="text-align: center;"> </h6><h5 style="text-align: center;"><span style="color: #cccccc;">Sincerely YumeCommerce team</span></h5>',
              'text_selected_editor' => 'tmce',
              'autop' => true,
              '_sow_form_id' => '577bec3901da8',
              'panels_info' => 
              array (
                'class' => 'SiteOrigin_Widget_Editor_Widget',
                'raw' => false,
                'grid' => 0,
                'cell' => 0,
                'id' => 0,
                'widget_id' => 'd10ac53e-bb68-4bf2-b219-9867f4cd45ac',
                'style' => 
                array (
                  'widget_css' => 'max-width: 800px;
        margin: 0 auto;',
                  'padding' => '90px 0px 100px',
                  'background_display' => 'tile',
                ),
              ),
            ),
          ),
          'grids' => 
          array (
            0 => 
            array (
              'cells' => 1,
              'style' => 
              array (
              ),
            ),
          ),
          'grid_cells' => 
          array (
            0 => 
            array (
              'grid' => 0,
              'weight' => 1,
            ),
          ),
        
    );
    return $layouts;

}
add_filter( 'siteorigin_panels_prebuilt_layouts', 'loor_prebuilt_footer_one_layouts' );