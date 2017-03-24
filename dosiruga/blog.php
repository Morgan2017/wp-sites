<?php 
/*Template Name: Blog*/
get_header();?>

<?php
$args=array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 1,
  'caller_get_posts'=> 1,
  'order' => 'DESC',
  'orderby'=>'post_date',
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post();?>
    <div class="post post-1">
        <div class="container">
            <div class="col-md-7">
                <article>
                    <h2 class="post__title">
                        <span class="month"><?php the_time('M'); ?></span>
                        <span class="day"><?php the_time('d'); ?></span>
                        <a href="#"><?php the_title();?></a>
                    </h2>
                    <p>

					<?php
						if ( has_post_thumbnail()) 
						{
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
							$classez = get_field('classes');
							
								echo '<a class="single_2" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '">';
									the_post_thumbnail( 'full', array( 'class' => "$classez") );
								echo '</a>';
						}
					?>
					
					<?php echo get_the_content();?></p>
					
					

                    <p><?php the_field('heading', false, false);?></p>
                    <p><?php the_field('subheading', false, false);?></p>
                </article>
                 <div class="subicons site-icons">
                    <a data-toggle="tooltip" class="subicon rss" rel="external" title="" href="#" data-original-title="RSS Feed">
                        <i class="fa fa-rss"></i>
                    </a>
                    <a data-toggle="tooltip" class="subicon twitter" rel="external" title="" href="http://twitter.com/home?status=Reading:<?php the_permalink(); ?>&amp;t=<?php get_the_title(); ?>" data-original-title="Connect on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a data-toggle="tooltip" class="subicon facebook" rel="external" title="" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php get_the_title(); ?>" data-original-title="Connect on Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a data-toggle="tooltip" class="subicon linkedin" rel="external" title="" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php get_the_title(); ?>&amp;url=<?php the_permalink(); ?>" data-original-title="Connect on LinkedIn">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>  <!-- .site-icons -->
                <div class="comments">
					<?php comment_form(array(''));?>
				</div>
                </div> <!-- .comments -->
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
	
    <?php
  endwhile;
}
wp_reset_query(); 
?>

<?php
$args=array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1,
  'order' => 'DESC'
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  $count = 1;
  while ($my_query->have_posts()) : $my_query->the_post(); $count++;?>
   <div class="post post<?php echo $count; ?>">
        <div class="container">
            <div class="col-md-12">
                <article>
                    <h2 class="post__title">
                        <span class="month"><?php the_time('M'); ?></span>
                        <span class="day"><?php the_time('d'); ?></span>
                        <a href="#"><?php the_title();?></a>
                    </h2>
                    <p>

					<?php
						if ( has_post_thumbnail()) 
						{
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
							$classez = get_field('classes');
							
								echo '<a class="single_2" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '">';
									the_post_thumbnail( 'full', array( 'class' => "$classez") );
								echo '</a>';
						}
					?>
					
					<?php echo get_the_content();?></p>
					
					

                    <p><?php the_field('heading', false, false);?></p>
                    <p><?php the_field('subheading', false, false);?></p>
                </article>
                 <div class="subicons site-icons">
                    <a data-toggle="tooltip" class="subicon rss" rel="external" title="" href="#" data-original-title="RSS Feed">
                        <i class="fa fa-rss"></i>
                    </a>
                    <a data-toggle="tooltip" class="subicon twitter" rel="external" title="" href="http://twitter.com/home?status=Reading:<?php the_permalink(); ?>&amp;t=<?php get_the_title(); ?>" data-original-title="Connect on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a data-toggle="tooltip" class="subicon facebook" rel="external" title="" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php get_the_title(); ?>" data-original-title="Connect on Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a data-toggle="tooltip" class="subicon linkedin" rel="external" title="" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php get_the_title(); ?>&amp;url=<?php the_permalink(); ?>" data-original-title="Connect on LinkedIn">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div> <!-- .site-icons -->
                <div class="comments">
					<?php comment_form(array(''));?>
                </div> <!-- .comments -->
				
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
    <?php
  endwhile;
}
wp_reset_query(); 
?>
    <div class="widget_block">
        <div class="container">

            <div class="col-md-offset-2 col-md-10">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="resent_posts">
                            <h3 class="widget_block__title">Recent posts</h3>
 							<ul class="widget_block_list">
								<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
								<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
								<?php 
								endwhile;
								wp_reset_postdata();
								?>
							</ul>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="archives">
                            <h3 class="widget_block__title">Archives</h3>
                            <ul class="widget_block_list">
                                <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
								<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
								<?php 
								endwhile;
								wp_reset_postdata();
								?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="categories">
                            <h3 class="widget_block__title">Categories</h3>
							<?php $args = array(
							'style'              => 'list',
							'show_count'         => 0,
							'hide_empty'         => 0,
							'exclude'            => '1',
							'use_desc_for_title' => 1,
							'child_of'           => 0,
							'title_li'           => __( '' ),
							'show_option_none'   => __('No Menu Items'),
							'number'             => null,
							'echo'               => 1,
							'depth'              => 2,
							'taxonomy'           => 'category',
						); ?>
							<ul class="widget_block_list">   
								<?php wp_list_categories( $args ); ?>
							</ul>
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->

    </div>
    <div class="contact">
        <div class="container">
          <div class="contact-box">
            <h3 class="contact__title">Contact now MICE MAKER GmbH!</h3>
            <div class="col-md-4 col-sm-4 box">
                <div class="box__content">
                    <p><span class="box__message">M</span></p>
                    <p>
                        MICE MAKER GmbH<br>
                        Alte Pasinger Straße 112<br>
                        D-82166 Graefelfing / Munich<br>
                        Germany
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 box">
                <div class="box__content">
                    <p><span class="box__phone">P</span></p>
                    <p>
                        Phone: +49 (0) 89 37 98 76 26<br>
                        Fax: +49 (0) 89 37 98 76 28
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 box">
                <div class="box__email">
                    <p><span class="box__email">E</span></p>
                    <p>
                        <a href="mailto:info@mice-maker.com">info@mice-maker.de</a> <br>
                        www.mice-maker.de
                    </p>
                </div>
            </div>
          </div>
        </div>
    </div>


    <div id="social">
        <div class="container">
            <div class="social-media">
                <div class="mod_article first last block" id="social-media-en">
                    <div class="ce_hyperlink first block">
                        <figure class="image_container">
                            <a rel="nofollow" href="https://www.google.de/maps/place/MICE+MAKER+GmbH/@48.12867,11.44928,17z?rel=author" class="hyperlink_img" title="https://www.google.de/maps/place/MICE+MAKER+GmbH/@48.12867,11.44928,17z?rel=author" target="_blank">
                                <img src="http://d36szo5qclseck.cloudfront.net/files/elements/places.png" width="256" height="256" alt="Google Places">
                            </a>
                        </figure>
                    </div>
                    <div class="ce_hyperlink block">
                        <figure class="image_container">
                            <a rel="nofollow" href="http://google.com/+MiceMakerGmbH?rel=author" class="hyperlink_img" title="http://google.com/+MiceMakerGmbH?rel=author" target="_blank">
                                <img src="http://d36szo5qclseck.cloudfront.net/files/elements/googleplus.png" width="256" height="256" alt="Google+">
                            </a>
                        </figure>
                    </div>
                    <div class="ce_hyperlink block">
                        <figure class="image_container">
                            <a rel="nofollow" href="https://www.facebook.com/MICEMAKERGmbH" class="hyperlink_img" title="https://www.facebook.com/MICEMAKERGmbH" target="_blank">
                                <img src="http://d36szo5qclseck.cloudfront.net/files/elements/facebook.png" width="256" height="256" alt="Facebook">
                            </a>
                        </figure>
					
                    </div>
                    <div class="ce_hyperlink block">
                        <figure class="image_container">
                            <a rel="nofollow" href="https://www.linkedin.com/company/mice-maker-gmbh" class="hyperlink_img" title="https://www.linkedin.com/company/mice-maker-gmbh" target="_blank">
                                <img src="http://d36szo5qclseck.cloudfront.net/files/elements/linkedin.png" width="256" height="256" alt="Linkedin">
                            </a>
                        </figure>
                    </div>
                    <div class="ce_hyperlink block">
                        <figure class="image_container">
                            <a rel="nofollow" href="https://www.xing.com/companies/micemakergmbh" class="hyperlink_img" title="https://www.xing.com/companies/micemakergmbh">
                                <img src="http://d36szo5qclseck.cloudfront.net/files/elements/xing.png" width="256" height="256" alt="Xing">
                            </a>
                        </figure>
                    </div>
                    <div class="ce_hyperlink block">
                        <figure class="image_container">
                            <a id="mmtsb" href="https://twitter.com/intent/follow?original_referer=www.mice-maker.com%2Findex.php%2Fhome-en.html&amp;region=follow_link&amp;screen_name=MICE_MAKER_GmbH&amp;tw_p=followbutton&amp;variant=2.0" class=" tfollowb">
                                <img src="http://d36szo5qclseck.cloudfront.net/files/elements/twitter.png" width="256" height="256" alt="Twitter">
                            </a>
                        </figure>
                    </div>
                    <div class="mod_hofff_shariff block">
                        <!-- indexer::stop -->
                        <div class="shariff">
                            <ul class="theme-grey orientation-horizontal col-5">
								<li class="shariff-button facebook">
									<b:if cond='data:blog.pageType!="static_page"'>
									<div style='loat:left;padding:5px 5px 5px 0;'><a expr:share_url='data:post.url' href='http://www.facebook.com/sharer.php' name='fb_share' type='button_count' class="share_text">teilen</a><script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
									</div>
									</b:if>					
								</li>
								<li class="shariff-button twitter">
									<a href="http://twitcount.com/btn" class="twitcount-button" data-count="horizontal" data-size="" data-url="" data-text="" data-related="" data-hashtag="" data-via="wal_wax">TwitCount Button</a><script type="text/javascript" src="http://static1.twitcount.com/js/button.js"></script>
								</li>
								<li class="shariff-button googleplus">
									<g:plusone size="standard" count="true" href="<?php the_permalink(); ?>"></g:plusone>
								</li>
								<li class="shariff-button linkedin">
									<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
									<script type="IN/Share" data-url="http://mice-maker.de/" data-counter="right"></script>
								</li>
								<li class="shariff-button xing">
									  <div data-type="xing/share" data-counter="right"></div>
									  <script>(function (d, s) {
										var x = d.createElement(s),
										  s = d.getElementsByTagName(s)[0];
										x.src = "https://www.xing-share.com/plugins/share.js";
										s.parentNode.insertBefore(x, s);
									  })(document, "script");</script>
								</li>
								
								
								
								
								
								
								<li class="shariff-button facebook">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mice-maker.com%2Findex.php%2Fhome-en.html" title="Bei Facebook teilen" role="button" aria-label="Bei Facebook teilen">
                                        <span class="fa fa-facebook"></span>
                                        <span class="share_text">teilen</span>
                                        <span class="share_count">0</span>
                                    </a>
                                </li>
                                <li class="shariff-button twitter">
                                    <a href="https://twitter.com/intent/tweet?text=Your%20partner%20for%20meetings%2C%20incentives%2C%20conventions%20%26%20events%20-%20MICE%20MAKER%20GmbH&amp;url=http%3A%2F%2Fwww.mice-maker.com%2Findex.php%2Fhome-en.html&amp;via=MICE-MAKER.com" title="Bei Twitter teilen" role="button" aria-label="Bei Twitter teilen">
                                        <span class="fa fa-twitter"></span>
                                        <span class="share_text">tweet</span>
                                        <span class="share_count">0</span>
                                    </a>
                                </li>
								
								
                                <li class="shariff-button googleplus">
                                    <a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.mice-maker.com%2Findex.php%2Fhome-en.html" title="Bei Google+ teilen" role="button" aria-label="Bei Google+ teilen">
                                        <span class="fa fa-google-plus"></span>
                                        <span class="share_text">+1</span>
                                        <span class="share_count">0</span>
                                    </a>
                                </li>
								<li class="shariff-button linkedin">
                                    <a href="https://www.linkedin.com/cws/share?url=http%3A%2F%2Fwww.mice-maker.com%2Findex.php%2Fhome-en.html" title="Bei LinkedIn teilen" role="button" aria-label="Bei LinkedIn teilen">
                                        <span class="fa fa-linkedin"></span>
                                        <span class="share_text">mitteilen</span>
                                        <span class="share_count">0</span>
                                    </a>
                                </li>
								
								
								<li class="shariff-button xing">
                                    <a href="https://www.xing.com/social_plugins/share?url=http%3A%2F%2Fwww.mice-maker.com%2Findex.php%2Fhome-en.html" title="Bei XING teilen" role="button" aria-label="Bei XING teilen">
                                        <span class="fa fa-xing"></span>
                                        <span class="share_text">teilen</span>
                                        <span class="share_count">0</span>
                                    </a>
                                </li>
								
								
								
								
								
								
								
								
								
                            </ul>
                        </div><!-- indexer::continue -->
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div>
<?php get_footer();?>