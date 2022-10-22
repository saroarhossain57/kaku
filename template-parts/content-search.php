<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaku
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-blog-item">
		<div class="blog-info">
			<header class="entry-header">
				<?php
				if (has_post_thumbnail()) { ?>
					<div class="blog-image">
						<?php kaku_post_thumbnail(); ?>
					</div>
				<?php } ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php

				if ('post' === get_post_type()) :

				?>
					<p class="post-date"><span class="far fa-clock"></span><i><?php echo get_the_date(); ?></i></p>
					<?php
					if (has_category()) { ?>
						<div class="blog-category">
							<span class="fas fa-tags"></span>
							<?php the_category(); ?>
						</div>
					<?php }

					if (has_tag()) { ?>
						<div class="blog-category blog-tags">
							<span class="fas fa-tag"></span>
							<?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
						</div>
				<?php }

				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'kaku'),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
			<div class="blog-meta align-items-center">
				<?php
				$kaku_author_url = get_author_posts_url(get_the_author_meta('ID')); ?>

				<span class="author">
					<span class="far fa-user-circle"></span>
					<i><a href="<?php echo esc_url($kaku_author_url); ?>"><?php echo esc_html(get_the_author()); ?></a></i>
				</span>

				<span class="blog-button">
					<a href="<?php the_permalink(); ?>" class="blog-btn"><?php esc_html_e('read more', 'kaku'); ?></a>
				</span>
			</div>

		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->