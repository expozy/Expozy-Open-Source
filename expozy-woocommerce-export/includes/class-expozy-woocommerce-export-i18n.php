<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.studioweb.bg
 * @since      1.0.0
 *
 * @package    Expozy_Woocommerce_Export
 * @subpackage Expozy_Woocommerce_Export/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Expozy_Woocommerce_Export
 * @subpackage Expozy_Woocommerce_Export/includes
 * @author     Dimo Michev <dimo.michev@siriusart.bg>
 */
class Expozy_Woocommerce_Export_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'expozy-woocommerce-export',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
