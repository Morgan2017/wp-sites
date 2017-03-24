<?php 
/*Template Name: documents*/
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
                                    </div><!-- searchForm__available -->
                                <!--</div><!-- searchForm__numeral -->
                            <!--</div>
                            <div class="searchForm__type">
                                <span class="searchForm__label">Type</span>
                                <div class="searchForm__checkbox">
                                    <label class="checkboxLabel"><input type="checkbox"/><span class="checkboxLabel__check">Condo/Townhome </span></label>
                                    <label class="checkboxLabel"><input type="checkbox"/><span class="checkboxLabel__check">Multi-Family </span></label>
                                    <label class="checkboxLabel"><input type="checkbox"/><span class="checkboxLabel__check">Single-Family </span></label>
                                </div>
                            </div><!-- searchForm__type -->
                        </div><!-- searchForm__inputs -->
                        <!--<div class="searchForm__button">
                            <input class="btn btn-primary" type="submit" value="Search"/>
                        </div><!-- searchForm__button -->
                    <!--</form><!-- searchForm -->
                <!--</div>
            </div>-->
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
            <div class="application">
                <div class="container">
                    <div class="application__container">
                        <div class="application__content">
                            <img class="application__img" src="<?php echo get_template_directory_uri();?>/img/application.png" alt="application"/>
                            <div class="application__text">
                                <h2 class="application__title">Rental Application</h2>
                                <p>Interested in one of our properties?</p>
                                <a href="#application" class="btn btn-default openPopup"><i class="fa fa-credit-card" aria-hidden="true"></i> Apply online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
	
	
	
	
	
	
<?php get_footer();?>