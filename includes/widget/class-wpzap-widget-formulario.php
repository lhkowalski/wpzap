<?php

class WPZap_Widget_Formulario extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
			'wpzap-formulario',  // Base ID
			'WPZap Formulário'   // Name
		);
 
		add_action('widgets_init', function() {
			register_widget('WPZap_Widget_Formulario');
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
      $formShortcode = new WPZap_Shortcode_Formulario();
      $shortcodeAttr = array();

      if( ! empty($instance['button']))
         $shortcodeAttr['texto'] = $instance['button'];

      // textarea default content
      $content = false;
      if( ! empty($instance['message']))
         $content = $instance['message'];

      // build the html content using the shortcode function and template
      $form = $formShortcode->doShortcode($shortcodeAttr, $content);

		include(WPZAP_PLUGIN_DIR . "/includes/views/widget/formulario-widget.php");
   }
 
   public function form($instance)
   {
      $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
      $text = ! empty( $instance['text'] ) ? $instance['text'] : '';
      $button = ! empty( $instance['button'] ) ? $instance['button'] : '';
      $message = ! empty( $instance['message'] ) ? $instance['message'] : '';

   	include(WPZAP_PLUGIN_DIR . "/includes/views/widget/formulario-form.php");
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

      if( ! empty($new_instance['message']))
      	$instance['message'] = strip_tags($new_instance['message']);
      else
      	$instance['message'] = '';
 
      return $instance;
   }
}