<?php
	$kaku_blog_display = get_theme_mod('homepage_blog_display');
	if ($kaku_blog_display) {
		$kaku_blog_title = get_theme_mod('home_blog_heading');
		$kaku_blog_sub_title = get_theme_mod('home_blog_sub_heading');
		$kaku_blog_top_description = get_theme_mod('home_blog_description');
	?>

    	<!-- blog start-->
    	<section class="section-padding blog-section">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<!-- blog heading start -->
    					<div class="section-content blog-content">
    						<?php
							if ($kaku_blog_title) { ?>
    							<div class="blog-heading">
    								<h2><?php echo esc_html($kaku_blog_title); ?></h2>
    							</div>
    						<?php }

							if ($kaku_blog_sub_title) { ?>
    							<h2><?php echo esc_html($kaku_blog_sub_title); ?></h2>
    						<?php }

							if ($kaku_blog_top_description) { ?>
    							<p><?php echo esc_html($kaku_blog_top_description); ?></p>
    						<?php } ?>
    					</div>
    					<!-- blog heading end -->
    				</div>
    			</div>

    			<div class="row all-blogs">
    				<?php
					$home_blog_query = new WP_Query(array(
						'post_type' => 'post',
						'ignore_sticky_posts' => 1,
						'posts_per_page' => 3
					));
					if ($home_blog_query->have_posts()) {
						while ($home_blog_query->have_posts()) {
							$home_blog_query->the_post(); ?>
    						<!-- single blog item start -->
    						<div class="col-lg-4 col-md-6 col-sm-12">
    							<?php
								/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
								get_template_part('template-parts/content', get_post_type());
								?>
    						</div>
    						<!-- single blog item end -->
    				<?php }
					} ?>
    			</div>
    		</div>
    	</section>
    	<!-- blog end-->
    <?php } ?>