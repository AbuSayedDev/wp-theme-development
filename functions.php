<?php

/**
 * wtd_setup
 *Sets up theme defaults and registers support for various WordPress features.
 */

function wtd_setup_theme(){

   // Langauge textdomain
   load_theme_textdomain('wtdtextdomain');

   // Title Daynamic
   add_theme_support('title-tag');

   // featured images
   add_theme_support('post-thumbnails', array('post', 'services'));

   // nav menus
   register_nav_menus(array(
      'main-menu' => __('Main Menu', 'wtdtextdomain'),
      'footer-menu' => __('Footer Menu', 'wtdtextdomain'),
      'sidebar-menu' => __('Sidebar Menu', 'wtdtextdomain')
   ));

}

add_action( 'after_setup_theme', 'wtd_setup_theme' );



/**
 * Proper way to enqueue scripts and styles
 */

 function wtd_enqueue_scripts(){
   // style
    wp_enqueue_style( 'style', get_stylesheet_uri() );

   //  main style
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );

   //  responsive css
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
 }

 add_action( 'wp_enqueue_scripts', 'wtd_enqueue_scripts' );
 

//  Register sidebar

 function wtd_widgets_sidebar(){
   register_sidebar( array(
      'name' => __('Main Sidebar', 'wtdtextdomain'),
      'id' => 'sidebar-1',
      'description' => __('WordPress Theme Development Maib Sidebar', 'wtdtextdomain'),
      'before_widget' => '<div class="about-menu">',
      'after_widget' => '</div>',
      'before_title'  => '<h4>',
		'after_title'   => '</h4>'
   ));
 }

 add_action( 'widgets_init', 'wtd_widgets_sidebar' );


 //  Register a custom post type services
 
 function wtd_custom_post_type(){

   $labels = array(
        'name'                  => __( 'Services', 'Post type general name', 'wtdtextdomain' ),
		'singular_name'         => __( 'Service', 'Post type singular name', 'wtdtextdomain' ),
		'menu_name'             => __( 'Services', 'Admin Menu text', 'wtdtextdomain' ),
		'name_admin_bar'        => __( 'Service', 'Add New on Toolbar', 'wtdtextdomain' ),
		'add_new'               => __( 'Add New', 'wtdtextdomain' ),
		'add_new_item'          => __( 'Add New Service', 'wtdtextdomain' ),
		'new_item'              => __( 'New Service', 'wtdtextdomain' ),
		'edit_item'             => __( 'Edit Service', 'wtdtextdomain' ),
		'view_item'             => __( 'View Service', 'wtdtextdomain' ),
		'all_items'             => __( 'All Services', 'wtdtextdomain' ),
		'search_items'          => __( 'Search Services', 'wtdtextdomain' ),
		'parent_item_colon'     => __( 'Parent Services:', 'wtdtextdomain' ),
		'not_found'             => __( 'No Services found.', 'wtdtextdomain' ),
		'not_found_in_trash'    => __( 'No Services found in Trash.', 'wtdtextdomain' ),
		'featured_image'        => __( 'Service Featured image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wtdtextdomain' ),
		'set_featured_image'    => __( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wtdtextdomain' ),
		'remove_featured_image' => __( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wtdtextdomain' ),
		'use_featured_image'    => __( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'wtdtextdomain' ),
		'archives'              => __( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wtdtextdomain' ),
		'insert_into_item'      => __( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wtdtextdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wtdtextdomain' ),
		'filter_items_list'     => __( 'Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wtdtextdomain' ),
		'items_list_navigation' => __( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wtdtextdomain' ),
		'items_list'            => __( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wtdtextdomain' ),

   );

   $args = array(
        'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => false
   );



   register_post_type( 'services', $args);

 }

 add_action('init', 'wtd_custom_post_type');