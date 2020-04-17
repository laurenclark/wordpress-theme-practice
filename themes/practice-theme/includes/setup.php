<?php

function lc_setup_theme()
{
    register_nav_menu('primary', __('Primary Menu', 'practice_theme'));
}

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
