<!doctype html>
<html lang="en">
<head lang="en">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <meta name="author" content="GeekTeam">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&amp;subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Rubik+One&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.fancybox.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css"/>

  <script src="<?php echo get_template_directory_uri();?>/js/jquery-2.2.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/device.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/dropdowns-enhancement.js"></script>
  
  <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
  <?php wp_head();?> 
  <script>
    var mapSettings = {
      centerCoord: {
        lat: <?php the_field('google_map_lat')?>,
        lng: <?php the_field('google_map_long')?>
      },
      zoom: 16,
      scrollwheel: false,
      marker: {
        coord: {
          lat: <?php the_field('google_map_lat')?>,
          lng: <?php the_field('google_map_long')?>
        },
        title: '',
        image: ''
      }
    };

  </script>
 
</head>


<body>
<div class="wrap">
<header class="header">
  <div class="container">
    <a class="logo" href="<?php echo home_url();?>">
      <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo"/>
    </a>
    <nav class="nav">
      <a  class="open_nav fa fa-bars" href="javascript:void(0);"></a>
      <ul class="nav__list">
<?php wp_nav_menu( array( 'theme_location' => 'header_pages', 'container' =>'', 'items_wrap' => '%3$s') ); ?>
<li>
          <a class="singIn" href="javascript:void(0);">Sign in</a>
          <div class="selectSing">
            <a href="https://DE.managebuilding.com/Resident/PublicPages/login.aspx">Sign in</a>
            <a href="https://DE.managebuilding.com/manager">Manager</a>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</header>
