<?php

/*
Plugin Name: WPZap
Plugin URI: http://wpzap.com.br/
Description: Crie botões e formulários de contato para ajudar o seu visitante a te contatar pelo WhatsApp.
Author: Luiz Kowalski
Version: 1.2
Author URI: http://lhkowalski.com/
*/

// prevent from direct access
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('WPZAP_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
define('WPZAP_PLUGIN_OPTIONS', 'wpzap_options');
define('WPZAP_PLUGIN_PAGE_META', 'wpzap_options_page_meta');

require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-util.php');
require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-general.php');
require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-plugin.php');
require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-optionpage.php');
require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-page-metabox.php');
require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-shortcode.php');
require(WPZAP_PLUGIN_DIR . '/includes/shortcode/class-wpzap-shortcode-botao.php');
require(WPZAP_PLUGIN_DIR . '/includes/shortcode/class-wpzap-shortcode-link.php');
require(WPZAP_PLUGIN_DIR . '/includes/shortcode/class-wpzap-shortcode-numero.php');
require(WPZAP_PLUGIN_DIR . '/includes/shortcode/class-wpzap-shortcode-formulario.php');
require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-widget.php');
require(WPZAP_PLUGIN_DIR . '/includes/widget/class-wpzap-widget-numero.php');
require(WPZAP_PLUGIN_DIR . '/includes/widget/class-wpzap-widget-botao.php');
require(WPZAP_PLUGIN_DIR . '/includes/widget/class-wpzap-widget-formulario.php');
require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-floatingbutton.php');
require(WPZAP_PLUGIN_DIR . '/includes/class-wpzap-redirect.php');
require(WPZAP_PLUGIN_DIR . '/includes/options/class-wpzap-options-floatingbutton.php');
require(WPZAP_PLUGIN_DIR . '/includes/options/class-wpzap-options-general.php');

// RUN!
$WPZap_Plugin = WPZap_Plugin::getInstance();

// include support to auto-update!
require(WPZAP_PLUGIN_DIR.'/plugin-update-checker/plugin-update-checker.php');

$WPZap_UpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'http://update.wpzap.com.br/release.json',
	__FILE__,
	'wpzap'
);