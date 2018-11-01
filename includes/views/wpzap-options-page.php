<div class="wrap">
	<h1>WP Zap</h1>

	<form action="options.php" method="post">
	<?php settings_fields('wpzap'); ?>
	<?php do_settings_sections( 'wpzap' ); ?>
	<?php submit_button( 'Salvar Opções' ); ?>
	</form>
</div>