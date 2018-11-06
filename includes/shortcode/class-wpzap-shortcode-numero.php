<?php

class WPZap_Shortcode_Numero extends WPZap_General
{
	public function init()
	{
		// hang in hooks
		add_shortcode('wpzap_numero', array($this, 'doShortcode'));
	}

	public function doShortcode()
	{
		// load the plugin options, if its not loaded before
		$this->loadOptions();

		if( ! $this->_options)
			return '';

		return esc_html($this->_options['phone_number']);
	}
}