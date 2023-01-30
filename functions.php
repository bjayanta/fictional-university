<?php

function university_files() {
    // JavaScripts
    wp_enqueue_script('university-main-js', get_theme_file_uri('/build/index.js'), ['jquery'], '1.0', true);

    // include google-font
    wp_enqueue_style('google-font-roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    // include font-awesome
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    // include stylesheet
    // wp_enqueue_style('university', get_stylesheet_uri());
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'university_files');

// After setup theme: Hook
function university_features() {
    // Menu
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
    register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');

    // Title tag
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

// Custom Post:
// function university_post_types() {
//     register_post_type('event', [
//         'public' => true,
//         'menu_icon' => 'dashicons-calendar',
//         'labels' => [
//             'name' => 'Events'
//         ],
//     ]);
// }

// add_action('init', 'university_post_types');