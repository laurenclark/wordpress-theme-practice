<?php

// Setup
define('LC_DEV_MODE', true);

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));

// Hooks
add_action('wp_enqueue_scripts', 'lc_enqueue');
add_filter('the_generator', 'remove_wordpress_version');
add_filter('style_loader_src', 'remove_version_from_style_js');
add_filter('script_loader_src', 'remove_version_from_style_js');

function remove_wordpress_version()
{
    return '';
}

function remove_version_from_style_js($src)
{
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}


// Shortcodes
