<?php

	/* ***** ----------------------------------------------- ***** **
	** ***** Cleanup
	** ***** ----------------------------------------------- ***** */

	// Clean up Wordpress head
	function head_cleanup() {

		remove_action( 'wp_head', 'rsd_link' ); // EditURI link.
		remove_action( 'wp_head', 'feed_links_extra', 3 ); // Category feed links.
		remove_action( 'wp_head', 'feed_links', 2 ); // Post and comment feed links.
		remove_action( 'wp_head', 'wlwmanifest_link' ); // Windows Live Writer.
		remove_action( 'wp_head', 'index_rel_link' ); // Index link.
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // Previous link.
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // Start link.
		remove_action( 'wp_head', 'rel_canonical', 10, 0 ); // Canonical.
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // Shortlink.
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Links for adjacent posts.
		remove_action( 'wp_head', 'wp_generator' ); // WP version.
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // Emoji detection script.
		remove_action( 'wp_print_styles', 'print_emoji_styles' ); // Emoji styles.

	}
	add_action( 'init', 'head_cleanup' );

	// Remove WP version from RSS
	function remove_rss_version() { 
		return '';
	}
	add_filter('the_generator', 'remove_rss_version');

	// Remove WP version from scripts
	function remove_wp_version_scripts( $src ) {
		if ( strpos( $src, 'ver=' ) ) {
			$src = remove_query_arg( 'ver', $src ); }
		return $src;
	}
	add_filter( 'style_loader_src', 'remove_wp_version_scripts', 9999 );
	add_filter( 'script_loader_src', 'remove_wp_version_scripts', 9999 );

	// Remove 'text/css' from our enqueued stylesheet
	function style_remove($tag) {
	    return preg_replace( '~\s+type=["\'][^"\']++["\']~', '', $tag );
	}
	add_filter('style_loader_tag', 'style_remove');

	// Remove the <div> surrounding the dynamic navigation to cleanup markup
	function my_wp_nav_menu_args( $args = '' ) {
	    $args[ 'container' ] = false;
	    return $args;
	}
	add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

	// Remove invalid rel attribute values in the category list
	function remove_category_rel_from_category_list( $thelist ) {
	    return str_replace( 'rel="category tag"', 'rel="tag"', $thelist );
	}
	add_filter( 'the_category', 'remove_category_rel_from_category_list' );

	// Remove thumbnail width and height dimensions that prevent fluid images
	function remove_thumbnail_dimensions( $html ) {
		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
		return $html;
	}
	add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
	add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

	// Remove wp_head() injected Recent Comment styles
	function remove_recent_comments_style(){
	    global $wp_widget_factory;

	    remove_action( 'wp_head', array(
	        $wp_widget_factory->widgets[ 'WP_Widget_Recent_Comments' ],
	        'recent_comments_style'
	    ));
	}
	add_action( 'widgets_init', 'remove_recent_comments_style' );

	// Removes the [...] after an excerpt
	function custom_excerpt_more($more) {
		global $post;
		return '...';
	}
	add_filter( 'excerpt_more', 'custom_excerpt_more' );

?>