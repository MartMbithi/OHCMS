$(document).ready(function() {
	$('.single-item').owlCarousel({
		loop: true,
		margin: 0,
		autoplay: true,
		autoplayTimeout: 12000,
		smartSpeed: 1000,
		responsiveClass: true,
		items: 1,
		nav: true,
		dots: false,
	});
	$('.fadeOut-item').owlCarousel({
		loop: true,
		animateOut: 'fadeOut',
		margin: 0,
		autoplay: true,
		autoplayTimeout: 16000,
		smartSpeed: 1000,
		responsiveClass: true,
		items: 1,
		nav: true,
		dots: false,
	});
	$('.news-2column').owlCarousel({
		loop: true,
		margin: 20,
		autoplay: true,
		autoplayTimeout: 14000,
		smartSpeed: 1000,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: true,
				dots: false
			},
			767: {
				items: 1,
				nav: true,
				dots: false
			},
			920: {
				items: 1,
				nav: true,
				dots: false
			},
			979: {
				items: 1,
				nav: true,
				dots: false
			},
			1199: {
				items: 2,
				nav: true,
				dots: false,
				loop: false,
				margin: 20
			}
		}
	});
	$('.news-4column').owlCarousel({
		loop: true,
		margin: 20,
		autoplay: true,
		autoplayTimeout: 14000,
		smartSpeed: 1000,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: true,
				dots: false
			},
			767: {
				items: 1,
				nav: true,
				dots: false
			},
			920: {
				items: 2,
				nav: true,
				dots: false
			},
			979: {
				items: 2,
				nav: true,
				dots: false
			},
			1199: {
				items: 4,
				nav: true,
				dots: false,
				loop: false,
				margin: 20
			}
		}
	});
})