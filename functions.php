<?php

function stone_creek_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}

function stoneCreek_register_styles() {
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('stonecreek-css', get_template_directory_uri() . "/assets/css/main.css", array(), $version , 'all');
  wp_enqueue_style('stonecreek-swiper', get_template_directory_uri() . "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css", array(), 'all' );

}

function stoneCreek_register_scripts() {
  wp_enqueue_script('stonecreek-js', get_template_directory_uri()."/assets/js/main.js", $version);
  wp_enqueue_script('stonecreek-scripts', get_template_directory_uri()."/assets/js/fslightbox.js", array(), '1.0' , true);
  wp_enqueue_script('stonecreek-swiper','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), true);
}

function stoneCreek_menus(){
  $locations = array(
    'primary' => "Desktop Primary Menu",
    'footer' => "Footer Primary Menu"
  );

  register_nav_menus($locations);
}

add_action('after_setup_theme','stone_creek_theme_support');
add_action('wp_enqueue_scripts', 'stoneCreek_register_styles');
add_action('wp_enqueue_scripts', 'stoneCreek_register_scripts', true);
add_action('init','stoneCreek_menus')

?>