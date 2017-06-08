<?php
/**
 * Site Identity
 */
Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'identity_hr_1',
	'section'  => 'general_identity_section',
	'default'  => '<hr>',
	'priority' => '1',
) );

function emika_identity_setting( $wp_customize ) {
	$wp_customize->get_control( 'blogname' )->section         = 'general_identity_section';
	$wp_customize->get_control( 'blogname' )->priority        = '2';
	$wp_customize->get_control( 'blogname' )->label           = esc_html__( 'Site Title', 'emika' );
	$wp_customize->get_control( 'blogdescription' )->section  = 'general_identity_section';
	$wp_customize->get_control( 'blogdescription' )->priority = '3';
	$wp_customize->get_control( 'blogdescription' )->label    = esc_html__( 'Tagline', 'emika' );
}

add_action( 'customize_register', 'emika_identity_setting' );