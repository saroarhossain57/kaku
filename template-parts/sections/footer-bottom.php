<?php
    $kaku_footer_bottom_text = get_theme_mod('copyright_text');
    ?>
    <!-- footer bottom start -->
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-sm-12">

            <div class="copyright-text text-center">
              <?php
              if ($kaku_footer_bottom_text) { ?>
                <p><?php echo wp_kses_post($kaku_footer_bottom_text); ?></p>
              <?php } else { ?>
                <p>© <?php echo esc_html(date('Y')); ?> <?php echo esc_html(get_bloginfo('name')); ?> | <?php esc_html_e('Developed By', 'kaku'); ?> <a href="<?php echo esc_url('https://devsgram.com') ?>" target="_blank"><?php esc_html_e('DevsGram', 'kaku') ?></a>. <?php esc_html_e('Powered by', 'kaku') ?> <a href="<?php echo esc_url('https://wordpress.org') ?>" target="_blank"><?php esc_html_e('WordPress', 'kaku') ?></a>
                <?php } ?>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- footer bottom end -->