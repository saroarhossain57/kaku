<?php
Kirki::add_section('about_page_about_us', array(
	'title'          => esc_html__('About us section', 'kaku'),
	'panel'          => 'kaku_panel',
	'priority'       => 190,
	'section' 		 => 'about_page_settings'

));

//Display section
Kirki::add_field('kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'about_page_about_us_display',
	'label'    => esc_html__('Display Section?', 'kaku'),
	'section'  => 'about_page_about_us',
	'priority' => 10,
	'default'     => true,
]);

//left image
Kirki::add_field('kaku_options', [
	'type'     => 'image',
	'settings' => 'about_page_about_image',
	'label'    => esc_html__('Upload Left image', 'kaku'),
	'section'  => 'about_page_about_us',
	'priority' => 10,
	'active_callback'  => [
		[
			'setting'  => 'about_page_about_us_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);

//title
Kirki::add_field('kaku_options', [
	'type'     => 'text',
	'settings' => 'about_page_about_title',
	'label'    => esc_html__('Title', 'kaku'),
	'section'  => 'about_page_about_us',
	'priority' => 10,
	'default'  => esc_html__('We Are Here For Marketing Agency, Make A Product', 'kaku'),
	'active_callback'  => [
		[
			'setting'  => 'about_page_about_us_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);

//decription
Kirki::add_field('kaku_options', [
	'type'     => 'textarea',
	'settings' => 'about_page_about_decription',
	'label'    => esc_html__('Decription', 'kaku'),
	'section'  => 'about_page_about_us',
	'priority' => 10,
	'default'  => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem deserunt natus molestiae voluptatibus, enim rerum porro ab totam ea excepturi. Quidem deserunt natus molestiae voluptatibus.', 'kaku'),
	'active_callback'  => [
		[
			'setting'  => 'about_page_about_us_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);

//About repeater box
Kirki::add_field('kaku_options', [
	'type'        => 'repeater',
	'label'       => esc_html__('About lists repeater box', 'kaku'),
	'section'     => 'about_page_about_us',
	'priority'    => 10,
	'settings'     => 'about_list_repeater',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Your Custom Value', 'kaku'),
		'field' => 'lists_content',
	],
	'button_label' => esc_html__('Add new List Item', 'kaku'),

	'fields' => [
		'lists_content' => [
			'type'        => 'text',
			'label'       => esc_html__('List Item', 'kaku'),
		]
	],
	'active_callback'  => [
		[
			'setting'  => 'about_page_about_us_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);

//btn lebel
Kirki::add_field('kaku_options', [
	'type'     => 'text',
	'settings' => 'about_page_about_btn_lebel',
	'label'    => esc_html__('Button lebel', 'kaku'),
	'section'  => 'about_page_about_us',
	'priority' => 10,
	'default'  => esc_html__('Contact Us', 'kaku'),
	'active_callback'  => [
		[
			'setting'  => 'about_page_about_us_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);

//btn URL
Kirki::add_field('kaku_options', [
	'type'     => 'text',
	'settings' => 'about_page_about_btn_url',
	'label'    => esc_html__('Button URL', 'kaku'),
	'section'  => 'about_page_about_us',
	'priority' => 10,
	'default'  => esc_html__('#', 'kaku'),
	'active_callback'  => [
		[
			'setting'  => 'about_page_about_us_display',
			'operator' => '===',
			'value'    => true,
		]
	]
]);
