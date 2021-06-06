<?php
if ( ! function_exists( 'drg_cpt_ideas' ) ) :
	function drg_cpt_ideas() {

		$labels = array(
			'name'                  => _x( 'Ideas', 'Post Type General Name', 'drg' ),
			'singular_name'         => _x( 'Ideas', 'Post Type Singular Name', 'drg' ),
			'menu_name'             => __( 'Ideas', 'drg' ),
			'name_admin_bar'        => __( 'Ideas', 'drg' ),
			'archives'              => __( 'Item Ideas', 'drg' ),
			'attributes'            => __( 'Item Ideas', 'drg' ),
			'parent_item_colon'     => __( 'Parent Item:', 'drg' ),
			'all_items'             => __( 'All Ideas', 'drg' ),
			'add_new_item'          => __( 'Add an Idea', 'drg' ),
			'add_new'               => __( 'Add an Idea', 'drg' ),
			'new_item'              => __( 'New Idea', 'drg' ),
			'edit_item'             => __( 'Edit Idea', 'drg' ),
			'update_item'           => __( 'Update Idea', 'drg' ),
			'view_item'             => __( 'View Idea', 'drg' ),
			'view_items'            => __( 'View Ideas', 'drg' ),
			'search_items'          => __( 'Search Ideas', 'drg' ),
			'not_found'             => __( 'No Found', 'drg' ),
			'not_found_in_trash'    => __( 'No Found in Trash', 'drg' ),
			'featured_image'        => __( 'Image à la une', 'double6' ),
			'set_featured_image'    => __( 'Parametrer Image à la une', 'double6' ),
			'remove_featured_image' => __( 'Supprimer Image à la une', 'double6' ),
			'use_featured_image'    => __( 'Utiliser Image à la une', 'double6' ),
			'insert_into_item'      => __( 'Insert into item', 'double6' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'double6' ),
			'items_list'            => __( 'Items list', 'double6' ),
			'items_list_navigation' => __( 'Items list navigation', 'double6' ),
			'filter_items_list'     => __( 'Filter items list', 'double6' ),

		);
		$args   = array(
			'label'               => __( 'ideas', 'drg' ),
			'description'         => __( 'Ideas from DevsAreGenius', 'drg' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments' ),
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
			'menu_icon'           => 'dashicons-admin-post',
			'content'             => '\0019ff',
			'query_var'           => true,
			'rewrite'             => array( 'slug', 'ideas' ),
		);
		register_post_type( 'ideas', $args );
		flush_rewrite_rules();

	}

	add_action( 'init', 'drg_cpt_ideas', 10 );
endif;