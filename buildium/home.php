<?php 
/*Template Name: home*/
get_header();?>
<style>        
.contact.container {
    display: none;
}
</style>        
<div class="main">
    <section name="pageTop" class="pageTop">
        <div class="container">
            <div class="pageTop__hgroup">
                <div class="pageTop__title">Welcome</div>
                <div class="pageTop__subtitle">to Delaware Realty <br>Management</div>
            </div>
        </div>
        <img class="pageTop__img" src="<?php echo get_template_directory_uri();?>/img/home.png" alt="home"/>
    </section>
    <section class="container homeForm">
        <div class="row">
            <!--<a class="openFilter btn btn-primary" href="javascript:void(0);">Open filter</a>
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
                        <!--<div class="searchForm__numeral">
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
                            </div>
                        </div>
                    </div>
                    <div class="searchForm__type">
                        <span class="searchForm__label">Type</span>
                        <div class="searchForm__checkbox">
                            <label class="checkboxLabel"><input type="checkbox"/><span class="checkboxLabel__check">Condo/Townhome </span></label>
                            <label class="checkboxLabel"><input type="checkbox"/><span class="checkboxLabel__check">Multi-Family </span></label>
                            <label class="checkboxLabel"><input type="checkbox"/><span class="checkboxLabel__check">Single-Family </span></label>
                        </div>
                    </div>
                </div>
                <div class="searchForm__button">
                    <input class="btn btn-primary" type="submit" value="Search"/>
                </div>
            </form>
        </div>
    </section>
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

        
    <!--</section>-->
<iframe src="https://DE.managebuilding.com/Resident/PublicPages/ApartmentSearchFrame.aspx" scrolling="no" frameBorder="0" width="1024px" height="1200px"></iframe>	
	</section>
    <section class="galleryView container">
        <div class="row">
            <a href="<?php the_permalink(5);?>" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i>View all</a>
        </div>
    </section>
    <section name="documents" class="documents container">
        <h2 class="documents__title">Documents</h2>
        <div class="row">
			<?php
					$type = 'documents';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'showposts' => -1,
					  'order' => 'ASC'
					);
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			
			
<?php 

$file = get_field('document');

if( $file ): 

	// vars
	$url = $file['url'];
	$title = $file['title'];
	$caption = $file['caption'];
	

	// icon
	$icon = $file['icon'];
	
	if( $file['type'] == 'image' ) {
		
		$icon =  $file['sizes']['thumbnail'];
		
	}
	



 endif; ?>	
	
			<div class="col-sm-3 documents__item">
                 <h3 class="documents__itemTitle"><?php echo $title; ?></h3>
                <span>Uncategorized</span>
                <div class="documents__desc">
				
                    <span><i class="fa fa-external-link" aria-hidden="true"></i><?php the_field('file_size'); ?></span>
                    <span><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo date('m/d/Y');?></span>
                </div>
				
				<?php //if (get_field('document')): ?>
                <a href="<?php echo $url; ?>" class="btn btn-default"><i class="fa fa-cloud-download" aria-hidden="true"></i>Download</a>
				
					<?php //} ?>
            </div>
			<?php
					  endwhile;
					}
					wp_reset_query();
					?>
        </div>
    </section>
    <section name="application" class="application">
        <div class="container">
            <div class="application__container">
                <div class="application__content">
                    <img class="application__img" src="<?php echo get_template_directory_uri();?>/img/application.png" alt="application"/>
                    <div class="application__text">
                        <h2 class="application__title">Rental Application</h2>
                        <p>Interested in one of our properties?</p>
                        <a href="http://de.managebuilding.com/Resident/apps/rentalapp " class="btn btn-default"><i class="fa fa-credit-card" aria-hidden="true"></i> Apply online</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section name="contact" class="contact container">
        <div class="row">
            <div class="col-sm-6 contact__info">
                <div class="contact__text">
                    <h2 class="contact__title">Contact Us</h2>
                    <p>delaware realty management</p>
                    <p>2700 Kirkwood Highway <br/>Newark, DE 19711</p>
                    <p>302-995-2535</p>
                    <p></p>
                </div>
            </div>
            <form class="col-sm-6 contact__form">
                <div class="col-md-6 contact__col">
                    <input type="text" placeholder="First name*" required="">
                    <input type="text" placeholder="Last name">
                    <input type="email" placeholder="Email*">
                    <input type="tel" placeholder="Phone">
                </div>
                <div class="col-md-6 contact__col">
                    <input type="text" placeholder="Subject*" required="">
                    <textarea resize="none">
                    </textarea>
                </div>
                <div class="col-md-6 contact__button">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-file"></i>Submit
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
</div>
<?php get_footer();?>