<?php

  /* ***** ----------------------------------------------- ***** **
  ** ***** Admin Display
  ** ***** ----------------------------------------------- ***** */

  // Add thumbnails column to admin post view
  function bml_posts_columns( $columns ){
    $columns[ 'my_post_thumbs' ] = __( 'Image', 'bymattlee' );
    return $columns;
  }
  add_filter( 'manage_posts_columns', 'bml_posts_columns', 5 );

  // Add thumbnails for each post to admin post view
  function bml_posts_custom_columns( $column_name, $id ){
    if ( $column_name === 'my_post_thumbs' ){
      echo the_post_thumbnail( 'admin_thumb' );
    }
  }
  add_action( 'manage_posts_custom_column', 'bml_posts_custom_columns', 5, 2 );

  // Remove widgets from dashboard
  function bml_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
  }
  add_action( 'wp_dashboard_setup', 'bml_remove_dashboard_widgets' );

  // Remove comment support from posts and pages
  function bml_remove_comments_support() {
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
  }
  add_action( 'init', 'bml_remove_comments_support' );

  // Remove comments tab from the admin
  function bml_remove_comments_menu_page() {
    remove_menu_page( 'edit-comments.php' );
  }
  add_action( 'admin_menu', 'bml_remove_comments_menu_page' );

  // Remove comments meta boxes on post and page edit screens
  function bml_remove_comment_meta_boxes() {
    remove_meta_box( 'commentsdiv', 'page', 'normal' );
    remove_meta_box( 'commentsdiv', 'post', 'normal' );
    remove_meta_box( 'commentstatusdiv', 'post', 'normal' );
  }
  add_action( 'do_meta_boxes', 'bml_remove_comment_meta_boxes' );

  // Remove comments activity on dashboard
  function bml_remove_dashboard_comment_activity() {
    echo '<style type="text/css">li.comment-count, li.comment-mod-count, #latest-comments, #wp-admin-bar-comments { display:none; }</style>';
  }
  add_action( 'admin_head', 'bml_remove_dashboard_comment_activity' );

  // Remove comments from admin bar
  function bml_remove_comments_from_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
  }
  add_action( 'wp_before_admin_bar_render', 'bml_remove_comments_from_admin_bar' );

  // Rename Posts label to News
  function bml_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types[ 'post' ]->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add New';
    $labels->add_new_item = 'Add New News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
    $labels->all_items = 'All News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
  }
  add_action( 'init', 'bml_change_post_object' );

?>