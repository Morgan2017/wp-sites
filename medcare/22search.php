<?php
get_header();
global $wp_query;
?>
  <div class="container">

    
    <div class="content">

      <div class="row">
        <h3 class="search-title"> <?php _e( 'Найден результат:', 'locale' ); ?> <?php echo $wp_query->found_posts; ?>: "<?php the_search_query(); ?>" </h3>
      </div>
        <?php if ( have_posts() ) { ?>

            <?php while ( have_posts() ) { the_post(); ?>

         <div class="row">

            <div class="hr"></div>

            <div class="row">
              <div class="post"> 

                <div class="col-md-12">
                  <h3 class="result__title" ><a href="<?php echo get_permalink(); ?>"><?php the_title();  ?></a></h3>
                </div>

                <div class="col-sm-4">
                  <a href="<?php the_permalink();?>"> <?php  the_post_thumbnail('medium') ?></a>
                </div>
                
                <div class="col-sm-8"> 
                  <p><?php echo substr(get_the_excerpt(), 0,200); ?></p>
                  <a href="<?php the_permalink(); ?>">Читать больше</a>
                </div>
              </div>
            </div>
          </div>
             

            <?php } ?>
  </div>

           <?php paginate_links(); ?>

        <?php } ?>

   
<?php get_footer(); ?>