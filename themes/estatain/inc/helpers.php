<?php
// Estatain theme helper functions can be added here. 

// Add meta box for hide/show page title
add_action('add_meta_boxes', function() {
    add_meta_box(
        'estatain_hide_title',
        __('Hide Page Title', 'estatain'),
        function($post) {
            $value = get_post_meta($post->ID, '_estatain_hide_title', true);
            echo '<label><input type="checkbox" name="estatain_hide_title" value="1"' . checked($value, '1', false) . '> ' . __('Hide the page title on the front end', 'estatain') . '</label>';
        },
        'page',
        'side'
    );
});

// Save the meta box value
add_action('save_post_page', function($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (isset($_POST['estatain_hide_title'])) {
        update_post_meta($post_id, '_estatain_hide_title', '1');
    } else {
        delete_post_meta($post_id, '_estatain_hide_title');
    }
});

// Helper function to check if title should be hidden
function estatain_should_hide_title($post_id = null) {
    $post_id = $post_id ?: get_the_ID();
    return get_post_meta($post_id, '_estatain_hide_title', true) === '1';
} 