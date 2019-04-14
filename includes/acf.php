<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** ACF
	** ***** ----------------------------------------------- ***** */

	if ( function_exists( 'acf_add_options_page' ) ) {

		// Add Global Options tab to WP Admin
		acf_add_options_page( array(
			'menu_title'	=> __( 'Global Options', 'famehouse' ),
			'page_title' 	=> __( 'Global Options', 'famehouse' ),
			'menu_slug' 	=> 'global-options',
			'position'	 	=> '31',
			'capability'	=> 'edit_posts',
			'icon_url'		=> 'dashicons-admin-generic',
		));
		
		// Add Social Options section under the Global Options tab
		acf_add_options_sub_page( array(
			'page_title' 	=> __( 'Social Options', 'bymattlee' ),
			'menu_title'	=> __( 'Social', 'bymattlee' ),
			'parent_slug'	=> 'global-options',
		));

		// Add Code Options section under the Global Options tab
		acf_add_options_sub_page( array(
			'page_title' 	=> __( 'Code Options', 'bymattlee' ),
			'menu_title'	=> __( 'Code', 'bymattlee' ),
			'parent_slug'	=> 'global-options',
		));

	}

?>