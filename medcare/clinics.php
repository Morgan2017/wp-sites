<?php 
/*Template Name: Clinics*/
get_header();?>
    <div class="container content">
        <div class="posts">        
        
		
			<?php
	$args = array(
			'post_type' => 'clinics',
			'order' => 'DESC',
			'posts_per_page' => -1,
	);

	$n = 0;
	$posts = new WP_Query( $args );

	$test_left = $test_right = '';
	//$url_link = get_permalink($post->ID);
	foreach( $posts->posts as $post ){
		if( ++$n % 2 != 0 ){

					$test_left .= '<div class="col-md-7">';
					$test_left .= get_the_post_thumbnail( $post->ID, 'full' );
					$test_left .= '</div>';
					$test_left .= '<div class="col-md-5">';
					$test_left .= '<h3 class="post__title">';
					$test_left .= '<a href="' . get_permalink() . '">';
					$test_left .= get_the_title();
					$test_left .= '</a></h3>';
					$test_left .= '<p>'.$post->post_content.'</p>';
					$test_left .= '<a class="post__btn" href="' . get_permalink() . '">Подробнее</a>';
					$test_left .= '</div>';
					$test_left .= '</div>';
					$test_left .= '<div class="row"><div class="hr"></div></div>';
		}else{
					$test_right .= '<div class="col-md-5">';
					$test_right .= '<h3 class="post__title">';
					$test_right .= '<a href="' . get_permalink() . '">';
					$test_right .= get_the_title();
					$test_right .= '</a></h3>';
					$test_right .= '<p>'.$post->post_content.'</p>';
					$test_right .= '<a class="post__btn" href="' . get_permalink() . '">Подробнее</a>';
					$test_right .= '</div>';
					$test_right .= '<div class="col-md-7">';
					$test_right .= get_the_post_thumbnail( $post->ID, 'full' );
					$test_right .= '</div>';
					$test_right .= '</div>';
					$test_right .= '<div class="row"><div class="hr"></div></div>';
					
		}
	}
?>
			
			<div class="row">
                <?php echo $test_left; ?>	
			
			<div class="row">
                <?php echo $test_right; ?>
			
			
			
			
			

            <div class="row box">
           
			<?php if(get_field('block_left',13)): ?>
			<?php while(has_sub_field('block_left',13)): ?> 
			<?php 
				$image = get_sub_field('image');
				$url = get_sub_field('url');
				$title = get_sub_field('title');
				$description = get_sub_field('description');
			?>
		   <div class="col-md-6">
                <div class="box__img">
                    <img src="<?php echo $image;?>" alt="image">
                </div>
                <div class="box__text">
                    <h3 class="title"><a href="<?php echo $url;?>"><?php echo $title;?></a></h3>
                    <p><?php echo $description;?></p>
                </div>
            </div>
			
			<?php endwhile;?>
			<?php endif; wp_reset_postdata();?> 

        </div> <!-- .box -->
        <div class="row box">
            <?php if(get_field('block_right',13)): ?>
			<?php while(has_sub_field('block_right',13)): ?> 
			<?php 
				$image = get_sub_field('image');
				$url = get_sub_field('url');
				$title = get_sub_field('title');
				$description = get_sub_field('description');
			?>
			
			<div class="col-md-6">
                <div class="box__img">
                    <img src="<?php echo $image;?>" alt="image">
                </div>
                <div class="box__text">
                    <h3 class="title"><a href="<?php echo $url;?>"><?php echo $title;?></a></h3>
                    <p><?php echo $description;?></p>
                </div>
            </div>
			
			<?php endwhile;?>
			<?php endif; wp_reset_postdata();?> 

        </div> <!-- .box -->
        </div><!-- .posts -->
    </div> <!-- .container -->
<?php get_footer();?>