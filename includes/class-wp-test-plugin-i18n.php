<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link              https://github.com/K0LbAzzeR/wp-test-plugin
 * @since             1.0.0
 *
 * @package           Wp_Test_Plugin
 * @subpackage        Wp_Test_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since             1.0.0
 * @package           Wp_Test_Plugin
 * @subpackage        Wp_Test_Plugin/includes
 * @author            Еремин Алексей aka K0Lb@zzeR <javasc@yandex.ru>
 */
class Wp_Test_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-test-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
