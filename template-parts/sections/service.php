<?php
    $kaku_service_display = get_theme_mod('service_display');
    if ('1' == $kaku_service_display) {

      $kaku_service_title = get_theme_mod('service_heading');
      $kaku_service_sub_title = get_theme_mod('service_sub_heading');
      $kaku_service_top_description = get_theme_mod('service_description');
      $kaku_service_repeaters = get_theme_mod('service_repeater');
    ?>
      <!-- services start-->
      <section class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- service heading start -->
              <div class="section-content service-content">
                <div class="service-heading">
                  <?php
                  if ($kaku_service_title) { ?>
                    <h2><?php echo esc_html($kaku_service_title); ?></h2>
                  <?php } ?>
                </div>
                <?php
                if ($kaku_service_sub_title) { ?>
                  <h2><?php echo esc_html($kaku_service_sub_title); ?></h2>
                <?php } ?>

                <?php
                if ($kaku_service_top_description) { ?>
                  <p><?php echo esc_html($kaku_service_top_description); ?></p>
                <?php } ?>
              </div>
              <!-- service heading end -->
            </div>
          </div>

          <div class="row all-services">
            <?php
            if ($kaku_service_repeaters) {
              foreach ($kaku_service_repeaters as $kaku_service_repeater) {
            ?>
                <!-- single service strat-->
                <div class="col-lg-4 col-md-6">
                  <div class="single-service">
                    <?php

                    if ($kaku_service_repeater['service_icon']) { ?>
                      <div class="service-image">
                        <i class="<?php echo esc_attr($kaku_service_repeater['service_icon']); ?>"></i>
                      </div>
                    <?php }
                    ?>

                    <?php
                    if ($kaku_service_repeater['service_title']) { ?>
                      <h3><?php echo esc_html($kaku_service_repeater['service_title']); ?></h3>
                    <?php }
                    ?>

                    <?php
                    if ($kaku_service_repeater['service_description']) { ?>
                      <p><?php echo esc_html($kaku_service_repeater['service_description']); ?></p>
                    <?php }
                    ?>
                  </div>
                </div>
                <!-- single service end-->
            <?php }
            } ?>
          </div>
        </div>
      </section>
      <!-- services end-->

    <?php } ?>