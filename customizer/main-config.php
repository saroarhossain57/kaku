<?php
if (class_exists('kirki')) {

Kirki::add_config( 'kaku_options', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'kaku_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Kaku Theme Options', 'kaku' ),
) );

//Top Bar section Settings
get_template_part('customizer/kaku-customizer-settings/c-topbar');

//Banner section Settings
get_template_part('customizer/kaku-customizer-settings/c-banner');

//About us section Settings
get_template_part('customizer/kaku-customizer-settings/c-about-us');

//Service section Settings
get_template_part('customizer/kaku-customizer-settings/c-service');

//Testimonial section Settings
get_template_part('customizer/kaku-customizer-settings/c-testimonial');

//Blog section Settings
get_template_part('customizer/kaku-customizer-settings/c-blog');

//About Us page Settings
get_template_part('customizer/kaku-customizer-settings/page-customizer/about/c-about-page');

//Contact Us page Settings
get_template_part('customizer/kaku-customizer-settings/page-customizer/contact/c-contact-page');

//Footer CTA Section Settings
get_template_part('customizer/kaku-customizer-settings/c-footer-cta');

//Footer Bottom Settings
get_template_part('customizer/kaku-customizer-settings/c-footer-bottom');

//Blog page Settings
get_template_part('customizer/kaku-customizer-settings/c-blog-page');

}