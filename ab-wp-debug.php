<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/abrahamicm
 * @since             1.0.0
 * @package           Ab_Wp_Debug
 *
 * @wordpress-plugin
 * Plugin Name:       AB Wp Debug
 * Plugin URI:        https://https://github.com/abrahamicm/abe-wp-debug
 * Description:       plugin que sirva como base para wordpress
 * Version:           1.0.0
 * Author:            abraham cordero
 * Author URI:        https://https://github.com/abrahamicm
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ab-wp-debug
 * Domain Path:       /languages
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
define( 'AB_WP_DEBUG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ab-wp-debug-activator.php
 */
function activate_ab_wp_debug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ab-wp-debug-activator.php';
	Ab_Wp_Debug_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ab-wp-debug-deactivator.php
 */
function deactivate_ab_wp_debug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ab-wp-debug-deactivator.php';
	Ab_Wp_Debug_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ab_wp_debug' );
register_deactivation_hook( __FILE__, 'deactivate_ab_wp_debug' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ab-wp-debug.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ab_wp_debug() {

	$plugin = new Ab_Wp_Debug();
	$plugin->run();

}
run_ab_wp_debug();
