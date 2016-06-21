<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Enqueue styles and scripts
	** ***** ----------------------------------------------- ***** */

	function enqueue_scripts() {

		// Styles
		wp_enqueue_style( 'style_main', get_template_directory_uri() . '/assets/dist/css/main.min.css' );

		// Replace jQuery
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.0.0.min.js', '', '', true );

		// Scripts
		wp_enqueue_script( 'script_main', get_template_directory_uri() . '/assets/dist/js/main.min.js', '', '', true );

	}
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

?>