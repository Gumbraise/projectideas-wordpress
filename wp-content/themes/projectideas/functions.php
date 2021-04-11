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

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'projectideas_setup' ) ) :
	function projectideas_setup() {
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

		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'projectideas_setup' );


function projectideas_style() {
	wp_enqueue_style( 'style-font-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' );

	wp_enqueue_style( 'style-baguettebox', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css' );
	wp_enqueue_style( 'style-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );

	wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-navigation-with-button', get_template_directory_uri() . '/assets/css/Navigation-with-Button.css' );
	wp_enqueue_style( 'style-smoothproducts', get_template_directory_uri() . '/assets/css/smoothproducts.css' );
	wp_enqueue_style( 'style-default', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'projectideas_style' );

function projectideas_scripts() {
	wp_enqueue_script( 'script-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), false, true );
	wp_enqueue_script( 'script-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js', array(), false, true );
	wp_enqueue_script( 'script-baguettebox', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js', array(), false, true );
	wp_enqueue_script( 'script-smoothproducts', get_template_directory_uri() . '/assets/js/smoothproducts.min.js', array(), false, true );
	wp_enqueue_script( 'script-default', get_template_directory_uri() . '/assets/js/theme.js', array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'projectideas_scripts' );

add_filter( 'show_admin_bar', '__return_false' );