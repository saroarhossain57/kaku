<?php
Kirki::add_section( 'homepage_blog_settings', array(
    'title'          => esc_html__( 'Blog section', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 160,
    'section' 		 => 'homepage_settings'
) );

//About section display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'homepage_blog_display',
	'label'    => esc_html__( 'Display home page blog section?', 'kaku' ),
	'section'  => 'homepage_blog_settings',
	'priority' => 10,
	'default'     => true,
] );

//Blog heading
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'home_blog_heading',
	'label'    => esc_html__( 'Heading', 'kaku' ),
	'section'  => 'homepage_blog_settings',
	'priority' => 10,
	'default'     => esc_html__( 'OUR BLOG', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'homepage_blog_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Blog sub heading
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'home_blog_sub_heading',
	'label'    => esc_html__( 'Sub heading', 'kaku' ),
	'section'  => 'homepage_blog_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Check Our Recent News', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'homepage_blog_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Blog top description 
Kirki::add_field( 'kaku_options', [
	'type'     => 'textarea',
	'settings' => 'home_blog_description',
	'label'    => esc_html__( 'Section top short dscription', 'kaku' ),
	'section'  => 'homepage_blog_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem deserunt natus molestiae voluptatibus, enim rerum porro ab totam ea excepturi.', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'homepage_blog_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );
