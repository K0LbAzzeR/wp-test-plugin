<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link              https://github.com/K0LbAzzeR/wp-test-plugin
 * @since             1.0.0
 *
 * @package           Wp_Test_Plugin
 * @subpackage        Wp_Test_Plugin/admin/partials
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package           Wp_Test_Plugin
 * @subpackage        Wp_Test_Plugin/admin/partials
 * @author            Еремин Алексей aka K0Lb@zzeR <javasc@yandex.ru>
 */
class Wp_Test_Plugin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wp_test_plugin    The ID of this plugin.
	 */
	private $wp_test_plugin;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wp_test_plugin       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wp_test_plugin, $version ) {

		$this->wp_test_plugin = $wp_test_plugin;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in wp_test_plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The wp_test_plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wp_test_plugin, plugin_dir_url( __FILE__ ) . 'css/wp-test-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in wp_test_plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The wp_test_plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wp_test_plugin, plugin_dir_url( __FILE__ ) . 'js/wp-test-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

}
