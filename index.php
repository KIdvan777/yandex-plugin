<?php
/*
 * Plugin Name: yauza
 * Description: Wordpress Plugin that allows users to add Yandex metric
 * Version: 1.0
 * author: Hask777
 * Author URI: haskellisp@gmail.com
 * Text Domain: yauza
 */

if( !function_exists('add_action')){
    die('Hi there ! I am just a plugin');
}

// Setup

// Includes
include('inc/activate.php');
// include('inc/ya_api.php');
include('inc/init.php');


// Hooks
register_activation_hook( __FILE__ , 'yauza_activate_plugin');
add_action('init', 'yauza_init');


// Shortcodes
