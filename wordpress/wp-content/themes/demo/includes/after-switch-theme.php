<?php
function demo_activate () {
    if(version_compare(get_bloginfo('version'), '4.8.1', '<')){
        wp_die(__('The minimum version for this theme is 4.8.1'));
    }

    $demoOptions = get_option('demo_options');

    if(!$demoOptions){
        $options = array(
            'Facebook' => '',
            'Twitter' => '',
            'GitHub' => ''
        );

        add_option('demo_options', $options);
    }
}