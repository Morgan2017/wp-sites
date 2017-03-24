<?php 
/*Template Name: About*/
get_header();?>

    <section class="image_about">
        <img src="<?php the_field('picture')?>" height="754" width="1920" alt="Image">
    </section>

    <div class="container banner_wr">
        <ul class="banner">
            <?php if(get_field('block')): ?>
			<?php while(has_sub_field('block')): ?> 
			<?php 
				$class = get_sub_field('class');
				$title = get_sub_field('title');
				$description = get_sub_field('description');
				$url = get_sub_field('url');
			?>
			
			<li>
                <div class="<?php //echo $class;?>"></div>
                <a href="<?php echo $url;?>"><h3 class="title"><?php echo $title;?></h3></a>
                <p><?php echo $description;?></p><a href="<?php echo $url;?>"></a>
            </li>
			
			<?php endwhile;?>
			<?php endif; wp_reset_postdata();?> 
            
        </ul>
    </div>

    <div class="container content">
        
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

        </div>

        <div class="row">
            <div class="hr"></div>
        </div>

        <div class="row">
            <div class="who_we_are">
                
            <h3 class="title"><?php the_field('subtitle');?></h3>
            <?php the_post_thumbnail('full'); ?>
            <?php
				while ( have_posts() ) : the_post(); ?> 
					<?php the_content(); ?>
				<?php
				endwhile; 
				wp_reset_query();?>

            </div>
        </div>

    </div>

<?php get_footer();?>