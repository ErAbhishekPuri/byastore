<?php
/**
 * Plugin Name: captainform-gutenberg-block dev environment
 * Plugin URI: 
 * Description: captainform-gutenberg-block dev environment
 * Author: captainform
 * Author URI: 
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CPF
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
