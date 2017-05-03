<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Enqueue styles and scripts
	** ***** ----------------------------------------------- ***** */

	function enqueue_styles() {
		wp_enqueue_style( 'style_main', get_template_directory_uri() . '/assets/dist/css/main.min.css' );
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

	function enqueue_scripts() {

		// Replace jQuery
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.2.1.min.js', '', '', true );

		// Scripts
		wp_enqueue_script( 'script_vendors', get_template_directory_uri() . '/assets/dist/js/vendors.min.js', '', '', true );
		wp_enqueue_script( 'script_main', get_template_directory_uri() . '/assets/dist/js/main.min.js', '', '', true );

	}
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

	function custom_login_style() {
		wp_enqueue_style( 'custom_login_style', get_template_directory_uri() . '/assets/dist/css/main.min.css' );
	}
	add_action( 'login_enqueue_scripts', 'custom_login_style' );

?>