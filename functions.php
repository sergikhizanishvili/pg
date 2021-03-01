<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

wp_enqueue_script('jquery');
wp_enqueue_style( 'play-it-green-bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap.min.css');
wp_enqueue_script( 'play-it-green-bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap.bundle.min.js');
wp_enqueue_script( 'play-it-green-scripts', get_stylesheet_directory_uri() . '/assets/scripts.js', array(), false, true);


