<?php
/**
 * Site Headers Typography 
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'site_header_hr_1',
	'section'  => 'typography_site_headers_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_site_title_settings',
	'label'       => esc_attr__( 'Page title', 'emika' ),
	'section'     => 'typography_site_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#f5f5f5',
		'text-transform' => 'none',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.main-header .index-header-title h1, .main-header .post-header-title h1, .simple-page-header .page-header-title h1',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_site_desc_settings',
	'label'       => esc_attr__( 'Site description', 'emika' ),
	'section'     => 'typography_site_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#f5f5f5',
		'text-transform' => 'uppercase',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.main-header .index-header-title span',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_site_post_cat_settings',
	'label'       => esc_attr__( 'Post category on post page', 'emika' ),
	'section'     => 'typography_site_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#f5f5f5',
		'text-transform' => 'uppercase',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.main-header .post-header-title .header-category a, .main-header .post-header-title .header-category a:hover, .main-header .post-header-title .header-category a:focus, .main-header .post-header-title .header-category a:active',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_site_post_meta_settings',
	'label'       => esc_attr__( 'Post date and author on post page', 'emika' ),
	'section'     => 'typography_site_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#f5f5f5',
		'text-transform' => 'none',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.main-header .post-header-title span',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_site_widgets_title_settings',
	'label'       => esc_attr__( 'Widgets title', 'emika' ),
	'section'     => 'typography_site_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#253342',
		'text-transform' => 'uppercase',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.widgets-block .widget h3, .instagram .instagram-title h3',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_site_footer_title_settings',
	'label'       => esc_attr__( 'Footer title', 'emika' ),
	'section'     => 'typography_site_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#f5f5f5',
		'text-transform' => 'uppercase',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.footer h3',
		),
	),
) );