<?php

  /* ***** ----------------------------------------------- ***** **
  ** ***** Cleanup
  ** ***** ----------------------------------------------- ***** */

  // Clean up Wordpress head
  function bml_head_cleanup() {

    remove_action( 'wp_head', 'rsd_link' ); // EditURI link
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 ); // Remove REST API link
    remove_action( 'wp_head', 'feed_links_extra', 3 ); // Category feed links
    remove_action( 'wp_head', 'feed_links', 2 ); // Post and comment feed links
    remove_action( 'wp_head', 'wlwmanifest_link' ); // Windows Live Writer
    remove_action( 'wp_head', 'index_rel_link' ); // Index link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // Previous link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // Start link
    remove_action( 'wp_head', 'rel_canonical', 10, 0 ); // Canonical
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // Shortlink
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Links for adjacent posts
    remove_action( 'wp_head', 'wp_generator' ); // WP version
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // Emoji detection script
    remove_action( 'wp_print_styles', 'print_emoji_styles' ); // Emoji styles
    add_filter( 'emoji_svg_url', '__return_false' ); // Remove Emoji DNS prefetch

  }
  add_action( 'init', 'bml_head_cleanup' );

  // Remove WP version from RSS
  function bml_remove_rss_version() { 
    return '';
  }
  add_filter( 'the_generator', 'bml_remove_rss_version' );

  // Remove 'text/css' from our enqueued stylesheet
  function bml_style_remove( $tag ) {
    return preg_replace( '~\s+type=["\'][^"\']++["\']~', '', $tag );
  }
  add_filter( 'style_loader_tag', 'bml_style_remove' );

  // Remove the <div> surrounding the dynamic navigation to cleanup markup
  function bml_my_wp_nav_menu_args( $args = '' ) {
    $args[ 'container' ] = false;
    return $args;
  }
  add_filter( 'wp_nav_menu_args', 'bml_my_wp_nav_menu_args' );

  // Remove invalid rel attribute values in the category list
  function bml_remove_category_rel_from_category_list( $thelist ) {
    return str_replace( 'rel="category tag"', 'rel="tag"', $thelist );
  }
  add_filter( 'the_category', 'bml_remove_category_rel_from_category_list' );

  // Remove thumbnail width and height dimensions that prevent fluid images
  function bml_remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
  }
  add_filter( 'post_thumbnail_html', 'bml_remove_thumbnail_dimensions', 10 );
  add_filter( 'image_send_to_editor', 'bml_remove_thumbnail_dimensions', 10 );

  // Remove wp_head() injected Recent Comment styles
  function bml_remove_recent_comments_style(){
    global $wp_widget_factory;

    remove_action( 'wp_head', array(
      $wp_widget_factory->widgets[ 'WP_Widget_Recent_Comments' ],
      'recent_comments_style'
    ));
  }
  add_action( 'widgets_init', 'bml_remove_recent_comments_style' );

  // Removes the [...] after an excerpt
  function bml_custom_excerpt_more( $more ) {
    global $post;
    return '...';
  }
  add_filter( 'excerpt_more', 'bml_custom_excerpt_more' );

?>