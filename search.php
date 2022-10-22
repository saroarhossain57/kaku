<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kaku
 */

get_header();
?>
<section class="section-padding blog-section search">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12">
				<main id="primary" class="site-main">
  
					<?php if (have_posts()) : ?>

						<header class="page-header search_header">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf(esc_html__('Search Results for: %s', 'kaku'), '<span>' . get_search_query() . '</span>');
								?>
							</h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part('template-parts/content', 'search');

						endwhile; ?>

						<div class="kaku_pagination"> <?php kaku_pagination(); ?></div>

					<?php

					else :

						get_template_part('template-parts/content', 'none');

					endif;
					?>

				</main><!-- #main -->
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
