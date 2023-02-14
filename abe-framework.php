<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/abrahamicm/
 * @since             1.0.0
 * @package           Abe_Framework
 *
 * @wordpress-plugin
 * Plugin Name:       abe-framework
 * Plugin URI:        https://https://github.com/abrahamicm/abe-wp-debug/
 * Description:       mi starter para hacer plugins en wordpress
 * Version:           1.0.0
 * Author:            Abraham Cordero
 * Author URI:        https://https://github.com/abrahamicm/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       abe-framework
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
define( 'ABE_FRAMEWORK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-abe-framework-activator.php
 */
function activate_abe_framework() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-abe-framework-activator.php';
	Abe_Framework_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-abe-framework-deactivator.php
 */
function deactivate_abe_framework() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-abe-framework-deactivator.php';
	Abe_Framework_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_abe_framework' );
register_deactivation_hook( __FILE__, 'deactivate_abe_framework' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-abe-framework.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_abe_framework() {

	$plugin = new Abe_Framework();
	$plugin->run();

}
run_abe_framework();
