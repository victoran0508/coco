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
		return(visibleArea >= objEndPos && scrollPosition <= objEndPos ? true : false)
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

		setInterval(function(){ 
			$('.section.section--mainview h1').addClass('is-animated');
		}, 2000);

		setInterval(function(){ 
			$('.section.section--mainview h1').removeClass('is-animated');
		}, 10000);

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

		if ($('.section.section--business .business-contents .item:nth-of-type(1)').inView()) {
			$('.section.section--business .business-contents .item:nth-of-type(1)').addClass('active');
		}

		if ($('.section.section--business .business-contents .item:nth-of-type(2)').inView()) {
			$('.section.section--business .business-contents .item:nth-of-type(2)').addClass('active');
		}

		if ($('.section.section--business .business-contents .item:nth-of-type(3)').inView()) {
			$('.section.section--business .business-contents .item:nth-of-type(3)').addClass('active');
		}

		if ($('.section.section--strong-points .strong-points .item:nth-of-type(1)').inView()) {
			$('.section.section--strong-points .strong-points .item:nth-of-type(1)').addClass('active');
		}

		if ($('.section.section--strong-points .strong-points .item:nth-of-type(2)').inView()) {
			$('.section.section--strong-points .strong-points .item:nth-of-type(2)').addClass('active');
		}

		if ($('.section.section--strong-points .strong-points .item:nth-of-type(3)').inView()) {
			$('.section.section--strong-points .strong-points .item:nth-of-type(3)').addClass('active');
		}

		if ($('.section.section--strong-points .strong-points .item:nth-of-type(4)').inView()) {
			$('.section.section--strong-points .strong-points .item:nth-of-type(4)').addClass('active');
		}
	});

	// const hero = document.querySelector('.section.section--mainview');
	// const text = hero.querySelector('h1');

	// function shadow(e) {
	// 	const {
	// 		offsetWidth: width,
	// 		offsetHeight: height
	// 	} = hero;
	// 	let {
	// 		offsetX: x,
	// 		offsetY: y
	// 	} = e;

	// 	if (this !== e.target) {
	// 		x = x + e.target.offsetLeft;
	// 		y = y + e.target.offsetTop;
	// 	}

	// 	const xWalk = ((width / 2 - x) / width) * 0.2;
	// 	const yWalk = ((height / 2 - y) / height) * 0.2;

	// 	console.log(`${xWalk}em ${yWalk}em 0.2em white`);

	// 	text.style.textShadow = `
	// 		${xWalk}em ${yWalk}em 0.2em white
	// 	`;
	// }

	// hero.addEventListener('mousemove', shadow);

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