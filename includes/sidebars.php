<?php

  /* ***** ----------------------------------------------- ***** **
  ** ***** Sidebars
  ** ***** ----------------------------------------------- ***** */

  // Register and enable sidebars
  function bml_register_default_sidebar() {

    register_sidebar( array(
      'name' => __( 'Default Sidebar', 'bymattlee' ),
      'id' => 'default_sidebar',
      'description' => __( 'Widgets will appear on the default sidebar.', 'bymattlee' ),
      'before_widget' => '<div id="%1$s" class="%2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));

  }
  add_action( 'widgets_init', 'bml_register_default_sidebar' );

  // Widget - ByMattLee Widget
  class widget_bymattlee_widget extends WP_Widget {
    public function __construct() {
      parent::__construct(
        'widget_bymattlee_widget',
        __( 'ByMattLee Widget', 'bymattlee' ),
        array( 'description' => __( 'Displays the ByMattLee Widget.', 'bymattlee' ), )
      );
    }

    public function widget( $args, $instance ) {
      get_template_part( 'partials/sidebar-bymattlee_widget' );
    }
  }

  // Register all of the widgets above
  function register_widgets() {
    register_widget( 'widget_bymattlee_widget' );
  }
  //add_action( 'widgets_init', 'register_widgets' );

?>