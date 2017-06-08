<?php
/**
 * Custome CSS
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'custome_css_hr_1',
	'section'  => 'custome_css_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'      => 'code',
	'setting'   => 'emika_custom_css',
	'label'     => esc_html__( 'Custom CSS', 'emika' ),
	'section'   => 'custome_css_section',
	'default'   => '',
	'priority'  => $count++,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => 250,
	),
) );