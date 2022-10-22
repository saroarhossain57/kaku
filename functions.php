<?php

/**
 * kaku functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kaku
 */

if (!defined('KAKU_VERSION')) {
	// Replace the version number of the theme on each release.
	define('KAKU_VERSION', '1.0.0');
}

if (!function_exists('kaku_setup')) :
	function kaku_setup()
	{

		load_theme_textdomain('kaku', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		//Let WordPress manage the document title.
		add_theme_support('title-tag');

		//Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// Register nav menu
		register_nav_menus(array('primary_menu' => esc_html__('Primary Menu', 'kaku')));

		//Remove widget block editor
		remove_theme_support( 'widgets-block-editor');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
			'style', 'script',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kaku_custom_background_args',
				array('default-color' => 'ffffff', 'default-image' => '',)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		//Add support for core custom logo.
		add_theme_support('custom-logo', array(
			'height' => 250, 'width' => 250, 'flex-width'  => true,
			'flex-height' => true,
		));

		//Add support for wp block styles.
		add_theme_support("wp-block-styles");

		//Add support for responsive embeds.
		add_theme_support("responsive-embeds");

		//Add support for image alignment.
		add_theme_support("align-wide");

		add_editor_style();
	}
endif;
add_action('after_setup_theme', 'kaku_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * @global int $content_width
 */
function kaku_content_width()
{
	$GLOBALS['content_width'] = apply_filters('kaku_content_width', 640);
}
add_action('after_setup_theme', 'kaku_content_width', 0);


/**
 * Enqueue scripts and styles.
 */
function kaku_scripts()
{
	wp_enqueue_style('google-fonts', "//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap");
	wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'));
	wp_enqueue_style('kaku-all-css', get_theme_file_uri('/assets/css/all.min.css'));
	wp_enqueue_style('owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'));
	wp_enqueue_style('owl-theme', get_theme_file_uri('/assets/css/owl.theme.default.min.css'));
	wp_enqueue_style('kaku-main-css', get_theme_file_uri('/assets/css/style.css'));
	wp_enqueue_style('kaku-responsive-css', get_theme_file_uri('/assets/css/responsive.css'));
	wp_enqueue_style('kaku-style', get_stylesheet_uri(), null, time());
	wp_style_add_data('kaku-style', 'rtl', 'replace');

	wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), '1.0', true);
	wp_enqueue_script('owl-carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array('jquery'), '1.0', true);
	wp_enqueue_script('kaku-main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), KAKU_VERSION, true);
	wp_enqueue_script('kaku-navigation', get_template_directory_uri() . '/js/navigation.js', array(), KAKU_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'kaku_scripts');

/**
 * TGM plugin activation
 */
require get_template_directory() . '/inc/tgmpa/class-tgm-plugin-activation.php';

/**
 * Theme required plugin
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';

/**
 * kirki main configutarion file
 */
require get_template_directory() . '/customizer/main-config.php';


/**
 * Add css class in li and a
 */
require get_template_directory() . '/inc/add-css-class/add-css-class.php';

/**
 * Pagination
 */
require get_template_directory() . '/inc/pagination/pagination.php';

/**
 * Widgets
 */
require get_template_directory() . '/inc/widgets/widget.php';

/**
 * Nav walker
 */
require get_template_directory() . '/inc/nav-walker/kaku-nav-walker.php';

/**
 * Metabox
 */
require get_template_directory() . '/inc/metabox/metabox.php';

/**
 * Return sidebar layouts for pages
 */
function kaku_sidebar_layout()
{
	global $post;

	if (get_post_meta($post->ID, 'kaku_sidebar_layout', true)) {
		return get_post_meta($post->ID, 'kaku_sidebar_layout', true);
	} else {
		return 'right-sidebar';
	}
}

/**
 * Menu fallback_cb
 */
function kaku_menu_fallback_cb() { ?>
	<ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"><?php esc_html_e('Create Menu', 'kaku'); ?></a>
        </li>
    </ul>
<?php }

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}