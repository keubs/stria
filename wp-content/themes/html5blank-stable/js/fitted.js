(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		console.log('this is a gest');
		$('#navbar li a').each(function(){
		   $(this).attr('target', '_self');
		});
		
	});
	
})(jQuery, this);
