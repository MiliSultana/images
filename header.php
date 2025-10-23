<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SEVORA</title>
  <link href="<?php bloginfo('template_directory');?>/output.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Instrument+Serif:ital@0;1&display=swap"
    rel="stylesheet">


    
</head>



<body class="bg-[#121212] text-white ">

  <!-- HEADER / NAVIGATION -->


  <header class="sticky top-0 z-50 bg-[#121212] border-b border-[#242424]">
    <nav
      class=" container flex items-center justify-between mx-auto sm:px-[50px] md:px-[50px] lg:px-[50px] xl:px-[100px] 2xl:px-[148px] h-[50px] md:h-[100px] relative ">

      <!-- Left: Logo -->
       <?php  $logoimg=get_header_image(); ?>
      <div>
        <a href="<?php echo site_url(); ?>">
        <img src="<?php echo $logoimg; ?>" alt="SEVORA Logo" class="w-[130px] h-[30px] md:w-[215px] md:h-[48px]" />
      </a>
    </div>

      <!-- Middle: Navigation Links -->
      <ul id="menu"
  class="hidden lg:flex flex-col lg:flex-row gap-6 text-[13px] 2xl:ml-[-280px] font-instrument-sans 
  absolute lg:static top-[80px] right-20 w-[30%] sm:w-[20%] md:w-[15%] lg:w-auto 
  bg-[#121212]/85 lg:bg-transparent leading-[40px] p-5 lg:p-0 z-40">

  <?php
    wp_nav_menu(array(
      'theme_location' => 'menu',   // register this in functions.php
      'container'      => false,    // removes extra <div>
      'items_wrap'     => '%3$s',   // removes extra <ul> wrapper
      'link_class'     => 'relative text-white font-medium group', // custom class for <a>
      'menu_class'     => '',       // handled by outer <ul>
      'walker'         => new class extends Walker_Nav_Menu {
        // Custom walker to inject hover underline span
        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
          $classes = 'relative text-white font-medium group';
          $output .= '<li>';
          $output .= '<a href="' . esc_url($item->url) . '" class="' . $classes . '">';
          $output .= esc_html($item->title);
          $output .= '<span class="absolute left-0 -bottom-1 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>';
          $output .= '</a>';
          $output .= '</li>';
        }
      }
    ));
  ?>
</ul>



      <!-- Right: Toggle + Back to Home -->
      <div class="flex items-center gap-4">
        <!-- Menu Toggle (only on mobile) -->
        <button id="menu-toggle" class="block lg:hidden text-white focus:outline-none">
          <!-- Hamburger Icon -->
          <svg id="hamburger" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Close Icon -->
          <svg id="close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>

        <!-- Back to Home Button (always visible) -->
         <?php 
$arrow_img = get_field('arrow_img'); 

?>

        <div class="">
          <a href="<?php echo site_url(); ?>"
            class="inline-flex items-center font-instrument-sans font-medium text-center md:py-[13px] md:px-[26px] py-[3px] px-[3px]
            bg-[#242424] text-white border border-[#2E2E2E] hover:bg-[#555] text-[12px] md:text-[13px] transition gap-2">
            <img src="<?php echo $arrow_img ['url']; ?>" alt="Back Arrow" class="w-4 h-4" />
            <span><?php the_field('text'); ?></span>
          </a>
        </div>
      </div>
    </nav>
  </header>