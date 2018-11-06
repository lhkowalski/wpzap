<p>
	<select name="wpzap_options[floating_button_image]">
		<?php foreach($images as $name => $data): ?>
		<option <?php selected( $options['floating_button_image'], $name); ?> value='<?php echo $name; ?>'><?php echo $data['label']; ?></option>
		<?php endforeach; ?>
	</select>
</p>