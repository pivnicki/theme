<?php
add_theme_support( 'post-thumbnails' );

function stevan_wp_resources(){
    wp_register_style( 'stevan_wp_bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_register_style( 'stevan_wp_min.css','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_register_style( 'stevan_wp_font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_register_style( 'stevan_wp_wpcss',get_template_directory_uri().'/assets/css/style.css');

    wp_enqueue_style('stevan_wp_bootstrap');
	wp_enqueue_style('stevan_wp_min.css');
	wp_enqueue_style('stevan_wp_font-awesome');
	wp_enqueue_style('stevan_wp_wpcss');
	wp_enqueue_style('stevan_wp_css');

    // wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	
    // wp_enqueue_style('style',get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'stevan_wp_resources');

function stevan_wp_js() {
    
    wp_register_script('jquery',"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js",array(),false,true);
    
	wp_register_script('stevan_wp_bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
	// wp_register_script('klercustom_gmap.js','http://maps.google.com/maps/api/js?key=AIzaSyDEZ5RlhXnEkXC3G34ZTb_lOVjVOXQuFkA&callback=initialize',array(),false,true);
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('stevan_wp_bootstrap');
  
    
    }
    
    add_action( 'wp_enqueue_scripts', 'stevan_wp_js');

register_nav_menus( 
    array(
        'primary'=>__('Primary Menu'),
        'footer'=>__('Footer Menu')
    )
);

 
// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}

/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
    
   // Set UI labels for Custom Post Type
       $labels = array(
           'name'                => _x( 'Members', 'Post Type General Name', 'stevan_wp' ),
           'singular_name'       => _x( 'Member', 'Post Type Singular Name', 'stevan_wp' ),
           'menu_name'           => __( 'Members', 'stevan_wp' ),
           'parent_item_colon'   => __( 'Parent Member', 'stevan_wp' ),
           'all_items'           => __( 'All Members', 'stevan_wp' ),
           'view_item'           => __( 'View Member', 'stevan_wp' ),
           'add_new_item'        => __( 'Add New Member', 'stevan_wp' ),
           'add_new'             => __( 'Add New', 'stevan_wp' ),
           'edit_item'           => __( 'Edit Movie', 'stevan_wp' ),
           'update_item'         => __( 'Update Member', 'stevan_wp' ),
           'search_items'        => __( 'Search Member', 'stevan_wp' ),
           'not_found'           => __( 'Not Found', 'stevan_wp' ),
           'not_found_in_trash'  => __( 'Not found in Trash', 'stevan_wp' ),
       );
        
   // Set other options for Custom Post Type
        
       $args = array(
           'label'               => __( 'members', 'stevan_wp' ),
           'description'         => __( 'Members bio', 'stevan_wp' ),
           'labels'              => $labels,
           // Features this CPT supports in Post Editor
           'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
           // You can associate this CPT with a taxonomy or custom taxonomy. 
           'taxonomies'          => array( 'genres' ),
           /* A hierarchical CPT is like Pages and can have
           * Parent and child items. A non-hierarchical CPT
           * is like Posts.
           */ 
           'hierarchical'        => false,
           'public'              => true,
           'show_ui'             => true,
           'show_in_menu'        => true,
           'show_in_nav_menus'   => true,
           'show_in_admin_bar'   => true,
           'menu_position'       => 5,
           'can_export'          => true,
           'has_archive'         => true,
           'exclude_from_search' => false,
           'publicly_queryable'  => true,
           'capability_type'     => 'page',
       );
        
       // Registering your Custom Post Type
       register_post_type( 'members', $args );
    
   }
    
   /* Hook into the 'init' action so that the function
   * Containing our post type registration is not 
   * unnecessarily executed. 
   */
    
   add_action( 'init', 'custom_post_type', 0 );

// Our custom post type function
// function create_posttype() {
    
//        register_post_type( 'members',
//        // CPT Options
//            array(
//                'labels' => array(
//                    'name' => __( 'Members' ),
//                    'singular_name' => __( 'Member' )
//                ),
//                'public' => true,
//                'has_archive' => true,
//                'rewrite' => array('slug' => 'member'),
//                'supports' => array( 'thumbnail' ),
//                 'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
//            )
//        );
//    }
//    // Hooking up our function to theme setup
//    add_action( 'init', 'create_posttype' );