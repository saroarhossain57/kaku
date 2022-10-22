<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaku
 */

get_header();
$sidebar_layout = kaku_sidebar_layout();
?>
<section class="section-padding blog-section">
    <div class="container">
        <div class="row">
            <?php
            if ($sidebar_layout == 'right-sidebar') { ?>

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <main id="primary" class="site-main">

                        <?php
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/content', 'page');

                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </main><!-- #main -->
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <?php
                    get_sidebar(); ?>
                </div>
            <?php } else { ?>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <main id="primary" class="site-main">

                        <?php
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/content', 'page');

                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                    </main><!-- #main -->
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>