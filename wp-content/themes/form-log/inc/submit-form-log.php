<?php

function save_form_log() {
// Retrieve and sanitize form data
parse_str($_POST['formData'], $form_data);

// Get and sanitize ACF field values
$name = sanitize_text_field($form_data['name']);
$phone = sanitize_text_field($form_data['phone']);
$email = sanitize_email($form_data['email']);
$message = sanitize_textarea_field($form_data['message']);

// Create a new "Form Log" post
$post_id = wp_insert_post(array(
    'post_title' => $name,
    'post_type' => 'form_log',
    'post_status' => 'publish'
));

// Update ACF fields for the new post
update_field('name', $name, $post_id);
update_field('phone', $phone, $post_id);
update_field('email', $email, $post_id);
update_field('message', $message, $post_id);

// Send a response back to the JavaScript
echo 'Form submitted successfully!';
wp_die();
}

add_action('wp_ajax_save_form_log', 'save_form_log');
add_action('wp_ajax_nopriv_save_form_log', 'save_form_log'); // For non-logged-in users

