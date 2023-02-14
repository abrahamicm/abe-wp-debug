<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://github.com/abrahamicm
 * @since      1.0.0
 *
 * @package    Ab_Wp_Debug
 * @subpackage Ab_Wp_Debug/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ab_Wp_Debug
 * @subpackage Ab_Wp_Debug/includes
 * @author     abraham cordero <abrahamicm2@gmail.com>
 */
class Ab_Wp_Debug_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ab-wp-debug',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
