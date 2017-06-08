<?php
/**
 * Front Page
 */
$count = 4;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'front_page_hr_1',
	'section'  => 'front_page_section',
	'default'  => '<hr>',
	'priority' => '1',
) );

function emika_front_page_setting( $wp_customize ) {
	$wp_customize->get_control( 'show_on_front' )->section  = 'front_page_section';
	$wp_customize->get_control( 'show_on_front' )->priority = '2';
	$wp_customize->get_control( 'show_on_front' )->label    = esc_html__( 'Choose a page', 'emika' );
	$wp_customize->get_control( 'page_on_front' )->section  = 'front_page_section';
	$wp_customize->get_control( 'page_on_front' )->priority = '3';
	$wp_customize->get_control( 'page_on_front' )->label    = esc_html__( 'Choose a page', 'emika' );
}

add_action( 'customize_register', 'emika_front_page_setting' );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'front_page_hr_2',
	'section'  => 'front_page_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_home_title_enable',
	'label'       => esc_html__( 'Show Home Title on site', 'emika' ),
	'section'     => 'front_page_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'text',
	'settings' => 'emika_home_title',
	'label'    => esc_html__( 'Home Title', 'emika' ),
	'section'  => 'front_page_section',
	'default'  => '',
	'priority' => $count++,
	'required'    => array(
		array(
			'setting'  => 'emika_home_title_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'front_page_hr_3',
	'section'  => 'front_page_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_home_desc_enable',
	'label'       => esc_html__( 'Show Home Description on site', 'emika' ),
	'section'     => 'front_page_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'textarea',
	'settings' => 'emika_home_description',
	'label'    => esc_html__( 'Home Description', 'emika' ),
	'section'  => 'front_page_section',
	'default'  => '',
	'priority' => $count++,
	'required'    => array(
		array(
			'setting'  => 'emika_home_desc_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'front_page_hr_4',
	'section'  => 'front_page_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'image',
	'settings'    => 'emika_front_page_bg_image',
	'label'       => esc_html__( 'Header image', 'emika' ),
	'section'     => 'front_page_section',
	'default'     => '',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'front_page_hr_5',
	'section'  => 'front_page_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'radio-image',
	'settings'    => 'emika_index_layout',
	'label'       => esc_html__( 'Front Page Layout', 'emika' ),
	'section'     => 'front_page_section',
	'default'     => 'grid-3',
	'priority'    => $count++,
	'choices'     => array(
		'grid-1'	=> EMIKA_THEME_ROOT . '/core/customizer/images/grid-1.png',
		'grid-2'  => EMIKA_THEME_ROOT . '/core/customizer/images/grid-2.png',
		'grid-3'	=> EMIKA_THEME_ROOT . '/core/customizer/images/grid-3.png',
	),
) );