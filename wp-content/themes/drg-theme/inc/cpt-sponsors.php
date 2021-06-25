<?php
if ( ! function_exists( 'drg_cpt_sponsors' ) ) :
	function drg_cpt_sponsors() {

		$labels = array(
			'name'                  => _x( 'Sponsors', 'Post Type General Name', 'drg' ),
			'singular_name'         => _x( 'Sponsors', 'Post Type Singular Name', 'drg' ),
			'menu_name'             => __( 'Sponsors', 'drg' ),
			'name_admin_bar'        => __( 'Sponsors', 'drg' ),
			'archives'              => __( 'Item Sponsors', 'drg' ),
			'attributes'            => __( 'Item Sponsors', 'drg' ),
			'parent_item_colon'     => __( 'Parent Item:', 'drg' ),
			'all_items'             => __( 'All Sponsors', 'drg' ),
			'add_new_item'          => __( 'Add an Sponsors', 'drg' ),
			'add_new'               => __( 'Add an Sponsors', 'drg' ),
			'new_item'              => __( 'New Sponsors', 'drg' ),
			'edit_item'             => __( 'Edit Sponsors', 'drg' ),
			'update_item'           => __( 'Update Sponsors', 'drg' ),
			'view_item'             => __( 'View Sponsors', 'drg' ),
			'view_items'            => __( 'View Sponsors', 'drg' ),
			'search_items'          => __( 'Search Sponsors', 'drg' ),
			'not_found'             => __( 'No Found', 'drg' ),
			'not_found_in_trash'    => __( 'No Found in Trash', 'drg' ),
			'featured_image'        => __( 'Image à la une', 'drg' ),
			'set_featured_image'    => __( 'Parametrer Image à la une', 'drg' ),
			'remove_featured_image' => __( 'Supprimer Image à la une', 'drg' ),
			'use_featured_image'    => __( 'Utiliser Image à la une', 'drg' ),
			'insert_into_item'      => __( 'Insert into item', 'drg' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'drg' ),
			'items_list'            => __( 'Items list', 'drg' ),
			'items_list_navigation' => __( 'Items list navigation', 'drg' ),
			'filter_items_list'     => __( 'Filter items list', 'drg' ),

		);
		$args   = array(
			'label'               => __( 'Sponsors', 'drg' ),
			'description'         => __( 'Sponsors from DevsAreGenius', 'drg' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'custom-fields', ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 4,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'menu_icon'           => 'dashicons-plus',
			'content'             => '\0019ff',
			'query_var'           => true,
			'rewrite'             => array( 'slug', 'sponsors' ),
		);
		register_post_type( 'sponsors', $args );
		flush_rewrite_rules();

	}

	add_action( 'init', 'drg_cpt_sponsors', 10 );
endif;