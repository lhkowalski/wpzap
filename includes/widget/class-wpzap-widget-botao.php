<?php

class WPZap_Widget_Botao extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
			'wpzap-botao',  // Base ID
			'WPZap Botão'   // Name
		);
 
		add_action('widgets_init', function() {
			register_widget('WPZap_Widget_Botao');
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
		$buttonShortcode = new WPZap_Shortcode_Botao();
      $shortcodeAttr = array();

      if( ! empty($instance['button']))
         $shortcodeAttr['texto'] = $instance['button'];

		$button = $buttonShortcode->doShortcode($shortcodeAttr);

		include(WPZAP_PLUGIN_DIR . "/includes/views/widget/botao-widget.php");
   }
 
   public function form($instance)
   {
      $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
      $text = ! empty( $instance['text'] ) ? $instance['text'] : '';
      $button = ! empty( $instance['button'] ) ? $instance['button'] : '';

   	include(WPZAP_PLUGIN_DIR . "/includes/views/widget/botao-form.php");
   } 
   
   public function update( $new_instance, $old_instance )
   {
      $instance = array();
 
 		if( ! empty($new_instance['title']))
      	$instance['title'] = strip_tags($new_instance['title']);
      else
      	$instance['title'] = '';

      if( ! empty($new_instance['text']))
      	$instance['text'] = $new_instance['text'];
      else
      	$instance['text'] = '';

       if( ! empty($new_instance['button']))
      	$instance['button'] = strip_tags($new_instance['button']);
      else
      	$instance['button'] = '';
 
      return $instance;
   }
}