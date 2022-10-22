<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kaku
 */

get_header();
?>
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12">

				<main id="primary" class="site-main">
					<div class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'kaku'); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e('It looks like nothing was found at this location. Try another keyword', 'kaku'); ?></p>

							<?php get_search_form(); ?>

						</div><!-- .page-content -->
					</div><!-- .error-404 -->

				</main><!-- #main -->
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
