<?php
$kaku_testimonial_title = get_theme_mod('testimonial_heading');
$kaku_testimonial_sub_title = get_theme_mod('testimonial_sub_heading');
$kaku_testimonial_top_description = get_theme_mod('testimonial_description');
$kaku_testimonial_repeaters = get_theme_mod('testimonial_repeater');
?>
<!-- testimonials start-->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- testimonial heading start -->
        <div class="section-content testimonial-content">
          <?php
          if ($kaku_testimonial_title) { ?>
            <div class="testimonial-heading">
              <h2><?php echo esc_html($kaku_testimonial_title); ?></h2>
            </div>
          <?php }

          if ($kaku_testimonial_sub_title) { ?>
            <h2><?php echo esc_html($kaku_testimonial_sub_title); ?></h2>
          <?php }

          if ($kaku_testimonial_top_description) { ?>
            <p><?php echo esc_html($kaku_testimonial_top_description); ?></p>
          <?php }
          ?>
        </div>
        <!-- testimonial heading end -->
      </div>
    </div>

    <?php
    if ($kaku_testimonial_repeaters) { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="testimonial-active owl-carousel">
            <?php
            foreach ($kaku_testimonial_repeaters as $kaku_testimonial_repeater) {
              $reviewer_image = $kaku_testimonial_repeater['reviewer_image'];
              $reviewer_name = $kaku_testimonial_repeater['reviewer_name'];
              $reviewer_designation = $kaku_testimonial_repeater['reviewer_designation'];
              $reviewer_content = $kaku_testimonial_repeater['reviewer_content'];
            ?>
              <!-- single testimonials strat -->
              <div class="single-testimonial">
                <?php
                if ($reviewer_image) { ?>
                  <div class="testimonial-img">
                    <img src="<?php echo esc_url($reviewer_image); ?>" alt="<?php _e('Testimonial Image', 'kaku'); ?>" />
                  </div>
                <?php }

                if ($reviewer_content) { ?>
                  <p><?php echo esc_html($reviewer_content); ?></p>
                <?php }

                if ($reviewer_name) { ?>
                  <h3><?php echo esc_html($reviewer_name); ?></h3>
                <?php }

                if ($reviewer_designation) { ?>
                  <h4><?php echo esc_html($reviewer_designation); ?></h4>
                <?php }
                ?>
              </div>
              <!-- single testimonials end -->
            <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</section>
<!-- testimonials end-->