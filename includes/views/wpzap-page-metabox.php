<?php wp_nonce_field( 'wpzap_page_metabox', 'wpzap_page_metabox_nonce' ); ?>

<p>Deseja redirecionar esta página para uma conversa via WhatsApp?</p>
<p>
	<label for="wpzap-page-metabox-check-redirect">
		<input id="wpzap-page-metabox-check-redirect" <?php if(isset($metadados['redirect'])) echo checked($metadados['redirect'], 'S'); ?> type="checkbox" value="S" name="<?php echo WPZAP_PLUGIN_PAGE_META; ?>[redirect]" /> Sim, redirecionar para WhatsApp
	</label>
</p>