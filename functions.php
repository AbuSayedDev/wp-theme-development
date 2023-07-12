<?php

/**
 * wtd_setup
 *Sets up theme defaults and registers support for various WordPress features.
 */

function wtd_setup_theme(){

   // Langauge textdomain
   load_theme_textdomain('textdomain');

   // Title Daynamic
   add_theme_support('title-tag');

   // featured images
   add_theme_support('post-thumbnails');

   // nav menus
   register_nav_menus(array(
      'main-menu' => __('Main Menu', 'textdomain'),
      'footer-menu' => __('Footer Menu', 'textdomain'),
      'sidebar-menu' => __('Sidebar Menu', 'textdomain')
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
      'name' => __('Main Sidebar', 'textdomain'),
      'id' => 'sidebar-1',
      'description' => __('WordPress Theme Development Maib Sidebar', 'textdomain'),
      'before_widget' => '<div class="about-menu">',
      'after_widget' => '</div>',
      'before_title'  => '<h4>',
		'after_title'   => '</h4>'
   ));
 }

 add_action( 'widgets_init', 'wtd_widgets_sidebar' );