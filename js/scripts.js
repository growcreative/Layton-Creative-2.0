(function($) { // Jquery wrapper 
	$(document).ready(function() {
		$(".menu-button, #main_navigation a").click(function() {
			$(".menu-button").toggleClass("active");
		});
	});
	//Isotope
	$(window).load(function() {
		var $container = $('.portfolioContainer');
		$container.isotope({
			filter: '*',
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			}
		});
		$('.portfolioFilter a').click(function() {
			$('.portfolioFilter .current').removeClass('current');
			$(this).addClass('current');
			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
			return false;
		});
	});
	// Calculate Footer Position
	var footercalc = function() {
			var panelheight = ($(window).height()-220);
			$('#container').css('min-height', panelheight);
		};
		// Apply Footer Position
	$(document).ready(footercalc);
	$(window).resize(footercalc);
})(jQuery);