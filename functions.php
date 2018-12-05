<?php
/**
 * gulp-wordpress functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gulp-wordpress
 */

if ( ! function_exists( 'gulp_wordpress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gulp_wordpress_setup() {

	add_theme_support( 'post-thumbnails' );
    add_image_size( 'blog-block-thumb', 315, '' ); // (cropped)

    // SVG Mask Sizes
	add_image_size( '711x413', 711, 413, true, array( 'center' , 'center' ) );
	add_image_size( '695x415', 695, 415, true, array( 'center' , 'center' ) );
	add_image_size( '675x440', 675, 440, true, array( 'center' , 'center' ) );
	add_image_size( '732x530', 732, 530, true, array( 'center' , 'center' ) );
	add_image_size( '655x397', 655, 397, true, array( 'center' , 'center' ) );
	add_image_size( '731x368', 731, 368, true, array( 'center' , 'center' ) );
	add_image_size( '470x380', 470, 380, true, array( 'center' , 'center' ) );
	add_image_size( '373x345', 373, 345, true, array( 'center' , 'center' ) );
	add_image_size( '470x380', 660, 470, true, array( 'center' , 'center' ) );
	add_image_size( '660x470', 660, 470, true, array( 'center' , 'center' ) );
	add_image_size( '536x362', 536, 362, true, array( 'center' , 'center' ) );
	add_image_size( 'slider_thumb', 640, 426, true, array( 'top' , 'left' ) );
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gulp-wordpress, use a find and replace
	 * to change 'gulp-wordpress' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gulp-wordpress', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'gulp-wordpress' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gulp_wordpress_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'gulp_wordpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gulp_wordpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gulp_wordpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'gulp_wordpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function gulp_wordpress_scripts() {
	wp_register_style('css-flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.0', 'all');
    wp_enqueue_style('css-flexslider'); // Enqueue it!
	
	wp_enqueue_style( 'gulp-wordpress-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gulp-wordpress-javascript', get_template_directory_uri() . '/js/app.min.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gulp_wordpress_scripts' );

/**
 * Enable ACF Options Page
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	
}
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );


// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function theme_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}
add_action('init', 'theme_pagination'); // Add Theme Custom Pagination

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
