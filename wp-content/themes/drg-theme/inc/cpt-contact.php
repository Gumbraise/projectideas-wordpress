<?php
if ( ! function_exists( 'drg_cpt_contacts' ) ) :
	function drg_cpt_contacts() {

		$labels = array(
			'name'                  => _x( 'Contacts', 'Post Type General Name', 'drg' ),
			'singular_name'         => _x( 'Contacts', 'Post Type Singular Name', 'drg' ),
			'menu_name'             => __( 'Contacts', 'drg' ),
			'name_admin_bar'        => __( 'Contacts', 'drg' ),
			'archives'              => __( 'Item Contacts', 'drg' ),
			'attributes'            => __( 'Item Contacts', 'drg' ),
			'parent_item_colon'     => __( 'Parent Item:', 'drg' ),
			'all_items'             => __( 'All Contacts', 'drg' ),
			'add_new_item'          => __( 'Add an Contact', 'drg' ),
			'add_new'               => __( 'Add an Contact', 'drg' ),
			'new_item'              => __( 'New Contact', 'drg' ),
			'edit_item'             => __( 'Edit Contact', 'drg' ),
			'update_item'           => __( 'Update Contact', 'drg' ),
			'view_item'             => __( 'View Contact', 'drg' ),
			'view_items'            => __( 'View Contacts', 'drg' ),
			'search_items'          => __( 'Search Contacts', 'drg' ),
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
			'label'               => __( 'contacts', 'drg' ),
			'description'         => __( 'Contacts from DevsAreGenius', 'drg' ),
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
			'menu_icon'           => 'dashicons-email',
			'content'             => '\0019ff',
			'query_var'           => true,
			'rewrite'             => array( 'slug', 'contacts' ),
		);
		register_post_type( 'contacts', $args );
		flush_rewrite_rules();

	}

	add_action( 'init', 'drg_cpt_contacts', 10 );
endif;