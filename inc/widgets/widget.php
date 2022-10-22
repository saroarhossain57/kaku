<?php

/**
 * Register widget area.
 */
function kaku_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Right Sidebar', 'kaku'),
		'id'            => 'right_sidebar',
		'description'   => esc_html__('Add widgets here.', 'kaku'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer One', 'kaku'),
		'id'            => 'footer_one',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer Two', 'kaku'),
		'id'            => 'footer_two',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer Three', 'kaku'),
		'id'            => 'footer_three',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'kaku_widgets_init');
