<?php
Kirki::add_section( 'testimonial_settings', array(
    'title'          => esc_html__( 'Testimonial section', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 160,
    'section' 		 => 'homepage_settings'
) );

//About section display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'testimonial_display',
	'label'    => esc_html__( 'Display testimonial section?', 'kaku' ),
	'section'  => 'testimonial_settings',
	'priority' => 10,
	'default'     => true,
] );

//Service heading
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'testimonial_heading',
	'label'    => esc_html__( 'Heading', 'kaku' ),
	'section'  => 'testimonial_settings',
	'priority' => 10,
	'default'     => esc_html__( 'OUR TESTIMONIALS', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'testimonial_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Service sub heading
Kirki::add_field( 'kaku_options', [
	'type'     => 'text',
	'settings' => 'testimonial_sub_heading',
	'label'    => esc_html__( 'Sub heading', 'kaku' ),
	'section'  => 'testimonial_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Check Our Client Reviews', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'testimonial_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Service top description 
Kirki::add_field( 'kaku_options', [
	'type'     => 'textarea',
	'settings' => 'testimonial_description',
	'label'    => esc_html__( 'Section top short dscription', 'kaku' ),
	'section'  => 'testimonial_settings',
	'priority' => 10,
	'default'     => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem deserunt natus molestiae voluptatibus, enim rerum porro ab totam ea excepturi.', 'kaku' ),
	'active_callback'  => [
		[
			'setting'  => 'testimonial_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );

//Service repeater box
Kirki::add_field( 'kaku_options', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Review repeater box', 'kaku' ),
	'section'     => 'testimonial_settings',
	'priority'    => 10,
	'settings'     => 'testimonial_repeater',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value', 'kaku' ),
		'field' => 'reviewer_name',
	],
	'button_label' => esc_html__('Add new review ', 'kaku' ),

	'fields' => [
		'reviewer_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Reviewer image', 'kaku' ),
		],
		'reviewer_name' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Reviewer name', 'kaku' ),
		],
		'reviewer_designation'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Reviewer designation', 'kaku' )
		],
		'reviewer_content'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Review content', 'kaku' )
		],
	],
	'active_callback'  => [
		[
			'setting'  => 'testimonial_display',
			'operator' => '===',
			'value'    => true,
		]
	]
] );