<?php

class WPZap_General
{
	protected $_options = null;

	public function loadOptions()
	{
		if($this->_options === null) 
		{
			$this->_options = get_option(WPZAP_PLUGIN_OPTIONS);
			$this->setOptionDefaults();
		}
	}

	public function setOptionDefaults()
	{
		// in this case, do nothing
	}
}