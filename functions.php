<?php

add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));
add_theme_support( 'post-thumbnails', array('post', 'page'));

// add an image size, @name, @width, @height, @hard-crop
// add_image_size('name', 100, 100, true);


// Clean up the <head>
function removeHeadLinks() {
   	remove_action('wp_head', 'rsd_link');
   	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');


/*------------------------------------*\
	Meta Boxes - using Dimas's wpalchemy
	via: http://www.farinspace.com/wpalchemy-metabox/
\*------------------------------------*/
// include_once 'metaboxes/setup.php';
// include_once 'metaboxes/spec.php';


/*------------------------------------*\
	Post 2 Post - Create post relationships
	via: http://wordpress.org/extend/plugins/posts-to-posts/
\*------------------------------------*/
// function my_connection_types() {
// 	if ( !function_exists( 'p2p_register_connection_type' ) )
// 		return;
		
// 	p2p_register_connection_type( array(
// 		'id' 			=> 'testimonial_to_portfolio',
// 		'from' 			=> 'testimonial',
// 		'to'			=> 'portfolio',
// 		'title' 		=> 'Portfolio<->Testimonial',
// 		'cardinality'	=> 'one-to-one'
// 	));
	
// }
// add_action( 'init', 'my_connection_types', 100 );


/*------------------------------------*\
	Menus
\*------------------------------------*/
register_nav_menus(
	array( 
		'primary_nav'	=> 'Primary Navigation',
		'secondary_nav'	=> 'Secondary Navigation',
		'footer_nav'	=> 'Footer Navigation'
	)
);


/*------------------------------------*\
	Sidebars
\*------------------------------------*/
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => __('Sidebar Widgets','a7swart' ),
		'id'   => 'sidebar-widgets',
		'description'   => __( 'These are widgets for the sidebar.','a7swart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}


/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/
// add_action( 'init', 'register_cpt_event' );

// function register_cpt_event() {

//     $labels = array( 
//         'name' => _x( 'Events', 'event' ),
//         'singular_name' => _x( 'Event', 'event' ),
//         'add_new' => _x( 'Add New', 'event' ),
//         'add_new_item' => _x( 'Add New Event', 'event' ),
//         'edit_item' => _x( 'Edit Event', 'event' ),
//         'new_item' => _x( 'New Event', 'event' ),
//         'view_item' => _x( 'View Event', 'event' ),
//         'search_items' => _x( 'Search Events', 'event' ),
//         'not_found' => _x( 'No events found', 'event' ),
//         'not_found_in_trash' => _x( 'No events found in Trash', 'event' ),
//         'parent_item_colon' => _x( 'Parent Event:', 'event' ),
//         'menu_name' => _x( 'Events', 'event' ),
//     );

//     $args = array( 
//         'labels' => $labels,
//         'hierarchical' => true,
//         'description' => 'DESCRIPTION',
//         'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
//         'taxonomies' => array( 'category', 'post_tag', 'page-category', 'event-category' ),
//         'public' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'menu_position' => 20,
        
//         'show_in_nav_menus' => true,
//         'publicly_queryable' => true,
//         'exclude_from_search' => false,
//         'has_archive' => true,
//         'query_var' => true,
//         'can_export' => true,
//         'rewrite' => true,
//         'capability_type' => 'post'
//     );

//     register_post_type( 'event', $args );
// }


/*------------------------------------*\
	Custom Taxonomies
\*------------------------------------*/
// register_taxonomy(
// 	'portfolio-category',
// 	'portfolio', array(
// 		'show_ui'					=> true,
// 		'query_var'				=> true,
// 		'hierarchical'			=> true,
// 		'rewrite'					=> array('slug' => 'portfolio-category'),		
// 		'label'					=> 'Categories',
// 	)
// );






/**
 * Call Scripts in footer
 */
// function script_calls_footer() { 
// 	printf('<script src="%s/_/js/functions.js" type="text/javascript"></script>', get_bloginfo('stylesheet_directory'));

// 	// <?php 	
// 	// if(is_front_page()) { 
// 	// <script type="text/javascript" charset="utf-8">
// 	// 	jQuery('.slider').a7Slider({
// 	// 		speed: 500,
// 	// 		pause: 7500,
// 	// 		width: 960
// 	// 	});
// 	// </script>
// 	// <?php }

// 	// if(is_single()) { 
// 	// <script type="text/javascript" charset="utf-8">
// 	// 	jQuery('.slideshow').a7Slider({
// 	// 		speed: 500,
// 	// 		pause: 7500,
// 	// 		width: 455
// 	// 	});
// 	// </script>
// 	// <?php }
// }
//add_action('wp_footer', 'script_calls_footer'); 










