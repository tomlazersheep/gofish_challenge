<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
        <link rel="styleshhet/css" href="<?php echo get_template_directory_uri() ?>/style.css"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header data-class="header" class="header">
          <div class="container">
            <div class="logo-container">
              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
              </a>
            </div>

            <nav class="primaryNav__container navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                  
                  <?php
                  $primaryNav = array(
                      'menu'            => 'Primary Navigation',
                      'theme_location'  => 'main_nav',
                      'menu_class'      => 'primaryNav',
                      'container'       => false,
                      // 'walker' => new Mobile_Walker()
                    );
                    wp_nav_menu( $primaryNav );
                    ?>
                </ul>
              </div>
            </nav>
          </div>
        </header>
