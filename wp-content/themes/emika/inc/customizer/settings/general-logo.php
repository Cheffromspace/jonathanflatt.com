<?php
/**
 * Site Logo
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'logo_hr_1',
	'section'  => 'general_logo_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'image',
	'settings'    => 'emika_logo',
	'label'       => esc_html__( 'Logo', 'emika' ),
	'description' => esc_html__( 'Choose a logo image', 'emika' ),
	'section'     => 'general_logo_section',
	'default'     => '',
	'priority'    => $count++,
) );