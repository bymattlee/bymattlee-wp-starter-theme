<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Theme Setup
	** ***** ----------------------------------------------- ***** */

	// Set up the theme with the following...
	function theme_setup() {

		// Localisation Support
		load_theme_textdomain( 'bymattlee', get_template_directory() . '/languages' );

		// Add RSS links to head
		add_theme_support( 'automatic-feed-links' );

		// Allow WordPress to manage the document title
		add_theme_support( 'title-tag' );

		// Enable post formats
		add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ] );

		// Enable HTML5 markup support
		add_theme_support( 'html5', [ 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ] );

		// Set Image Link URL default to none
		update_option( 'image_default_link_type', 'none' );

		// Set content width
		if ( !isset( $content_width ) ) $content_width = 580;

		// Remove admin bar when logged in
		// show_admin_bar( false );

		// Enable featured post and thumbnail sizes
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'admin_thumb', 100, 100, true );

	}
	add_action( 'after_setup_theme' , 'theme_setup' );

	// On login page, update logo URL to site URL
	function update_login_logo_url() {
		return home_url();
	}
	add_filter( 'login_headerurl', 'update_login_logo_url' );

	// On login page, update logo title to site title
	function update_login_logo_title() {
		return get_bloginfo();
	}
	add_filter( 'login_headertitle', 'update_login_logo_title' );

	// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
	function add_slug_to_body_class( $classes ) {
	    global $post;
	    if ( is_home() ) {
	        $key = array_search( 'blog', $classes );
	        if ( $key > -1 ) {
	            unset( $classes[$key] );
	        }
	    } elseif ( is_page() ) {
	        $classes[] = sanitize_html_class( $post->post_name );
	    } elseif (is_singular()) {
	        $classes[] = sanitize_html_class( $post->post_name );
	    }

	    return $classes;
	}
	add_filter( 'body_class', 'add_slug_to_body_class' );

	// Set maximum number of words on an excerpt
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>