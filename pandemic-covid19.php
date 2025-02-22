<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              zekinahlecaros.com
 * @since             1.0.0
 * @package           Pandemic_Covid19
 *
 * @wordpress-plugin
 * Plugin Name:       Zone Pandemic Covid-19
 * Plugin URI:        https://github.com/zekinah/wp-pandemic-covid19
 * Description:       This plugin provides shortcode that displays the live recorded data of the covid19.
 * Version:           1.1.0
 * Author:            Zekinah Lecaros
 * Author URI:        zekinahlecaros.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pandemic-covid19
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
define( 'PANDEMIC_COVID19_VERSION', '1.0.9' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pandemic-covid19-activator.php
 */
function activate_pandemic_covid19() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pandemic-covid19-activator.php';
	Pandemic_Covid19_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pandemic-covid19-deactivator.php
 */
function deactivate_pandemic_covid19() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pandemic-covid19-deactivator.php';
	Pandemic_Covid19_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pandemic_covid19' );
register_deactivation_hook( __FILE__, 'deactivate_pandemic_covid19' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pandemic-covid19.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pandemic_covid19() {

	$plugin = new Pandemic_Covid19();
	$plugin->run();

}
run_pandemic_covid19();
