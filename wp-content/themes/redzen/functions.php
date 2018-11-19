<?php 
add_action( 'wp_enqueue_scripts', 'redzen_theme_css',20);
function redzen_theme_css() {
	wp_enqueue_style( 'redzen-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'redzen-red-style',get_stylesheet_directory_uri() . '/css/red.css');
  
}

