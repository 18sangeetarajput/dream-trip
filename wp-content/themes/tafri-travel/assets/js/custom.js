jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       0,                            
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'                        
	});
});

function tafri_travel_resmenu_open() {
	document.getElementById("resmenu-sidebar").style.width = "250px";
}
function tafri_travel_resmenu_close() {
	document.getElementById("resmenu-sidebar").style.width = "0";
}

// search
function tafri_travel_search_open() {
	jQuery(".serach_outer").slideDown(100);
}
function tafri_travel_search_close() {
	jQuery(".serach_outer").slideUp(100);
}

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 100) {
	        jQuery('.scrollup').fadeIn();
	    } else {
	        jQuery('.scrollup').fadeOut();
	    }
	});
	jQuery('.scrollup').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

jQuery(function($){
	$(window).load(function() {
		$("#pre-loader").delay(1000).fadeOut("slow");
		$(".circle").delay(1000).fadeOut("slow");
	})
});

(function( $ ) {

	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});

})( jQuery );