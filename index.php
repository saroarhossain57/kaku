<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaku
 */

get_header();
$blog_sidebar_layout = get_theme_mod('blog_page_sidebar_display');
?>

<!-- blog start-->
<section class="section-padding blog-section">
	<div class="container">
		<div class="row">
			<?php 
			if ( $blog_sidebar_layout == 'right-sidebar' ) { ?>
			  <div class="col-lg-8 col-md-8 col-sm-12">
				<main id="primary" class="site-main">
					<?php
					if (have_posts()) :

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
			<?php }else{ ?>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<main id="primary" class="site-main">
					<?php
					if (have_posts()) :

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
			<?php }
			 ?>
		</div>
	</div>
</section>

<?php
get_footer();
