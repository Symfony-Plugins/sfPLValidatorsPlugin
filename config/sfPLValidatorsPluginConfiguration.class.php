<?php

/**
 * sfPLValidatorsPlugin configuration.
 * 
 * @package     sfPLValidatorsPlugin
 * @subpackage  config
 * @author      Tomasz Jakub Rup
 */
class sfPLValidatorsPluginConfiguration extends sfPluginConfiguration {
	const VERSION = '1.0.0-DEV';

	/**
	 * @see sfPluginConfiguration
	 */
	public function initialize() {
		set_include_path(dirname(__FILE__) . '/../lib//vendor/pear' . PATH_SEPARATOR . get_include_path());
	}

}
