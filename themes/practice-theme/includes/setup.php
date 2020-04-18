<?php

function lc_setup_theme()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', __('Primary Menu', 'practice_theme'));
}


// Remove the version from the generator in the head for security
function remove_wordpress_version()
{
    return '';
}

// Strip the version number from styles and scripts
function remove_version_from_style_js($src)
{
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
