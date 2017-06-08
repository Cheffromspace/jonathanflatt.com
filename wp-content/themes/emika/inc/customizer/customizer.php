<?php
/**
 * Theme Customizer
 */

/**
 * Setup Kirki Customizer
 */
function emika_kirki_customizer_config() {
	$args = array(
		'styles_priority' => 999,
		'url_path'        => EMIKA_THEME_ROOT . '/core/customizer/kirki/'
	);

	return $args;
}

add_filter( 'kirki/config', 'emika_kirki_customizer_config' );

/**
 * Custom CSS
 */
function emika_customize_css() {
	wp_enqueue_style( 'ht-kirki-custom-css', EMIKA_THEME_ROOT . '/core/customizer/css/style.css' );
}

add_action( 'customize_controls_init', 'emika_customize_css' );

/**
 * Remove Default Sections
 */
function emika_remove_customizer_sections( $wp_customize ) {
	$wp_customize->remove_section( 'nav' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_control( 'page_for_posts' );
}

add_action( 'customize_register', 'emika_remove_customizer_sections' );

/**
 * Kirki Configuration
 */
Kirki::add_config( 'emika_customizer', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

/**
 * Panel: General
 */
Kirki::add_panel( 'general_panel', array(
	'title'       => esc_html__( 'General', 'emika' ),
	'description' => esc_html__( 'This section for control general site settings', 'emika' ),
	'priority'    => 1,
) );

$count_general = 1;

// Section: Site Identity
Kirki::add_section( 'general_identity_section', array(
	'title'       => esc_html__( 'Site Identity', 'emika' ),
	'description' => esc_html__( 'This section for site identity settings', 'emika' ),
	'panel'       => 'general_panel',
	'priority'    => $count_general++,
) );

// Section: Site Logo
Kirki::add_section( 'general_logo_section', array(
	'title'       => esc_html__( 'Site Logo', 'emika' ),
	'description' => esc_html__( 'This section for site logo settings', 'emika' ),
	'panel'       => 'general_panel',
	'priority'    => $count_general++,
) );

// Section: Color and Links
Kirki::add_section( 'general_color_section', array(
	'title'       => esc_html__( 'Links', 'emika' ),
	'description' => esc_html__( 'This section for site basic links settings', 'emika' ),
	'panel'       => 'general_panel',
	'priority'    => $count_general++,
) );

// Section: Background
Kirki::add_section( 'general_bg_section', array(
	'title'       => esc_html__( 'Background', 'emika' ),
	'description' => esc_html__( 'This section for site background settings', 'emika' ),
	'panel'       => 'general_panel',
	'priority'    => $count_general++,
) );

// Section: Favicon
Kirki::add_section( 'general_favicon_section', array(
	'title'       => esc_html__( 'Favicon', 'emika' ),
	'description' => esc_html__( 'This section for favicon settings', 'emika' ),
	'panel'       => 'general_panel',
	'priority'    => $count_general++,
) );

/**
 * Section: Front Page
 */
Kirki::add_section( 'front_page_section', array(
	'title'       => esc_html__( 'Front Page', 'emika' ),
	'description' => esc_html__( 'This section for site front page settings', 'emika' ),
	'priority'    => 2,
) );

/**
 * Section: Archive
 */
Kirki::add_section( 'archive_section', array(
	'title'       => esc_html__( 'Archive', 'emika' ),
	'description' => esc_html__( 'This section for site archive, categories and tags pages settings', 'emika' ),
	'priority'    => 3,
) );

/**
 * Section: Single Post
 */
Kirki::add_section( 'single_post_section', array(
	'title'       => esc_html__( 'Single Post', 'emika' ),
	'description' => esc_html__( 'This section for site single post page settings', 'emika' ),
	'priority'    => 4,
) );

/**
 * Section: Search
 */
Kirki::add_section( 'search_page_section', array(
	'title'       => esc_html__( 'Search', 'emika' ),
	'description' => esc_html__( 'This section for site search settings', 'emika' ),
	'priority'    => 6,
) );

/**
 * Section: 404 Page
 */
Kirki::add_section( 'page_404_section', array(
	'title'       => esc_html__( '404 Page', 'emika' ),
	'description' => esc_html__( 'This section for site 404 page settings', 'emika' ),
	'priority'    => 7,
) );

/**
 * Panel: Typography
 */
Kirki::add_panel( 'typography_panel', array(
	'title'       => esc_html__( 'Typography', 'emika' ),
	'description' => esc_html__( 'This section for control typography settings', 'emika' ),
	'priority'    => 8,
) );

$count_typography = 1;

// Section: Body
Kirki::add_section( 'typography_body_section', array(
	'title'       => esc_html__( 'Body', 'emika' ),
	'description' => esc_html__( 'This section for site body typography settings', 'emika' ),
	'panel'       => 'typography_panel',
	'priority'    => $count_typography++,
) );

//Section: Text Headers
Kirki::add_section( 'typography_headers_section', array(
	'title'       => esc_html__( 'Text Headers', 'emika' ),
	'description' => esc_html__( 'This section for posts and pages headers typography settings', 'emika' ),
	'panel'       => 'typography_panel',
	'priority'    => $count_typography++,
) );

//Section: Site Headers
Kirki::add_section( 'typography_site_headers_section', array(
	'title'       => esc_html__( 'Site Headers', 'emika' ),
	'description' => esc_html__( 'This section for site headers typography settings', 'emika' ),
	'panel'       => 'typography_panel',
	'priority'    => $count_typography++,
) );

/**
 * Section: Social Buttons
 */
Kirki::add_section( 'social_buttons_section', array(
	'title'       => esc_html__( 'Social Buttons', 'emika' ),
	'description' => esc_html__( 'This section for social buttons settings', 'emika' ),
	'priority'    => 10,
) );

/**
 * Section: Sidebar
 */
Kirki::add_section( 'general_sidebar_section', array(
	'title'       => esc_html__( 'Sidebar', 'emika' ),
	'description' => esc_html__( 'This section for sidebar settings', 'emika' ),
	'priority'    => 11,
) );

/**
 * Panel: Footer
 */
Kirki::add_panel( 'footer_panel', array(
	'title'       => esc_html__( 'Footer', 'emika' ),
	'description' => esc_html__( 'This section for control footer settings', 'emika' ),
	'priority'    => 12,
) );

$count_footer = 1;

// Section: Style
Kirki::add_section( 'footer_style_section', array(
	'title'       => esc_html__( 'Style', 'emika' ),
	'description' => esc_html__( 'This section for site footer style settings', 'emika' ),
	'panel'       => 'footer_panel',
	'priority'    => $count_footer++,
) );

// Section: Copyright
Kirki::add_section( 'footer_copyright_section', array(
	'title'       => esc_html__( 'Copyright and links', 'emika' ),
	'description' => esc_html__( 'This section for site copyright and links settings', 'emika' ),
	'panel'       => 'footer_panel',
	'priority'    => $count_footer++,
) );

/**
 * Section: Custome CSS
 */
Kirki::add_section( 'custome_css_section', array(
	'title'       => esc_html__( 'Custom CSS', 'emika' ),
	'description' => esc_html__( 'This section for control custom CSS', 'emika' ),
	'priority'    => 13,
) );

/**
 * Section: Custome JS
 */
Kirki::add_section( 'custome_js_section', array(
	'title'       => esc_html__( 'Custom JS', 'emika' ),
	'description' => esc_html__( 'This section for control custom JS', 'emika' ),
	'priority'    => 14,
) );

/**
 * Include settings
 */
require get_parent_theme_file_path( '/inc/customizer/settings/general-identity.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/general-logo.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/general-color.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/general-background.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/general-favicon.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/front-page.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/archive-page.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/single-post.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/search-page.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/404-page.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/typography-body.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/typography-text-headers.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/typography-site-headers.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/social-buttons.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/sidebar.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/footer-style.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/footer-copyright.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/custom-css.php' );
require get_parent_theme_file_path( '/inc/customizer/settings/custom-js.php' );