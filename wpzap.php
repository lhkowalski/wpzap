<?php

/*
Plugin Name: WP Zap
Plugin URI: http://oato.com.br/wpzap
Description: This plugins inserts a button to chat on WhatsApp
Author: Luiz Kowalski
Version: 0.1
Author URI: http://lhkowalski.com/
*/

// prevent from direct access
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'WPZAP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
//require(WPZAP_PLUGIN_DIR . '/includes/functions.php');
require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-plugin.php');


$WPZap_Plugin = WPZap_Plugin::getInstance();