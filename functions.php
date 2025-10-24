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
<?php


// functions.php
function custom_enqueue_scripts() {
    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11',
        true // load in footer
    );

    // Custom JS (depends on Swiper)
    wp_enqueue_script(
        'custom-swiper',
        get_template_directory_uri() . '/script.js',
        array('swiper-js'), // <-- ensure Swiper is loaded first
        '1.0.0',
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

?>
