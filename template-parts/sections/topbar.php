<?php
      $kaku_topbar_display = get_theme_mod('topbar_display');
      if ('1' == $kaku_topbar_display) { ?>

        <!-- header top start -->
        <div class="header-top-area">
          <div class="container">
            <div class="row align-items-center">

              <div class="col-md-6 col-sm-6">
                <div class="header-top-left">
                 <?php
                  $kaku_email = is_email(get_theme_mod('topbar_email_address'));
                  $kaku_phone_number_val = preg_match('/[0-9]/', get_theme_mod('topbar_phone_number'));

                  if ( 1 == $kaku_phone_number_val ) {
                    $kaku_phone_number = get_theme_mod('topbar_phone_number');
                  }

                 if ( isset( $kaku_phone_number ) ) { ?>
                    <span class="ap-phone-number">
                    <span class="fas fa-phone-volume"></span>
                    <a href="<?php echo esc_html("tel:","kaku") . esc_attr($kaku_phone_number); ?>"><?php echo esc_html($kaku_phone_number); ?></a>
                  </span>
                 <?php }
   
                if ( $kaku_email ) { ?>
                  <span class="ap-email">
                    <span class="far fa-envelope"></span>
                    <a href="<?php echo esc_html("mailto:","kaku") . esc_attr($kaku_email); ?>"><?php echo esc_html($kaku_email); ?></a>
                  </span>
                <?php }
              ?>
                </div>
              </div>

              <div class="col-md-6 col-sm-6">
                <div class="header-top-right">

                  <form action="<?php echo esc_url(home_url('/')); ?>" method="GET" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" name="s" placeholder="<?php esc_attr_e('search', 'kaku'); ?>" aria-label="<?php esc_attr_e('search', 'kaku'); ?>" />
                    <button class="ap-btn" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>
      <?php }  ?>
      <!-- header top end -->