<?php
function demo_admin_menu(){
    add_menu_page(
        'Theme options',
        'Theme options',
        'edit_theme_options',
        'demo_options',
        'demo_theme_options_page'
    );
}