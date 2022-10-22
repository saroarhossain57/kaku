<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaku
 */

?>

<div class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Nothing Found', 'kaku'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if (is_home() && current_user_can('publish_posts')) :
			
			
			printf(
				/* translators: %1$s: redirect to publish a post */
				'<p>' . wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'kaku'), array('a' => array('href' => array(),),)) . '</p>',
				esc_url(admin_url('post-new.php'))
			);

		elseif (is_search()) :
		?>
			<div class="search_not_found">
				<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'kaku'); ?></p>
			</div>
		<?php
			get_search_form();

		else :
		?>
			<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'kaku'); ?></p>
		<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</div><!-- .no-results -->