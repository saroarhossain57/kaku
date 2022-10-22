<?php
    $kaku_banner_display = get_theme_mod('banner_display');
    if ('1' == $kaku_banner_display) {

      $kaku_banner_img = get_theme_mod('banner_image');
      $kaku_banner_title = get_theme_mod('banner_heading');
      $kaku_banner_sub_title = get_theme_mod('banner_sub_heading');
      $kaku_banner_description = get_theme_mod('banner_description');
      $kaku_banner_btn_lebel = get_theme_mod('banner_btn_lebel');
      $kaku_banner_btn_url = get_theme_mod('banner_btn_url');

    ?>
      <!-- banner area  start-->
      <div class="banner-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 col-sm-6">
              <div class="homepage-banner section-content">
                <div class="home-banner-heading">
                  <?php
                  if ($kaku_banner_title) { ?>
                    <h1><?php echo esc_html($kaku_banner_title); ?></h1>
                  <?php }
                  ?>
                </div>
                <?php
                if ($kaku_banner_sub_title) { ?>
                  <h2><?php echo esc_html($kaku_banner_sub_title); ?></h2>
                <?php }
                ?>

                <?php
                if ($kaku_banner_description) { ?>
                  <p><?php echo esc_html($kaku_banner_description); ?></p>
                <?php }
                ?>

                <?php
                if ($kaku_banner_btn_lebel) { ?>
                  <div class="banner-btn">
                    <a class="primary-btn banner-button" href="<?php echo esc_url($kaku_banner_btn_url); ?>"><?php echo esc_html($kaku_banner_btn_lebel); ?></a>
                  </div>
                <?php }
                ?>

              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="banner-img">
                <?php
                if ($kaku_banner_img) { ?>
                  <img src="<?php echo esc_url($kaku_banner_img); ?>" alt="<?php esc_attr_e('Banner Image', 'kaku'); ?>" />
                <?php }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <!-- banner area end-->