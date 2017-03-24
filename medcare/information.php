<?php 
/*Template Name: Information*/
get_header();?>
    
	<div class="container content">
        <div class="posts">  
            <?php
		$infos = new WP_Query(array(
		'post_type'=>'information-sections',
		'showposts' => -1,
		'order' => 'ASC',
		'orderby'=> 'date'
		)); 
 ?>	
 <?php if($infos->have_posts()): while($infos->have_posts()): $infos->the_post();?>
			
			
                <h3 class="post_title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
           
                <div class="hr"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="post"> 
                        <div class="col-sm-4">
                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'full');?></a>   
                        </div> 
                        <div class="col-sm-8">                 
                            <p><?php echo  get_the_content(); ?><a href="<?php the_permalink();?>">Еще</a></p>
                        </div>    
                        
                    </div><!-- .post -->
                </div>
            </div>
          

         
			
			 <?php endwhile; endif; wp_reset_postdata();?>	  
			   <div class="row">
                <div class="hr"></div>
            </div>
			
            <div class="row">
                <form action="">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя:">
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="email" class="form-control" placeholder="Email:">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <textarea name="" class="form-control" cols="30" rows="10" placeholder="Сообщение:"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-default">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php get_footer();?>