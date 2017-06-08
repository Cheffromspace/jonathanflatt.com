<?php
/**
 * Load core files.
 */

// Load TGM
require get_parent_theme_file_path( '/inc/tgm-plugin-activation.php' );
require get_parent_theme_file_path( '/inc/tgm-plugin-registration.php' );

// Load general settings.
require get_parent_theme_file_path( '/core/general.php' );

// Register custom navigation walker.
require get_parent_theme_file_path( '/core/wp_bootstrap_navwalker.php' );

// Include metaboxes.
require get_parent_theme_file_path( '/core/metaboxes.php' );

// Include Kirki plugin.
require get_parent_theme_file_path( '/core/customizer/kirki/kirki.php' );