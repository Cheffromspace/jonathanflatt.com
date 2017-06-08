<?php
/**
 * 404 Page
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'page_404_hr_1',
	'section'  => 'page_404_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'image',
	'settings'    => 'emika_page_404_bg_image',
	'label'       => esc_html__( 'Header image', 'emika' ),
	'section'     => 'page_404_section',
	'default'     => '',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'page_404_hr_2',
	'section'  => 'page_404_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'textarea',
	'settings'    => 'emika_page_404_message',
	'label'       => esc_html__( 'Message on 404 page', 'emika' ),
	'section'     => 'page_404_section',
	'default'     => esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'emika' ),
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'page_404_hr_3',
	'section'  => 'page_404_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_page_404_search_form',
	'label'       => esc_html__( 'Show search form', 'emika' ),
	'section'     => 'page_404_section',
	'default'     => '1',
	'priority'    => $count++,
) );