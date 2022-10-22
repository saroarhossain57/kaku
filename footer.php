<?php
//Footer CTA section
get_template_part('template-parts/sections/footer-cta');

if (is_active_sidebar('footer_one') || is_active_sidebar('footer_two') || is_active_sidebar('footer_three')) { ?>
  <!-- footer start -->
  <footer class="footer-section">
    <div class="container">
      <div class="row">
        <?php
        if (is_active_sidebar('footer_one')) { ?>
          <div class="col-md-4 col-sm-6">
            <?php dynamic_sidebar('footer_one'); ?>
          </div>
        <?php }

        if (is_active_sidebar('footer_two')) { ?>
          <div class="col-md-4 col-sm-6">
            <?php dynamic_sidebar('footer_two'); ?>
          </div>
        <?php }

        if (is_active_sidebar('footer_three')) { ?>
          <div class="col-md-4 col-sm-6">
            <?php dynamic_sidebar('footer_three'); ?>
          </div>
        <?php } ?>

      </div>
    </div>
  </footer>
  <!-- footer end -->
<?php }

//Footer Bottom section
get_template_part('template-parts/sections/footer-bottom');
?>

<?php wp_footer(); ?>
</body>

</html>