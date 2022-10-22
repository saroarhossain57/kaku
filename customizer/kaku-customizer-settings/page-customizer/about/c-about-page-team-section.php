<?php

Kirki::add_section('about_page_team', array(
	'title'          => esc_html__('Team section', 'kaku'),
	'panel'          => 'kaku_panel',
	'priority'       => 190,
	'section' 		 => 'about_page_settings'

));

//Display section
Kirki::add_field('kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'about_page_team_display',
	'label'    => esc_html__('Display Section?', 'kaku'),
	'section'  => 'about_page_team',
	'priority' => 10,
	'default'     => true,
]);

//title
Kirki::add_field('kaku_options', [
	'type'     => 'text',
	'settings' => 'about_page_team_title',
	'label'    => esc_html__('Title', 'kaku'),
	'section'  => 'about_page_team',
	'priority' => 10,
	'default'  => esc_html__('OUR TEAM', 'kaku'),
	'active_callback'  => [
		[
			'setting'  => 'about_page_team_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);

//Sub Title
Kirki::add_field('kaku_options', [
	'type'     => 'text',
	'settings' => 'about_page_team_sub_title',
	'label'    => esc_html__('Sub Title', 'kaku'),
	'section'  => 'about_page_team',
	'priority' => 10,
	'default'  => esc_html__('Our Best Dedicated Team', 'kaku'),
	'active_callback'  => [
		[
			'setting'  => 'about_page_team_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);

//description
Kirki::add_field('kaku_options', [
	'type'     => 'textarea',
	'settings' => 'about_page_team_top_description',
	'label'    => esc_html__('Description', 'kaku'),
	'section'  => 'about_page_team',
	'priority' => 10,
	'default'  => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem deserunt natus molestiae voluptatibus, enim rerum porro ab totam ea excepturi.', 'kaku'),
	'active_callback'  => [
		[
			'setting'  => 'about_page_team_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);

//About repeater box
Kirki::add_field('kaku_options', [
	'type'        => 'repeater',
	'label'       => esc_html__('Team member repeater', 'kaku'),
	'section'     => 'about_page_team',
	'priority'    => 10,
	'settings'     => 'team_member_repeater',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Your Custom Value', 'kaku'),
		'field' => 'name',
	],
	'button_label' => esc_html__('Add new Team Member', 'kaku'),

	'fields' => [
		'image' => [
			'type'        => 'image',
			'label'       => esc_html__('Team Member Image', 'kaku'),
		],
		'name' => [
			'type'        => 'text',
			'label'       => esc_html__('Team Member Name', 'kaku'),
		],
		'designation' => [
			'type'        => 'text',
			'label'       => esc_html__('Team Member Designation', 'kaku'),
		],
		'facebook' => [
			'type'        => 'url',
			'label'       => esc_html__('Facebook URL', 'kaku'),
		],
		'twitter' => [
			'type'        => 'url',
			'label'       => esc_html__('Twitter URL', 'kaku'),
		],
		'linkedin' => [
			'type'        => 'url',
			'label'       => esc_html__('Linkedin URL', 'kaku'),
		],
		'instagram' => [
			'type'        => 'url',
			'label'       => esc_html__('Instagram URL', 'kaku'),
		],
	],
	'active_callback'  => [
		[
			'setting'  => 'about_page_team_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);
