<?php

function university_post_types() {
    register_post_type('event', [
		'rewrite' => [
			'slug' => 'events'
		],
		'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => [
            'name' => 'Events',
            'all_items' => 'All Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'singular_name' => 'Event'
        ],
    ]);
}

add_action('init', 'university_post_types');