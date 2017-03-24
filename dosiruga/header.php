<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Your partner for meetings, incentives, conventions &amp; events - MICE MAKER GmbH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
     <!--[if IE]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
<?php wp_head();?>
</head>
<body id="top">

    <header class="page-header">
        <div class="container">
            <div class="col-md-2 col-sm-4 col-xs-10 logo-box">
                <div class="logo">
                    <a href="<?php echo home_url();?>">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/mice-maker-logo.png" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-md-10 col-sm-8 col-xs-2 navbar-box">
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
							
								<?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container' =>'', 'items_wrap' => '%3$s') ); ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    <div id="polylux"></div>
    </header>

    
    	<?php if ( function_exists('yoast_breadcrumb') ) 
        {yoast_breadcrumb('<div class="container"><p id="breadcrumbs">','</p></div>');} ?>
    

    <div id="langbutton">
        <!-- indexer::stop -->
        <nav class="mod_changelanguage block">
            <ul class="level_1">
                <li class="lang-de first">
                    <a href="http://www.mice-maker.de/index.php/home.html" class="lang-de first">DE</a>
                </li>
            </ul>
        </nav>
        <!-- indexer::continue -->
    </div>

		
