<?php

class WPZap_OptionPage extends WPZap_General
{
	public function init()
	{
		add_action('admin_init', array($this, 'initSettings'));
		add_action('admin_menu', array($this, 'initOptionsPage'));
	}

	public function initSettings()
	{
		register_setting('wpzap', WPZAP_PLUGIN_OPTIONS);

		$optionsGeneral = new WPZap_Options_General();
		$optionsGeneral->init();

		$optionsFloatingButton = new WPZap_Options_FloatingButton();
		$optionsFloatingButton->init();
	}

	public function initOptionsPage()
	{
		// register the options page
		add_options_page(
        'Configuração do WP Zap', // title
        'WPZap', // menu
        'manage_options', // capability
        'wpzap', // 
        array($this, 'showOptionsPage')
   	);
	}

	public function showOptionsPage()
	{
		include(WPZAP_PLUGIN_DIR . "/includes/views/wpzap-options-page.php");
	}
}