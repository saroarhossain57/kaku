<?php
$kaku_testimonial_display = get_theme_mod('testimonial_display');
if ('1' == $kaku_testimonial_display) {

  //Testimonail section content
  require get_template_directory() . "/template-parts/sections/common/testimonials.php";
}
