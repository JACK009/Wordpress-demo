<?php

function demo_admin_init(){
    add_action('admin_enqueue_scripts', 'demo_admin_enqueue');
}