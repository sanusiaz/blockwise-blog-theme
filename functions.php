<?php
/**
 * Theme Functions 
 * 
 * @package blockwise
*/

function blockwise_enqueue_styles() {
    wp_enqueue_style(
        'stylesheet', 
        get_stylesheet_uri(), 
        [], 
        filemtime(get_template_directory().'/style.css')
    );
}

add_action( 'wp_enqueue_scripts', 'blockwise_enqueue_styles' );

?>