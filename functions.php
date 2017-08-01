<?php
/**
 * Mailtoxyz functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mailtoxyz
 */

if ( ! function_exists( 'mailtoxyz_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mailtoxyz_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Daily Reading, use a find and replace
	 * to change 'daily-reading' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mailtoxyz', get_template_directory() . '/languages' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'mailtoxyz' ),
	) );
}
endif;
add_action( 'after_setup_theme', 'mailtoxyz_setup' );

function mailtoxyz_scripts() {
	wp_enqueue_style('mailtoxyz_style', get_stylesheet_uri() );
	wp_enqueue_script('mailtoxyz_js', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), true);
}

add_action( 'wp_enqueue_scripts', 'mailtoxyz_scripts' );
?>