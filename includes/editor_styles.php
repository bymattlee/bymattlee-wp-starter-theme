<?php

  /* ***** ----------------------------------------------- ***** **
  ** ***** Editor Styles
  ** ***** ----------------------------------------------- ***** */

  // Include custom editor stylesheet
  function bml_custom_editor_stylesheet() {
    add_editor_style( get_stylesheet_directory_uri() . '/assets/dist/css/editorStyles.min.css' );
  }
  add_action( 'admin_init', 'bml_custom_editor_stylesheet' );

  // Create custom style dropdown menu 
  function bml_add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
  }
  add_filter( 'mce_buttons_2', 'bml_add_style_select_buttons' );

  // Add custom styles to the WordPress editor
  function bml_custom_editor_styles( $init_array ) {  
   
    // Custom styles
    $style_formats = array(
      array(
        'title' => 'CTA Button',  
        'block' => 'a',  
        'classes' => 'o-button',
        'wrapper' => true,
      ),
    );  

    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array[ 'style_formats' ] = json_encode( $style_formats );  
    
    return $init_array;  

  } 
  // add_filter( 'tiny_mce_before_init', 'bml_custom_editor_styles' );

?>
