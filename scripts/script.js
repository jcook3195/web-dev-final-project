/**********

	Main Script File

**********/

// Run this code as soon as the document is ready
$(document).ready(function() {

	// If the screen is at or below 960px
	if($(window).width() <= 960) {
		// Init Slicknav mobile menu
		$('#menu').slicknav({
			appendTo: '.header-wrapper'
		});
		// Hide the non-mobile menu
		$('#menu').addClass("hide");
	}

	// Init jQuery UI tabs
	$("#tabs").tabs();

	// If the screen is below 800px
	if($(window).width() < 800) { // If screen is larger than or equal to 800px
		// Hide jQuery tabs
		$('#tabs').addClass("hide");
	} else if($(window).width() >= 800) {
		// Hide mobile replacement
		$('#res-tabs').addClass("hide");
	}

});

// Mobile menu function
$(window).on('resize', function() {
	// If the screen is at or below 960px
	if($(window).width() <= 960) {
		// Init Slicknav mobile menu
		$('#menu').slicknav({
			appendTo: '.header-wrapper'
		});
		// Remove the hide class from .slicknav_menu
		$('.slicknav_menu').removeClass("hide");
		// Add the hide class to the non-mobile menu
		$('#menu').addClass("hide");
	} else if($(window).width() > 960) { // If screen is larger than 960px
		// Add the hide class to .slicknav_menu
		$('.slicknav_menu').addClass("hide");
		// Remove the hide class from the non-mobile menu
		$('#menu').removeClass("hide");
	}

	// If the screen is below 800px
	if($(window).width() < 800) {
		// Hide jQuery tabs
		$('#tabs').addClass("hide");
		// Show mobile replacement
		$('#res-tabs').removeClass("hide");
	} else if($(window).width() >= 800) { // If screen is larger than or equal to 800px
		// Show jQuery tabs
		$('#tabs').removeClass("hide");
		// Hide mobile replacement
		$('#res-tabs').addClass("hide");
	}
});