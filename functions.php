<?php
// Enable theme features and register menu
function custom_theme_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('custom-header');

  register_nav_menus(array(
    'menu' => __('Main Menu', 'custom-theme'),
  ));
}
add_action('after_setup_theme', 'custom_theme_setup');




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
