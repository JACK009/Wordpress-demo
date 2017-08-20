<?php
function demo_enqueue() {
    $handle = 'demo_style';
    $styleUrl = get_template_directory_uri() . '/style.css';
    wp_register_style($handle, $styleUrl);
    wp_enqueue_style($handle);
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), false, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
}