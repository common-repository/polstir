<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   Polstir
 * @author    Polstir Admin <admin@pol.st>
 * @license   GPL-2.0+
 * @link      http://pol.st
 * @copyright 2017 Platform Thirteen, LLC
 *
 * @wordpress-plugin
 * Plugin Name:       Polstir
 * Plugin URI:        http://wp.pol.st/
 * Description:       Embed polls created with Polstir using the shortcode [polstir].
 * Version:           3.0.0
 * Author:            Polstir
 * Author URI:        http://pol.st/
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/polstir/wordpress
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Embed Functionality
 *----------------------------------------------------------------------------*/
require_once( plugin_dir_path( __FILE__ ) . 'public/class-polstir.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 */
register_activation_hook( __FILE__, array( 'Polstir', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Polstir', 'deactivate' ) );

/*
 * Load plugin and add shortcode.
 */
add_action( 'plugins_loaded', array( 'Polstir', 'get_instance' ) );
add_shortcode( 'polstir', array( Polstir::get_instance(), 'polstir_embed_code' ) );
