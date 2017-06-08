<?php
/**
 * Custome JS
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'custome_js_hr_1',
	'section'  => 'custome_js_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'      => 'code',
	'setting'   => 'emika_custom_js',
	'label'     => esc_html__( 'Custom JS', 'emika' ),
	'section'   => 'custome_js_section',
	'default'   => '',
	'priority'  => $count++,
	'choices'     => array(
		'language' => 'js',
		'theme'    => 'monokai',
		'height'   => 250,
	),
) );