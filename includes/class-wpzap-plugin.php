<?php

class WPZap_Plugin
{
	static $instance = null;
	protected $optionPage, $shortcode;

	public static function getInstance()
	{
		if(self::$instance === null)
			self::$instance = new self;

		return self::$instance;
	}

	public function __construct()
	{
		$this->optionPage = new WPZap_OptionPage();
		$this->pageMetabox = new WPZap_Page_MetaBox();
		$this->shortcode = new WPZap_Shortcode();
		$this->widget = new WPZap_Widget();
		$this->floatingButton = new WPZap_FloatingButton();
		$this->redirect = new WPZap_Redirect();

		$this->optionPage->init();
		$this->pageMetabox->init();
		$this->shortcode->init();
		$this->widget->init();
		$this->floatingButton->init();
		$this->redirect->init();

		$this->init();
	}

	public function init()
	{
		add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));
	}

	public function enqueueScripts()
	{
		wp_register_style('wpzap', plugins_url('public/css/wpzap.css', dirname(__FILE__)));
   	wp_enqueue_style('wpzap');

      // wp_enqueue_script( 'namespaceformyscript', 'http://locationofscript.com/myscript.js', array( 'jquery' ) );
	}
}