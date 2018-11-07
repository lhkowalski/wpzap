<?php

class WPZap_Widget
{
	/*
	 * Initialize all the widgets
	 */
	public function init()
	{
		$numero = new WPZap_Widget_Numero();
		$botao = new WPZap_Widget_Botao();
		// $formulario = new WPZap_Widget_Formulario();
	}
}