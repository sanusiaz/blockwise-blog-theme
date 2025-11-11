<?php
/**
 * Theme Functions 
 * 
 * @package blockwise
*/

if ( ! defined('BLOCKWISE_DIR_PATH') ) {
    define('BLOCKWISE_DIR_PATH', untrailingslashit( get_template_directory() ));
}

if ( ! defined('BLOCKWISE_DIR_PATH_URI') ) {
    define('BLOCKWISE_DIR_PATH_URI', untrailingslashit( get_template_directory_uri() ));
}

if ( ! defined('BLOCKWISE_STYLESHEET_URI') ) {
    define('BLOCKWISE_STYLESHEET_URI', untrailingslashit( get_stylesheet_uri() ));
}

// require the autoloader once
require_once BLOCKWISE_DIR_PATH.'/app/autoloader.php';
// register autploader
register_blockwise_autoloader(BLOCKWISE_DIR_PATH);

function blockwise_enqueue_styles() {

    // register style
    wp_register_style(
        'stylesheet', 
        BLOCKWISE_STYLESHEET_URI, 
        [], 
        filemtime(BLOCKWISE_DIR_PATH.'/style.css')
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
        BLOCKWISE_DIR_PATH_URI.'/assets/js/app.js',
        ['jquery'],
        filemtime(BLOCKWISE_DIR_PATH.'/assets/js/app.js'),
        true
    );

    // register blockwise app main js 
    wp_enqueue_script('blockwise-app');
}

add_action( 'wp_enqueue_scripts', 'blockwise_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'blockwise_enqueue_scripts' );

?>