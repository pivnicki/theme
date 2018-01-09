<?php

function spektrum_enqueue(){
    wp_register_style( 'spektrum_bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_register_style( 'spektrum_min.css','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_register_style( 'spektrum_monserat','https://fonts.googleapis.com/css?family=Montserrat');
    wp_register_style( 'spektrum_animate','https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
    wp_register_style( 'spektrum_hover','https://cdn.bootcss.com/hover.css/2.1.1/css/hover-min.css');
    wp_register_style( 'spektrum_font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_register_style( 'spektrum_wpcss',get_template_directory_uri().'/style.css');
	
	//custom css
	wp_register_style( 'spektrum_css',get_template_directory_uri().'/assets/css/style.css');
	
	wp_enqueue_style('spektrum_bootstrap');
    wp_enqueue_style('spektrum_min.css');
    wp_enqueue_style('spektrum_monserat');
    wp_enqueue_style('spektrum_animate');
    wp_enqueue_style('spektrum_hover');
	wp_enqueue_style('spektrum_font-awesome');
	wp_enqueue_style('spektrum_wpcss');
	wp_enqueue_style('spektrum_css');
	
    // Deregister the included library
    wp_deregister_script( 'jquery' );
     
    // Register the library again from Google's CDN
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), null, false );
    wp_register_script('spektrum_bootstrap.js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array(),false,true);
    wp_register_script('spektrum_wow.js','https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js',array(),false,false);
    wp_register_script('spektrum_gmap.js',get_template_directory_uri().'/assets/js/gmap.js',array(),false,false);
    wp_register_script('spektrum_custom.js',get_template_directory_uri().'/assets/js/script.js',array(),false,false);
   
    //wp_register_script('klercustom_gmap.js','http://maps.google.com/maps/api/js?key=AIzaSyDEZ5RlhXnEkXC3G34ZTb_lOVjVOXQuFkA&callback=initialize',array(),false,true);
	
	
	wp_enqueue_script('jquery');
    wp_enqueue_script('spektrum_bootstrap.js');
    wp_enqueue_script('spektrum_wow.js');
    wp_enqueue_script('spektrum_gmap.js');
    wp_enqueue_script('spektrum_custom.js');
	// wp_enqueue_script('klercustom_gmap.js');
}