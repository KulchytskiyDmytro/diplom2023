<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


// connect css
add_action( 'wp_enqueue_scripts', 'estore_scripts' );
function estore_scripts() {
	wp_enqueue_style( 'estore-style', get_stylesheet_uri() );
	

}


// connect js
add_action( 'wp_enqueue_scripts', 'estore_styles' );
function estore_styles() {
	
	wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'estore-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	

	// connect our js scripts that are in assets/js
	wp_enqueue_script('bootstrap-script' ,  'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script('define-device' , get_template_directory_uri() . '/assets/js/define-device.js', array(), null, true);
	wp_enqueue_script('script' , get_template_directory_uri() . '/assets/js/script.js', array(), null, true);




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
