<?php

class WPZap_Widget_Numero extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
			'wpzap-numero',  // Base ID
			'WPZap Número'   // Name
		);
 
		add_action('widgets_init', function() {
			register_widget('WPZap_Widget_Numero');
		});
	}

	public $args = array(
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div>'
	);

	public function widget($args, $instance)
	{
		include(WPZAP_PLUGIN_DIR . "/includes/views/widget/numero-widget.php");
   }
 
   public function form($instance)
   {
      $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
      $text = ! empty( $instance['text'] ) ? $instance['text'] : '[wpzap_numero]';

   	include(WPZAP_PLUGIN_DIR . "/includes/views/widget/numero-form.php");
   } 
   
   public function update( $new_instance, $old_instance )
   {
      $instance = array();
 
      $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
      $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
 
      return $instance;
   }
}