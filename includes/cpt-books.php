<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Books Custom Post Type (example)
	** ***** ----------------------------------------------- ***** */

	// Create custom post type
	function bml_create_book_cpt() {

		$labels = array(
			'name'					=> _x( 'Books', 'post type general name', 'bymattlee' ),
			'singular_name'			=> _x( 'Book', 'post type singular name', 'bymattlee' ),
			'menu_name'				=> _x( 'Books', 'admin menu', 'bymattlee' ),
			'name_admin_bar'		=> _x( 'Book', 'add new on admin bar', 'bymattlee' ),
			'add_new'				=> _x( 'Add New', 'book', 'bymattlee' ),
			'add_new_item'			=> __( 'Add New Book', 'bymattlee' ),
			'new_item'				=> __( 'New Book', 'bymattlee' ),
			'edit_item'				=> __( 'Edit Book', 'bymattlee' ),
			'view_item'				=> __( 'View Book', 'bymattlee' ),
			'all_items'				=> __( 'All Books', 'bymattlee' ),
			'search_items'			=> __( 'Search Books', 'bymattlee' ),
			'parent_item_colon'		=> __( 'Parent Books:', 'bymattlee' ),
			'not_found'				=> __( 'No books found.', 'bymattlee' ),
			'not_found_in_trash'	=> __( 'No books found in Trash.', 'bymattlee' )
		);

		$args = array(
			'labels'				=> $labels,
	        'description'			=> __( 'Description.', 'bymattlee' ),
			'public'				=> true,
			'publicly_queryable'	=> true,
			'show_ui'				=> true,
			'show_in_menu'			=> true,
			'query_var'				=> true,
			'rewrite'				=> array( 'slug' => 'book' ),
			'capability_type'		=> 'post',
			'has_archive'			=> true,
			'hierarchical'			=> false,
			'menu_position'			=> null,
			'menu_icon'				=> 'dashicons-admin-post',
			'supports'				=> array( 'title', 'editor', 'thumbnail', 'revisions' )
		);

		register_post_type( 'bml-book', $args );

	}

	add_action( 'init', 'bml_create_book_cpt' );

	function bml_create_book_taxonomies() {
		
		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'					=> _x( 'Genres', 'taxonomy general name', 'bymattlee' ),
			'singular_name'			=> _x( 'Genre', 'taxonomy singular name', 'bymattlee' ),
			'search_items'			=> __( 'Search Genres', 'bymattlee' ),
			'all_items'				=> __( 'All Genres', 'bymattlee' ),
			'parent_item'			=> __( 'Parent Genre', 'bymattlee' ),
			'parent_item_colon'		=> __( 'Parent Genre:', 'bymattlee' ),
			'edit_item'				=> __( 'Edit Genre', 'bymattlee' ),
			'update_item'			=> __( 'Update Genre', 'bymattlee' ),
			'add_new_item'			=> __( 'Add New Genre', 'bymattlee' ),
			'new_item_name'			=> __( 'New Genre Name', 'bymattlee' ),
			'menu_name'				=> __( 'Genre', 'bymattlee' ),
		);

		$args = array(
			'hierarchical'			=> true,
			'labels'				=> $labels,
			'show_ui'				=> true,
			'show_admin_column'		=> true,
			'query_var'				=> true,
			'rewrite'				=> array( 'slug' => 'genre' ),
		);

		register_taxonomy( 'bml-genre', array( 'bml-book' ), $args );

		// Add new taxonomy, NOT hierarchical (like tags)
		$labels = array(
			'name'							=> _x( 'Writers', 'taxonomy general name', 'bymattlee' ),
			'singular_name'					=> _x( 'Writer', 'taxonomy singular name', 'bymattlee' ),
			'search_items'					=> __( 'Search Writers', 'bymattlee' ),
			'popular_items'					=> __( 'Popular Writers', 'bymattlee' ),
			'all_items'						=> __( 'All Writers', 'bymattlee' ),
			'parent_item'					=> null,
			'parent_item_colon'				=> null,
			'edit_item'						=> __( 'Edit Writer', 'bymattlee' ),
			'update_item'					=> __( 'Update Writer', 'bymattlee' ),
			'add_new_item'					=> __( 'Add New Writer', 'bymattlee' ),
			'new_item_name'					=> __( 'New Writer Name', 'bymattlee' ),
			'separate_items_with_commas'	=> __( 'Separate writers with commas', 'bymattlee' ),
			'add_or_remove_items'			=> __( 'Add or remove writers', 'bymattlee' ),
			'choose_from_most_used'			=> __( 'Choose from the most used writers', 'bymattlee' ),
			'not_found'						=> __( 'No writers found.', 'bymattlee' ),
			'menu_name'						=> __( 'Writers', 'bymattlee' ),
		);

		$args = array(
			'hierarchical'			=> false,
			'labels'				=> $labels,
			'show_ui'				=> true,
			'show_admin_column'		=> true,
			'update_count_callback'	=> '_update_post_term_count',
			'query_var'				=> true,
			'rewrite'				=> array( 'slug' => 'writer' ),
		);

		register_taxonomy( 'bml-writer', 'bml-book', $args );
	}

	add_action( 'init', 'bml_create_book_taxonomies', 0 );
	
?>