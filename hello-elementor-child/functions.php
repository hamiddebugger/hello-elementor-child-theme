<?php
/**
 * Enqueue script and styles for child theme
 */
function hello_child_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_styles', 10010 );