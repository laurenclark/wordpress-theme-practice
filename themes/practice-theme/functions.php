<?php

// Setup
define('LC_DEV_MODE', true);

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/custom-nav-walker.php'));
include(get_theme_file_path('/includes/widgets.php'));

// Hooks
add_action('wp_enqueue_scripts', 'lc_enqueue');
add_filter('the_generator', 'remove_wordpress_version');
add_filter('style_loader_src', 'remove_version_from_style_js');
add_filter('script_loader_src', 'remove_version_from_style_js');
add_action('after_setup_theme', 'lc_setup_theme');
add_action('widgets_init', 'lc_widgets');


// Shortcodes
