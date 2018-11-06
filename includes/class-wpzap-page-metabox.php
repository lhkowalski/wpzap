<?php

class WPZap_Page_MetaBox extends WPZap_General
{
	public function init()
	{
		// add metabox
		add_action('add_meta_boxes', array($this, 'doMetabox'));

		// save metabox data 
		add_action('save_post', array($this, 'saveMetaboxData'));
	}

	public function doMetabox()
	{
		add_meta_box(
			'wpzap-page-metabox', 
			'WPZap',
			array($this, 'showMetabox'),
			'page', // the page
			'side', // posição dentro da page
			'low'
		);
	}

	public function showMetabox($post)
	{
		$metadados = get_post_meta($post->ID, WPZAP_PLUGIN_PAGE_META, true);

		include(WPZAP_PLUGIN_DIR . "/includes/views/wpzap-page-metabox.php");
	}

	public function saveMetaboxData($post_id)
	{
		if( ! isset($_POST['wpzap_page_metabox_nonce'])) 
		{
			return;
		}

		if( ! wp_verify_nonce($_POST['wpzap_page_metabox_nonce'], 'wpzap_page_metabox'))
		{
			return;
		}

		if(defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE)
		{
			return;
		}

		if( ! current_user_can('edit_post', $post_id))
		{
			return;
		}

		if( ! isset( $_POST['post_type'] ) || 'page' !== $_POST['post_type'] )
		{
			return;
		}

		$metadados = array();

		if(isset($_POST[WPZAP_PLUGIN_PAGE_META]))
		{
			if($_POST[WPZAP_PLUGIN_PAGE_META]['redirect'] === 'S')
				$metadados['redirect'] = 'S';
		}
		else
		{
			$metadados['redirect'] = 'N';
		}

		// insert or update data
		return update_post_meta($post_id, WPZAP_PLUGIN_PAGE_META, $metadados);
	}
}