<?php
/*
Plugin Name: HarbourThemes Core
Description: Core functions for HarbourThemes theme.
Version: 1.0.0
Author: HarbourThemes
Author URI: http://harbourthemes.com/
*/

if ( ! defined( 'HT_CORE_VERSION' ) ) {
	define( 'HT_CORE_VERSION', '1.0.0' );
}

define( 'HT_CORE_DIR', plugin_dir_path(__FILE__) );
define( 'HT_CORE_URL', plugin_dir_url(__FILE__) );

/**
 * Include widgets.
 */
require_once HT_CORE_DIR . '/widgets/widgets.php';
require_once HT_CORE_DIR . '/widgets/includes/about-me-widget.php';
require_once HT_CORE_DIR . '/widgets/includes/social-buttons-widget.php';
require_once HT_CORE_DIR . '/widgets/includes/instagram-widget.php';
require_once HT_CORE_DIR . '/widgets/includes/twitter-widget.php';
require_once HT_CORE_DIR . '/widgets/includes/latest-posts-widget.php';
require_once HT_CORE_DIR . '/widgets/includes/tags-widget.php';

/**
 * Include metaboxes.
 */
require_once HT_CORE_DIR . '/metaboxes/metaboxes.php';