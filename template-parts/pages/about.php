<?php
$kaku_page_banner_display = get_theme_mod('page_banner_display');

if ('1' == $kaku_page_banner_display) { ?>

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

<?php } ?>

<?php
$kaku_about_page_about_sectin_display = get_theme_mod('about_page_about_us_display');

if ($kaku_about_page_about_sectin_display) {

  $kaku_about_page_about_img = get_theme_mod('about_page_about_image');
  $kaku_about_page_about_title = get_theme_mod('about_page_about_title');
  $kaku_about_page_about_decription = get_theme_mod('about_page_about_decription');
  $kaku_about_page_lists_repeater = get_theme_mod('about_list_repeater');
  $kaku_about_page_about_btn_lebel = get_theme_mod('about_page_about_btn_lebel');
  $kaku_about_page_about_btn_url = get_theme_mod('about_page_about_btn_url');
?>

  <!-- about us start-->
  <section class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <?php
          if ($kaku_about_page_about_img) { ?>
            <div class="about-img">
              <img src="<?php echo esc_url($kaku_about_page_about_img); ?>" alt="<?php esc_attr_e('About Image', 'kaku'); ?>" />
            </div>
          <?php } ?>
        </div>

        <div class="col-md-7">
          <div class="section-content about-content">
            <?php
            if ($kaku_about_page_about_title) { ?>
              <h2><?php echo esc_html($kaku_about_page_about_title); ?></h2>
            <?php }

            if ($kaku_about_page_about_decription) { ?>
              <p><?php echo esc_html($kaku_about_page_about_decription); ?></p>
            <?php }

            if ($kaku_about_page_lists_repeater) { ?>
              <ul>
                <?php
                foreach ($kaku_about_page_lists_repeater as $kaku_about_page_list) { ?>
                  <li>
                    <i class="fas fa-angle-right"></i><?php echo esc_html($kaku_about_page_list['lists_content']); ?>
                  </li>
                <?php } ?>
              </ul>
            <?php }

            if ($kaku_about_page_about_btn_lebel) { ?>
              <div class="about-page-buttom">
                <a class="primary-btn about-btn" href="<?php echo esc_url($kaku_about_page_about_btn_url); ?>">
                  <?php echo esc_html($kaku_about_page_about_btn_lebel); ?>
                </a>
              </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about us end-->

<?php } ?>

<?php
$kaku_about_page_team_sectin_display = get_theme_mod('about_page_team_display');

if ('1' == $kaku_about_page_team_sectin_display) {

  $kaku_about_page_title = get_theme_mod('about_page_team_title');
  $kaku_about_page_sub_title = get_theme_mod('about_page_team_sub_title');
  $kaku_about_page_description = get_theme_mod('about_page_team_top_description');
  $kaku_about_page_team_repeaters = get_theme_mod('team_member_repeater');

?>
  <!-- team start -->
  <section class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- team heading start -->
          <div class="section-content team-content">
            <?php
            if ($kaku_about_page_title) { ?>
              <div class="team-heading">
                <h2><?php echo esc_html($kaku_about_page_title); ?></h2>
              </div>
            <?php }

            if ($kaku_about_page_sub_title) { ?>
              <h2><?php echo esc_html($kaku_about_page_sub_title); ?></h2>
            <?php }

            if ($kaku_about_page_description) { ?>
              <p><?php echo esc_html($kaku_about_page_description); ?></p>
            <?php } ?>
          </div>
          <!-- team heading end -->
        </div>
      </div>
      <div class="all-team-member">
        <div class="row">
          <?php
          if ($kaku_about_page_team_repeaters) {
            foreach ($kaku_about_page_team_repeaters as $kaku_single_team_member) {
              $kaku_team_member_img = $kaku_single_team_member['image'];
              $kaku_team_member_name = $kaku_single_team_member['name'];
              $kaku_team_member_designation = $kaku_single_team_member['designation'];
              $kaku_team_member_facebook = $kaku_single_team_member['facebook'];
              $kaku_team_member_twitter = $kaku_single_team_member['twitter'];
              $kaku_team_member_linkedin = $kaku_single_team_member['linkedin'];
              $kaku_team_member_instagram = $kaku_single_team_member['instagram'];

          ?>

              <!-- single team member start -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-team-member">
                  <?php
                  if ($kaku_team_member_img) { ?>
                    <div class="team-member-img">
                      <img src="<?php echo esc_url($kaku_team_member_img); ?>" alt="<?php esc_attr_e('Team member Image', 'kaku'); ?>" />
                    </div>
                  <?php }
                  ?>
                  <div class="team-member-info">
                    <div class="team-member-meta">
                      <?php
                      if ($kaku_team_member_name) { ?>
                        <h3><?php echo esc_html($kaku_team_member_name); ?></h3>
                      <?php }

                      if ($kaku_team_member_designation) { ?>
                        <p><?php echo esc_html($kaku_team_member_designation); ?></p>
                      <?php }
                      ?>

                    </div>
                    <div class="team-social-contact">
                      <ul>
                        <?php
                        if ($kaku_team_member_facebook) { ?>
                          <li>
                            <a href="<?php echo esc_url($kaku_team_member_facebook); ?>">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                        <?php }

                        if ($kaku_team_member_twitter) { ?>
                          <li>
                            <a href="<?php echo esc_url($kaku_team_member_twitter); ?>">
                              <i class="fab fa-twitter"></i>
                            </a>
                          </li>
                        <?php }

                        if ($kaku_team_member_linkedin) { ?>
                          <li>
                            <a href="<?php echo esc_url($kaku_team_member_linkedin); ?>">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        <?php }

                        if ($kaku_team_member_instagram) { ?>
                          <li>
                            <a href="<?php echo esc_url($kaku_team_member_instagram); ?>">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single team member end -->
          <?php }
          } ?>

        </div>
      </div>
    </div>
  </section>
<?php } ?>
<!-- team end -->

<?php
$kaku_about_page_testimonial_sectin_display = get_theme_mod('about_page_testimonial_display');

if ($kaku_about_page_testimonial_sectin_display) {

  //Testimonail section content
  get_template_part('template-parts/sections/common/testimonials');
}
?>