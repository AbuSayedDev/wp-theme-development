<?php

// inc folder wtd customize file include
require_once(get_theme_file_path('/inc/wtd-customize.php'));

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
		'rewrite'            => array( 'slug' => 'services' ),
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


 /**
 * Register a private 'Services' taxonomy for post type 'Category'.
 *
 * @see register_post_type() for registering post types.
 */

function wtd_custom_post_type_services_cat() {
	$args = array(
	   'label'        => __( 'Category', 'wtdtextdomain' ),
	   'rewrite'      => array('slug' => 'services_category'),
	   'hierarchical' => true,
	   'public'       => true
   );
   
   register_taxonomy('services_category', 'services', $args );
}
add_action( 'init', 'wtd_custom_post_type_services_cat');




/**
 * Register a widget.
 *
 * @see register_widget() for registering widget types.
 */


// My widget create

class My_Widget extends WP_Widget{

	public function __construct(){
		parent:: __construct(
			'first-widget', // Base ID
			'My Widget' // Widget Name
		);

		add_action( 'widgets_init', function() {

			register_widget( 'My_Widget' );

		} );
	}


	public function widget( $args, $instance ){

		// step one
		echo $args['before_widget'];
		echo $args['before_title'];
		echo $instance['title'];
		echo $args['after_title'];
		echo $instance['description'];
		echo $args['after_widget'];

		// step two
		// echo '<h4>' .$instance['title']. '</h4>';
		// echo '<p>' .$instance['description']. '</p>';
	}

	// widget FORM INSERT
	public function form($instance) {
		$title = $instance['title'];
		$description   = $instance['description'];
		?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title ?>" class="widefat"> 
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('description'); ?>">Description</label>
			<textarea type="text" name="<?php echo $this->get_field_name('description'); ?>" id="<?php echo $this->get_field_id('description'); ?>" class="widefat"><?php echo $description ?></textarea> 
		</p>


		<?php
	}

}

$my_widget = new My_Widget();


// My Service widget create

class my_service_widget extends WP_Widget{

	public function __construct(){
		parent:: __construct(
			'service-widget', // Base ID
			'Service Widget', // Widget Name
			'Latest Service Post Widget' // Widget Description
		);

		add_action( 'widgets_init', function() {

			register_widget( 'my_service_widget' );

		} );
	}


	public function widget( $args, $instance ){

		// step one
		echo $args['before_widget'];
		echo $args['before_title'];
		echo $instance['title'];
		echo $args['after_title'];


		$arg = array(
			'post_type' => 'services',
			'posts_per_page' => $instance['count'],
			'order_by' => 'DASC'
		);

		$query = new WP_Query($arg);

		if($query->have_posts()){

			while($query->have_posts()){
				$query->the_post();

				?>
					<div class="sitebar-post" style="margin-top:20px">
						<a href="<?php the_permalink( ); ?>"><img src="<?php the_post_thumbnail_url( ); ?>" alt=""></a>
						<h3 style="margin: 10px 0;"><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></h3>
						<!-- <p><?php the_content(); ?></p> -->
					</div>
				<?php
			}
			
			wp_reset_postdata(  );
		}

		echo $args['after_widget'];
	}

	// widget FORM INSERT
	public function form($instance) {
		$title = $instance['title'];
		$count = $instance['count'];
		?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title ?>" class="widefat"> 
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('count'); ?>">Total Service Count</label>
			<input type="text" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" value="<?php echo $count ?>" class="widefat"> 
		</p>

		<?php
	}

}

$my_service_widget = new my_service_widget();




/**
 * This outputs the javascript needed to automate the live settings preview.
 * Also keep in mind that this function isn't necessary unless your settings 
 * are using 'transport'=>'postMessage' instead of the default 'transport'
 * => 'refresh'
 * 
 * Used by hook: 'customize_preview_init'
 */

function wtdtheme_customizer_live_preview(){
	wp_enqueue_script( 'liveJs', get_template_directory_uri().'/assets/js/customize-refresh.js', array( 'jquery','customize-preview' ), '', true);
}
add_action( 'customize_preview_init', 'wtdtheme_customizer_live_preview' );