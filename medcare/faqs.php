<?php 
/*Template Name: FAQ*/
get_header();?>
     <div class="container content">
        <div class="posts">  
            <div class="row">
                <h3 class="posts__title">Вопросы и ответы</h3>
            </div>
            
		<?php
		$faq = new WP_Query(array(
		'post_type'=>'faqs',
		'showposts' => -1,
		'order' => 'ASC',
		'orderby'=> 'date'
		)); 
		 ?>	
		 <?php if($faq->have_posts()): while($faq->have_posts()): $faq->the_post();?>
			
			<div class="row">
                <h3 class="post_title"><?php the_title();?></h3>
            </div> 
            <div class="row">
                <div class="hr"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="post">                   
                        <p><?php echo  get_the_content(); ?> <a href="<?php the_permalink();?>">Еще</a></p>
                        
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