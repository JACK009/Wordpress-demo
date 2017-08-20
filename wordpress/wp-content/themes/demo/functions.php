<?php
//set up
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );

// includes
include 'includes/enqueue.php';
include 'includes/options-page.php';
include 'includes/after-setup-theme.php';
include 'includes/after-switch-theme.php';
include 'includes/admin-menu.php';
include 'includes/admin_init.php';
include 'includes/admin_enqueue.php';
include 'process/save_options.php';

//action & filter hooks
add_action( 'wp_enqueue_scripts', 'demo_enqueue');
add_action('after_setup_theme', 'demo_register_menu');
add_action('after_switch_theme', 'demo_activate');
add_action('admin_menu', 'demo_admin_menu');
add_action('admin_post_demo_save_options', 'demo_save_options');
//add_action('admin_init', 'demo_admin_init');


//shortcuts