<?php

class WPZap_Shortcode 
{
	public function init()
	{
		$numero = new WPZap_Shortcode_Numero();
		$numero->init();
		
		$botao = new WPZap_Shortcode_Botao();
		$botao->init();

		$link = new WPZap_Shortcode_Link();
		$link->init();
	}
}