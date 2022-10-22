<?php

/**
 * Template Name: Home Page
 */
 get_header(); 

//Banner section
get_template_part('template-parts/sections/banner');?>
<div id="primary">
<?php
 //About us section
 get_template_part('template-parts/sections/home-about');

 //Service section
get_template_part('template-parts/sections/service');

 //Testimonail section
get_template_part('template-parts/sections/testimonial');

 //Testimonail section
get_template_part('template-parts/sections/home-blog');
?>
</div>
<?php
 get_footer();
