<?php

Kirki::add_section( 'about_settings', array(
    'title'          => esc_html__( 'About us section', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 160,
    'section' 		 => 'homepage_settings'
) );

//About section display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'about_display',
	'label'    => esc_html__( 'Display about section?', 'kaku' ),
	'section'  => 'about_settings',
	'priority' => 10,
	'default'     => true,
] );

//About us image
Kirki::add_field( 'kaku_options', [
	'type'     => 'image',
	'settings' => 'about_image',
	'label'    => esc_html__( 'Upload about image', 'kaku' ),
	'section'  => 'about_settings',
	'priority' => 10,
	'active_callback'  => [
		[
			'setting'  => 'about_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//About us heading
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'about_heading',
	'label'    => esc_html__( 'Heading', 'kaku' ),
	'section'  => 'about_settings',
	'priority' => 10,
	'default'     => esc_html__( 'ABOUT US', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'about_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//About us sub heading 
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'about_sub_heading',
	'label'    => esc_html__( 'Sub heading', 'kaku' ),
	'section'  => 'about_settings',
	'priority' => 10,
	'default'     => esc_html__( 'We Are Here For Marketing Agency, Make A Product', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'about_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Banner description 
Kirki::add_field( 'kaku_options', [
	'type'     => 'textarea',
	'settings' => 'about_description',
	'label'    => esc_html__( 'Description', 'kaku' ),
	'section'  => 'about_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem deserunt natus molestiae voluptatibus, enim rerum porro ab totam ea excepturi.', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'about_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Banner button lebel 
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'about_btn_lebel',
	'label'    => esc_html__( 'Button lebel', 'kaku' ),
	'section'  => 'about_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Read More', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'about_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Banner button URL 
Kirki::add_field( 'kaku_options', [
	'type'     => 'link',
	'settings' => 'about_btn_url',
	'label'    => esc_html__( 'Button URL', 'kaku' ),
	'section'  => 'about_settings',
	'priority' => 10,
	'default'     => esc_html__( '#', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'about_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );
