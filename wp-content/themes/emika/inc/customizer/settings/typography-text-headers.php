<?php
/**
 * Text Headers Typography 
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'header_hr_1',
	'section'  => 'typography_headers_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_text_h1_font_family',
	'label'       => esc_attr__( 'H1', 'emika' ),
	'section'     => 'typography_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#253342',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.post-text h1, .post-text .h1',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'header_hr_2',
	'section'  => 'typography_headers_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_text_h2_font_family',
	'label'       => esc_attr__( 'H2', 'emika' ),
	'section'     => 'typography_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#253342',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.post-text h2, .post-text .h2',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'header_hr_3',
	'section'  => 'typography_headers_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_text_h3_font_family',
	'label'       => esc_attr__( 'H3', 'emika' ),
	'section'     => 'typography_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#253342',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.post-text h3, .post-text .h3',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'header_hr_4',
	'section'  => 'typography_headers_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_text_h4_font_family',
	'label'       => esc_attr__( 'H4', 'emika' ),
	'section'     => 'typography_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#253342',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.post-text h4, .post-text .h4',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'header_hr_5',
	'section'  => 'typography_headers_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_text_h5_font_family',
	'label'       => esc_attr__( 'H5', 'emika' ),
	'section'     => 'typography_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#253342',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.post-text h5, .post-text .h5',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'header_hr_6',
	'section'  => 'typography_headers_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_text_h6_font_family',
	'label'       => esc_attr__( 'H6', 'emika' ),
	'section'     => 'typography_headers_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#253342',
	),
	'priority' 		=> $count++,
	'output'      => array(
		array(
			'element' => '.post-text h6, .post-text .h6',
		),
	),
) );