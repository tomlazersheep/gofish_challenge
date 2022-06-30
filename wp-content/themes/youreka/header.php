<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.min.css"/>
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header">
          <div class="container">
            <div class="header__wrapper">
              <div class="logo__wrapper">
                <a class="logo__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img class="logo__img" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
                </a>
              </div>
  
              <nav class="primaryNav">
                <?php
                $primaryNav = array(
                  'menu'            => 'Primary Navigation',
                    'theme_location'  => 'main_nav',
                    'menu_class'      => 'primaryNav__list',
                    'container'       => false,
                    // 'walker' => new Mobile_Walker()
                  );
                  wp_nav_menu( $primaryNav );
                  ?>
              </nav>
              <div>
                <button type="button" id="nav__toggler" class="primaryNav__toggler btn">
                  sdafasdfasdf
                </button>
                <a type="button" class="header__login btn btn-secondary" href="<?php echo is_user_logged_in() ? wp_logout_url(get_permalink()) : wp_login_url(get_permalink()); ?>">
                  <?php echo file_get_contents(get_template_directory_uri(). "/images/user.svg")?>
                  <span class="header__login-text"><?php echo is_user_logged_in() ? 'Logout' : 'Login' ?>
                </a>
                <a type="button" class="btn btn-primary header__contact-button" href="/contact">Contact Us</a>
              </div>
            </div>
          </div>
        </header>
