<?php

  /* ***** ----------------------------------------------- ***** **
  ** ***** Enqueue styles and scripts
  ** ***** ----------------------------------------------- ***** */

  // Enqueue theme stylesheet
  function bml_enqueue_styles() {
    $styles_uri = get_stylesheet_directory_uri() . '/assets/dist/css/main.min.css';
    $styles_path = get_stylesheet_directory() . '/assets/dist/css/main.min.css';

    wp_enqueue_style( 'style_main', $styles_uri, false, filemtime( $styles_path ) );
  }
  add_action( 'wp_enqueue_scripts', 'bml_enqueue_styles' );

  // Enqueue theme scripts
  function bml_enqueue_scripts() {
    $scripts_uri = get_stylesheet_directory_uri() . '/assets/dist/js/main.min.js';
    $scripts_path = get_stylesheet_directory() . '/assets/dist/js/main.min.js';

    // Replace jQuery
    wp_deregister_script( 'jquery' );
    // wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js', '', null, true );

    // Scripts
    wp_enqueue_script( 'script_vendors', $vendors_uri, false, filemtime( $vendors_path ), true );
    wp_enqueue_script( 'script_main', $scripts_uri, false, filemtime( $scripts_path ), true );
  }
  add_action( 'wp_enqueue_scripts', 'bml_enqueue_scripts' );

  // Enqueue theme stylesheet for login page
  function bml_custom_login_style() {
    $styles_uri = get_stylesheet_directory_uri() . '/assets/dist/css/main.min.css';
    $styles_path = get_stylesheet_directory() . '/assets/dist/css/main.min.css';

    wp_enqueue_style( 'custom_login_style', $styles_uri, false, filemtime( $styles_path ) );
  }
  add_action( 'login_enqueue_scripts', 'bml_custom_login_style' );

?>