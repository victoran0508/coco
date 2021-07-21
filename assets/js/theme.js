jQuery(function($){
	$.fn.inView = function(){
		//Window Object
		var win = $(window);
		//Object to Check
		obj = $(this);
		//the top Scroll Position in the page
		var scrollPosition = win.scrollTop();
		//the end of the visible area in the page, starting from the scroll position
		var visibleArea = win.scrollTop() + win.height();
		//the end of the object to check
		var objEndPos = (obj.offset().top + obj.outerHeight());
		return(visibleArea <= obj.offset().top || scrollPosition >= objEndPos ? false : true)
	};

	$(document).ready(function(){
		if ($(window).scrollTop() >= 1) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}

		Particles.init({
			selector: '.section__background',
			color: ['#313C6A'],
			connectParticles: true,
		});

		// Particles.init({
		// 	selector: '.section.section--business .section__background',
		// 	color: ['#313C6A'],
		// 	connectParticles: true,
		// });
	});

	$(window).scroll(function(){
		if ($(window).scrollTop() >= 1) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}

		if ($('.section.section--page-title').inView()) {
			$('.section.section--page-title').addClass('animated');
		}

		if ($('.section.section--troubles').inView()) {
			$('.section.section--troubles').addClass('animated');
		}

		if ($('.section.section--introduction').inView()) {
			$('.section.section--introduction').addClass('animated');
		}

		if ($('.section.section--features').inView()) {
			$('.section.section--features').addClass('animated');
		}

		if ($('.section.section--points').inView()) {
			$('.section.section--points').addClass('animated');
		}

		if ($('.section.section--staffs').inView()) {
			$('.section.section--staffs').addClass('animated');
		}

		if ($('.section.section--price').inView()) {
			$('.section.section--price').addClass('animated');
		}

		if ($('.section.section--faq').inView()) {
			$('.section.section--faq').addClass('animated');
		}

		if ($('.section.section--access').inView()) {
			$('.section.section--access').addClass('animated');
		}

		if ($('.section.section--contact').inView()) {
			$('.section.section--contact').addClass('animated');
		}

		if ($('.section.section--flow').inView()) {
			$('.section.section--flow').addClass('animated');
		}

		if ($('.section.section--news').inView()) {
			$('.section.section--news').addClass('animated');
		}

		if ($('.section.section--blog').inView()) {
			$('.section.section--blog').addClass('animated');
		}

		if ($('.section.section--gallery').inView()) {
			$('.section.section--gallery').addClass('animated');
		}
	});

	$('.nav-open').off('click').on('click', function(){
		if($('body').hasClass('nav-opened'))
			$('body').removeClass('nav-opened');
		else
			$('body').addClass('nav-opened');
	});

	$('.submenu-opener').off('click').on('click', function(){
		if(!$(this).hasClass('opened')) {
			$(this).next('.menu-popup').slideDown();
			$(this).addClass('opened');
		} else {
			$(this).next('.menu-popup').slideUp();
			$(this).removeClass('opened');
		}
	});

	$('.with-sidebar .sidebar .archive .archive__list .item .title').off('click').on('click', function(){
		if(!$(this).hasClass('expanded')) {
			$(this).addClass('expanded');
		} else {
			$(this).removeClass('expanded');
		}
	});

	$('body > header > div > div.nav-wrapper > ul > li:nth-child(1)').on('click', function() {
		$('body').removeClass('nav-opened');
	});

	$('.career-more').on('click', function() {
		$('.career-content').addClass('animated');
	});

	$('.foldable__title').on('click', function() {
		$(this).toggleClass('active');
		$(this).next('.foldable__text').toggleClass('active');
	});

	$('.foldable__fixed').on('click', function() {
		$(this).toggleClass('active');
		$(this).next('.foldable__hidden').toggleClass('active');
	});
});
// var $animation_elements = $('.animation-element');
// var $window = $(window);

// function check_if_in_view() {
//   var window_height = $window.height();
//   var window_top_position = $window.scrollTop();
//   var window_bottom_position = (window_top_position + window_height);

//   $.each($animation_elements, function() {
//     var $element = $(this);
//     var element_height = $element.outerHeight();
//     var element_top_position = $element.offset().top;
//     var element_bottom_position = (element_top_position + element_height);

//     //check to see if this current container is within viewport
//     if ((element_bottom_position >= window_top_position) &&
//       (element_top_position <= window_bottom_position)) {
//       $element.addClass('in-view');
//     } else {
//       $element.removeClass('in-view');
//     }
//   });
// }

// $window.on('scroll resize', check_if_in_view);
// $window.trigger('scroll');

// $('.header-inner .nav li a').click(function (){
// 	var id_txt = "#" + $(this).text();
// 	$('html, body').animate({
// 		scrollTop: $(id_txt).offset().top - 80
// 	}, 1000);

// });