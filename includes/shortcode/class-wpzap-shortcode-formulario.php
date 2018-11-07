<?php

class WPZap_Shortcode_Formulario extends WPZap_General
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
		add_shortcode('wpzap_formulario', array($this, 'doShortcode'));
	}

	public function doShortcode($attributes, $content)
	{
		// load the plugin options, if its not loaded before
		$this->loadOptions();

		if( ! $this->_options)
			return '';

		// default shortcode attributes
		$defaultButtonAttributes = [];
		$defaultButtonAttributes['texto'] = esc_html($this->_options['default_cta']);

		// get attributes
		$attributes = shortcode_atts($defaultButtonAttributes, $attributes, 'wpzap_formulario');

		// full link to chat
		$hrefLink = WPZap_Util::getLinkFromOptions($this->_options);

		// generate HTML
		ob_start();
		include(WPZAP_PLUGIN_DIR . "/includes/views/shortcode/formulario.php");
		$resultHTML = ob_get_contents();
		ob_end_clean();
		
		// return
		return $resultHTML;
	}
}