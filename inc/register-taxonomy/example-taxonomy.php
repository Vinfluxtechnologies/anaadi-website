<?php
/** use different file to register new taxonomy if the taxonomy belongs to different posttype . use this sample code and replace/edit to your needs
* register_taxonomy( $taxonomy:string, $object_type:array|string, $args:array|string );
**/
/*
$label_args = array(
  'name' => 'Taxonomy',
  'singular_name' => 'Taxonomy',
  'all_items' => 'All Taxonomies',
  'edit_item' => 'Edit Taxonomy',
  'view_item' => 'View Taxonomy',
  'update_item' => 'Update Taxonomy',
  'add_new_item' => 'Add New Taxonomy',
  'new_item_name' => 'New Taxonomy Name',
  'back_to_items' => '← Back to all Taxonomies'
);

$taxonomy_args = array(
  'labels' => $label_args,
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'taxonomies' )
);
register_taxonomy( 'taxonomies', 'tests', $taxonomy_args  );
*/
?>