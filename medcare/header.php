<!DOCTYPE html>
<html lang="ru">
<head>
    <title>MedCare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css">
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/responsiveslides.css">
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/thumbs2.css" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/thumbnail-slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/screen.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/button.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/style_1.css">
     <!--[if IE]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
    <style>
        .reset    {margin:0;padding:0;}
        .clear    {clear:both;}
        .cleared:after {content:".";display:block;height:0;clear:both;visibility:hidden;}
        .right    {float:right;}
        .left    {float:left;}
        a img    {border:0;}
        /* img        {max-width:100%;} */
        header, nav, section, article, aside, footer {display:block;}
        body    {margin:0;padding:0;}
    </style>
<?php wp_head();?>
</head>

<body <?php if(is_page('about-us')):?>id="aboutUs"<?php endif;?> <?php if(is_page('information-section')):?>id="informationSection"<?php endif;?> <?php if(is_page('clinic')):?>id="clinic"<?php endif;?> <?php if(is_page('clinical-directions')):?>id="clinicDescription"<?php endif;?> <?php if(is_page('contacts')):?>id="contacts"<?php endif;?> <?php if(is_page('faq')):?>id="faqs"<?php endif;?> <?php if(is_single()):?>id="information"<?php endif;?> <?php if(is_search()):?>id="search"<?php endif;?><?php if(is_page('impressum')):?>id="impressum"<?php endif;?>>
    <header>
       
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-4 logo">
                    <a href="<?php echo home_url();?>"><img src="<?php echo  get_stylesheet_directory_uri() ?>/img/logo0.png" alt=""></a>
                </div><!-- .logo -->

                <div class="col-md-3 col-sm-4 input_search">
                    <form action="<?php echo home_url( '/' ); ?>" method="GET">
                        <div class="search">
                            <input type="search" value="<?php echo get_search_query(); ?>" name="s" id="s" class="search" placeholder="Поиск">
                            <input type="submit" value="">
                        </div>
                    </form>
                </div><!-- search -->

                 <div class="col-md-3 col-sm-4 order">
                    <a class="popup-with-form" href="#test-form">Заказать звонок</a>
                </div><!-- .order -->

                <div class="col-md-3 col-sm-4 tel">
                    
            <?php if(get_field('header_phone','option')): ?>
			<?php while(has_sub_field('header_phone','option')): ?> 
			<?php 
				$phone1 = get_sub_field('phone1','option');
				$phone2 = get_sub_field('phone2','option');
			?>
				<p><?php echo $phone1;?></p>
				<p><?php echo $phone2;?></p>
			
			<?php endwhile;?>
			<?php endif; wp_reset_postdata();?> 
                </div> <!-- .tel -->
            </div>
        </div>

        <div class="menu">
            <div class="container">
                <div class="row">
                    <nav class="navbar">
                         <div class="navbar-header">
                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                 <span class="sr-only">Toggle navigation</span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                             </button>
                         </div>

                         <div class="collapse navbar-collapse col-md-12" id="bs-example-navbar-collapse-1">
                             <ul class="nav navbar-nav">
                                <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container' =>'', 'items_wrap' => '%3$s') ); ?>
                             </ul>
                         </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


                    