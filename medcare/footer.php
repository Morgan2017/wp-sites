   <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo_footer">
                    <a href="<?php echo home_url();?>"><img src="<?php echo  get_stylesheet_directory_uri() ?>/img/logo.png" alt="Logo"></a>
                </div>
                <div class="col-md-3 soc_foter">
                    <ul>
                        <a href="<?php the_field('vk','option');?>">
                            <li class="soc-icons-vk-footer"></li>
                        </a>
                        <a href="<?php the_field('fb','option');?>">
                            <li class="soc-icons-fb-footer"></li>
                        </a>
                        <a href="<?php the_field('twitter','option');?>">
                            <li class="soc-icons-tw-footer"></li>
                        </a>
                        <a href="<?php the_field('google_plus','option');?>">
                            <li class="soc-icons-g-footer"></li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-3 phone_footer">
				<?php if(get_field('footer_phone','option')): ?>
				<?php while(has_sub_field('footer_phone','option')): ?> 
				<?php 
					$phone1 = get_sub_field('phone1','option');
					$phone2 = get_sub_field('phone2','option');
				?>
                    <p><a href="tel:<?php echo $phone1;?>"><?php echo $phone1;?></a></p>
                    <p><a href="tel:<?php echo $phone2;?>"><?php echo $phone2;?></a></p>
				<?php endwhile;?>
				<?php endif; wp_reset_postdata();?> 		
                </div>
                <div class="col-md-3 address">
                    <?php the_field('address','option');?>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </footer><!-- footer -->

			<form id="test-form" class="white-popup-block mfp-hide" action="mail.php" method="post">
				<h1>Пожалуйста заполните<br/> все поля.</h1>
				<fieldset style="border:0;">
					
					<ul>
						<li><input type="text" placeholder="Ваше имя" name="name" required></li>
						<li><input type="text" placeholder="Ваш телефон" name="phone" required></li>
						<li><input type="text" placeholder="Ваш email" name="email" required></li>
						<li><input type="submit" value = "ОТПРАВИТЬ"></li>

					</ul>

				</fieldset>
			</form>

    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/rem.min.js"></script>
    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/responsiveslider-custom.js"></script>
    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/jquery.swipebox.js"></script>
    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/thumbnail-slider.js"></script>
    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo  get_stylesheet_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>


    <!-- Slider -->
    <script>
        $(document).ready(function(){

            $('.owl-carousel').owlCarousel({
                items: 1,
                loop:true,
                dots: true,
                nav:true,
                navText: false,
            })
            $('.home-page-feedback').owlCarousel({
                dots: false
            })

            $("#slider2").responsiveSlides({
                auto: false,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "transparent-btns"
            });



            /*---  Popup  ---*/

      		 $('.popup-with-form').magnificPopup({
      				type: 'inline',
      				preloader: false,
      				focus: '#name',

      				// When elemened is focused, some mobile browsers in some cases zoom in
      				// It looks not nice, so we disable it:
      				callbacks: {
      					beforeOpen: function() {
      						if($(window).width() < 700) {
      							this.st.focus = false;
      						} else {
      							this.st.focus = '#name';
      						}
      					}
      				}
      			});


			//Кнопка наверх, если нужно
			/*
				$("#top").click(function () {
					$("body, html").animate({
						scrollTop: 0
					}, 800);
					return false;
				});
			*/	
			
			$("#test-form").submit(function() {
				$.ajax({
					type: "POST",
					url: "mail.php",
					data: $("#test-form").serialize()
				}).done(function() {
					alert("Спасибо за заявку!");
					setTimeout(function() {
						$.magnificPopup.close();
					}, 300);
				});
				return false;
			});
		});
    </script>

    <!-- Block with Doctor -->
    <script>
            var border = document.getElementsByClassName('border')[0];
            var title = document.getElementsByClassName('title')[0];
            var rightBorder = document.getElementsByClassName('right-border')[0];

            var titleWidth = title.clientWidth;
            rightBorder.style.width = ((border.clientWidth - titleWidth) - (4 * border.clientWidth / 100)) + 'px';
            console.log(rightBorder.style.width);
    </script>


    <!-- Slider Team -->
    <script>
        $('.responsive').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });


        /*  Slider Reviews Team ___ BEGIN */

         $('.responsive2').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });

        window.onload = function() {
             var slide = document.getElementsByClassName('slick-slide');
             for(i = 0; i<slide.length; i++) {
                slide[i].onclick = function() {
                    var item = $(this).closest(".slick-slide");
                    $(".slick-item").eq(item.index())
                      .add(item)
                      .addClass("slick-current slick-active")
                      .siblings()
                      .removeClass("slick-current slick-active");
                }
             }

             var responsive2 = document.getElementsByClassName('responsive2')[0];
             var prevBtn = responsive2.getElementsByClassName('slick-prev')[0];
             prevBtn.onclick = function() {
                responsive2 = document.getElementsByClassName('responsive2')[0];
                var activeItem = responsive2.getElementsByClassName('slick-current')[0];

                var item = $(activeItem).closest(".slick-slide");
                    $(".slick-item").eq(item.index())
                      .add(item)
                      .addClass("slick-current slick-active")
                      .siblings()
                      .removeClass("slick-current slick-active");
             }
             var nextBtn = responsive2.getElementsByClassName('slick-next')[0];
             nextBtn.onclick = function() {
                responsive2 = document.getElementsByClassName('responsive2')[0];
                var activeItem = responsive2.getElementsByClassName('slick-current')[0];
                var nextItem = activeItem.nextElementSibling;

                var item = $(nextItem).closest(".slick-slide");
                    $(".slick-item").eq(item.index())
                      .add(item)
                      .addClass("slick-current slick-active")
                      .siblings()
                      .removeClass("slick-current slick-active");
             }
         }
        $( ".slick-prev" ).text('');
        $( ".slick-next" ).text('');

         /*  Slider Reviews Team ___ END */
    </script>


    <!-- Slider Images -->
    <script>
        //Note: this script should be placed at the bottom of the page, or after the slider markup. It cannot be placed in the head section of the page.
        var thumbs1 = document.getElementById("thumbnail-slider");
        var thumbs2 = document.getElementById("thumbs2");
        var closeBtn = document.getElementById("closeBtn");
        var slides = thumbs1.getElementsByTagName("li");
        for (var i = 0; i < slides.length; i++) {
            slides[i].index = i;
            slides[i].onclick = function (e) {
                var li = this;
                var clickedEnlargeBtn = false;
                if (e.offsetX > 220 && e.offsetY < 25) clickedEnlargeBtn = true;
                if (li.className.indexOf("active") != -1 || clickedEnlargeBtn) {
                    thumbs2.style.display = "block";
                    mcThumbs2.init(li.index);
                }
            };
        }

        // closeBtn.onclick = function (e) {
        //     //This event will be triggered only when clicking the area outside the thumbs or clicking the CLOSE button
        //     thumbs2.style.display = "none";
        // };


  function textNodesUnder(node){
  var all = [];
  for (node=node.firstChild;node;node=node.nextSibling){
    if (node.nodeType==3) {
      if(node.nodeValue === 'Thumbnail Slider trial version') {
        console.log(node.parentNode, node);
        node.parentNode.removeChild(node);
      }
    } else {
      all = all.concat(textNodesUnder(node));
    }
  }
  return all;
}
textNodesUnder(document);
//Thumbnail Slider trial version
    </script>
	
	<?php if(is_page('contacts')):?>
	<script>
        $(document).ready(function() {
            $('.maps').click(function () {
                $('.maps iframe').css("pointer-events", "auto");
            });
            
            $( ".maps" ).mouseleave(function() {
              $('.maps iframe').css("pointer-events", "none"); 
            });
         });     
    </script>
	<?php endif;?>
<?php wp_footer();?>
</body>
</html>