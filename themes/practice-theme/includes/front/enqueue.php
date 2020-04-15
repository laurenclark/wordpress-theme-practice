<?php

function lc_enqueue(){
	$uri            = get_theme_file_uri();

	//  Register first, and then enequeue! 
	wp_register_style( 'lc_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i' );
	wp_register_style(  'lc_bootstrap', $uri . '/assets/css/bootstrap.css' );
	wp_register_style( 'lc_style', $uri . '/assets/css/style.css' );
	wp_register_style( 'lc_dark', $uri . '/assets/css/dark.css' );
	wp_register_style( 'lc_font_icons', $uri . '/assets/css/font-icons.css' );
	wp_register_style( 'lc_animate', $uri . '/assets/css/animate.css' );
	wp_register_style( 'lc_magnific_popup', $uri . '/assets/css/magnific-popup.css' );
	wp_register_style( 'lc_responsive', $uri . '/assets/css/responsive.css' );
	wp_register_style( 'lc_custom', $uri . '/assets/css/custom.css' );

	wp_register_script( 'lc_plugins', $uri . '/assets/js/plugins.js', [], true, true);
	wp_register_script( 'lc_functions', $uri . '/assets/js/functions.js', [], true, true);

	wp_enqueue_style( 'lc_google_fonts' );
	wp_enqueue_style( 'lc_bootstrap' );
	wp_enqueue_style( 'lc_style' );
	wp_enqueue_style( 'lc_dark' );
	wp_enqueue_style( 'lc_font_icons' );
	wp_enqueue_style( 'lc_animate' );
	wp_enqueue_style( 'lc_magnific_popup' );
	wp_enqueue_style( 'lc_responsive' );
	wp_enqueue_style( 'lc_custom' );

	// Always use WP's version of jQuery - it's already registered.
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'lc_plugins' );
	wp_enqueue_script( 'lc_functions' );
}


