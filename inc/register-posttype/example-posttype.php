<?php
/** use different file to register new posttype. use this sample code and edit/replace according to your needs
* register_post_type( $post_type:string, $args:array|string );
**/
/*
function register_test_posttype(){
  $label_args = array(
      'name' => 'Tests',
      'singular_name' => 'Test',
      'add_new' => 'Add New Test',
      'add_new_item' => 'Add New Test',
      'edit_item' => 'Edit Test',
      'new_item' => 'New Test',
      'view_item' => 'View Test',
      'View_items' => 'View Tests',
      'search_items' => 'Search Tests',
      'not_found' => 'No Tests found',
    );
  $supports = array( 'title', 'editor', 'author', 'excerpt', 'thumbnail', 'category', 'custom_fields');
  $args = array(
    'labels' => $label_args,
    'public' => true,
    'public' => true,
    'hierarchical' => false,
    'show_ui' => true,
    'publicly_queryable' => true,
    'has_archive' => true,
    'query_var' =>true,
    'supports' => $supports,
    'rewrite' => array( 'slug' => 'tests')
  );

  register_post_type( 'tests', $args );
  }

  add_action( 'init', 'register_test_posttype' );
*/

?>