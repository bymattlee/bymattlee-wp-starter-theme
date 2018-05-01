<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** ACF
	** ***** ----------------------------------------------- ***** */

	if( function_exists( 'acf_add_options_page' ) ) {

		// Add Theme Options tab to WP Admin
		acf_add_options_page( array(
			'menu_title'	=> __( 'Theme Options', 'bymattlee' ),
			'page_title' 	=> __( 'Theme Options', 'bymattlee' ),
			'menu_slug' 	=> 'theme-options',
			'capability'	=> 'edit_posts',
			'icon_url'		=> 'dashicons-admin-tools',
		));

		// Add General Options section under the Theme Options tab
		acf_add_options_sub_page( array(
			'page_title' 	=> __( 'General Options', 'bymattlee' ),
			'menu_title'	=> __( 'General', 'bymattlee' ),
			'parent_slug'	=> 'theme-options',
		));
		
		// Add Social Options section under the Theme Options tab
		acf_add_options_sub_page( array(
			'page_title' 	=> __( 'Social Options', 'bymattlee' ),
			'menu_title'	=> __( 'Social', 'bymattlee' ),
			'parent_slug'	=> 'theme-options',
		));

	}

?>