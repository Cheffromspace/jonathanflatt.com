<?php
/**
 * Background
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'bg_hr_1',
	'section'  => 'general_bg_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'color',
	'settings'    => 'emika_bg_color',
	'label'       => esc_html__( 'Background color', 'emika' ),
	'section'     => 'general_bg_section',
	'default'     => '#f5f5f5',
	'priority'    => $count++,
	'output'      => array(
		'element'  => 'body',
		'property' => 'background',
	),
) );