<?php
/**
 * A-P Corp 1.0 functions and definitions
 *
 * @package A-P Corp 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}


/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include CMB2
 */
require( trailingslashit( get_template_directory() ) . 'functions-cmb2.php' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

add_action( 'init', 'custom_post_types_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function custom_post_types_init() {
	$company_labels = array(
		'name'               => _x( 'Companies', 'post type general name', 'apcorp' ),
		'singular_name'      => _x( 'Company', 'post type singular name', 'apcorp' ),
		'menu_name'          => _x( 'Companies', 'admin menu', 'apcorp' ),
		'name_admin_bar'     => _x( 'Company', 'add new on admin bar', 'apcorp' ),
		'add_new'            => _x( 'Add New', 'Company', 'apcorp' ),
		'add_new_item'       => __( 'Add New Company', 'apcorp' ),
		'new_item'           => __( 'New Company', 'apcorp' ),
		'edit_item'          => __( 'Edit Company', 'apcorp' ),
		'view_item'          => __( 'View Company', 'apcorp' ),
		'all_items'          => __( 'All Companies', 'apcorp' ),
		'search_items'       => __( 'Search Companies', 'apcorp' ),
		'parent_item_colon'  => __( 'Parent Companies:', 'apcorp' ),
		'not_found'          => __( 'No companies found.', 'apcorp' ),
		'not_found_in_trash' => __( 'No companies found in Trash.', 'apcorp' )
		);

	$company_args = array(
		'labels'             => $company_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'company' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 21,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' )
		);

	register_post_type( 'company', $company_args );

	$product_line_labels = array(
		'name'               => _x( 'Product Lines', 'post type general name', 'apcorp' ),
		'singular_name'      => _x( 'Product Line', 'post type singular name', 'apcorp' ),
		'menu_name'          => _x( 'Product Lines', 'admin menu', 'apcorp' ),
		'name_admin_bar'     => _x( 'Product Line', 'add new on admin bar', 'apcorp' ),
		'add_new'            => _x( 'Add New', 'Product Line', 'apcorp' ),
		'add_new_item'       => __( 'Add New Product Line', 'apcorp' ),
		'new_item'           => __( 'New Product Line', 'apcorp' ),
		'edit_item'          => __( 'Edit Product Line', 'apcorp' ),
		'view_item'          => __( 'View Product Line', 'apcorp' ),
		'all_items'          => __( 'All Product Lines', 'apcorp' ),
		'search_items'       => __( 'Search Product Lines', 'apcorp' ),
		'parent_item_colon'  => __( 'Parent Product Lines:', 'apcorp' ),
		'not_found'          => __( 'No product lines found.', 'apcorp' ),
		'not_found_in_trash' => __( 'No product lines found in Trash.', 'apcorp' )
		);

	$product_line_args = array(
		'labels'             => $product_line_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product-line' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' )
		);

	register_post_type( 'product-line', $product_line_args );
}

add_action( 'init', 'create_product_taxonomy' );

function create_product_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Products', 'taxonomy general name' ),
		'singular_name'              => _x( 'Product', 'taxonomy singular name' ),
		'search_items'               => __( 'Search Products' ),
		'popular_items'              => __( 'Popular Products' ),
		'all_items'                  => __( 'All Products' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Product' ),
		'update_item'                => __( 'Update Product' ),
		'add_new_item'               => __( 'Add New Product' ),
		'new_item_name'              => __( 'New Product Name' ),
		'separate_items_with_commas' => __( 'Separate products with commas' ),
		'add_or_remove_items'        => __( 'Add or remove products' ),
		'choose_from_most_used'      => __( 'Choose from the most used products' ),
		'not_found'                  => __( 'No products found.' ),
		'menu_name'                  => __( 'Products' ),
		);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'product' ),
		);

	register_taxonomy( 'product', array( 'product-line', 'company'), $args );

}



if ( ! function_exists( 'apcorp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function apcorp_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on A-P Corp 1.0, use a find and replace
	 * to change 'apcorp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'apcorp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'topmenubar' => __( 'Top Menu Bar', 'apcorp' ),
		'footer' => __( 'Footer', 'apcorp' ),
		) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
		) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'apcorp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );


	add_image_size( 'home-slide', 1140, 400, true ); // 1140 x 400, cropped. For home page slider
}
endif; // apcorp_setup
add_action( 'after_setup_theme', 'apcorp_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function apcorp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'apcorp' ),
		'id'            => 'right-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );
	register_sidebar( array(
		'name'          => __( 'Footer Left', 'apcorp' ),
		'id'            => 'footer-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );
	register_sidebar( array(
		'name'          => __( 'Footer Middle', 'apcorp' ),
		'id'            => 'footer-middle',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );
	register_sidebar( array(
		'name'          => __( 'Footer Right', 'apcorp' ),
		'id'            => 'footer-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );




}
add_action( 'widgets_init', 'apcorp_widgets_init' );




// bump up the jQuery to early load and head
function insert_jquery(){
	wp_enqueue_script('jquery', false, array(), false, false);
}
add_filter('wp_enqueue_scripts','insert_jquery',1);

/**
 * Enqueue scripts and styles.
 */
function apcorp_scripts() {
	wp_enqueue_style( 'apcorp-style', get_stylesheet_uri() );
	//wp_enqueue_style( 'flexnav-css', get_template_directory_uri().'/css/flexnav.css' );
	//flexslider-css imported through scss just before overrides.
	//wp_enqueue_style( 'flexslider-css', get_template_directory_uri().'/css/flexslider.css' );
	//wp_enqueue_script( 'flexnav', get_template_directory_uri() . '/js/jquery.flexnav.js', array('jquery'), '1.3.3', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '1.3.3', true );
//	wp_enqueue_script( 'apcorp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
//	wp_enqueue_script( 'apcorp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'apcorp_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';









