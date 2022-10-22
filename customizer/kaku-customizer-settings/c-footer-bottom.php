<?php
Kirki::add_section( 'footer_settings', array(
    'title'          => esc_html__( 'Footer', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 15,
) );

//CTA Heading 
Kirki::add_field( 'kaku_options', [
	'type'     => 'editor',
	'settings' => 'copyright_text',
	'label'    => esc_html__( 'Copyright Text', 'kaku' ),
	'section'  => 'footer_settings',
	'priority' => 10,
	'default' => __('&copy; 2020 DevsGram. All Rights Reserved by <a href="#">DevsGram</a>','kaku'),
	'active_callback'  => [
		[
			'setting'  => 'footer_cta_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );
