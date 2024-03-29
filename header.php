<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <script src="js/index.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="fslightbox.js"></script>
  <?php
  wp_head();
  ?>
</head>
<body>
  <nav class="mobile-navigation mobile-only ">
    <div class="mobile-navigation__logo-toggle container">
      <div class="navigation-burger">
        <div class="nav-icon4">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <?php 
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul class="mobile-navigation__routes">%3$s</ul>'
        )
      );
    ?>
      <a href="/">
        <img class="mobile-navigation__site-logo mobile-only" src="/wp-content/uploads/cropped-logo_nobackground.webp" alt="Logo for Stone Creek Dachshunds">
      </a>
  </nav>
  <nav class="desktop-navigation container">
    <a href="/">
      <?php
        if(function_exists('the_custom_logo')){
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
        }
      ?>
      <img class="desktop-navigation__site-logo" src="/wp-content/uploads/cropped-logo_nobackground.webp" alt="Logo for Stone Creek Dachshunds">
    </a>
    <?php 
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul class="desktop-navigation__routes">%3$s</ul>'
        )
      );
    ?>
  </nav>
  <main>
  