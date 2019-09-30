<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WKP36M5');</script>
  <!-- End Google Tag Manager -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148889633-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-148889633-1');
  </script>
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKP36M5"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header id="header" class="header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header__content">
            <div class="header__logo">
              <a href="<?php echo site_url() ?>">
                Treba
              </a>
            </div>
            <div class="header__menu">
              <div class="header__menu-svg">
                <?php get_template_part('blocks/header-menu-svg') ?>  
              </div>
              <div class="header__menu-lines">
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="menu-cover">
    <div class="menu-cover__blocks">
      <div class="menu-cover__block"></div>
      <div class="menu-cover__block"></div>
      <div class="menu-cover__block"></div>
      <div class="menu-cover__block"></div>
      <div class="menu-cover__block"></div>
    </div>
    <div class="menu-cover__close">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="menu-cover__close-block">
              <img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="">
              <div class="menu-cover__close-circle"></div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-cover__menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 p-relative">
            <div class="menu-cover__lists">
              <li><a href="#about">About Us</a></li>
              <li><a href="#works">Our works</a></li>
              <li><a href="#reviews">Reviews</a></li>
              <li><a href="#footer">Contact</a></li>
            </div>      
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="content" role="main">