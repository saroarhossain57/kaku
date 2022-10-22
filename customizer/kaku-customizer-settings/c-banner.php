<?php
Kirki::add_section( 'homepage_settings', array(
    'title'          => esc_html__( 'Home Page', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 11,
) );

Kirki::add_section( 'banner_settings', array(
    'title'          => esc_html__( 'Banner section', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 10,
    'section' 		 => 'homepage_settings'
) );

//Banner section display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'banner_display',
	'label'    => esc_html__( 'Display Banner section?', 'kaku' ),
	'section'  => 'banner_settings',
	'priority' => 10,
	'default'     => true,
] );

//Banner background image
Kirki::add_field( 'kaku_options', [
	'type'     => 'image',
	'settings' => 'banner_image',
	'label'    => esc_html__( 'Upload banner image', 'kaku' ),
	'section'  => 'banner_settings',
	'priority' => 10,
	'active_callback'  => [
		[
			'setting'  => 'banner_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Banner heading 
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'banner_heading',
	'label'    => esc_html__( 'Banner heading', 'kaku' ),
	'section'  => 'banner_settings',
	'priority' => 10,
	'default'     => esc_html__( 'LOREM IPSUM', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'banner_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Banner sub heading 
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'banner_sub_heading',
	'label'    => esc_html__( 'Banner sub heading', 'kaku' ),
	'section'  => 'banner_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Digital Marketing & Web Solution', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'banner_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Banner description 
Kirki::add_field( 'kaku_options', [
	'type'     => 'textarea',
	'settings' => 'banner_description',
	'label'    => esc_html__( 'Banner description', 'kaku' ),
	'section'  => 'banner_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem deserunt natus molestiae voluptatibus, enim rerum porro ab totam ea excepturi.', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'banner_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Banner button lebel 
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'banner_btn_lebel',
	'label'    => esc_html__( 'Button lebel', 'kaku' ),
	'section'  => 'banner_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Read More', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'banner_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Banner button URL 
Kirki::add_field( 'kaku_options', [
	'type'     => 'link',
	'settings' => 'banner_btn_url',
	'label'    => esc_html__( 'Button URL', 'kaku' ),
	'section'  => 'banner_settings',
	'priority' => 10,
	'default'     => esc_html__( '#', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'banner_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Hidden parent section feild
Kirki::add_field( 'kaku_options', [
	'type'     => 'hidden',
	'settings' => 'home_hidden',
	'section'  => 'homepage_settings',
] );