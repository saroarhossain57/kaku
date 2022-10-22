<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kaku
 */

get_header();
?>
<section class="blog-details">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<main id="primary" class="site-main">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', get_post_type());

						$post_navigation =  get_the_post_navigation();
						if ($post_navigation) { ?>
							<div class="kaku_post_navigation">
								<?php echo wp_kses_post($post_navigation); ?>
							</div>
					<?php }

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
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
