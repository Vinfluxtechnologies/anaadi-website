<?php
/**
 * Register a custom post type for form submissions.
 *
 * This post type is used to store submissions from a contact form.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function register_form_submission_post_type() {
    $labels = array(
        'name'                  => _x('Form Submissions', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Form Submission', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Form Submissions', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Form Submission', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Submission', 'textdomain'),
        'new_item'              => __('New Submission', 'textdomain'),
        'edit_item'             => __('Edit Submission', 'textdomain'),
        'view_item'             => __('View Submission', 'textdomain'),
        'all_items'             => __('All Submissions', 'textdomain'),
        'search_items'          => __('Search Submissions', 'textdomain'),
        'not_found'             => __('No submissions found.', 'textdomain'),
        'not_found_in_trash'    => __('No submissions found in Trash.', 'textdomain'),
        'archives'              => __('Submission Archives', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false, // Not publicly accessible
        'publicly_queryable' => false,
        'show_ui'            => true,  // Show in admin UI
        'show_in_menu'       => true,
        'query_var'          => false,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'exclude_from_search' => true,
        'show_in_rest'       => true, // Enable REST API support
        'hierarchical'       => false,
        'menu_position'      => 25,
        'menu_icon'          => 'dashicons-feedback',
        'supports'           => array('title', 'custom-fields'),
    );

    register_post_type('form-submission', $args);
}
add_action('init', 'register_form_submission_post_type');
