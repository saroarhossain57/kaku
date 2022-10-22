<?php
Kirki::add_section( 'page_settings', array(
    'title'          => esc_html__( 'Kaku pages', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 12,
) );

Kirki::add_section( 'about_page_settings', array(
    'title'          => esc_html__( 'About page', 'kaku' ),
    'panel'          => 'kaku_panel',
    'priority'       => 170,
    'section' 		 => 'page_settings'

) );

//Banner section display
Kirki::add_field( 'kaku_options', [
	'type'     => 'checkbox',
	'settings' => 'page_banner_display',
	'label'    => esc_html__( 'Display About Page Banner?', 'kaku' ),
	'section'  => 'about_page_settings',
	'priority' => 8,
	'default'     => true,
] );

//About Us page's About Us Section Settings
get_template_part('customizer/kaku-customizer-settings/page-customizer/about/c-about-page-about-section');

//About Us page's Team Section Settings
get_template_part('customizer/kaku-customizer-settings/page-customizer/about/c-about-page-team-section');

//About Us page's Testimonial Section Settings
get_template_part('customizer/kaku-customizer-settings/page-customizer/about/c-about-page-testimonial-section');

//Hidden parent section feild
Kirki::add_field( 'kaku_options', [
	'type'     => 'hidden',
	'settings' => 'page_hidden',
	'section'  => 'page_settings',
] );
