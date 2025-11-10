<?php
/**
 * Theme Functions 
 * 
 * @package blockwise
*/

function blockwise_enqueue_styles() {

    // register style
    wp_register_style(
        'stylesheet', 
        get_stylesheet_uri(), 
        [], 
        filemtime(get_template_directory().'/style.css')
    );

    // enqueue Style
    wp_enqueue_style('stylesheet');
}


function blockwise_enqueue_scripts()
{   
    // Jquery scripts
    wp_enqueue_script('jquery');

    // register main theme js
    wp_register_script(
        'blockwise-app',
        get_template_directory_uri().'/assets/js/app.js',
        ['jquery'],
        filemtime(get_template_directory().'/assets/js/app.js'),
        true
    );

    // register blockwise app main js 
    wp_enqueue_script('blockwise-app');
}

add_action( 'wp_enqueue_scripts', 'blockwise_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'blockwise_enqueue_scripts' );

?>