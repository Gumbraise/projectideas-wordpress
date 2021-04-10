<?php
/**
 * ProjectIdeas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage ProjectIdeas
 * @since ProjectIdeas 1.0
 */

// Empeche l'accès direct au fichier
defined( 'ABSPATH' ) || exit;


// Paramètrage du theme
if ( ! function_exists( 'projectideas_setup' ) ) :
	function double6_setup() {
		add_theme_support( 'title-tag' );

		register_nav_menus( array(
			'nav-menu-left' => __( 'Nav Menu Left', 'projectideas' ),
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
add_action( 'after_setup_theme', 'projectideas_setup' );


function double6_style() {
	wp_enqueue_style( 'style-font-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900', 1 );

	wp_enqueue_style( 'style-material', 'https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css', 1 );
	wp_enqueue_style( 'style-fontawesome5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', 1 );
	wp_enqueue_style( 'style-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', 1 );
	wp_enqueue_style( 'style-template', get_template_directory_uri() . '/assets/css/templatemo-grad-school.css', 1 );
	wp_enqueue_style( 'style-owl', get_template_directory_uri() . '/assets/css/owl.css', 1 );
	wp_enqueue_style( 'style-lightbox', get_template_directory_uri() . '/assets/css/lightbox.css', 1 );
	wp_enqueue_style( 'style-train', get_template_directory_uri() . '/assets/css/train.css', 1 );
	wp_enqueue_style( 'style-default', get_stylesheet_uri() );

	if ( is_singular( 'actualites' ) ) {
		wp_enqueue_style( 'style-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', 1 );
		wp_enqueue_style( 'style-single-produit', get_template_directory_uri() . '/assets/css/single-produit.css', 99 );
	}


}

add_action( 'wp_enqueue_scripts', 'double6_style' );
// Chargement des feuilles de style CSS et des scripts JS
function double6_scripts() {

	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'script-jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js' );
	wp_enqueue_script( 'script-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' );
	wp_enqueue_script( 'script-owl', get_template_directory_uri() . '/assets/js/owl-carousel.js' );
	wp_enqueue_script( 'script-lightbox', get_template_directory_uri() . '/assets/js/lightbox.js' );
	wp_enqueue_script( 'script-tabs', get_template_directory_uri() . '/assets/js/tabs.js' );
	wp_enqueue_script( 'script-video', get_template_directory_uri() . '/assets/js/video.js' );
	wp_enqueue_script( 'script-slick', get_template_directory_uri() . '/assets/js/slick-slider.js' );
	wp_enqueue_script( 'script-custom', get_template_directory_uri() . '/assets/js/custom.js' );

	if ( is_singular( 'actualites' ) ) {
		wp_enqueue_script( 'script-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js' );
	}

}


add_action( 'wp_enqueue_scripts', 'double6_scripts' );

function register_navwalker() {
	require_once get_template_directory() . '/assets/walker/class-wp-bootstrap-navwalker.php';
}

add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 2 );

function special_nav_class( $classes, $item ) {
	if ( in_array( 'nav-menu-text', $classes ) ) {
		$classes[] = 'active ';
	}

	return $classes;
}

add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'show_admin_bar', '__return_false' );

function custom_excerpt_length( $length ) {
	return 18;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



function my_wp_nav_menu_objects( $items, $args ) {

	// loop
	foreach ( $items as &$item ) {

		// vars
		$icon = get_field( 'icon', $item );


		// append icon
		if ( $icon ) {

			$item->title .= ' <i class="fa fa-' . $icon . '"></i>';

		}
		$item->filter = '';

	}


	// return
	return $items;
	//return var_dump($items[1]);

}

add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2 );

require get_template_directory() . '/inc/cpt-actualites.php';
require get_template_directory() . '/inc/cpt-logos.php';

function remove_menu_items() {
	global $menu;
	$restricted = array( __( 'Articles' ), __( 'Article' ), __( 'Commentaires' ), __( 'Comments' ) );
	end( $menu );
	while ( prev( $menu ) ) {
		$value = explode( ' ', $menu[ key( $menu ) ][0] );

		if ( in_array( $value[0] != null ? $value[0] : "", $restricted ) ) {
			unset( $menu[ key( $menu ) ] );
		}
	}
}

add_action( 'admin_menu', 'remove_menu_items' );

function acf_custom_excerpt_length( $excerpt ) {
	if ( have_rows( 'blog_post_content' ) ):

		while ( have_rows( 'blog_post_content' ) ) : the_row();
			if ( get_row_layout() == 'blog_post_text_content' ):

				$my_acf_field = wp_trim_words( get_sub_field( 'blog_post_text' ), 18 );
				// break to stop loop
				break;
			endif;
		endwhile;
	else:
	endif;
	reset_rows();

	return $my_acf_field . '' . $excerpt;
}

add_filter( 'the_excerpt', 'acf_custom_excerpt_length' );

//add_filter( 'the_excerpt', function ( $excerpt ) {
//	$your_field = get_post_meta( get_the_ID(), 'texte', true );
//
//	return $excerpt . $your_field;
//} );

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
