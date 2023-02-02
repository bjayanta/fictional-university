<?php

function university_post_types() {
    register_post_type('event', [
		'show_in_rest' => true,
		'supports' => ['title', 'editor', 'excerpt'],
		'rewrite' => [
			'slug' => 'events'
		],
		'has_archive' => true,
        'public' => true,
        'labels' => [
            'name' => 'Events',
            'all_items' => 'All Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'singular_name' => 'Event'
        ],
        'menu_icon' => 'dashicons-calendar',
    ]);
}

add_action('init', 'university_post_types');