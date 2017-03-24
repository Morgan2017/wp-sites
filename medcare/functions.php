<?php

add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_menu' => 'Header Menu'
	) );
});

add_theme_support( 'post-thumbnails' );


function register_my_widgets(){
	register_sidebar( array(
		'name' => "Footer menu",
		'id' => 'footer_sidebar',
		'description' => 'Footer widgets',
		'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title"><h3>',
		'after_title' => '</h3></div>'
	) );
	register_sidebar( array(
		'name' => "Right sidebar",
		'id' => 'right_sidebar',
		'description' => 'Right widgets',
		'before_widget' => '<div class="col-md-4">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	) );
	
	register_sidebar( array(
		'name' => "Sidebar",
		'id' => '_sidebar',
		'description' => 'Widgets',
		'before_widget' => '<div class="col-md-4">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	) );

}
add_action( 'widgets_init', 'register_my_widgets' );


add_action('init', 'my_custom_init');
function my_custom_init()
{
  $labels = array(
	'name' => 'Clinics', 
	'singular_name' => 'Clinics', 
	'add_new' => 'Add new',
	'add_new_item' => 'Add new Clinics',
	'edit_item' => 'Update Clinics',
	'new_item' => 'New Clinics',
	'view_item' => 'View Clinics',
	'search_items' => 'Search Clinics',
	'not_found' =>  'Clinics not found',
	'not_found_in_trash' => 'Not Clinics in trash',
	'parent_item_colon' => '',
	'menu_name' => 'Clinics'

  );
  $args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array('title','editor','author','thumbnail','excerpt','comments')
  );
  register_post_type('clinics', $args);
}

add_action('init', 'test_custom_init');
function test_custom_init()
{
  $labels = array(
	'name' => 'Clinical Directions', 
	'singular_name' => 'Clinical Directions', 
	'add_new' => 'Add new',
	'add_new_item' => 'Add new Clinical Directions',
	'edit_item' => 'Update Clinical Directions',
	'new_item' => 'New Clinical Directions',
	'view_item' => 'View Clinical Directions',
	'search_items' => 'Search Clinical Directions',
	'not_found' =>  'Clinical Directions not found',
	'not_found_in_trash' => 'Not Clinical Directions in trash',
	'parent_item_colon' => '',
	'menu_name' => 'Clinical Directions'

  );
  $args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array('title','editor','author','thumbnail','excerpt','comments')
  );
  register_post_type('clinicals-directions', $args);
}

add_action('init', 'info_custom_init');
function info_custom_init()
{
  $labels = array(
	'name' => 'Information section', 
	'singular_name' => 'Information section', 
	'add_new' => 'Add new',
	'add_new_item' => 'Add new Information section',
	'edit_item' => 'Update Information section',
	'new_item' => 'New Information section',
	'view_item' => 'View Information section',
	'search_items' => 'Search Information section',
	'not_found' =>  'Information section not found',
	'not_found_in_trash' => 'Not Information section in trash',
	'parent_item_colon' => '',
	'menu_name' => 'Information section'

  );
  $args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array('title','editor','author','thumbnail','excerpt','comments')
  );
  register_post_type('information-sections', $args);
}

add_action('init', 'faq_custom_init');
function faq_custom_init()
{
  $labels = array(
	'name' => 'Faq', 
	'singular_name' => 'Faq', 
	'add_new' => 'Add new',
	'add_new_item' => 'Add new Faq',
	'edit_item' => 'Update Faq',
	'new_item' => 'New Faq',
	'view_item' => 'View Faq',
	'search_items' => 'Search Faq',
	'not_found' =>  'Faq not found',
	'not_found_in_trash' => 'Not Faq in trash',
	'parent_item_colon' => '',
	'menu_name' => 'Faq'

  );
  $args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array('title','editor','author','thumbnail','excerpt','comments')
  );
  register_post_type('faqs', $args);
}

function sendMailContactPage($post)
{
	$mail_c = false;

	if (!empty($post)) {
		
		//$admin_email = get_option('admin_email');
		$admin_email = 'wp.dev.morgan@gmail.com';
		$subject = get_option('blogname').', Обратный звонок.';
		$message = '
		<html>
			<head>
		  		<title>'.$subject.'</title>
			</head>
			<body>
			  	<p>'.$subject.'</p>
			  	<table>
			    	<div>
			    		<p>Name: '.$_POST['name'].'</p><br/>
			    		<p>Phone: '.$_POST['phone'].'</p><br/>
			    		<p>E-mail: '.$_POST['email'].'</p><br/>
			    	</div>
			  	</table>
			</body>
		</html>
			';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$mail_c = mail($admin_email, $subject, $message, $headers);

	}
	
	return $mail_c;
	
}