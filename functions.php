<?php
// Queue the main styles
function twenty_twenty_four_child_enqueue_styles() {
    // Parent theme stylesheet
    wp_enqueue_style('twenty-twenty-four-style', get_template_directory_uri() . '/style.css');
    
    // Child theme stylesheet
    wp_enqueue_style('twenty-twenty-four-child-style', get_stylesheet_uri(), array('twenty-twenty-four-style'));
}
add_action('wp_enqueue_scripts', 'twenty_twenty_four_child_enqueue_styles');

// Load child theme textdomain
function twenty_twenty_four_child_theme_setup() {
    load_child_theme_textdomain('twentytwentyfourchild', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'twenty_twenty_four_child_theme_setup');
