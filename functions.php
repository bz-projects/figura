<?php

/**
 * Enque Stylesheet
 */

if( !function_exists('figura_enqueue_style') ) {
	function figura_enqueue_style() {
		wp_enqueue_style( 'figura-style', get_stylesheet_uri() ); 
	}
	add_action( 'wp_enqueue_scripts', 'figura_enqueue_style' );
}