<?php
// Enable theme features and register menu
function custom_theme_setup() {
  // Add support for featured images
  add_theme_support('post-thumbnails');
  add_theme_support('custom-header');

  // Register menu locations
  register_nav_menus(array(
    'menu' => __('Main Menu', 'custom-theme'),
  ));
}
add_action('after_setup_theme', 'custom_theme_setup');


//  Proper script enqueue
function mytheme_enqueue_scripts() {
  // Swiper CSS
  wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
    array(),
    null
  );

  // Swiper JS
  wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    array(),
    null,
    true // load in footer
  );

  // Your custom JS (depends on Swiper)
  wp_enqueue_script(
    'custom-js',
    get_template_directory_uri() . '/script.js',
    array('swiper-js'), // ensures Swiper is loaded first
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


// Widget registration
function custom_theme_widgets_init() {
  $widgets = [
    'footer1', 'logos', 'footer2', 'footer3', 'footer4', 'footer5', 'footer_bottom'
  ];

  foreach ($widgets as $id) {
    register_sidebar(array(
      'name'          => ucfirst(str_replace('_', ' ', $id)),
      'id'            => $id,
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));
  }
}
add_action('widgets_init', 'custom_theme_widgets_init');
?>
