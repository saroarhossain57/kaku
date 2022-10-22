<?php

Kirki::add_section('about_page_testimonial', array(
	'title'          => esc_html__('Testimonial section', 'kaku'),
	'panel'          => 'kaku_panel',
	'priority'       => 190,
	'section' 		 => 'about_page_settings'

));

//Display section
Kirki::add_field('kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'about_page_testimonial_display',
	'label'    => esc_html__('Display Section?', 'kaku'),
	'section'  => 'about_page_testimonial',
	'priority' => 10,
	'default'     => true,
]);
