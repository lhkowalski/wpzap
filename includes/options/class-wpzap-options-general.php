<?php

class WPZap_Options_General extends WPZap_General
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
		add_settings_section(
			'wpzap-options-section-general',
			'Preferências Gerais',
			array($this, 'headerSection'),
			'wpzap'
		);
 
		add_settings_field(
			'wpzap_phone_number',
			'Número do WhatsApp',
			array($this, 'phoneNumberField'),
			'wpzap',
			'wpzap-options-section-general'
		);

		add_settings_field(
			'wpzap_default_cta',
			'Chamada Padrão do Botão',
			array($this, 'ctaField'),
			'wpzap',
			'wpzap-options-section-general'
		);
	}

	public function headerSection()
	{
	}

	public function phoneNumberField($args)
	{
		$this->loadOptions();
		$options = $this->_options;
		include(WPZAP_PLUGIN_DIR . "/includes/views/option-fields/general/phone-number.php");
	}

	public function ctaField($args)
	{
		$this->loadOptions();
		$options = $this->_options;
		include(WPZAP_PLUGIN_DIR . "/includes/views/option-fields/general/default-cta.php");
	}
}