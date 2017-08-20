<?php
function demo_save_options(){
    if(!current_user_can('edit_theme_options')){
        wp_die(__('You are not allowed on this page'));
    }

    check_admin_referer('demo_options_verify');

    $options = get_option('demo_options');
    $options['Facebook'] = sanitize_text_field($_POST['facebook']);
    $options['Twitter'] = sanitize_text_field($_POST['twitter']);
    $options['GitHub'] = sanitize_text_field($_POST['github']);

    update_option('demo_options', $options);
    wp_redirect(admin_url('admin.php?page=demo_options&status=success'));
}