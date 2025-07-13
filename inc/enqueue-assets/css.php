<?php 
function load_stylesheets() {
    $theme_dir = get_template_directory_uri();
    $theme_path = get_template_directory();

    wp_enqueue_style('stylesheet-bootstrap', $theme_dir . '/assets/stylesheets/bootstrap.min.css', array(), filemtime($theme_path . '/assets/stylesheets/bootstrap.min.css'), 'all');
    wp_enqueue_style('stylesheet-font-awesome', $theme_dir . '/assets/stylesheets/font-awesome.min.css', array(), filemtime($theme_path . '/assets/stylesheets/font-awesome.min.css'), 'all');
    wp_enqueue_style('stylesheet-main', $theme_dir . '/assets/stylesheets/main.css', array('stylesheet-bootstrap'), filemtime($theme_path . '/assets/stylesheets/main.css'), 'all');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

?>