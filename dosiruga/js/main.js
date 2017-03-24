$(document).ready(function() {


// HEADER FIXED SCROLL

	$(window).scroll(function(){
	  var sticky = $('.page-header'),
	      scroll = $(window).scrollTop();

	  if (scroll >= 100) sticky.addClass('fixed');
	  else sticky.removeClass('fixed');

		/*if ($(this).width() >= 1200 ) {
	  		var st = $(this).scrollTop();
	  		$('.post1').css({
		   "background-position" : "center " + st + "px",
		   "-webkit-background-position" : "center " + st + "px"
			});
		}*/
	});


	/*$('ul#menu-primary a').click(function(event) {
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
	});*/

	/*$("nav ul").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 500);
	});*/


// ACCORDION

	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	    acc[i].onclick = function(){
	        this.classList.toggle("active");
	        this.nextElementSibling.classList.toggle("show");
	  	}
	}



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

	/* $('#legal_notes').click(function (e) {
		elementClick = $(this).parent().attr("href");
        console.log($(elementClick).offset().top);
		$('.ui-accordion-content').toggleClass("active").toggleClass('show');

        destination = $(elementClick).offset().top - 0;
            $('html,body').animate( { scrollTop: destination }, 700 );
	return false;
    });
	
	
	$("#form1").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $("#form1").serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
		});
		return false;
	}); */



	$("#form2").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $("#form2").serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 300);
		});
		return false;
	});


	$(".single_2").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    	helpers : {
    		title : {
    			type : 'inside'
    		}
    	}
    });





});