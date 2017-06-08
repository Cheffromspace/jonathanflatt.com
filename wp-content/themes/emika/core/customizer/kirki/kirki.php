<?php
/**
 * Plugin Name:   Kirki Toolkit
 * Plugin URI:    http://kirki.org
 * Description:   The ultimate WordPress Customizer Toolkit
 * Author:        Aristeides Stathopoulos
 * Author URI:    http://aristeides.com
 * Version:       2.3.7
 * Text Domain:   kirki
 *
 * GitHub Plugin URI: aristath/kirki
 * GitHub Plugin URI: https://github.com/aristath/kirki
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// No need to proceed if Kirki already exists.
if ( class_exists( 'Kirki' ) ) {
	return;
}

// Include the autoloader.
include_once( get_parent_theme_file_path( '/core/customizer/kirki/' ) . DIRECTORY_SEPARATOR . 'autoloader.php' );

if ( ! function_exists( 'Kirki' ) ) {
	/**
	 * Returns an instance of the Kirki object.
	 */
	function Kirki() {
		$kirki = Kirki_Toolkit::get_instance();
		return $kirki;
	}
}
// Start Kirki.
global $kirki;
$kirki = Kirki();

// Make sure the path is properly set.
Kirki::$path = wp_normalize_path( get_parent_theme_file_path( '/core/customizer/kirki/' ) );

// Instantiate 2ndary classes.
new Kirki_l10n();
new Kirki_Scripts_Registry();
new Kirki_Styles_Customizer();
new Kirki_Styles_Frontend();
new Kirki_Selective_Refresh();
new Kirki();

// Include deprecated functions & methods.
include_once wp_normalize_path( get_parent_theme_file_path( '/core/customizer/kirki/' ) . '/includes/deprecated.php' );

// Include the ariColor library.
include_once wp_normalize_path( get_parent_theme_file_path( '/core/customizer/kirki/' ) . '/includes/lib/class-aricolor.php' );

// Add an empty config for global fields.
Kirki::add_config( '' );
