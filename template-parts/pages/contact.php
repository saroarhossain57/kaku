<?php
$kaku_contact_page_banner_display = get_theme_mod('contact_page_banner_display');

if ($kaku_contact_page_banner_display) { ?>
  <!-- page banner start -->
  <section class="page-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner-content">
            <div class="banner-title">
              <h1><?php echo esc_html(get_the_title()); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- page banner end -->
<?php }

$kaku_contact_page_title = get_theme_mod('contact_page_title');
$kaku_contact_page_sub_title = get_theme_mod('contact_sub_page_title');
$kaku_contact_page_description = get_theme_mod('contact_page_description');
$kaku_contact_page_repeater = get_theme_mod('contact_repeater_setting');
?>
<!-- contact info start -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- content page heading start -->
        <div class="section-content contact-content">
          <?php
          if ($kaku_contact_page_title) { ?>
            <div class="blog-heading">
              <h2><?php echo esc_html($kaku_contact_page_title); ?></h2>
            </div>
          <?php }

          if ($kaku_contact_page_sub_title) { ?>
            <h2><?php echo esc_html($kaku_contact_page_sub_title); ?></h2>
          <?php }

          if ($kaku_contact_page_description) { ?>
            <p><?php echo esc_html($kaku_contact_page_description); ?></p>
          <?php }
          ?>
        </div>
        <!-- content page heading end -->
      </div>
    </div>
    <?php
    if ($kaku_contact_page_repeater) { ?>
      <div class="contact-info">
        <div class="row">
          <?php
          foreach ($kaku_contact_page_repeater as $kaku_contact_page_info) {

            $kaku_contact_info_icon = $kaku_contact_page_info['icon'];
            $kaku_contact_info_title = $kaku_contact_page_info['title'];
            $kaku_contact_info_value = $kaku_contact_page_info['value'];
          ?>
            <!-- single contact info start -->
            <div class="col-md-4 col-sm-6">
              <div class="single-contact-info phone">
                <?php
                if ($kaku_contact_info_icon) { ?>
                  <p><i class="<?php echo esc_attr($kaku_contact_info_icon); ?>"></i></p>
                <?php }

                if ($kaku_contact_info_title) { ?>
                  <h2><?php echo esc_html($kaku_contact_info_title); ?></h2>
                <?php }

                if ($kaku_contact_info_value) { ?>
                  <p><?php echo esc_html($kaku_contact_info_value); ?></p>
                <?php }
                ?>

              </div>
            </div>
            <!-- single contact info start -->
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </div>
</section>
<!-- contact info end -->