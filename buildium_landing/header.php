<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Buildium</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animation.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
    <!-- Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/screen.css">
     <!--[if IE]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 <?php wp_head(); ?>  
</head>
<body id="top" class="home">

    <div id="page-preloader"><span class="spinner"></span></div>

    <header class="home_header hp">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-9">
                    <div class="logo">
                        <a href="<?php echo home_url();?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-3">
                    <nav class="navbar menu">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="nav-coll collapse navbar-collapse col-md-6" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav" id="menu-primary">
									<?php //wp_nav_menu( array('theme_location' => 'header_menu', 'container' =>'', 'container_id' => '', 'items_wrap' => '<ul>%3$s</ul>' , 'depth' => 1) ); ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
