<?php

echo $args['before_widget'];
 
if ( ! empty($instance['title']))
{
	echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
}

?>
<div class="textwidget">
	<form action="" method="get" target="_blank">

		<?php if ( ! empty($instance['text'])): ?>
		<p><?php echo $instance['text']; ?></p>
		<?php endif; ?>

		<p>
			<textarea class='wpzap-form-textarea' id="wpzap-formulario-text" name="text" rows="4"><?php echo $instance['message']; ?></textarea>
		</p>

		<button class='wpzap-btn-inline'><?php echo $instance['button']; ?></button>
	</form>
</div>
<?php echo $args['after_widget']; ?>