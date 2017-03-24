<?php


register_nav_menus(array(
    'header_menu' => 'Header Menu',
    'footer_menu' => 'Footer Menu'
    ));

function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );


function add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="menu-home menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'add_first_and_last');