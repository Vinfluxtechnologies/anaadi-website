<?php
/* acf options page with multiple menu */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(
    array(
      'page_title' => 'Options Settings',
      'menu_title' => 'Options',
      'menu_slug' => 'acf-options',
      'icon_url' => 'dashicons-admin-tools',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );

  acf_add_options_sub_page(
    array(
      'page_title' => 'Header Settings',
      'menu_title' => 'Header',
      'parent_slug' => 'acf-options',
    )
  );

  acf_add_options_sub_page(
    array(
      'page_title' => 'Footer Settings',
      'menu_title' => 'Footer',
      'parent_slug' => 'acf-options',
    )
  );
}
/* !acf options page with multiple menu */
?>