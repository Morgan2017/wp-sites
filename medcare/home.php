<?php 
/*Template Name: Home*/
get_header();?>
<div id="home" class="content">
	<div class="slider">
        <ul class="rslides container" id="slider-img">
            <?php if(get_field('home_slider')): ?>
			<?php while(has_sub_field('home_slider')): ?> 
			<?php 
				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$description = get_sub_field('description');
				$url = get_sub_field('url');
			?>
			<li>
                <div class="color_overlay"></div>
                <img src="<?php echo $image;?>" alt="Slide"/>

                <div class="fixposition container">
                    <div class="title_slider"><?php echo $title;?></div>
                    <p><?php echo $description;?></p>

                    <a class="popup-with-form" href="#test-form">Подробнее</a>
                </div>
            </li>
            <?php endwhile;?>
		<?php endif; wp_reset_postdata();?> 
			
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <?php if(get_field('icon_block')): ?>
			<?php while(has_sub_field('icon_block')): ?> 
			<?php 
				$url = get_sub_field('url');
				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$description = get_sub_field('description');
			?>
			<div class="col-md-3 col-xs-6 icon_box">
                <a href="<?php echo $url;?>">
                    <img src="<?php echo $image;?>" alt="">
                    <h3><?php echo $title;?></h3>
                    <p><?php echo $description;?></p>
                    <a href="<?php echo $url;?>">Подробнее</a>
                </a>
            </div>
			 <?php endwhile;?>
			<?php endif; wp_reset_postdata();?> 
        </div>
    </div>

        <section class="sec_pad doctor">
        <div class="container">
            <?php if(get_field('clinic_erlang')): ?>
			<?php while(has_sub_field('clinic_erlang')): ?> 
			<?php 
				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$description = get_sub_field('description');
				$url = get_sub_field('url');
			?>
			
			<div class="row">
                <div class="col-md-4">
                    <img src="<?php echo $image;?>" alt="Doctor">
                </div>
                <div class="col-md-8 text_box">
                    <div class='border'>
                      <div class='left-border'></div>
                      <h2 class='title'><?php echo $title;?></h2>
                      <div class='right-border'></div>
                      <div class='content'>
                        <p><?php echo $description;?></p>
                        <a href="<?php echo $url;?>">Подробнее</a>
                      </div>
                    </div>
                </div>
            </div>
			<?php endwhile;?>
			<?php endif; wp_reset_postdata();?> 
    </section>

    <section class="sec_pad team">
        <div class="container">
            <div class="responsive">
              
			<?php if(get_field('team')): ?>
			<?php while(has_sub_field('team')): ?> 
			<?php 
				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$description = get_sub_field('description');
				$fb = get_sub_field('fb');
				$vk = get_sub_field('vk');
				$tw = get_sub_field('tw');
			?>
			  
			  <div>
                <img src="<?php echo $image;?>" alt="Image1">
                <h3><?php echo $title;?></h3>
                <p><?php echo $description;?></p>
                <ul class="social">
                    <a href="http://<?php echo $fb;?>"><li class="soc-icons-fb"></li></a>
                    <a href="http://<?php echo $vk;?>"><li class="soc-icons-vk"></li></a>
                    <a href="http://<?php echo $tw;?>"><li class="soc-icons-tw"></li></a>
                </ul>
              </div>
			  <?php endwhile;?>
			<?php endif; wp_reset_postdata();?> 
          </div>
        </div>
    </section><!-- .team -->

    <section class="sec_pad contacts">
        <div class="container">
                <form action="" id="form_email" method="POST">
                    <div class="col-md-3">

                        <div class="left-inner-addon">
                            <i class="icon-user"></i>
                            <input type="text"class="form-control" name="name" id="name" placeholder="Имя" required>
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="left-inner-addon2">
                            <i class="icon-phone"></i>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Телефон" required>
                        </div>

                    </div>
                    <div class="col-md-3">

                        
                        <div class="left-inner-addon2">
                            <i class="icon-envelope-alt"></i>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="E-Mail" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-default" value="Отправить">
                    </div>
                </form>
            </div>
    </section>

    <section class="sec_pad reviews_team">
         <div class="container">
            <div class="col-md-6">
                <div class="text_block">
                    <?php if(get_field('testimonials')): ?>
					<?php $firstMarked = false; ?>
					<?php while(has_sub_field('testimonials')): ?> 
					<?php 
						$description = get_sub_field('description');
						$first_class = get_sub_field('first_class');
					?>
					<p class="slick-item <?php echo !$firstMarked ? "slick-current slick-active":"";?>"><?php echo $description; ?></p>
					<?php $firstMarked = true;?>
					<?php endwhile;?>
					<?php endif; wp_reset_postdata();?> 
					
                </div>
            </div>
            <div class="col-md-6">
                <div class="responsive2">
                  
				  <?php if(get_field('gallery')): ?>
					<?php while(has_sub_field('gallery')): ?> 
					<?php 
						$image = get_sub_field('image');
						$name = get_sub_field('name');
						$profesion = get_sub_field('profesion');
					?>
				  <div>
                    <img src="<?php echo $image;?>" alt="Image1">
                    <h3><?php echo $name;?></h3>
                    <p><?php echo $profesion;?></p>
                  </div>
                  <?php endwhile;?>
					<?php endif; wp_reset_postdata();?> 
            </div>            
        </div>
    </section><!-- .reviews_team -->

    <section class="sec_pad slider_img">
        <div id="thumbnail-slider">
            <div class="inner">
                <ul>
			<?php if(get_field('images')): ?>
			<?php while(has_sub_field('images')): ?> 
			<?php $image = get_sub_field('image'); ?>
            <li><a class="thumb" href="<?php echo $image;?>"></a></li>
			<?php endwhile;?>
			<?php endif; wp_reset_postdata();?> 		

                </ul>
            </div>
        </div>
    </section>

</div>
<?php get_footer();?>