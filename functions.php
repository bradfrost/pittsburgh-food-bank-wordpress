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
function blankslate_setup()
{
load_theme_textdomain('blankslate', get_template_directory() . '/languages');
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}

add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __('Sidebar Widget Area', 'blankslate'),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
) );
}

// Special Events Sidebar
function custom_sidebar() {

	$args = array(
		'id'            => 'specialevents',
		'name'          => __( 'Special Events', 'text_domain' ),
		'description'   => __( 'Sidebar that displays special events', 'text_domain' ),
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'custom_sidebar' );

/*Remove Comments from Admin Menu*/
function remove_comment_menu(){
  remove_menu_page( 'edit-comments.php' );          
}
add_action( 'admin_menu', 'remove_comment_menu' );

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

/*Add Story Post Type*/
register_post_type('story', array(
	'labels' => array(
       'name'          => __('Stories'),
       'singular_label' => __('Story'),
		'add_new' => 'Add New Story',
	    'add_new_item' =>'Add New Story',
	    'edit' => 'Edit Story',
	    'edit_new_item' => 'Edit Story',
	    'rewrite' => array("slug" => "story")
    ),
    'menu_icon' => 'dashicons-format-video',
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
register_post_type('faq', array(
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

/*Add FAQ Taxonomy */
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

/*Add Resource Post Type*/
register_post_type('resource', array(
	'labels' => array(
       'name'          => __('Resources'),
       'singular_label' => __('Resource'),
		'add_new' => 'Add New Resource',
	    'add_new_item' =>'Add New Resource',
	    'edit' => 'Edit Resource',
	    'edit_new_item' => 'Edit Resource',
	    'rewrite' => array("slug" => "resource")
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

/*Add Resource Taxonomy */
add_action( 'init', 'create_resource_taxonomy' );

function create_resource_taxonomy() {
	register_taxonomy(
		'resource_cat',
		'resource',
		array(
			'label' => __( 'Resource Category' ),
			'rewrite' => array( 'slug' => 'resource_cat' ),
			'hierarchical' => true,
		)
	);
}

/*Add Department Post Type*/
register_post_type('department', array(
	'labels' => array(
       'name'          => __('Departments'),
       'singular_label' => __('Department'),
		'add_new' => 'Add New Department',
	    'add_new_item' =>'Add New Department',
	    'edit' => 'Edit Department',
	    'edit_new_item' => 'Edit Department',
	    'rewrite' => array("slug" => "department")
    ),
    'menu_icon' => 'dashicons-networking',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => false,
	'query_var' => false,
	'taxonomies' => array('post_tag','category'),
	'supports' => array('title', 'tags', 'editor', 'thumbnail','custom-fields')
));

?>