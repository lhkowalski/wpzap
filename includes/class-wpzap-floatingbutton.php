<?php

class WPZap_FloatingButton extends WPZap_General
{
	static $images = array(
		'round-1' => array(
			'image' => 'wapp-icon-1.png',
			'label' => 'Ícone Redondo Verde',
		),
		'round-2' => array(
			'image' => 'wapp-icon-2.png',
			'label' => 'Ícone Redondo Preto',
		),
		'round-3' => array(
			'image' => 'wapp-icon-3.png',
			'label' => 'Ícone Redondo Transparente',
		),
		'square-1' => array(
			'image' => 'wapp-icon-5.png',
			'label' => 'Ícone Quadrado Verde',
		),
		'square-2' => array(
			'image' => 'wapp-icon-6.png',
			'label' => 'Ícone Quadrado Preto',
		),
		'square-3' => array(
			'image' => 'wapp-icon-7.png',
			'label' => 'Ícone Quadrado Transparente',
		),
		'hexagon-1' => array(
			'image' => 'wapp-icon-9.png',
			'label' => 'Ícone Hexagonal Verde',
		),
		'hexagon-2' => array(
			'image' => 'wapp-icon-10.png',
			'label' => 'Ícone Hexagonal Preto',
		),
	);

	static $positions = array(
		'top-left' => array(
			'class' => 'wpzap-floating-button-top-left',
			'label' => 'Topo - Esquerda',
		),
		'top-right' => array(
			'class' => 'wpzap-floating-button-top-right',
			'label' => 'Topo - Direita',
		),
		'bottom-left' => array(
			'class' => 'wpzap-floating-button-bottom-left',
			'label' => 'Rodapé - Esquerda',
		),
		'bottom-right' => array(
			'class' => 'wpzap-floating-button-bottom-right',
			'label' => 'Rodapé - Direita',
		),
	);

	public function setOptionDefaults()
	{
		if( ! isset($this->_options['floating_button_position']))
			$this->_options['floating_button_position'] = 'bottom-right';

		if( ! isset($this->_options['floating_button_image']))
			$this->_options['floating_button_image'] = 'round-2';

		if( ! isset($this->_options['floating_button_title']))
			$this->_options['floating_button_title'] = 'Contato por WhatsApp';

		if( ! isset($this->_options['floating_button']))
			$this->_options['floating_button'] = 'S';
	}

	public function init()
	{
		// show html right before closing the body
		add_action('wp_footer', array($this, 'doFloatingButton'));
	}

	public function doFloatingButton()
	{
		$this->loadOptions();

		// generate the html, but just if the options are set so
		if($this->_options['floating_button_active'] == 'S')
		{
			$link = WPZap_Util::getLinkFromOptions($this->_options);
			$image = $this->getImageLink();
			$position = $this->getButtonPosition();
			$title = $this->getTitle();

			include(WPZAP_PLUGIN_DIR . "/includes/views/wpzap-floating-button.php");
		}
	}

	protected function getImageLink()
	{
		$imageName = $this->_options['floating_button_image'];
		$image = self::$images[$imageName];

		return plugins_url('public/image/' . $image['image'], dirname(__FILE__));
	}

	protected function getButtonPosition()
	{
		$positionName = $this->_options['floating_button_position'];

		return self::$positions[$positionName]['class'];
	}

	protected function getTitle()
	{
		return $this->_options['floating_button_title'];		
	}
}