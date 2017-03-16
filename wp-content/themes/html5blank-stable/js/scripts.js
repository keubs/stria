(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		var original_image = {
			src: $('.woocommerce-main-image img').attr('src'),
			srcset: $('.woocommerce-main-image img').attr('srcset')
		};

		$('.thumbnails a.zoom').bind('click', function(e){
		  e.preventDefault();

		  if(!$(this).hasClass('active')) {
			  $('.woocommerce-main-image img').attr('src', $(this).attr('href'));
			  $('.woocommerce-main-image img').attr('srcset', $(this).attr('href'));
			  $('.thumbnails a.zoom').each(function(e){
			  	$(this).removeClass('active');
			  });


			  $(this).addClass('active');
		  } else {
		  	$('.woocommerce-main-image img').attr('src', original_image.src);
		  	$('.woocommerce-main-image img').attr('srcset', original_image.srcset);
		  	$('.thumbnails a.zoom').each(function(e){
		  		$(this).removeClass('active');
		  	});
		  }


		});
		
	});
	
})(jQuery, this);
