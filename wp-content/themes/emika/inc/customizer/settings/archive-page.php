<?php
/**
 * Archive Page
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'archive_hr_1',
	'section'  => 'archive_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'image',
	'settings'    => 'emika_archive_bg_image',
	'label'       => esc_html__( 'Header image', 'emika' ),
	'section'     => 'archive_section',
	'default'     => '',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'archive_hr_2',
	'section'  => 'archive_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'radio-image',
	'settings'    => 'emika_archive_layout',
	'label'       => esc_html__( 'Page Layout', 'emika' ),
	'section'     => 'archive_section',
	'default'     => 'grid-3',
	'priority'    => $count++,
	'choices'     => array(
		'grid-1'	=> EMIKA_THEME_ROOT . '/core/customizer/images/grid-1.png',
		'grid-2'  => EMIKA_THEME_ROOT . '/core/customizer/images/grid-2.png',
		'grid-3'	=> EMIKA_THEME_ROOT . '/core/customizer/images/grid-3.png',
	),
) );