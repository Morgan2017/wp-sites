<?php get_header('pages');?>

<div class="main">
            
			<section class="productPage container">
                <div class="row">
                    <h1>Rental Details</h1>
                    
					
					<div class="product">
                        <div class="product__img">
                             <?php the_post_thumbnail('full'); ?>
                            <a class="envelope openPopup" href="http://de.managebuilding.com/Resident/apps/rentalapp "></a>
                        </div>
                        <div class="product__info">
                            <h2 class="product__name"><?php the_title();?></h2>
                            <div class="product__rating"><?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?></div>
                            <div class="product__price"><?php the_field('price');?></div>
                            <ul class="product__spec">
                                <li><?php the_field('Bedrooms');?> - <?php the_field('Bathrooms');?></li>
							
							<?php 
							$date = get_field('available', false, false);
							$date = new DateTime($date);
							?>

                                <li>Available: <?php echo $date->format('m/d/Y'); ?></li>
                            </ul>
                            <div class="product__desc">
                                <h3 class="product__descTitle">Description</h3>
                                <div class="product__text">
                                    <p>
									<? echo $post->post_content; ?>
									<br/>
									<?php if (get_field('rental_features')):?>
                                        Lease Terms<br/>
                                        <?php the_field('rental_features');?></p>
									<?php endif;?>	
                                </div>
                            </div>
                            <div class="product__footer">
                                <span class="product__tel"><i class="fa fa-phone"></i>Call 302-995-2535</span>
                                <span class="product__mail"><i class="fa fa-envelope"></i>Contact us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tabs container">
                <div class="row">
                    <ul class="tabs__link">
                        <li>Photos</li>
                        <li>View map</li>
                        <li>Contact Us</li>
                    </ul>
                    <ul class="tabs__content">
					
						<li>
                        <div class="imagesList">
						<?php
							if( have_rows('image_gallery') ):
								while ( have_rows('image_gallery') ) : the_row();
								$images = get_sub_field('images');
						?> 
						<a class="fancybox" rel="group" href="<?php echo $images;?>"><img src="<?php echo $images;?>" alt="product"/></a>			
						<?php  endwhile; else : endif; ?>	
						</div>
                        </li>
                        <li>
                            <div id="map">
                                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en&amp;callback=initMap"></script>
                            </div>
                        </li>
                        <li>
                            <form class="tabs__form">
                                <p class="tabs__label necessarily">First name</p>
                                <p class="tabs__input"><input type="text"/></p>
                                <p class="tabs__label">last name</p>
                                <p class="tabs__input"><input type="text"/></p>
                                <p class="tabs__label necessarily">Email</p>
                                <p class="tabs__input"><input type="text"/></p>
                                <p class="tabs__label">Phone</p>
                                <p class="tabs__input"><input type="text"/></p>
                                <p class="tabs__label necessarily">Subject</p>
                                <p class="tabs__input"><input type="text"/></p>
                                <p class="tabs__label necessarily">Comments</p>
                                <p class="tabs__input"><textarea></textarea></p>
                                <p class="tabs__button"><input class="btn btn-primary" type="submit" value="Save and enter payment"></p>
                            </form>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
<?php get_footer();?>
