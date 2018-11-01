<?php

class WPZap_Plugin
{
	static $instance = null;
	protected $optionPageController = null;

	public static function getInstance()
	{
		if(self::$instance === null)
			self::$instance = new self;

		return self::$instance;
	}

	public function __construct()
	{
		$this->optionPage = new WPZap_OptionPage();

		// hang in hooks
		add_shortcode('wpzap', array($this, 'doShortcode'));

		$this->optionPage->init();
	}

	public function doShortcode()
	{
		$wpzap_options = get_option('wpzap_options');

		if( ! $wpzap_options)
			return '';

		return esc_html($wpzap_options['phone_number']);
	}
}