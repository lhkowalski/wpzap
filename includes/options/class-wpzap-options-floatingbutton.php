<?php

class WPZap_Options_FloatingButton extends WPZap_General
{
	public function init()
	{
		add_settings_section(
			'wpzap-options-section-floatingbutton',
			'Botão Flutuante',
			array($this, 'headerSection'),
			'wpzap'
		);
 
 		// Field to activate
		add_settings_field(
			'wpzap_floating_button',
			'Ativar Botão Flutuante',
			array($this, 'activateField'),
			'wpzap',
			'wpzap-options-section-floatingbutton'
		);

		// Field to select position
		add_settings_field(
			'wpzap_floating_button_position',
			'Posição do Botão',
			array($this, 'positionField'),
			'wpzap',
			'wpzap-options-section-floatingbutton'
		);

		// Field to select image
		add_settings_field(
			'wpzap_floating_button_image',
			'Imagem do Botão',
			array($this, 'imageField'),
			'wpzap',
			'wpzap-options-section-floatingbutton'
		);

		// Field to set title
		add_settings_field(
			'wpzap_floating_button_title',
			'Título do Botão',
			array($this, 'titleField'),
			'wpzap',
			'wpzap-options-section-floatingbutton'
		);
	}

	public function headerSection()
	{
		echo "<p>Configurar as opções do botão flutuante</p>";
	}

	public function activateField()
	{
		$this->loadOptions();
		$options = $this->_options;
		include(WPZAP_PLUGIN_DIR . "/includes/views/option-fields/floating-button/activate.php");
	}

	public function positionField()
	{
		$this->loadOptions();
		$options = $this->_options;
		$positions = WPZap_FloatingButton::$positions;

		include(WPZAP_PLUGIN_DIR . "/includes/views/option-fields/floating-button/position.php");	
	}

	public function imageField()
	{
		$this->loadOptions();
		$options = $this->_options;
		$images = WPZap_FloatingButton::$images;

		include(WPZAP_PLUGIN_DIR . "/includes/views/option-fields/floating-button/image.php");	
	}

	public function titleField()
	{
		$this->loadOptions();
		$options = $this->_options;
		include(WPZAP_PLUGIN_DIR . "/includes/views/option-fields/floating-button/title.php");	
	}
}