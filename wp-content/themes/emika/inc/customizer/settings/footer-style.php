<?php
/**
 * Footer Style
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'footer_style_hr_1',
	'section'  => 'footer_style_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'color',
	'settings'    => 'emika_footer_bg_color',
	'label'       => esc_html__( 'Background color', 'emika' ),
	'section'     => 'footer_style_section',
	'default'     => EMIKA_SECONDARY_COLOR,
	'priority'    => $count++,
	'output'      => array(
		array(
			'element'  => '.site-footer',
			'property' => 'background-color',
		)
	)
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'color',
	'settings'    => 'emika_footer_text_color',
	'label'       => esc_html__( 'Text color', 'emika' ),
	'section'     => 'footer_style_section',
	'default'     => '#f5f5f5',
	'priority'    => $count++,
	'output'      => array(
		array(
			'element'  => '.site-footer, .footer p',
			'property' => 'color',
		)
	)
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'color',
	'settings'    => 'emika_footer_link_color',
	'label'       => esc_html__( 'Links color', 'emika' ),
	'section'     => 'footer_style_section',
	'default'     => '#f5f5f5',
	'priority'    => $count++,
	'output'      => array(
		array(
			'element'  => '.site-footer a',
			'property' => 'color',
		)
	)
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'color',
	'settings'    => 'emika_footer_link_hover_color',
	'label'       => esc_html__( 'Link color on hover ', 'emika' ),
	'section'     => 'footer_style_section',
	'default'     => '#71b7e6',
	'priority'    => $count++,
	'output'      => array(
		array(
			'element'  => '.site-footer a:hover, .site-footer a:active, .site-footer a:focus',
			'property' => 'color',
		)
	)
) );