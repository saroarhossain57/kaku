<?php
    $kaku_footer_cta_display = get_theme_mod('footer_cta_display');
    if ('1' == $kaku_footer_cta_display) {

      $kaku_cta_title = get_theme_mod('cta_heading');
      $kaku_cta_btn_lebel = get_theme_mod('cta_btn_lebel');
      $kaku_cta_btn_url = get_theme_mod('cta_btn_url');

    ?>
      <!-- cta start-->
      <section class="cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-sm-12">
              <?php
              if ($kaku_cta_title) { ?>
                <div class="cta-content">
                  <h2><?php echo esc_html($kaku_cta_title); ?></h2>
                </div>
              <?php }
              ?>
            </div>
            <div class="col-md-5 col-sm-12">
              <?php
              if ($kaku_cta_btn_lebel) { ?>
                <div class="cta-button">
                  <a href="<?php echo esc_url($kaku_cta_btn_url); ?>" class="primary-btn cta-btn">
                    <?php echo esc_html($kaku_cta_btn_lebel); ?></a>
                </div>
              <?php }
              ?>
            </div>
          </div>
        </div>
      </section>
      <!-- cta end-->
    <?php } ?>