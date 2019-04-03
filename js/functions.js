// remap jQuery to $
(function($){

$(document).ready(function() {

	// the Window width
	var width = $(window).width();

	// Add data-lightbox attribute to portfolio img links
	var thumbnails = $('article #portfolio a:has(img)').filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test($(this).attr('href')) });
	thumbnails.attr('data-lightbox','lightbox');


	// Toggle Main Navigation on "Mobile"
	$('header#main-header button, .mobile-menu-overlay').on('click', function() {

		if ($(this).hasClass('active')) {
			$('header#main-header button, html, body, nav, .mobile-menu-overlay').removeClass('active');
		} else {
			$('header#main-header button, html, body, nav, .mobile-menu-overlay').addClass('active');

			if ($('header#main-header').hasClass('toTop')) {
				$('header#main-header').removeClass('toTop');
			}
		}
		
	});

	// toggle the sub-menu
	$('header nav li.menu-item-has-children > a').on('click', function(e) {
		e.preventDefault();

		var otherMenus = $(this).parent().siblings().children('.sub-menu');
		var otherLists = $(this).parent().siblings('li');
		var subMenu = $(this).parent().children('.sub-menu');
		var theList = $(this).parent('li');

		otherMenus.slideUp();
		subMenu.slideToggle();
		otherLists.removeClass('open');
		theList.toggleClass('open');
	});


	$(window).on('scroll', function() {

		$('.sub-menu').slideUp();
		
		// if you scroll more than 48px fix the header to top
		if ( window.pageYOffset > 48 ) {
			$('header#main-header').addClass('toTop');
		} else {
			$('header#main-header').removeClass('toTop');
		}
	
	});// /scroll function


	$(window).on('load resize', function() {
		
		// reset the Window width
		width = $(this).width();

		$('.sub-menu').slideUp();
		
		$('header nav li.menu-item-has-children').removeClass('open');


		// Desktop/Tablet
		if (width > 768) { 
		
			$('html, body, nav, .mobile-menu-overlay').removeClass('active');	
		
		// Mobile
		} else if (width <= 768) {

			

		} // /Mobile
	
	}); // /load,resize,scroll


	// add ID attribute to contact form 7 inputs for <label> for="" attribute
	$('input[type=text], input[type=email], textarea').each(function(index) {
  		var nameValue = $(this).attr('name');
  		$(this).attr('id', nameValue);
	});

}); // /document.ready

})(window.jQuery);