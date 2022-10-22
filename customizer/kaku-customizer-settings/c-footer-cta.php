<?php
Kirki::add_section( 'footer_settings', array(
    'title'          => esc_html__( 'Footer', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 15,
) );

//CTA display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'footer_cta_display',
	'label'    => esc_html__( 'Display CTA Section?', 'kaku' ),
	'section'  => 'footer_settings',
	'priority' => 20,
	'default'     => true,
] );

//CTA Heading 
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'cta_heading',
	'label'    => esc_html__( 'Cta Heading', 'kaku' ),
	'section'  => 'footer_settings',
	'priority' => 10,
	'default' => __('Great Things In Business Are Never Done By One Person.','kaku'),
	'active_callback'  => [
		[
			'setting'  => 'footer_cta_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//CTA btn lebel
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'cta_btn_lebel',
	'label'    => esc_html__( 'Cta Button Lebel', 'kaku' ),
	'section'  => 'footer_settings',
	'priority' => 10,
	'default' => __('Purchase Now','kaku'),
	'active_callback'  => [
		[
			'setting'  => 'footer_cta_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//CTA btn URL
Kirki::add_field( 'kaku_options', [
	'type'     => 'link',
	'settings' => 'cta_btn_url',
	'label'    => esc_html__( 'Cta Button URL', 'kaku' ),
	'section'  => 'footer_settings',
	'priority' => 10,
	'active_callback'  => [
		[
			'setting'  => 'footer_cta_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );
