<?php
// Bootstraps the theme setup.
require_once get_template_directory() . '/inc/core/Setup.php';
require_once get_template_directory() . '/inc/helpers.php';

\Estatain\Inc\Core\Setup::init();

/**
 * Estatain functions and definitions
 *
 * @package Estatain
 */

if ( ! function_exists( 'estatain_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function estatain_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Register navigation menu location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'estatain' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'estatain_setup' );

/**
 * Enqueue scripts and styles.
 */
function estatain_scripts() {
	wp_enqueue_style( 'estatain-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'estatain_scripts' ); 