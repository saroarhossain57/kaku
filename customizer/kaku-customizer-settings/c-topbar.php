<?php
Kirki::add_section( 'header_settings', array(
    'title'          => esc_html__( 'Header', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 10,
) );

Kirki::add_section( 'topbar_settings', array(
    'title'          => esc_html__( 'Topbar settings', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 9,
    'section' 		 => 'header_settings'

) );

//Topbar display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'topbar_display',
	'label'    => esc_html__( 'Display Topbar?', 'kaku' ),
	'section'  => 'topbar_settings',
	'priority' => 10,
	'default'     => true,
] );

//Phone Number 
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'topbar_phone_number',
	'label'    => esc_html__( 'Phone number', 'kaku' ),
	'section'  => 'topbar_settings',
	'priority' => 10,
	'active_callback'  => [
		[
			'setting'  => 'topbar_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Email 
Kirki::add_field( 'kaku_options', [
	'type'     => 'email',
	'settings' => 'topbar_email_address',
	'label'    => esc_html__( 'Email address', 'kaku' ),
	'section'  => 'topbar_settings',
	'priority' => 10,
	'active_callback'  => [
		[
			'setting'  => 'topbar_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Hidden parent section feild
Kirki::add_field( 'kaku_options', [
	'type'     => 'hidden',
	'settings' => 'topbar_hidden',
	'section'  => 'header_settings',
] );
