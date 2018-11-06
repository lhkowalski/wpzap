<?php

class WPZap_Util
{
	public static $whatsappBaseLink = 'https://wa.me/';

	public static function getLinkFromOptions($options)
	{
		// get phone number
		$phoneNumber = esc_html($options['phone_number']);

		// include DDI on phone number
		$phoneNumber = esc_html($options['ddi']) . $phoneNumber;

		// remove all except number
		$phoneNumberClean = preg_replace('/[^0-9]/', '', $phoneNumber);

		return self::$whatsappBaseLink . $phoneNumberClean;
	}
}