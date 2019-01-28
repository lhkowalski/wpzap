<?php

echo $args['before_widget'];
 
if ( ! empty($instance['title']))
{
	echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
}

?>
<div class="textwidget">

	<?php if ( ! empty($instance['text'])): ?>
	<p><?php echo $instance['text']; ?></p>
	<?php endif; ?>

	<?php echo $form; ?>
	
</div>
<?php echo $args['after_widget']; ?>