<?php
/**
 * White Canvas Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package white_canvas_Theme
 */

if ( ! function_exists( 'white_canvas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function white_canvas_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
		'footer' => __('Footer Menu')		
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // white_canvas_setup
add_action( 'after_setup_theme', 'white_canvas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function white_canvas_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'white_canvas_content_width', 640 );
}
add_action( 'after_setup_theme', 'white_canvas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function white_canvas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'white_canvas_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function white_canvas_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'white_canvas_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function white_canvas_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/build/js/smooth-scroll.min.js', array('jquery'), false, true );

	wp_enqueue_script( 'read-more-script', get_template_directory_uri() . '/build/js/read-more.min.js', array('jquery'), false, true );

	wp_enqueue_script( 'div-swap-script', get_template_directory_uri() . '/build/js/div-swap.min.js', array('jquery'), false, true );

	wp_enqueue_script( 'active-nav-script', get_template_directory_uri() . '/build/js/active-nav.min.js', array('jquery'), false, true );

	wp_enqueue_script( 'scroll-to-bottom-script', get_template_directory_uri() . '/build/js/scroll-to-bottom.min.js', array('jquery'), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'white_canvas_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 *Active nav filter
 */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/**
 *Read More jump to top of blog page
 */

function remove_more_jump_link($link) { 
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');
