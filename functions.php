<?php
/**
 * Beerwerks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Beerwerks
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function beerwerks_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Beerwerks, use a find and replace
		* to change 'beerwerks' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'beerwerks', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'beerwerks' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'beerwerks_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'beerwerks_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function beerwerks_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'beerwerks_content_width', 640 );
}
add_action( 'after_setup_theme', 'beerwerks_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function beerwerks_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'beerwerks' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'beerwerks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'beerwerks_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function beerwerks_scripts() {
	wp_enqueue_style( 'beerwerks-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'beerwerks-style', 'rtl', 'replace' );

	wp_enqueue_style('output', get_template_directory_uri() . '/output/output.css', array(), filemtime(get_template_directory() . '/output/output.css'), false);

	wp_enqueue_script( 'beerwerks-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'map', get_template_directory_uri() . '/js/map.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'beerwerks_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// cure 2021
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'menu-2021' => __( 'Menu 2021' ),
      'quizmenu-2021' => __( 'Quiz Menu 2021' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    // update path
    $path = get_template_directory_uri() . '/acf-json';
    // return
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
 
function my_acf_json_load_point( $paths ) {
    // update path
    $paths = get_template_directory_uri() . '/acf-json';
    // return
    return $paths;
}

function insert_jquery()
{
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-3.5.1.min.js'), null, '3.5.1', false);
}
add_filter('wp_enqueue_scripts', 'insert_jquery', 1);

function maps()
{
    wp_enqueue_script('js-map2',  get_template_directory_uri('/js/map2.js'), null, 1.0, true);
}
add_action('wp_enqueue_scripts', 'maps');

function mapBrewery($api){
	$api['key'] = 'AIzaSyBzyOu7LZfkLOnYkCVO4gpln9kKO0TYpfs';
	return $api;
}
add_filter('acf/fields/google_map/api', 'mapBrewery');
/**
 * Register a custom post type called "brewery".
 *
 * @see get_post_type_labels() for label keys.
 */
function brewery_init() {
    $labels = array(
        'name'                  => _x( 'Breweries', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Brewery', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Breweries', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Brewery', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Brewery', 'textdomain' ),
        'new_item'              => __( 'New Brewery', 'textdomain' ),
        'edit_item'             => __( 'Edit Brewery', 'textdomain' ),
        'view_item'             => __( 'View Brewery', 'textdomain' ),
        'all_items'             => __( 'All Breweries', 'textdomain' ),
        'search_items'          => __( 'Search Breweries', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Brewery:', 'textdomain' ),
        'not_found'             => __( 'No breweries found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No breweries found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Brewery Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Brewery archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Brewery', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Brewery', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Breweries list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Breweries list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Breweries list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'brewery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'brewery', $args );
}
 
add_action( 'init', 'brewery_init' );


