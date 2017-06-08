<?php
/**
 * Single Post
 */
$count = 1;

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'single_post_page_hr_1',
	'section'  => 'single_post_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_category_enable',
	'label'       => esc_html__( 'Display post category', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_date_enable',
	'label'       => esc_html__( 'Display post date', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_author_enable',
	'label'       => esc_html__( 'Display post author', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_tag_enable',
	'label'       => esc_html__( 'Display post tags', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_nav_enable',
	'label'       => esc_html__( 'Display post navigation', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'single_post_page_hr_2',
	'section'  => 'single_post_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_facebook',
	'label'       => esc_html__( 'Show Facebook share button', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_twitter',
	'label'       => esc_html__( 'Show Twitter share button', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_google',
	'label'       => esc_html__( 'Show Google+ share button', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'single_post_page_hr_3',
	'section'  => 'single_post_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     		=> 'select',
	'setting'  		=> 'emika_single_page_author_name',
	'label'    		=> esc_html__( 'Author display name', 'emika' ),
	'description' => esc_html__( 'In header and author block', 'emika' ),
	'section'  		=> 'single_post_section',
	'default'  		=> 'full-name',
	'priority' 		=> $count ++,
	'choices'  		=> array(
		'full-name'  => esc_attr__( 'Full Name', 'emika' ),
		'f-name'     => esc_attr__( 'Only First Name', 'emika' ),
		'l-name'     => esc_attr__( 'Only Last Name', 'emika' ),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_show_author_info',
	'label'       => esc_html__( 'Show author info block', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_author_social',
	'label'       => esc_html__( 'Show author social links', 'emika' ),
	'description' => esc_html__( 'If they are configured in section Social Buttons', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
	'required'    => array(
		array(
			'setting'  => 'emika_single_page_show_author_info',
			'operator' => '=',
			'value'    => '1',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'custom',
	'setting'  => 'single_post_page_hr_4',
	'section'  => 'single_post_section',
	'default'  => '<hr>',
	'priority' => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_single_page_comments_enable',
	'label'       => esc_html__( 'Show comments', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_enable_standard_comments',
	'label'       => esc_html__( 'Show standard comments', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '1',
	'priority'    => $count++,
	'required'    => array(
		array(
			'setting'  => 'emika_single_page_comments_enable',
			'operator' => '=',
			'value'    => '1',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'        => 'toggle',
	'settings'    => 'emika_enable_disqus_comments',
	'label'       => esc_html__( 'Show Disqus comments', 'emika' ),
	'section'     => 'single_post_section',
	'default'     => '0',
	'priority'    => $count++,
	'required'    => array(
		array(
			'setting'  => 'emika_single_page_comments_enable',
			'operator' => '=',
			'value'    => '1',
		),
	),
) );

Kirki::add_field( 'emika_customizer', array(
	'type'     => 'text',
	'settings' => 'emika_disqus_shortname',
	'label'    => esc_html__( 'Disqus shortname', 'emika' ),
	'section'  => 'single_post_section',
	'default'  => '',
	'priority' => $count++,
	'required'    => array(
		array(
			'setting'  => 'emika_enable_disqus_comments',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );