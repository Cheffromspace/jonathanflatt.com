<?php
/**
 * Color and Links
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'color_hr_1',
	'section'  => 'general_color_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'color',
	'settings'    => 'emika_links_color',
	'label'       => esc_html__( 'Links color', 'emika' ),
	'description' => esc_html__( 'Only for content in post and page', 'emika' ),
	'section'     => 'general_color_section',
	'default'     => EMIKA_PRIMARY_COLOR,
	'priority'    => $count++,
	'output'      => array(
		array(
			'element'  => '.post-text a',
			'property' => 'color',
		)
	)
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'color',
	'settings'    => 'emika_links_hover_color',
	'label'       => esc_html__( 'Link color on hover', 'emika' ),
	'description' => esc_html__( 'Only for content in post and page', 'emika' ),
	'section'     => 'general_color_section',
	'default'     => EMIKA_SECONDARY_COLOR,
	'priority'    => $count++,
	'output'      => array(
		array(
			'element'  => '.post-text a:hover, .post-text a:active, .post-text a:focus',
			'property' => 'color',
		)
	)
) );