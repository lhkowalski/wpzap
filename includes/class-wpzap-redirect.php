<?php

class WPZap_Redirect extends WPZap_General
{
	public function init()
	{
		// hang in hooks
		add_action('wp', array($this, 'doRedirecionamento'));
	}

	public function doRedirecionamento()
	{
		global $wp_query;

		// if we are in a page
		if( ! is_admin() && is_page())
		{
			$metadados = get_post_meta($wp_query->post->ID, WPZAP_PLUGIN_PAGE_META, true);

			if(isset($metadados['redirect']) && $metadados['redirect'] == 'S')
			{
				$this->loadOptions();
				$whatsappLink = WPZap_Util::getLinkFromOptions($this->_options);

				wp_redirect($whatsappLink);
				exit;
			}
		}
	}
}