<?php
/**
 * Form log fCustom Post Type
 *
 * @package Form_log
 */

// Register Custom Post Type

function custom_form_log_post_type() {
    $labels = array(
        'name' => 'Form Logs',
        'singular_name' => 'Form Log',
        'menu_name' => 'Form Logs',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Form Log',
        'edit_item' => 'Edit Form Log',
        'new_item' => 'New Form Log',
        'view_item' => 'View Form Log',
        'view_items' => 'View Form Logs',
        'search_items' => 'Search Form Logs',
        'not_found' => 'No Form Logs found',
        'not_found_in_trash' => 'No Form Logs found in Trash',
        'all_items' => 'All Form Logs',
        'archives' => 'Form Log Archives',
        'attributes' => 'Form Log Attributes',
        'insert_into_item' => 'Insert into Form Log',
        'uploaded_to_this_item' => 'Uploaded to this Form Log',
        'featured_image' => 'Featured Image',
        'set_featured_image' => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image' => 'Use as featured image',
        'filter_items_list' => 'Filter Form Logs list',
        'items_list_navigation' => 'Form Logs list navigation',
        'items_list' => 'Form Logs list',
    );
    $args = array(
        'label' => 'Form Log',
        'description' => 'A custom post type for form logs',
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-format-status', 
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'form-log'),
        'menu_position' => 5,
        'show_in_rest' => true,
    );
    register_post_type('form_log', $args);
}
add_action('init', 'custom_form_log_post_type', 0);
