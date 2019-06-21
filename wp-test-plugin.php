<?php

/**
 * @link              https://github.com/K0LbAzzeR/wp-test-plugin
 * @since             1.0.0
 * @package           Wp_Test_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:   wp-test-plugin
 * Description:   Плагин по заданию https://gist.github.com/Able1991/9df40b893b0be33b33df76fa0b83fab2. Регистрация событий (дата, название, описание, + привязка к тегам).
 * Plugin URI:    https://github.com/K0LbAzzeR/wp-test-plugin
 * Author URI:    https://github.com/K0LbAzzeR
 * Author:        Еремин Алексей aka K0Lb@zzeR
 * Version:       1.0.0
 *
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:   wp-test-plugin
 * Domain Path:   /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_TEST_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-test-plugin-activator.php
 */
function activate_wp_test_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-test-plugin-activator.php';
	wp_test_plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-test-plugin-deactivator.php
 */
function deactivate_wp_test_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-test-plugin-deactivator.php';
	wp_test_plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_test_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_wp_test_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-test-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_test_plugin() {

	$plugin = new wp_test_plugin();
	$plugin->run();

}
run_wp_test_plugin();
