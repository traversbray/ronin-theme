<?php
/**
 *  Ronin Theme functions and definitions
 *
 * @package Ronin Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 940; /* pixels */
}

if ( ! function_exists( 'hm_base_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hm_base_theme_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => 'Primary Menu',
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
}
endif; // hm_base_theme_setup
add_action( 'after_setup_theme', 'hm_base_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function hm_base_theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer Content',
		'id'            => 'footer-content',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hm_base_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hm_base_theme_scripts() {
	global $wp_scripts;
	$version = "20150317";

	wp_enqueue_style( 'hm-base-theme-style', get_stylesheet_uri(), array(), $version );
	wp_enqueue_style( 'hm-base-theme-style-wosass', get_stylesheet_directory_uri().'/style-wosass.css', array(), $version );

	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.2', true );
	wp_enqueue_script( 'hm-base-theme-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('bootstrap-js','jquery'), $version, true );

	// Old IE
	// Use new method when 4.2 lands: http://stackoverflow.com/a/16221114
	wp_enqueue_script( 'hm-base-theme-ie-js', get_stylesheet_directory_uri() . '/assets/js/html5shiv_respond.js', array(), $version );
	add_filter( 'script_loader_tag', function( $tag, $handle ) {
	    if ( $handle === 'hm-base-theme-ie-js' ) {
	        $tag = "\n<!--[if lt IE 9]>\n$tag<![endif]-->\n";
	    }
	    return $tag;
	}, 10, 2 );
}
add_action( 'wp_enqueue_scripts', 'hm_base_theme_scripts' );

function hm_bootstrapify_gf_buttons ($button, $form){
    if ($form["button"]["type"] == "text") {
        // (class=) followed by (single or double quote) followed by (anything that is not a single or double quote)
        $pattern = '/(class=)(\'|")([^\'"]+)/';
        $replacement = '${1}${2}${3} btn btn-default';
        $newbutton = preg_replace($pattern, $replacement, $button);
        if ( !is_null($newbutton) ) {
            $button = $newbutton;
        }
    }
    return $button;
}
add_filter("gform_submit_button", "hm_bootstrapify_gf_buttons", 10, 2);

add_filter( 'gform_tabindex', '__return_false' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Bootstrap nav walker
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
