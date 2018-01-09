<?php
//Set Up
add_theme_support('menus');
// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
//Includes
//front end
include(get_template_directory().'/includes/enqueue.php');
//setup 
include(get_template_directory().'/includes/setup.php');
//widgets
include(get_template_directory().'/includes/widgets.php');
 
//Actions & Filters Hooks
remove_action('wp_head', 'wp_generator');

add_action('wp_enqueue_scripts','spektrum_enqueue');
add_action('after_setup_theme','spektrum_setup_theme');
 add_action('widgets_init','spektrum_widgets');
 
 
 

function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}
// Admin footer modification
  
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.designerswebsite.com" target="_blank">Stevan Pivnicki</a></span>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin');
// add_action( 'widgets_init', 'spektrum_widgets_init' );
// add_action( 'widgets_init', 'spektrum_newsletter_init');
// add_action( 'widgets_init', 'spektrum_searchbar_init');
//Shortcodes
 
 
 
 