<?php
Kirki::add_section( 'blog_page_settings', array(
    'title'          => esc_html__( 'Blog', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 13,
) );

//Banner section display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'blog_page_sidebar_display',
	'label'    => esc_html__( 'Display Sidebar?', 'kaku' ),
	'section'  => 'blog_page_settings',
	'priority' => 10,
	'default'     => true,
] );