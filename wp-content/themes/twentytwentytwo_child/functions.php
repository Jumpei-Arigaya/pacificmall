<?php
function theme_enqueue_scripts()
{
    $uri = esc_url(get_template_directory_uri());
    wp_enqueue_style('parent-style', esc_url(get_template_directory_uri()) . '/style.css', array());
    wp_enqueue_style('child-style', esc_url(get_stylesheet_directory_uri()) . '/style.css', array());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
