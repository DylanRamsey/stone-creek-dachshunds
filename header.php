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
    <figure>
      <a href="/">
        <img class="mobile-navigation__site-logo mobile-only" src="/wp-content/uploads/2022/09/stone-creek-logo.webp" alt="Logo for Stone Creek Dachshunds">
      </a>
    </figure>
  </nav>
  <nav class="desktop-navigation container">
    <figure>
      <a href="/">
        <?php
          if(function_exists('the_custom_logo')){
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
        ?>
        <img class="desktop-navigation__site-logo" src="/wp-content/uploads/2022/09/stone-creek-logo.webp" alt="Logo for Stone Creek Dachshunds">
      </a>
    </figure>

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
    <figure class="desktop-only">
      <div class="hero-slider">
      <?php
        echo do_shortcode('[smartslider3 slider="2"]');
      ?>
      </div>
    </figure>
  