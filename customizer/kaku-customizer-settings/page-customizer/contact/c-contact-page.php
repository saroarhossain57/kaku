<?php

Kirki::add_section( 'contact_page_settings', array(
    'title'          => esc_html__( 'Contact page', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 170,
    'section' 		 => 'page_settings'

) );

//Banner section display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'contact_page_banner_display',
	'label'    => esc_html__( 'Display Contact Page Banner?', 'kaku' ),
	'section'  => 'contact_page_settings',
	'priority' => 8,
	'default'     => true,
] );

//title
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'contact_page_title',
	'label'    => esc_html__( 'Title', 'kaku' ),
	'section'  => 'contact_page_settings',
	'priority' => 10,
	'default'  => esc_html__('CONTACT US','kaku'),
	'active_callback'  => [
		[
			'setting'  => 'contact_page_banner_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//sub title
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'contact_sub_page_title',
	'label'    => esc_html__( 'Sub Title', 'kaku' ),
	'section'  => 'contact_page_settings',
	'priority' => 10,
	'default'  => esc_html__('Feel Free To Knock Us','kaku'),
	'active_callback'  => [
		[
			'setting'  => 'contact_page_banner_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//description
Kirki::add_field( 'kaku_options', [
	'type'     => 'textarea',
	'settings' => 'contact_page_description',
	'label'    => esc_html__( 'Description', 'kaku' ),
	'section'  => 'contact_page_settings',
	'priority' => 10,
	'default'  => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem deserunt natus molestiae voluptatibus, enim rerum porro ab totam ea excepturi.','kaku'),
	'active_callback'  => [
		[
			'setting'  => 'contact_page_banner_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//repeater fields
Kirki::add_field( 'kaku_options', [
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Contact Info Repeater', 'kaku' ),
	'section'     => 'contact_page_settings',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value.', 'kaku' ),
		'field' => 'title',
	],
	'settings'    => 'contact_repeater_setting',
	'fields' => [
		'icon' => [
			'type'        => 'text',
			'label'       => esc_attr__( 'font-awesome icon name', 'kaku' ),
			'description' => esc_attr__( 'Write font-awesome icon name. EX: fas fa-phone, far fa-envelope etc', 'kaku' ),
		],
		'title' => [
			'type'        => 'text',
			'label'       => esc_attr__( 'Info title', 'kaku' )
		],
		'value' => [
			'type'        => 'text',
			'label'       => esc_attr__( 'Info content', 'kaku' ),
			'description' => esc_attr__( 'Write phone number or mail address or address', 'kaku' ),
		],
	],
] );

//Hidden parent section feild
Kirki::add_field( 'kaku_options', [
	'type'     => 'hidden',
	'settings' => 'page_hidden',
	'section'  => 'page_settings',
] );
