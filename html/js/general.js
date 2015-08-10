
// jQuery custom function
function window_check () {
	var window_width =  $(window).width();
	if(window_width < '990') {
		jQuery(".title-web").hide();
	} else {
		jQuery(".title-web").show();
	}
}
// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
	if ($(".navbar").offset().top > 30) {
		$(".title-web").find('img').attr({'src':'img/title-web-img2.png'}).fadeIn("slow");
	} else {
		$(".title-web").find('img').attr({'src':'img/title-web-img.png'}).fadeIn("slow");
	}
});
// jQuery document ready
$(document).ready(function() {
	$('.navbar-collapse').on('shown.bs.collapse', function() { 
		//$(".title-web img").hide();
 	});
	$('.navbar-collapse').on('hidden.bs.collapse', function() { 
		//$(".title-web img").show();
	});
});
// jQuery window resize events
$( window ).resize( function() { window_check(); });	
// jQuery load window
jQuery(window).load(function() { window_check(); });
