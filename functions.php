<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Load All Functions
	** ***** ----------------------------------------------- ***** */

	// Load custom post types
	// require_once( get_template_directory() . '/includes/cpt-books.php' );

	// Clean up Wordpress from unnecessary bloat
	require_once( get_template_directory() . '/includes/cleanup.php' );

	// Set up all theme features
	require_once( get_template_directory() . '/includes/theme_setup.php' );

	// Register menu and customize menu output
	require_once( get_template_directory() . '/includes/menus.php' );

	// Enqueue styles and scripts
	require_once( get_template_directory() . '/includes/enqueue.php' );

	// Register sidebars and widgets
	require_once( get_template_directory() . '/includes/sidebars.php' );

	// Enable Advanced Custom Fields theme option pages
	require_once( get_template_directory() . '/includes/acf.php' );

	// Optimize admin display options
	require_once( get_template_directory() . '/includes/admin_display.php' );

	// Utility classes used by theme
	require_once( get_template_directory() . '/includes/utilities.php' );

?>