<?php
/* more theme support options are here : https://developer.wordpress.org/reference/functions/add_theme_support/ */
add_theme_support('post-thumbnails'); // adds featured images
add_theme_support( 'menus' ); // adds menus

register_nav_menus( array(
	'header-menu' => 'Primary Header Menu',
	'footer-menu' => 'Primary Footer Menu',
) );

?>