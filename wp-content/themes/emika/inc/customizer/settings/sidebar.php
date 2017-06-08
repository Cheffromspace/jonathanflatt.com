<?php
/**
 * Sidebar
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'sidebar_hr_1',
	'section'  => 'general_sidebar_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_sidebar_enable',
	'label'       => esc_html__( 'Display sidebar', 'emika' ),
	'section'     => 'general_sidebar_section',
	'default'     => '1',
	'priority'    => $count++,
) );