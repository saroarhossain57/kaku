<?php
Kirki::add_section( 'service_settings', array(
    'title'          => esc_html__( 'Service section', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 160,
    'section' 		 => 'homepage_settings'
) );

//About section display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'service_display',
	'label'    => esc_html__( 'Display service section?', 'kaku' ),
	'section'  => 'service_settings',
	'priority' => 10,
	'default'     => true,
] );

//Service heading
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'service_heading',
	'label'    => esc_html__( 'Heading', 'kaku' ),
	'section'  => 'service_settings',
	'priority' => 10,
	'default'     => esc_html__( 'OUR SERVICES', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'service_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Service sub heading
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'service_sub_heading',
	'label'    => esc_html__( 'Sub heading', 'kaku' ),
	'section'  => 'service_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Let’s Check Our Services', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'service_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Service top description 
Kirki::add_field( 'kaku_options', [
	'type'     => 'textarea',
	'settings' => 'service_description',
	'label'    => esc_html__( 'Section top short dscription', 'kaku' ),
	'section'  => 'service_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem deserunt natus molestiae voluptatibus, enim rerum porro ab totam ea excepturi.', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'service_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Service repeater box
Kirki::add_field( 'kaku_options', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Service repeater box', 'kaku' ),
	'section'     => 'service_settings',
	'priority'    => 10,
	'settings'     => 'service_repeater',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value', 'kaku' ),
		'field' => 'service_title',
	],
	'button_label' => esc_html__('Add new service ', 'kaku' ),

	'fields' => [
		'service_icon' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Service Icon', 'kaku' ),
			'description'       => esc_html__( 'Write service icon name from font-awesome. EX: fas fa-paint-roller', 'kaku' ),
		],
		'service_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Service title', 'kaku' ),
		],
		'service_description'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Service description', 'kaku' )
		],
	],
	'active_callback'  => [
		[
			'setting'  => 'service_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );