<?php
/**
 * Copyright and links
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'footer_copyright_hr_1',
	'section'  => 'footer_copyright_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_copyright_enable',
	'label'       => esc_html__( 'Show copyright on footer', 'emika' ),
	'section'     => 'footer_copyright_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'textarea',
	'settings' => 'emika_copyright_text',
	'label'    => esc_html__( 'Copyright text', 'emika' ),
	'section'  => 'footer_copyright_section',
	'default'  => esc_attr__( 'Copyright &copy; 2017 HarbourThemes. All rights reserved.', 'emika' ),
	'priority' => $count++,
	'required'    => array(
		array(
			'setting'  => 'emika_copyright_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'footer_copyright_hr_2',
	'section'  => 'footer_copyright_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_social_links_enable',
	'label'       => esc_html__( 'Show social links on footer', 'emika' ),
	'section'     => 'footer_copyright_section',
	'default'     => '1',
	'priority'    => $count++,
) );