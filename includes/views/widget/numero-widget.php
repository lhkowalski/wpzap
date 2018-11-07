<?php

echo $args['before_widget'];
 
if ( ! empty($instance['title']))
{
	echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
}

$instance['text'] = do_shortcode( $instance['text'] );

echo '<div class="textwidget">';
echo $instance['text'];
echo '</div>';

echo $args['after_widget'];