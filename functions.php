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

<?php
// Enable widget support
function custom_theme_widgets_init() {
  register_sidebar( array(
    'name'          =>'footer1',
    'id'            => 'footer1',
    'before_widget' => '<div id="%1$s" class="widget %2$s ">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title ">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          =>'logos',
    'id'            => 'logos',
    'before_widget' => '<div id="%1$s" class="widget %2$s ">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title ">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          =>'footer2',
    'id'            => 'footer2',
    'before_widget' => '<div id="%1$s" class="widget %2$s ">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title ">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          =>'footer3',
    'id'            => 'footer3',
    'before_widget' => '<div id="%1$s" class="widget %2$s ">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title ">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          =>'footer4',
    'id'            => 'footer4',
    'before_widget' => '<div id="%1$s" class="widget %2$s ">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title ">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          =>'footer5',
    'id'            => 'footer5',
    'before_widget' => '<div id="%1$s" class="widget %2$s ">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title ">',
    'after_title'   => '</h3>',
  ) );
  

   register_sidebar( array(
    'name'          =>'footer_bottom',
    'id'            => 'footer_bottom',
    'before_widget' => '<div id="%1$s" class="widget %2$s ">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title ">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'custom_theme_widgets_init' );
?>