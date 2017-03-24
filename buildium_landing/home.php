<?php 
/*
Template Name: Home page
*/
get_header();?>

<div class="container">
        <div class="slider_block">
            <div class="block_title">
                <h2 class="title"><?php the_field('title1');?><br><?php the_field('title2');?><br><?php the_field('title3');?></h2>
            </div> <!-- .block_title -->
            <div class="col-md-offset-2 col-md-10">
                <div class="responsive slider_home">
				<?php if( have_rows('slider') ): ?>
					<?php while( have_rows('slider') ): the_row(); 
					$images = get_sub_field('images');?>  
                  <div><img src="<?php echo $images;?>" alt="Image"></div>
                  <?php endwhile; ?>
				<?php endif; ?>
                </div><!-- .slider_home -->
            </div>
        </div> <!-- .slider_block -->
    </div> <!-- .container -->
   

    <div class="content">
        <div class="container">
            <div class="col-md-8"> 
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="img_block img_block_top">
                            <img src="<?php the_field('images');?>" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block_title">
                           <h2 class="title"><?php the_field('title1');?><br><?php the_field('title2');?><br><?php the_field('title3');?></h2>
                        </div> <!-- .block_title -->
                        <ul class="item_list list1">
                            <?php if( have_rows('list1') ): ?>
						<?php while( have_rows('list1') ): the_row(); 
						$item = get_sub_field('item');

						?>  
							<li><?php echo $item;?></li>
                            <?php endwhile; ?>
				<?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="item_list list2">
                            <?php if( have_rows('list2') ): ?>
						<?php while( have_rows('list2') ): the_row(); 
						$item = get_sub_field('item');

						?>  
							<li><?php echo $item;?></li>
                            <?php endwhile; ?>
				<?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="img_block img_block_bottom">
                            <?php if( have_rows('img_block_bottom') ): ?>
						<?php while( have_rows('img_block_bottom') ): the_row(); 
						$block_bottom = get_sub_field('block_bottom');

						?>  
							<img src="<?php echo $block_bottom;?>" alt="Image">
                            <?php endwhile; ?>
				<?php endif; ?>
                        </div>
                    </div>
                </div>
                
            </div>

            <aside class="col-md-4">
                <div class="contact_form">
                    <h3 class="title_form">
                        Request a Free Quote!
                    </h3>
                    <div class="title_phone">
                        <a href="tel:<?php the_field('phone');?>"><?php the_field('phone');?></a>
                    </div>
                    
                    <!--<form action="action_page.php" id="contacts_form">
                        <p class="sub_title">
                            Property Information
                        </p>
                        <input type="text" name="firstname" class="form-control" placeholder="First name">
                        <input type="text" name="city" class="form-control" placeholder="City *">
                        <input type="text" name="state" class="form-control" placeholder="State *">
                        <input type="text" name="zcode" class="form-control" placeholder="Zip Code">
                        <input type="text" name="ptype" class="form-control" placeholder="Property Type *">
                        <input type="text" name="status" class="form-control" placeholder="Status">
                        <input type="text" name="pvalue" class="form-control" placeholder="Property Value">
                        <input type="text" name="lastname" class="form-control" placeholder="Mouse">


                        <p class="sub_title">
                            Contact Information
                        </p>

                        <input type="text" name="name" class="form-control" placeholder="Your Name *">
                        <input type="email" name="email" class="form-control" placeholder="Email *">
                        <input type="text" name="phone" class="form-control" placeholder="Phone*">
                        <textarea name="comments" cols="30" rows="6" placeholder="Comments"></textarea>
                        <button type="submit" class="btn">
                            <i class='icon-doc-inv'></i> Submit
                        </button>
                    </form>-->
				<?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1" html_id="contacts_form"]');?>

                </div>
            </aside>

        </div> <!-- .container -->
    </div> <!-- .content -->


    <div class="leasing">
        <div class="container">
            <div class="bg_leasing">
                <div class="col-md-4 col-sm-12">
                    <div class="block_title">
                       <h2 class="title"><?php the_field('leasing_title');?><br><?php the_field('leasing_subtitle');?></h2>
                    </div> <!-- .block_title -->
                </div>
                <div class="col-md-3 col-sm-12">
                    <ul class="item_list list3">
                        <?php if( have_rows('list3') ): ?>
						<?php while( have_rows('list3') ): the_row(); 
						$item = get_sub_field('item');

						?>  
						<li><?php echo $item; ?></li>
                        <?php endwhile; ?>
				<?php endif; ?>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <ul class="item_list list4">
                        <?php if( have_rows('list4') ): ?>
						<?php while( have_rows('list4') ): the_row(); 
						$item = get_sub_field('item');

						?>  
						<li><?php echo $item; ?></li>
                        <?php endwhile; ?>
				<?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tenant">
        <div class="container">
            <div class="row">
                <div class="col-md-4 azure">
                    <div class="bg_title">
                        <h2 class="title">
                            <?php the_field('azure_title');?><br><?php the_field('azure_subtitle');?><br><?php the_field('azure');?>
                        </h2>
                    </div>
                </div>
                <div class="col-md-8 blue">
                    <div class="bg_text">
                        <p>
                            <?php the_field('content_block');?><br><br>
                            <a href="#">Contact us for more information</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>							