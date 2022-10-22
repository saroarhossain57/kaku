<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaku
 */

get_header();
?>
<section class="section-padding blog-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<main id="primary" class="site-main">
					<?php if (have_posts()) : ?>

						<header class="page-header archive_title">
							<?php
							the_archive_title('<h1 class="page-title">', '</h1>');
							the_archive_description('<div class="archive-description">', '</div>');
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part('template-parts/content', get_post_type());

						endwhile; ?>

						<div class="kaku_pagination"> <?php kaku_pagination(); ?></div>
					<?php
					else :

						get_template_part('template-parts/content', 'none');

					endif;
					?>

				</main><!-- #main -->
			</div>


			<div class="col-lg-4 col-md-4 col-sm-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php 
get_footer();