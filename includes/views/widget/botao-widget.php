<?php

echo $args['before_widget'];
 
if ( ! empty($instance['title']))
{
	echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
}

echo '<div class="textwidget">';

if ( ! empty($instance['text']))
{
	echo '<p>' . $instance['text'] . '</p>';
}

echo $button;
echo '</div>';

echo $args['after_widget'];