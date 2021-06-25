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

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


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

function my_update_attachment( $f, $pid, $t = '', $c = '' ) {
	wp_update_attachment_metadata( $pid, $f );
	if ( ! empty( $_FILES[ $f ]['name'] ) ) { //New upload
		require_once( ABSPATH . 'wp-admin/includes/file.php' );

		$override['action'] = 'editpost';
		$file               = wp_handle_upload( $_FILES[ $f ], $override );

		if ( isset( $file['error'] ) ) {
			return new WP_Error( 'upload_error', $file['error'] );
		}

		$file_type = wp_check_filetype( $_FILES[ $f ]['name'], array(
			'jpg|jpeg' => 'image/jpeg',
			'gif'      => 'image/gif',
			'png'      => 'image/png',
		) );
		if ( $file_type['type'] ) {
			$name_parts = pathinfo( $file['file'] );
			$name       = $file['filename'];
			$type       = $file['type'];
			$title      = $t ? $t : $name;
			$content    = $c;

			$attachment = array(
				'post_title'     => $title,
				'post_type'      => 'attachment',
				'post_content'   => $content,
				'post_parent'    => $pid,
				'post_mime_type' => $type,
				'guid'           => $file['url'],
			);

			foreach ( get_intermediate_image_sizes() as $s ) {
				$sizes[ $s ]           = array( 'width' => '', 'height' => '', 'crop' => true );
				$sizes[ $s ]['width']  = get_option( "{$s}_size_w" ); // For default sizes set in options
				$sizes[ $s ]['height'] = get_option( "{$s}_size_h" ); // For default sizes set in options
				$sizes[ $s ]['crop']   = get_option( "{$s}_crop" ); // For default sizes set in options
			}

			$sizes = apply_filters( 'intermediate_image_sizes_advanced', $sizes );

			foreach ( $sizes as $size => $size_data ) {
				$resized = image_make_intermediate_size( $file['file'], $size_data['width'], $size_data['height'], $size_data['crop'] );
				if ( $resized ) {
					$metadata['sizes'][ $size ] = $resized;
				}
			}

			$attach_id = wp_insert_attachment( $attachment, $file['file'] /*, $pid - for post_thumbnails*/ );

			if ( ! is_wp_error( $id ) ) {
				$attach_meta = wp_generate_attachment_metadata( $attach_id, $file['file'] );
				wp_update_attachment_metadata( $attach_id, $attach_meta );
			}

			return array(
				'pid'       => $pid,
				'url'       => $file['url'],
				'file'      => $file,
				'attach_id' => $attach_id
			);
			// update_post_meta( $pid, 'a_image', $file['url'] );
		}
	}
}

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );