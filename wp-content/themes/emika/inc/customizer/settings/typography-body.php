<?php
/**
 * Body Typography
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'body_font_hr_1',
	'section'  => 'typography_body_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'typography',
	'settings'    => 'emika_body_font',
	'label'       => esc_attr__( 'Body Font', 'emika' ),
	'section'     => 'typography_body_section',
	'default'     => array(
		'font-family'    => EMIKA_PRIMARY_FONT,
		'font-size'      => '16px',
		'variant'        => 'regular',
		'subsets'        => array( 'latin-ext' ),
	),
	'priority'    => $count ++,
	'output'      => array(
		array(
			'element' => 'html, body',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'body_font_notice',
	'section'  => 'typography_body_section',
	'default'  => '<p class="customizer-notice">' . esc_html( 'Headers size is calculated automatically depending on body font size.', 'emika' ) . '<p>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'color',
	'settings'    => 'emika_body_font_color',
	'label'       => esc_html__( 'Font Color', 'emika' ),
	'section'     => 'typography_body_section',
	'default'     => '#253342',
	'priority'    => $count++,
	'output'      => array(
		array(
			'element'  => 'body, p',
			'property' => 'color',
		)
	)
) );