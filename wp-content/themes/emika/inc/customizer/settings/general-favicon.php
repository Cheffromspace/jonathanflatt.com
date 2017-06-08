<?php
/**
 * Favicon
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'favicon_hr_1',
	'section'  => 'general_favicon_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'image',
	'settings'    => 'emika_favicon',
	'label'       => esc_html__( 'Favicon', 'emika' ),
	'description' => esc_html__( 'Format: .png or .ico. Optimal dimensions: 32px x 32px', 'emika' ),
	'section'     => 'general_favicon_section',
	'default'     => '',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'favicon_hr_2',
	'section'  => 'general_favicon_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'image',
	'settings'    => 'emika_apple_favicon',
	'label'       => esc_html__( 'Apple Touch Icon', 'emika' ),
	'description' => esc_html__( 'Format: .png or .ico. Optimal dimensions: 152px x 152px', 'emika' ),
	'section'     => 'general_favicon_section',
	'default'     => '',
	'priority'    => $count++,
) );