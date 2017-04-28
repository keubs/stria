
(function($, document) {

    var iconic_ecifw_magnific = {

        cache: function() {
            iconic_ecifw_magnific.vars = {};
            iconic_ecifw_magnific.els = {};

            // common elements
            iconic_ecifw_magnific.els.magnific_buttons = $('.iconic-ecifw-product-image__modal-button');

        },

        on_ready: function() {

            // on ready stuff here
            iconic_ecifw_magnific.cache();
            iconic_ecifw_magnific.setup_magnific();

        },

        setup_magnific: function() {

            iconic_ecifw_magnific.els.magnific_buttons.on('click', function(){

                var images = $(this).data('images');

                images = iconic_ecifw_magnific.prepare_images( images );

                if( images === false ) { return; }

                $.magnificPopup.open({
                    mainClass: 'iconic-ecifw-modal',
                    closeOnContentClick: true,
                    items: images,
                    gallery:{
                        enabled:true
                    }
                });

                return false;

            });

        },

        /**
         * Prepare images for magnific
         *
         * @param arr images
         * @return obj
         */
        prepare_images: function( images ) {

            if( typeof images === "undefined" ) { return false; }

            if( images.length <= 0 ) { return false; }

            var images_object = [];

            $.each(images, function(index, image){

               images_object[index] = {
                   src: '<div class="iconic_ecifw_modal_image">'+image+'</div>',
                   type: 'inline'
               };

            });

            return images_object;

        }

    };

	$(document).ready( iconic_ecifw_magnific.on_ready );
	$(document).on('iconic_ecifw_magnific_init', iconic_ecifw_magnific.on_ready );

}(jQuery, document));
(function($, document) {

    var iconic_ecifw_pip = {

        cache: function() {
            iconic_ecifw_pip.els = {};

            // common elements
            iconic_ecifw_pip.els.pip_switches = $('.iconic-ecifw-product-image__pip-switch');

        },

        on_ready: function() {

            iconic_ecifw_pip.cache();
            iconic_ecifw_pip.setup_pip();

        },

        /**
         * Setup thumbnails
         */
        setup_pip: function() {

            iconic_ecifw_pip.els.pip_switches.on('click', function() {

                var $pip_image = $(this).find('img'),
                    $wrapper = $pip_image.closest('.iconic-ecifw-product-image'),
                    $large_image = $wrapper.find('.iconic-ecifw-product-image__large_image img'),
                    pip_src = $pip_image.attr('src'),
                    pip_srcset = typeof $pip_image.attr('srcset') !== "undefined" ? $pip_image.attr('srcset') : "",
                    pip_sizes = typeof $pip_image.attr('sizes') !== "undefined" ? $pip_image.attr('sizes') : "",
                    large_image_src = $large_image.attr('src'),
                    large_image_srcset = typeof $large_image.attr('srcset') !== "undefined" ? $large_image.attr('srcset') : "",
                    large_image_sizes = typeof $large_image.attr('sizes') !== "undefined" ? $large_image.attr('sizes') : "";

                $large_image
                    .attr('src', pip_src)
                    .attr('srcset', pip_srcset)
                    .attr('sizes', pip_sizes);

                $pip_image
                    .attr('src', large_image_src)
                    .attr('srcset', large_image_srcset)
                    .attr('sizes', large_image_sizes);

                console.log( pip_src );

            });

        }

    };

	$(document).ready( iconic_ecifw_pip.on_ready );
	$(document).on('iconic_ecifw_pip_init', iconic_ecifw_pip.on_ready );

}(jQuery, document));
(function($, document) {

    var iconic_ecifw_slick = {

        cache: function() {
            iconic_ecifw_slick.vars = {};
            iconic_ecifw_slick.els = {};

            // common vars
            iconic_ecifw_slick.vars.hidden_class = 'iconic-ecifw-hidden';

            // common elements
            iconic_ecifw_slick.els.slick_sliders = $('[data-slick]');

        },

        on_ready: function() {

            // on ready stuff here
            iconic_ecifw_slick.cache();
            iconic_ecifw_slick.setup_slick();

        },

        setup_slick: function() {

            if( iconic_ecifw_slick.els.slick_sliders.length <= 0 ) { return; }

            iconic_ecifw_slick.els.slick_sliders.on('init', function( event, slick ){

                $(this).find('.' + iconic_ecifw_slick.vars.hidden_class ).removeClass( iconic_ecifw_slick.vars.hidden_class );

            });

            iconic_ecifw_slick.els.slick_sliders.on('beforeChange', function( event, slick, currentSlide, nextSlide ) {

                if( iconic_ecifw_slick.should_shrink_out() ) {
                    iconic_ecifw_slick.transition_shrink_out_before( $(this), currentSlide );
                }

            });

            iconic_ecifw_slick.els.slick_sliders.on('afterChange', function( event, slick, currentSlide ) {

                if( iconic_ecifw_slick.should_shrink_out() ) {
                    iconic_ecifw_slick.transition_shrink_out_after( $(this) );
                }

            });

            iconic_ecifw_slick.els.slick_sliders.slick({
                slidesToShow: 1,
                slidesToScroll: 1
            });

        },

        /**
         * Transition - shrink out, before
         *
         * @param obj $this
         * @param int currentSlide
         */
        transition_shrink_out_before: function( $this, currentSlide ) {

            var current_slide = $this.find('img').eq( currentSlide + 1 );

            current_slide.css({transform: "scale(0.5)"});

        },

        /**
         * Transition - shrink out, after
         *
         * @param obj $this
         */
        transition_shrink_out_after: function( $this ) {

            $this.find('img').css({transform: "scale(1)"});

        },

        /**
         * Helper: Should shrink out
         *
         * @return bool
         */
        should_shrink_out: function() {

            return iconic_ecifw_vars.settings.general_display_effect === "slide" && iconic_ecifw_vars.settings.effects_slide_transition === "shrink_out";

        }

    };

	$(document).ready( iconic_ecifw_slick.on_ready );
	$(document).on('iconic_ecifw_slick_init', iconic_ecifw_slick.on_ready );

}(jQuery, document));
(function($, document) {

    var iconic_ecifw_thumbnails = {

        cache: function() {
            iconic_ecifw_thumbnails.vars = {};
            iconic_ecifw_thumbnails.els = {};

            // common vars
            iconic_ecifw_thumbnails.vars.active_class = 'iconic-ecifw-product-image__thumbnail--active';

            // common elements
            iconic_ecifw_thumbnails.els.thumbnails_container = $('.iconic-ecifw-product-image__thumbnails');

        },

        on_ready: function() {

            iconic_ecifw_thumbnails.cache();
            iconic_ecifw_thumbnails.setup_thumbnails();

        },

        /**
         * Setup thumbnails
         */
        setup_thumbnails: function() {

            iconic_ecifw_thumbnails.els.thumbnails_container.on('click', 'img', function() {

                var $thumbnail = $(this),
                    $wrapper = $thumbnail.closest('.iconic-ecifw-product-image'),
                    $list_item = $thumbnail.closest('li'),
                    $large_image = $wrapper.find('.iconic-ecifw-product-image__large_image img'),
                    large_image_src = $thumbnail.data('large-image'),
                    srcset = $thumbnail.data('large-image-srcset'),
                    sizes = $thumbnail.data('large-image-sizes');

                $wrapper
                    .find( '.' + iconic_ecifw_thumbnails.vars.active_class )
                    .removeClass( iconic_ecifw_thumbnails.vars.active_class );

                $list_item
                    .addClass( iconic_ecifw_thumbnails.vars.active_class );

                $large_image
                    .attr("src", large_image_src)
                    .attr("srcset", srcset)
                    .attr("sizes", sizes);

            });

        }

    };

	$(document).ready( iconic_ecifw_thumbnails.on_ready() );

}(jQuery, document));
(function($, document) {

    var iconic_ecifw_zoom = {

        cache: function() {
            iconic_ecifw_zoom.vars = {};
            iconic_ecifw_zoom.els = {};

            // common vars
            iconic_ecifw_zoom.vars.active_class = 'iconic-ecifw-product-image__thumbnail--active';

            // common elements
            iconic_ecifw_zoom.els.zoom_images = $('.iconic-ecifw-product-image--zoom img');

        },

        on_ready: function() {

            iconic_ecifw_zoom.cache();
            iconic_ecifw_zoom.setup_zoom();

        },

        /**
         * Setup zoom
         */
        setup_zoom: function() {

            if( iconic_ecifw_zoom.els.zoom_images.length <= 0 ) { return; }

            iconic_ecifw_zoom.els.zoom_images.each(function( index, zoom_image ) {

                var large_image_src = iconic_ecifw_zoom.get_large_image_src( zoom_image );

                $( zoom_image ).ImageZoom({
                    showDescription: false,
                    smoothMove: true,
                    bigImageSrc: large_image_src,
                    max: iconic_ecifw_vars.settings.effects_zoom_max
                });

            });

        },

        /**
         * Get large image src
         */
        get_large_image_src: function( image ) {

            var large_image_src = typeof $(image).data('large-image') !== "undefined" ? $(image).data('large-image') : "";

            return large_image_src;

        }



    };

	$(document).ready( iconic_ecifw_zoom.on_ready );
	$(document).on('iconic_ecifw_zoom_init', iconic_ecifw_zoom.on_ready );

}(jQuery, document));