<?php

// local import files
function loor_import_files() {
    return array(
        array(
            'import_file_name'             => 'Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-install/content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-install/widgets.json',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'loor_import_files' );

// after import setups
function loor_after_import( $selected_import ) {
    // assign menu to locations
    $locations = get_theme_mod('nav_menu_locations');
    $locations['loor_top_nav'] = 'Main';
    $locations['loor_footer_nav'] = 'Footer';
    set_theme_mod( 'nav_menu_locations', $locations );

    // import Revolution Slider
    if ( class_exists( 'RevSlider' ) ) {
        $slider_array = array(
            get_template_directory() . '/inc/demo-install/slider/loor-watch-slider.zip'
        );

        $slider = new RevSlider();
    
        foreach($slider_array as $filepath){
            $slider->importSliderFromPost( true, true, $filepath );  
        }
    
        echo ' Slider processed';
    }
}
add_action( 'pt-ocdi/after_import', 'loor_after_import' );