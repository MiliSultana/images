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

?>

