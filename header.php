<?php

/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'kaku' ); ?></a>
	</div>
  <!-- header start-->
  <header>
    <?php
    // Display Top Bar
   	get_template_part('template-parts/sections/topbar');
    ?>

    <!-- navbar start-->
    <div class="agency-menu">
      <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <!-- Brand start -->
          <div class="logo">
            <?php
				if (has_custom_logo()) {
				  the_custom_logo();
				} 
			  	if( display_header_text() == true ){ ?>
					<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
							<?php bloginfo('name'); 
						 ?>
					</a>
				<?php } ?>
          </div>

          <!-- Brand end -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'kaku'); ?>">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- main menu start -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="w-100">

              <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'primary_menu',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'container' => false,
                    'depth' => 3,
                    'fallback_cb' => 'kaku_menu_fallback_cb',
                    'walker' => new kaku_nav_menu_walker()
                  )
                );
              ?>
            </div>
          </div>
          <!-- main menu end -->

        </div>
      </nav>
    </div>
    <!-- navbar end-->
  </header>
  <!-- header end-->