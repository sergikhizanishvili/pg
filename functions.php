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

function register_session() {
	if(!session_id()) {
		session_start();
	}
}
add_action('init', 'register_session');

function sign_up_page_redirect() {
	if (is_page('sign-up')) {
		
		/* Redirect to forest garden if user is signed in */
		if (is_user_logged_in()) {
			wp_redirect( '/forest-garden' );
			exit;
		}
		
		/* Check step */
		if (isset($_GET['step'])) {
			
			include('signup-shortcode.php');
			
			if ($_GET['step'] == 1) {
				add_shortcode( 'sign_up_shortcode', 'sign_up_shortcode_1');
			} elseif ($_GET['step'] == 2) {
				
				if (isset($_SESSION['sign_up_package']) && in_array($_SESSION['sign_up_package']['package'], $packages)) {
					
					add_shortcode( 'sign_up_shortcode', 'sign_up_shortcode_2_' . $_SESSION['sign_up_package']['package']);
					
				} else {
					unset($_SESSION['sign_up_package']);
					wp_redirect( '/sign-up?step=1' );
					exit;
				}
				
			} elseif ($_GET['step'] == 3) {
				
			} elseif ($_GET['step'] == 4) {
				
			}
			
			
		} else {
			unset($_SESSION['sign_up_package']);
			wp_redirect( '/sign-up?step=1' );
			exit;
		}
		
	}
}
add_action( 'template_redirect', 'sign_up_page_redirect' );




