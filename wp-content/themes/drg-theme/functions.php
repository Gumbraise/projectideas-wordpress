<?php
/**
 * DevsAreGenius theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since DevsAreGenius 1.0
 */

// Empeche l'accès direct au fichier
defined( 'ABSPATH' ) || exit;


// Paramètrage du theme
if ( ! function_exists( 'drg_setup' ) ) :
	function drg_setup() {
		register_nav_menus( array(
			'nav-menu' => __( 'Nav Menu', 'drg' ),
		) );

		add_theme_support(
			'html5',
			array(
				'comment-list',
				'comment-form',
				'search-form',
				'gallery',
				'caption',
				'style',
				'script'
			)
		);

		// Add Selective Refresh Widgets
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'drg_setup' );


function drg_style() {
//	wp_enqueue_style( 'style-reset', get_template_directory_uri() . '/assets/css/reset.min.css', 1 );
	wp_enqueue_style( 'style-tailwindcss', get_template_directory_uri() . '/assets/css/tailwind.min.css', 1 );

	wp_enqueue_style( 'style-default', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'drg_style' );


function drg_scripts() {
	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'script-default', get_template_directory_uri() . '/assets/js/theme.js' );
}


add_action( 'wp_enqueue_scripts', 'drg_scripts' );

function remove_admin_login_header() {
	remove_action( 'wp_head', '_admin_bar_bump_cb' );
}

add_action( 'get_header', 'remove_admin_login_header' );

add_theme_support( 'post-thumbnails' );

require get_template_directory() . '/inc/cpt-ideas.php';

function add_author_support_to_posts() {
	add_post_type_support( 'actualites', 'author' );
}

add_action( 'init', 'add_author_support_to_posts' );

function custom_posts_per_page( $query ) {

	if ( $query->is_archive( 'project' ) ) {
		set_query_var( 'posts_per_page', - 1 );
	}
}

add_action( 'pre_get_posts', 'custom_posts_per_page' );
