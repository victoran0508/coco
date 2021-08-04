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
		if (obj.offset() != undefined) {
			var objEndPos = (obj.offset().top + obj.outerHeight());
			return(visibleArea <= obj.offset().top || scrollPosition >= objEndPos ? false : true)
		}
	};

	$(document).ready(function(){
		if ($(window).scrollTop() >= 1) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}

		// Particles.init({
		// 	selector: '.section__background',
		// 	color: ['#313C6A'],
		// 	connectParticles: true,
		// });

		// Particles.init({
		// 	selector: '.section.section--business .section__background',
		// 	color: ['#313C6A'],
		// 	connectParticles: true,
		// });

		$('.section__content > .article-list').slick({
			lazyLoad: 'ondemand',
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			infinite: true,
			speed: 300,
			cssEase: 'linear',
			dots: true,
			centerMode: true,
			responsive: [
				{
				  breakpoint: 1000,
				  settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					centerMode: true,
				  }
				},
				{
				  breakpoint: 768,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerMode: false,
				  }
				},
			],
		});
	});

	var offset = $('.section.section--menus').offset();

	function checkPosition(){
		if ($(window).scrollTop() >= 1) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}

		if ($(window).scrollTop() >= 1) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}

		if ($(window).scrollTop() >= 300) {
			$('.contact-day').addClass('collapsed');
		}

		if (offset) {
			if ($(window).scrollTop() > offset.top) {
				$('.section.section--menus').addClass('is-fixed');
			} else {
				$('.section.section--menus').removeClass('is-fixed');
			}
		}

		if ($('.section.section--page-title').inView()) {
			$('.section.section--page-title').addClass('animated');
		}

		if ($('.section.section--troubles').inView()) {
			$('.section.section--troubles').addClass('animated');
		}

		if ($('.section.section--introduction .section__content').inView()) {
			$('.section.section--introduction .section__content').addClass('animated');
		}

		if ($('.section.section--features .section__content').inView()) {
			$('.section.section--features .section__content').addClass('animated');
		}

		if ($('.section.section--features2 .section__content').inView()) {
			$('.section.section--features2 .section__content').addClass('animated');
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

		if ($('.section.section--price .price-sheet.price-sheet--eyebrow').inView()) {
			$('.section.section--price .price-sheet.price-sheet--eyebrow').addClass('animated');
		}

		if ($('.section.section--price .price-sheet.price-sheet--eyeline').inView()) {
			$('.section.section--price .price-sheet.price-sheet--eyeline').addClass('animated');
		}

		if ($('.section.section--price .price-sheet.price-sheet--eyebrow-eyeline').inView()) {
			$('.section.section--price .price-sheet.price-sheet--eyebrow-eyeline').addClass('animated');
		}

		if ($('.section.section--price .price-sheet.price-sheet--lip').inView()) {
			$('.section.section--price .price-sheet.price-sheet--lip').addClass('animated');
		}

		if ($('.section.section--price .price-sheet.price-sheet--other').inView()) {
			$('.section.section--price .price-sheet.price-sheet--other').addClass('animated');
		}

		if ($('.section.section--price .price-sheet.price-sheet--pairplan').inView()) {
			$('.section.section--price .price-sheet.price-sheet--pairplan').addClass('animated');
		}

		if ($('.section.section--introduction .section__content .description').inView()) {
			$('.section.section--introduction .section__content .description').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(1) .tables .column:nth-of-type(1) .table:nth-of-type(1)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(1) .tables .column:nth-of-type(1) .table:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(1) .tables .column:nth-of-type(2) .table:nth-of-type(1)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(1) .tables .column:nth-of-type(2) .table:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(1) .tables .column:nth-of-type(2) .table:nth-of-type(2)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(1) .tables .column:nth-of-type(2) .table:nth-of-type(2)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(2) .tables .column:nth-of-type(1) .table:nth-of-type(1)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(2) .tables .column:nth-of-type(1) .table:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(2) .tables .column:nth-of-type(2) .table:nth-of-type(1)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(2) .tables .column:nth-of-type(2) .table:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(2) .tables .column:nth-of-type(2) .table:nth-of-type(2)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(2) .tables .column:nth-of-type(2) .table:nth-of-type(2)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(3) .tables .column:nth-of-type(1) .table:nth-of-type(1)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(3) .tables .column:nth-of-type(1) .table:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(4) .tables .column:nth-of-type(1) .table:nth-of-type(1)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(4) .tables .column:nth-of-type(1) .table:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(4) .tables .column:nth-of-type(1) .table:nth-of-type(2)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(4) .tables .column:nth-of-type(1) .table:nth-of-type(2)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(4) .tables .column:nth-of-type(2) .table:nth-of-type(1)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(4) .tables .column:nth-of-type(2) .table:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(4) .tables .column:nth-of-type(2) .table:nth-of-type(2)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(4) .tables .column:nth-of-type(2) .table:nth-of-type(2)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(5) .tables .column:nth-of-type(1) .table:nth-of-type(1)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(5) .tables .column:nth-of-type(1) .table:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(5) .tables .column:nth-of-type(1) .table:nth-of-type(2)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(5) .tables .column:nth-of-type(1) .table:nth-of-type(2)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(5) .tables .column:nth-of-type(1) .table:nth-of-type(3)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(5) .tables .column:nth-of-type(1) .table:nth-of-type(3)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(6) .tables .column:nth-of-type(1) .table:nth-of-type(1)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(6) .tables .column:nth-of-type(1) .table:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--price .section__content .price-sheet:nth-of-type(6) .tables .column:nth-of-type(1) .table:nth-of-type(2)').inView()) {
			$('.section.section--price .section__content .price-sheet:nth-of-type(6) .tables .column:nth-of-type(1) .table:nth-of-type(2)').addClass('animated');
		}

		if ($('.section.section--points .section__content .points .item:nth-of-type(1)').inView()) {
			$('.section.section--points .section__content .points .item:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--points .section__content .points .item:nth-of-type(2)').inView()) {
			$('.section.section--points .section__content .points .item:nth-of-type(2)').addClass('animated');
		}

		if ($('.section.section--points .section__content .points .item:nth-of-type(3)').inView()) {
			$('.section.section--points .section__content .points .item:nth-of-type(3)').addClass('animated');
		}

		if ($('.section.section--features .section__content .wrapper .text span:nth-of-type(1)').inView()) {
			$('.section.section--features .section__content .wrapper .text span:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--features .section__content .wrapper .text span:nth-of-type(2)').inView()) {
			$('.section.section--features .section__content .wrapper .text span:nth-of-type(2)').addClass('animated');
		}

		if ($('.section.section--features .section__content .wrapper .text span:nth-of-type(3)').inView()) {
			$('.section.section--features .section__content .wrapper .text span:nth-of-type(3)').addClass('animated');
		}

		if ($('.section.section--features2 .section__content .wrapper .text span:nth-of-type(1)').inView()) {
			$('.section.section--features2 .section__content .wrapper .text span:nth-of-type(1)').addClass('animated');
		}

		if ($('.section.section--features2 .section__content .wrapper .text span:nth-of-type(2)').inView()) {
			$('.section.section--features2 .section__content .wrapper .text span:nth-of-type(2)').addClass('animated');
		}

		if ($('.section.section--features2 .section__content .wrapper .text span:nth-of-type(3)').inView()) {
			$('.section.section--features2 .section__content .wrapper .text span:nth-of-type(3)').addClass('animated');
		}

		if ($('.section.section--troubles .section__content .troubles-list').inView()) {
			$('.section.section--troubles .section__content .troubles-list').addClass('animated');
		}
	};

	checkPosition();

	$(window).scroll(function(){
		checkPosition();
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

	$('.section.section--mainview .contact-day .contact-day__left-ttl span').on('click', function() {
		$('.section.section--mainview .contact-day').toggleClass('collapsed');
	});

	$('.foldable__fixed').on('click', function() {
		$(this).toggleClass('active');
		$(this).next('.foldable__hidden').toggleClass('active');
	});

	$('.page-header .nav-wrapper .navs .item a').on('click', function() {
		$('body').removeClass('nav-opened');
	});

	$('.category-select').on('change', function() {
		// alert( this.value );
		window.location.href = "http://localhost:2080/koko/category/" + this.value;
	});
});