<?php
    $kaku_about_display = get_theme_mod('about_display');
    if ('1' == $kaku_about_display) {

      $kaku_about_img = get_theme_mod('about_image');
      $kaku_about_title = get_theme_mod('about_heading');
      $kaku_about_sub_title = get_theme_mod('about_sub_heading');
      $kaku_about_description = get_theme_mod('about_description');
      $kaku_about_btn_lebel = get_theme_mod('about_btn_lebel');
      $kaku_about_btn_url = get_theme_mod('about_btn_url');

    ?>
      <!-- about us start-->
      <section class="section-padding">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="about-img">
                <?php
                if ($kaku_about_img) { ?>
                  <img src="<?php echo esc_url($kaku_about_img); ?>" alt="<?php esc_attr_e('About Image', 'kaku'); ?>" />
                <?php }
                ?>
              </div>
            </div>

            <div class="col-md-7">
              <div class="section-content about-content">
                <div class="about-heading">
                  <?php
                  if ($kaku_about_title) { ?>
                    <h2><?php echo esc_html($kaku_about_title); ?></h2>
                  <?php }
                  ?>
                </div>
                <?php
                if ($kaku_about_sub_title) { ?>
                  <h2><?php echo esc_html($kaku_about_sub_title); ?></h2>
                <?php }
                ?>

                <?php
                if ($kaku_about_description) { ?>
                  <p><?php echo esc_html($kaku_about_description); ?></p>
                <?php }
                ?>

                <?php
                if ($kaku_about_btn_lebel) { ?>
                  <div class="about-buttom">
                    <a class="primary-btn about-btn" href="<?php echo esc_url($kaku_about_btn_url); ?>"><?php echo esc_html($kaku_about_btn_lebel); ?></a>
                  </div>
                <?php }
                ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php } ?>
    <!-- about us end-->