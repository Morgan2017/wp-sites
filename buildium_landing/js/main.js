$(document).ready(function() {



	$(window).on('load', function () {
	    var $preloader = $('#page-preloader'),
	        $spinner   = $preloader.find('.spinner');
	    $spinner.fadeOut();
	    $preloader.delay(350).fadeOut('slow');
	});



	var $nav = $('ul.nav li');
	$nav.hover(
		function() {
			$('ul', this).stop(true, true).slideDown('100');
		},
		function() {
			$('ul', this).slideUp('100');
		}
	);

	$('.navbar-toggle').click(function(){
		$(this).toggleClass('navbar-toggle_show');

	});

	$('.overlay').hover(function(){
		$('.sircle_map__content').toggleClass('to_right');

	});

	

// HEADER FIXED SCROLL

/*	$(window).scroll(function(){
	  var sticky = $('.page-header'),
	      scroll = $(window).scrollTop();

	  if (scroll >= 100) sticky.addClass('fixed');
	  else sticky.removeClass('fixed');
*/
		/*if ($(this).width() >= 1200 ) {
	  		var st = $(this).scrollTop();
	  		$('.post1').css({
		   "background-position" : "center " + st + "px",
		   "-webkit-background-position" : "center " + st + "px"
			});
		}
	});*/

	

// Button to Top
	if ($('.totop').length) {
	    var scrollTrigger = 300, // px
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                $('.totop').addClass('show');
	            } else {
	                $('.totop').removeClass('show');
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('.totop').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });
	}


// Плавный переход к якорю

	/*$('#legal_notes').click(function (e) {
		elementClick = $(this).parent().attr("href");
        console.log($(elementClick).offset().top);
		$('.ui-accordion-content').toggleClass("active").toggleClass('show');

        destination = $(elementClick).offset().top - 0;
            $('html,body').animate( { scrollTop: destination }, 700 );
	return false;
    });
*/




});