<p>
	<select name="wpzap_options[floating_button_position]">
		<?php foreach($positions as $name => $data): ?>
		<option <?php selected( $options['floating_button_position'], $name); ?> value='<?php echo $name; ?>'><?php echo $data['label']; ?></option>
		<?php endforeach; ?>
	</select>
</p>