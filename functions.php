<?php

//Remove unnecessary scripts and tags from <head>
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'index_rel_link');
remove_action( 'wp_head', 'parent_post_rel_link');
remove_action( 'wp_head', 'start_post_rel_link');
remove_action( 'wp_head', 'adjacent_posts_rel_link');
remove_action( 'wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

add_action('after_setup_theme', 'blankslate_setup');

function blankslate_setup() {
	load_theme_textdomain('blankslate', get_template_directory() . '/languages');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	
	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'med-large', 800 ); //(cropped)
	}
	
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
	array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
	);
}

add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init(){
	register_sidebar( array (
	'name' => __('Sidebar Widget Area', 'blankslate'),
	'id' => 'primary-widget-area',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => "</li>",
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>',
	) );
}

//Load Javascript
function load_js() {
   wp_enqueue_script( 'jq', get_template_directory_uri() . '/js/jquery.js', true);
   wp_enqueue_script( 'luminate', get_template_directory_uri() . '/js/luminateExtend.js', true);
   wp_enqueue_script( 'production', get_template_directory_uri() . '/js/production.min.js', array ('jquery'), true);
   
   //If page is Get Help Directory
   if ( is_page(55) ) {
   		wp_enqueue_script( 'typeahead', get_template_directory_uri() . '/js/typeahead.bundle.min.js', true);
   		wp_enqueue_script( 'gethelp', get_template_directory_uri() . '/js/gethelp.js', array ('jquery'), true);
   }
   
   //If page is Recipe Rainbow
   if ( is_page(1194) ) {
   		wp_enqueue_script( 'typeahead', get_template_directory_uri() . '/js/typeahead.bundle.min.js', true);
   		wp_enqueue_script( 'gethelp', get_template_directory_uri() . '/js/recipe-rainbow.js', array ('jquery'), true);
   }
} 
add_action( 'wp_footer', 'load_js' );

//Add image sizes
add_theme_support( 'post-thumbnails' );
add_image_size( 'square', 250, 250, true );

//Add Aqua Resizer for updating image sizes on the fly
require_once('aq_resizer.php');

//Excerpt length and read more
function new_excerpt_more( $more ) {
	return '...<a class="text-btn" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Special Events Sidebar
function specialevents_sidebar() {

	$args = array(
		'id'            => 'specialevents',
		'name'          => __( 'Special Events', 'text_domain' ),
		'description'   => __( 'Sidebar that displays special events', 'text_domain' ),
	);
	register_sidebar( $args );
}
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'specialevents_sidebar' );


// Blog Sidebar
function blog_sidebar() {

	$args = array(
		'id'            => 'blog',
		'name'          => __( 'Blog', 'text_domain' ),
		'description'   => __( 'Sidebar to appear on blog-related content', 'text_domain' ),
	);
	register_sidebar( $args );
}
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'blog_sidebar' );

// Resources Sidebar
function resources_sidebar() {

	$args = array(
		'id'            => 'resources',
		'name'          => __( 'Resources', 'text_domain' ),
		'description'   => __( 'Sidebar to appear on job-related content', 'text_domain' ),
	);
	register_sidebar( $args );
}
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'resources_sidebar' );



/*Remove Comments from Admin Menu*/
function remove_comment_menu(){
  remove_menu_page( 'edit-comments.php' );          
}
add_action( 'admin_menu', 'remove_comment_menu' );

/*Add Object Post Type*/
register_post_type('object', array(
	'labels' => array(
       'name'          => __('Objects'),
       'singular_label' => __('Object'),
		'add_new' => 'Add New Object',
	    'add_new_item' =>'Add New Object',
	    'edit' => 'Edit Object',
	    'edit_new_item' => 'Edit Object',
	    'rewrite' => array("slug" => "object")
    ),
    'menu_icon' => 'dashicons-welcome-widgets-menus',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag','category'),
	'supports' => array('title', 'tags', 'editor', 'thumbnail','custom-fields')
));

/*Add Agency Post Type*/
register_post_type('agency', array(
	'labels' => array(
       'name'          => __('Agencies'),
       'singular_label' => __('Agency'),
		'add_new' => 'Add New Agency',
	    'add_new_item' =>'Add New Agency',
	    'edit' => 'Edit Agency',
	    'edit_new_item' => 'Edit Agency',
	    'rewrite' => array("slug" => "agency")
    ),
    'menu_icon' => admin_url() . 'images/media-button-video.gif',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag','category'),
	'supports' => array('title', 'tags', 'editor', 'thumbnail','custom-fields')
));

/*Add Sponsor Post Type*/
register_post_type('sponsors', array(
	'labels' => array(
       'name'          => __('Sponsors'),
       'singular_label' => __('Sponsor'),
		'add_new' => 'Add New Sponsor',
	    'add_new_item' =>'Add New Sponsor',
	    'edit' => 'Edit Sponsor',
	    'edit_new_item' => 'Edit Sponsor',
	    'rewrite' => array("slug" => "sponsors")
    ),
    'menu_icon' => 'dashicons-id',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag','category'),
	'supports' => array('title', 'tags', 'editor', 'thumbnail','custom-fields')
));

/*Add Job Post Type*/
register_post_type('job', array(
	'labels' => array(
       'name'          => __('Jobs'),
       'singular_label' => __('Job'),
		'add_new' => 'Add New Job',
	    'add_new_item' =>'Add New Job',
	    'edit' => 'Edit Job',
	    'edit_new_item' => 'Edit Job',
	    'rewrite' => array("slug" => "job")
    ),
    'menu_icon' => 'dashicons-businessman',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag','category'),
	'supports' => array('title', 'tags', 'editor', 'thumbnail','custom-fields')
));

/*Add FAQ Post Type*/
/* register_post_type('faq', array(
	'labels' => array(
       'name'          => __('FAQs'),
       'singular_label' => __('FAQ'),
		'add_new' => 'Add New FAQ',
	    'add_new_item' =>'Add New FAQ',
	    'edit' => 'Edit FAQ',
	    'edit_new_item' => 'Edit FAQ',
	    'rewrite' => array("slug" => "faq")
    ),
    'menu_icon' => 'dashicons-editor-help',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag','category'),
	'supports' => array('title', 'tags', 'editor', 'thumbnail','custom-fields')
));
*/

/*Add FAQ Taxonomy */
/*
add_action( 'init', 'create_faq_taxonomy' );

function create_faq_taxonomy() {
	register_taxonomy(
		'faq_cat',
		'faq',
		array(
			'label' => __( 'FAQ Category' ),
			'rewrite' => array( 'slug' => 'faq_cat' ),
			'hierarchical' => true,
		)
	);
}
*/

/*Add Resource Post Type*/
/*
register_post_type('link', array(
	'labels' => array(
       'name'          => __('Links'),
       'singular_label' => __('Link'),
		'add_new' => 'Add New Link',
	    'add_new_item' =>'Add New Link',
	    'edit' => 'Edit Link',
	    'edit_new_item' => 'Edit Link',
	    'rewrite' => array("slug" => "link")
    ),
    'menu_icon' => 'dashicons-admin-links',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag','category'),
	'supports' => array('title', 'tags', 'custom-fields')
));
*/

/*Add Resource Taxonomy */
/*
add_action( 'init', 'create_link_taxonomy' );

function create_link_taxonomy() {
	register_taxonomy(
		'link_cat',
		'link',
		array(
			'label' => __( 'Link Category' ),
			'rewrite' => array( 'slug' => 'link_cat' ),
			'hierarchical' => true,
		)
	);
}
*/

/**
 * Customize your tribe event calendar meta displays with a variety of methods.
 * Place this in your functions.php file within your theme
 */
add_action( 'wp_head', 'custom_event_meta' );
function custom_event_meta(){

  // customize just the label
  tribe_set_meta_label( 'tribe_event_address', __( 'Address:' ) );
 }

?>