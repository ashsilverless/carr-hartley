//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend mixitup.min.js
//@prepros-prepend ScrollMagic.js
jQuery(document).ready(function($) {
	// ============ Home Slider

	$('.slide-nav__item').click(function() {
		var offsetHeight = $(window).height() * 0.1;
		var slideNumber = $(this).attr('ref-slide');
		$('.slide-nav__item.hit').removeClass('hit');
		$(this).addClass('hit');

		$('html, body').animate(
			{
				scrollTop: $('.slide' + slideNumber).offset().top - offsetHeight,
			},
			500
		).center;
	});

	$('.first-page-nav a').click(function() {
		var offsetHeight = $(window).height() * 0.1;
		var slideNumber = $(this).attr('ref-slide');
		$(this)
			.closest('.slide')
			.removeClass('active');
		$('html, body').animate(
			{
				scrollTop: $('.slide2').offset().top - offsetHeight,
			},
			500
		).center;
	});

	//$('.slide-nav__item:first').addClass('hit');

	/* CLASS AND FOCUS ON CLICK */

	$('.nav-trigger').on('click', function() {
		$('.hamburger-menu').toggleClass('animate');
		$('.menu-offscreen').toggleClass('active');
		$('.container.content, .container-overflow-right, footer, .hero, .news-feed, .controls, .itin-outer, .info-content, .leaders').toggleClass('blur');
	});

	$('.container.content, .container-overflow-right, footer, .hero').on('click', function() {
		if ($(this).hasClass('blur')) {
			$('.container.content, .container-overflow-right, footer, .hero').toggleClass('blur');
			$('.menu-offscreen').toggleClass('active');
			$('.hamburger-menu').toggleClass('animate');
		}
	});

	$('.toggle-list__item .trigger').on('click', function() {
		$('.toggle-list__item .trigger.active').removeClass('active');
		$(this).addClass('active');
		$('.target.open').removeClass('open');
		$(this)
			.next('.target')
			.addClass('open');
	});
	// The scroll-up function
	function scrollUp() {
		var vheight = $(window).height();
		var stopHeight = vheight * 0.9;
		$('html, body').animate(
			{
				scrollTop: (Math.ceil($(window).scrollTop() / vheight) + 1) * stopHeight,
			},
			500
		);
	}

	$('.wrapper .scroll-arrow').click(function(event) {
		scrollUp();
		event.preventDefault();
	});

	var acc = document.getElementsByClassName('info-accordion');
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener('click', function() {
			this.classList.toggle('info-active');
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
				$(this)
					.next('.info-panel')
					.css('padding', '0 1rem');
			} else {
				panel.style.maxHeight = panel.scrollHeight + 'px';
				$(this)
					.next('.info-panel')
					.css('padding', '2rem 1rem');
			}
		});
	}

	// $(".more-arrow").click(function (event) {

	//   $(this).prev(".main-text").toggleClass("extended");

	// });

	$('.more-link').click(function(event) {
		$(this)
			.prev('.main-text')
			.toggleClass('extended');
		$(this).toggleClass('extended');
		if ($(this).text() == 'Read more') {
			$(this).text('Read less');
		} else {
			$(this).text('Read more');
		}
	});

	/* Form Control */

	$('.wpcf7-form-control').on('input', function() {
		if ($(this).val()) {
			$(this)
				.parents('.form-field')
				.addClass('contains-content');
		} else {
			$(this)
				.parents('.form-field')
				.removeClass('contains-content');
		}
	});

	$('#checker').change(function() {
		if ($(this).is(':checked')) {
			$('.checkbox').addClass('checked');
		} else {
			$('.checkbox').removeClass('checked');
		}
	});

	/*
  $(".menu-trigger").click(function(e) {
    e.preventDefault();
    $(this).toggleClass("clicked");
    $(".offscreen-nav").toggleClass("show");
  });

  $(".offscreen-nav a").click(function() {
    setTimeout(function() {
      $(".offscreen-nav").removeClass("show");
    }, 100);
  });

  $(".tab-trigger").on("click", function(){
      var selectedTab = $(this).attr("data-tab");
      $(this).siblings('.tab-trigger').removeClass('active');
      $(this).addClass('active');
      $('.tab-section__lower__item').removeClass('active');
      var trying = $(".tab-section__lower__item." + selectedTab);
      trying.addClass('active');
  });

  $(".feature-toggle__item__upper .open-feature").click(function() {
    $(".feature-toggle__item.active").removeClass('active');
    $(this).parents(".feature-toggle__item").addClass("active");
    var $panel = $(".feature-toggle__item.active");
    $('html,body').animate({
        scrollTop: $panel.offset().top - 10
    }, 500);
  });

$(".close-feature").click(function() {
    $(".feature-toggle__item.active").removeClass("active");
});
*/

	// ========== Add class if in viewport on page load

	$.fn.isOnScreen = function() {
		var win = $(window);

		var viewport = {
			top: win.scrollTop(),
			left: win.scrollLeft(),
		};
		viewport.right = viewport.left + win.width();
		viewport.bottom = viewport.top + win.height();

		var bounds = this.offset();
		bounds.right = bounds.left + this.outerWidth();
		bounds.bottom = bounds.top + this.outerHeight();

		return !(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom);
	};

	$('.slide-up, .slide-down, .slide-right, .slow-fade').each(function() {
		if ($(this).isOnScreen()) {
			$(this).addClass('active');
		}
	});

	// ========== Add class on entering viewport

	$.fn.isInViewport = function() {
		var elementTop = $(this).offset().top;
		var elementBottom = elementTop + $(this).outerHeight();
		var viewportTop = $(window).scrollTop();
		var viewportBottom = viewportTop + $(window).height();
		return elementBottom > viewportTop && elementTop < viewportBottom;
	};

	$(window).on('resize scroll', function() {
		$('.slide-up, .slide-down, .slide-right, .slow-fade').each(function() {
			if ($(this).isInViewport()) {
				$(this).addClass('active');
			}
		});
	});

	// ============ Carousels

	var owlDetail = $('.owl-carousel.detail-carousel');
	owlDetail.owlCarousel({
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		loop: true,
		margin: 10,
		nav: false,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 1,
			},
			800: {
				items: 2,
			},
			1200: {
				items: 1,
			},
		},
	});
	$('.testimonial-carousel--next').click(function() {
		owlDetail.trigger('next.owl.carousel');
	});
	$('.testimonial-carousel--prev').click(function() {
		owlDetail.trigger('prev.owl.carousel');
	});

	var owlFeature = $('.owl-carousel.testimonial-carousel');
	owlFeature.owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		lazyLoad: true,
		dots: false,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 1,
			},
			800: {
				items: 1,
			},
			1200: {
				items: 1,
			},
		},
	});

	$('.testimonial-carousel--next').click(function() {
		owlFeature.trigger('next.owl.carousel');
	});
	$('.testimonial-carousel--prev').click(function() {
		owlFeature.trigger('prev.owl.carousel');
	});

	$(document).ready(function() {
		$('.gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true,
			},
		});
	});

	$('.accordion_tab').click(function() {
		$('.accordion_tab').each(function() {
			$(this)
				.parent()
				.removeClass('active');
			$(this).removeClass('active');
		});
		$(this)
			.parent()
			.addClass('active');
		$(this).addClass('active');
	});

	// $(function() {
	// 	var documentElement = $(document);
	// 	var fadeElements = $('.destination-copy');

	// 	documentElement.on('scroll', function() {
	// 		var currScrollPos = documentElement.scrollTop();

	// 		fadeElements.each(function() {
	// 			var $this = $(this),
	// 				elemOffsetTop = $this.offset().top;
	// 			if (currScrollPos > elemOffsetTop) $this.css('opacity', 1 - (currScrollPos - elemOffsetTop) / 900);
	// 		}); // end loop
	// 	}); // end on scroll function
	// }); // end jQuery dom-ready function
}); //Don't remove ---- end of jQuery wrapper
