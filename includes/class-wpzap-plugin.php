<?php

class WPZap_Plugin
{
	static $instance = null;

	public static function getInstance()
	{
		if(self::$instance === null)
			self::$instance = new self;

		return self::$instance;
	}

	public function __construct()
	{
		// hang in hooks
		add_shortcode('wpzap', array($this, 'doShortcode')); 
	}

	public function doShortcode()
	{
		return "(62) 98156-9612 :-)";
	}
}