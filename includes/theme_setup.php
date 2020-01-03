<?php

  /* ***** ----------------------------------------------- ***** **
  ** ***** Theme Setup
  ** ***** ----------------------------------------------- ***** */

  // Set up the theme with the following...
  function bml_theme_setup() {

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
    if ( !isset( $content_width ) ) $content_width = 800;

    // Remove admin bar when logged in
    // show_admin_bar( false );

    // Enable featured post and thumbnail sizes
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'admin_thumb', 100, 100, true );
    add_image_size( 'size_200', 200 );
    add_image_size( 'size_400', 400 );
    add_image_size( 'size_600', 600 );
    add_image_size( 'size_800', 800 );
    add_image_size( 'size_1000', 1000 );
    add_image_size( 'size_1200', 1200 );
    add_image_size( 'size_1400', 1400 );
    add_image_size( 'size_1600', 1600 );
    add_image_size( 'size_1800', 1800 );

  }
  add_action( 'after_setup_theme', 'bml_theme_setup' );

  // On login page, update logo URL to site URL
  function bml_update_login_logo_url() {
    return home_url();
  }
  add_filter( 'login_headerurl', 'bml_update_login_logo_url' );

  // On login page, update logo title to site title
  function bml_update_login_logo_title() {
    return get_bloginfo();
  }
  add_filter( 'login_headertitle', 'bml_update_login_logo_title' );

  // Add page slug to body class, love this - Credit: Starkers Wordpress Theme
  // Prefix all page classes with p-
  function bml_add_slug_to_body_class( $classes ) {

    global $post;

    if ( is_home() ) {

      // Replace blog class with news and add 'p-' prefix
      $blog_key = array_search( 'blog', $classes );
      if ( $blog_key > -1 ) {
        $classes[ $blog_key ] = 'p-news';
      }

      // Add 'p-' prefix to home class
      $home_key = array_search( 'home', $classes );
      if ( $home_key > -1 ) {
        $classes[ $home_key ] = 'p-' . $classes[ $home_key ];
      }

    } elseif ( is_front_page() ) {

      // Add 'p-' prefix to home class
      $home_key = array_search( 'home', $classes );
      if ( $home_key > -1 ) {
        $classes[ $home_key ] = 'p-' . $classes[ $home_key ];
      }

    } elseif ( is_404() ) {

      // Add 'p-' prefix to error 404 class
      $error_key = array_search( 'error404', $classes );
      if ( $error_key > -1 ) {
        $classes[ $error_key ] = 'p-' . $classes[ $error_key ];
      }

    } elseif ( is_page() || is_singular() ) {
      $classes[] = 'p-' . sanitize_html_class( $post->post_name );
    }

    return $classes;
  }
  add_filter( 'body_class', 'bml_add_slug_to_body_class' );

  // Set maximum number of words on an excerpt
  function bml_custom_excerpt_length( $length ) {
    return 20;
  }
  add_filter( 'excerpt_length', 'bml_custom_excerpt_length', 999 );

?>