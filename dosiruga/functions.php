<?php

add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu'
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

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.1', 'all');
  wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/source/jquery.fancybox.css', array(), '2.1.5', 'screen');
  wp_enqueue_style( 'screen', get_template_directory_uri() . '/css/screen.css', array(), '1.1', 'all');
  wp_enqueue_style( 'comments', get_template_directory_uri() . '/css/comments.css', array(), '1.1', 'all');
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_footer', 'add_theme_scripts' );


function my_footer_enqueue() {
wp_register_script('jquery-1.12.2', get_template_directory_uri() . '/js/jquery-1.12.2.min.js', true);
wp_enqueue_script('jquery-1.12.2');

wp_register_script('rem.min', get_template_directory_uri() . '/js/rem.min.js', true);
wp_enqueue_script('rem.min');

wp_register_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', true);
wp_enqueue_script('bootstrap.min');

wp_register_script('jquery.mousewheel-3.0.6.pack', get_template_directory_uri() . '/js/jquery.mousewheel-3.0.6.pack.js', true);
wp_enqueue_script('jquery.mousewheel-3.0.6.pack');

wp_register_script('jquery.fancybox.pack', get_template_directory_uri() . '/source/jquery.fancybox.pack.js', true);
wp_enqueue_script('jquery.fancybox.pack');

wp_register_script('main', get_template_directory_uri() . '/js/main.js', true);
wp_enqueue_script('main');

}
add_action( 'wp_footer', 'my_footer_enqueue' );


/* function wpb_first_and_last_menu_class($items) {
    $items[1]->classes[] = 'menu-home';
    $items[count($items)]->classes[] = 'last';
    return $items;
}
add_filter('wp_nav_menu_objects', 'wpb_first_and_last_menu_class'); */


function add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="menu-home menu-item', $output, 1);
  $output = substr_replace($output, 'class="last menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'add_first_and_last');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

function filter_image_send_to_editor($html, $id, $caption, $title, $align, $url, $size, $alt) {
  $html = str_replace('<img ', '<img id="single_2" ', $html);

  return $html;
}
add_filter('image_send_to_editor', 'filter_image_send_to_editor', 10, 8);

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


add_filter( 'post_thumbnail_size', function( $size )
 {
     if( is_string( $size ) && 'full' === $size )
         add_filter( 
             'wp_calculate_image_srcset_meta',  
              '__return_null_and_remove_current_filter' 
         );   
    return $size;
 } );

// Would be handy, in this example, to have this as a core function ;-)
function __return_null_and_remove_current_filter ( $var )
{
    remove_filter( current_filter(), __FUNCTION__ );
    return null;
}

add_filter( 'wp_list_categories', 'filter_categories' );
function filter_categories( $html ) {
    $html = preg_replace( '/cat-item\scat-item-(.?[0-9])\s/', '', $html );
    $html = preg_replace( '/current-cat/', 'current', $html );
    $html = preg_replace( '/\sclass="cat-item\scat-item-(.?[0-9])"/', '', $html );
    $html = preg_replace( '/\stitle="(.*?)"/', '', $html );
    $html = preg_replace( '/\sclass=\'children\'/', '', $html );
		
    return $html;
}

add_filter('the_content', 'remove_empty_p', 20, 1);
function remove_empty_p($content){
    $content = force_balance_tags($content);
    return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
}


function wpb_alter_comment_form_fields($fields) {
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'wpb_alter_comment_form_fields'); 

function add_googleplusone() {
echo '<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>';
}
add_action('wp_footer', 'add_googleplusone');
