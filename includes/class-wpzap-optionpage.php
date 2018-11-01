<?php

class WPZap_OptionPage
{
	public function __construct()
	{
	}

	public function init()
	{
		add_action('admin_init', array($this, 'initSettings'));
		add_action('admin_menu', array($this, 'initOptionsPage'));
	}

	public function initSettings()
	{
		register_setting('wpzap', 'wpzap_options');

		add_settings_section(
			'wpzap-options-section',
			'Configurar Número de Telefone',
			array($this, 'headerOptionsPage'),
			'wpzap'
		);
 
		add_settings_field(
			'wpzap_phone_number',
			'Número do WhatsApp',
			array($this, 'fieldHTML'),
			'wpzap',
			'wpzap-options-section'
		);
	}

	public function headerOptionsPage()
	{
		echo "<p>Configure o número que você usa no WhatsApp.</p>";
	}

	public function fieldHTML($args)
	{
		$wpzap_options = get_option('wpzap_options');
		include(WPZAP_PLUGIN_DIR . "/includes/views/wpzap-options-field.php");
	}

	public function initOptionsPage()
	{
		// register the options page
		add_options_page(
        'Configuração do WP Zap', // title
        'WP Zap', // menu
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