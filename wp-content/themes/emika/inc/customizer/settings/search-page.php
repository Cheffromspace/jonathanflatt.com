<?php
/**
 * Search
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'search_hr_1',
	'section'  => 'search_page_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'image',
	'settings'    => 'emika_search_page_bg_image',
	'label'       => esc_html__( 'Header image', 'emika' ),
	'section'     => 'search_page_section',
	'default'     => '',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'search_hr_2',
	'section'  => 'search_page_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_search_only_posts',
	'label'       => esc_html__( 'Search only posts', 'emika' ),
	'section'     => 'search_page_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'search_hr_3',
	'section'  => 'search_page_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'radio-image',
	'settings'    => 'emika_search_page_layout',
	'label'       => esc_html__( 'Search Page Layout', 'emika' ),
	'section'     => 'search_page_section',
	'default'     => 'grid-3',
	'priority'    => $count++,
	'choices'     => array(
		'grid-1'	=> EMIKA_THEME_ROOT . '/core/customizer/images/grid-1.png',
		'grid-2'  => EMIKA_THEME_ROOT . '/core/customizer/images/grid-2.png',
		'grid-3'	=> EMIKA_THEME_ROOT . '/core/customizer/images/grid-3.png',
	),
) );