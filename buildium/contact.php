<?php 
/*Template Name: Contact*/
get_header('pages');?>
	<div class="main">
            <!--<div class="container rentalForm">
                <div class="row">
                    <a class="openFilter btn btn-primary" href="javascript:void(0);">Open filter</a>
                    <form class="searchForm clearfix">
                        <div class="searchForm__inputs">
                            <div class="searchForm__left">
                                <div class="searchForm__location">
                                    <div class="searchForm__box">
                                        <span class="searchForm__label fixWidth">Zip</span>
                                        <input type="text"/>
                                    </div>
                                    <div class="searchForm__box">
                                        <span class="searchForm__or">- OR -</span>
                                        <span class="searchForm__label">City and State</span>
                                        <input type="text"/>
                                        <div class="jsSelect state">
                                            <a class="jsSelect__open wpcf7-not-valid fa fa-angle-down" href="javascript:void(0);"><span class="jsSelect__value">All</span></a>
                                            <div class="jsSelect__option">
                                                <ul>
                                                    <li><a href="javascript:void(0);" data-value="1">All</a></li>
                                                    <li><a href="javascript:void(0);" data-value="2">Colorado</a></li>
                                                    <li><a href="javascript:void(0);" data-value="3">District of Columbia</a></li>
                                                    <li><a href="javascript:void(0);" data-value="4">Massachusetts</a></li>
                                                    <li><a href="javascript:void(0);" data-value="5">Massachusetts</a></li>
                                                    <li><a href="javascript:void(0);" data-value="6">New Hampshire</a></li>
                                                    <li><a href="javascript:void(0);" data-value="7">Pennsylvania</a></li>
                                                    <li><a href="javascript:void(0);" data-value="8">South Carolina</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- searchForm__location -->
                               <!-- <div class="searchForm__numeral">
                                    <div class="searchForm__rent">
                                        <div class="searchForm__box">
                                            <span class="searchForm__label fixWidth">Rent $</span>
                                            <input type="text"/>
                                            <span class="searchForm__label to">to</span>
                                            <input type="text"/>
                                        </div>
                                        <div class="searchForm__box">
                                            <span class="searchForm__label fixWidth">Size</span>
                                            <input type="text"/>
                                            <span class="searchForm__label to">to</span>
                                            <input type="text"/>
                                        </div>
                                    </div><!-- searchForm__rent -->
                                   <!-- <div class="searchForm__available">
                                        <div class="searchForm__box">
                                            <span class="searchForm__label">Bedrooms</span>
                                            <div class="jsSelect">
                                                <a class="jsSelect__open wpcf7-not-valid fa fa-angle-down" href="javascript:void(0);"><span class="jsSelect__value"></span></a>
                                                <div class="jsSelect__option">
                                                    <ul>
                                                        <li><a href="javascript:void(0);">1 Bad</a></li>
                                                        <li><a href="javascript:void(0);">Colorado</a></li>
                                                        <li><a href="javascript:void(0);">District of Columbia</a></li>
                                                        <li><a href="javascript:void(0);">Massachusetts</a></li>
                                                        <li><a href="javascript:void(0);">Massachusetts</a></li>
                                                        <li><a href="javascript:void(0);">New Hampshire</a></li>
                                                        <li><a href="javascript:void(0);">Pennsylvania</a></li>
                                                        <li><a href="javascript:void(0);">South Carolina</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="searchForm__box">
                                            <span class="searchForm__label">Bathrooms</span>
                                            <div class="jsSelect">
                                                <a class="jsSelect__open wpcf7-not-valid fa fa-angle-down" href="javascript:void(0);"><span class="jsSelect__value"></span></a>
                                                <div class="jsSelect__option">
                                                    <ul>
                                                        <li><a href="javascript:void(0);">3,5 Bathrooms</a></li>
                                                        <li><a href="javascript:void(0);">Colorado</a></li>
                                                        <li><a href="javascript:void(0);">District of Columbia</a></li>
                                                        <li><a href="javascript:void(0);">Massachusetts</a></li>
                                                        <li><a href="javascript:void(0);">Massachusetts</a></li>
                                                        <li><a href="javascript:void(0);">New Hampshire</a></li>
                                                        <li><a href="javascript:void(0);">Pennsylvania</a></li>
                                                        <li><a href="javascript:void(0);">South Carolina</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- searchForm__available -->
                               <!-- </div><!-- searchForm__numeral -->
                            <!--</div>
                            <div class="searchForm__type">
                                <span class="searchForm__label">Type</span>
                                <div class="searchForm__checkbox">
                                    <label class="checkboxLabel"><input type="checkbox"/><span class="checkboxLabel__check">Condo/Townhome </span></label>
                                    <label class="checkboxLabel"><input type="checkbox"/><span class="checkboxLabel__check">Multi-Family </span></label>
                                    <label class="checkboxLabel"><input type="checkbox"/><span class="checkboxLabel__check">Single-Family </span></label>
                                </div>
                            <!--</div><!-- searchForm__type -->
                        <!--</div><!-- searchForm__inputs -->
                        <!--<div class="searchForm__button">
                            <input class="btn btn-primary" type="submit" value="Search"/>
                    <!--    </div><!-- searchForm__button -->
                    <!--</form><!-- searchForm -->
                <!--</div>
            </div>-->
            <!--<section class="gallery">
			<?php 
				// the query
				/*$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

				<?php if ( $wpb_all_query->have_posts() ) : ?>

					<!-- the loop -->
					<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>               

							   <a href="<?php the_permalink();?>" class="col-md-4 col-sm-6 gallery__box">
								   <?php the_post_thumbnail('gallery-size-home'); ?>
									<div class="gallery__container">
										<div class="gallery__info">
											<div class="gallery__content">
												<h3 class="gallery__title"><?php the_title();?></h3>
												<p class="gallery__text"><?php echo get_the_content();?></p>
												<span class="gallery__price"><?php the_field('price');?></span>
												<div class="gallery__spec"><?php the_field('Bedrooms');?> - <?php the_field('Bathrooms');?></div>
											</div>
										</div>
									</div>
								</a><!-- gallery__box -->

					<?php endwhile; ?>
					<!-- end of the loop -->
					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif;*/ ?> 
				
            </section>-->
			<div class="row">
			<div class="container rentalForm">
<iframe src="https://DE.managebuilding.com/Resident/PublicPages/ContactUsFrame.aspx" width="90%" height="500px"  scrolling="no" frameBorder="0"></iframe>
</div>
</div>
            <div class="application">
                <div class="container">
                    <div class="application__container">
                        <div class="application__content">
                            <img class="application__img" src="<?php echo get_template_directory_uri();?>/img/application.png" alt="application"/>
                            <div class="application__text">
                                <h2 class="application__title">Rental Application</h2>
                                <p>Interested in one of our properties?</p>
                                <a href="https://DE.managebuilding.com/Resident/apps/rentalapp/" class="btn btn-default"><i class="fa fa-credit-card" aria-hidden="true"></i> Apply online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
	
	
	
	
	
	
<?php get_footer();?>