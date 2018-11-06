<?php

class WPZap_Shortcode_Botao extends WPZap_General
{
	// overrides the parent method, to set defaults
	public function setOptionDefaults()
	{
		// in this case, do nothing
		if( ! isset($this->_options['default_cta']))
			$this->_options['default_cta'] = 'WhatsApp';
	}

	public function init()
	{
		// hang in hooks
		add_shortcode('wpzap_botao', array($this, 'doShortcode'));
	}

	public function doShortcode($attributes)
	{
		// load the plugin options, if its not loaded before
		$this->loadOptions();

		if( ! $this->_options)
			return '';

		// default shortcode attributes
		$defaultButtonAttributes = [];
		$defaultButtonAttributes['texto'] = esc_html($this->_options['default_cta']);

		// get attributes
		$attributes = shortcode_atts($defaultButtonAttributes, $attributes, 'wpzap_botao');

		// full link to chat
		$hrefLink = WPZap_Util::getLinkFromOptions($this->_options);

		// html of the button
		$resultHTML = "<a class='wpzap-btn-inline' href='$hrefLink' target='_blank'>" . $attributes['texto'] . "</a>";

		// return
		return $resultHTML;
	}
}