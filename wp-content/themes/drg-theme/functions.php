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
			'nav-menu'    => __( 'Nav Menu', 'drg' ),
			'footer-menu' => __( 'Footer Menu', 'drg' ),
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
	wp_enqueue_script( 'script-cookies', '//cdn.cookie-script.com/s/408981c05c8f6d8e8e7f47affa2ebdc3.js' );
}


add_action( 'wp_enqueue_scripts', 'drg_scripts' );

function remove_admin_login_header() {
	remove_action( 'wp_head', '_admin_bar_bump_cb' );
}

add_action( 'get_header', 'remove_admin_login_header' );

add_theme_support( 'post-thumbnails' );

require get_template_directory() . '/inc/cpt-ideas.php';
require get_template_directory() . '/inc/cpt-contact.php';
require get_template_directory() . '/inc/cpt-sponsors.php';

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

function register_navwalker() {
	require_once get_template_directory() . '/walker/Footer_Nav_Menu.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

function custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );


function gt_get_post_view() {
	$count = get_post_meta( get_the_ID(), 'post_views_count', true );

	return $count;
}

function gt_set_post_view() {
	$key     = 'post_views_count';
	$post_id = get_the_ID();
	$count   = (int) get_post_meta( $post_id, $key, true );
	$count ++;
	update_post_meta( $post_id, $key, $count );
}

function gt_posts_column_views( $columns ) {
	$columns['post_views'] = 'Views';

	return $columns;
}

function gt_posts_custom_column_views( $column ) {
	if ( $column === 'post_views' ) {
		echo gt_get_post_view();
	}
}

add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

add_filter( 'wpseo_remove_reply_to_com', '__return_false' );

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );

function AcfCustomizerSections() {
	$panel_id = acf_add_customizer_panel( array(
		'title' => 'Theme-Options',
	) );

	acf_add_customizer_section( array(
		'title'        => 'Basic',
		'storage_type' => 'option',
		'panel'        => $panel_id,
	) );

	acf_add_customizer_section( array(
		'title'        => 'Advanced',
		'storage_type' => 'option',
		'panel'        => $panel_id,
	) );
}

add_action( 'init', 'AcfCustomizerSections', 20 );

function excerpt() {
	$limit = 75;

	$excerpt = get_the_excerpt();
	if (strlen($excerpt) >= $limit) {
		$excerpt = preg_replace( " ([.*?])", '', $excerpt );
		$excerpt = strip_shortcodes( $excerpt );
		$excerpt = strip_tags( $excerpt );
		$excerpt = substr( $excerpt, 0, $limit );
		$excerpt = trim( preg_replace( '/\s+/', ' ', $excerpt ) );
		$excerpt = $excerpt . '...';
	}

	return $excerpt;
}