<?php 
//Template Name: ABOUT US
?>



<?php get_header(); ?>

  <div class="w-full bg-[#121212]">
    <div class=" flex justify-center items-center md:h-[60vh] lg:h-[70vh] xl:h-[90vh] 2xl:h-[90vh] w-full ">

      <!-- 1440px Body Container -->
      <div class="w-full   lg:h-[70vh] xl:h-[90vh] 2xl:h-[90vh] relative overflow-hidden bg-[#121212] mx-auto">

        <!-- Background Image on Right -->
        <div class="w-full lg:h-[70vh] xl:h-[90vh] 2xl:h-[90vh] relative overflow-hidden bg-[#121212] mx-auto">


          <div class="absolute hidden md:block  top-0 right-0 w-1/2 h-full ">
            <img src="<?php bloginfo('template_directory');?>/images/Vector.png" alt="Right side" class="w-full h-full object-cover" />
          </div>

          <!-- Blur Glow Effect -->
          <div class="absolute top-[78%] transform -translate-y-1/2 rounded-full blur-[150px] bg-[#666666]/80 z-10
           w-[150px] h-[150px] right-[2%]   /* 640px */
           hidden   md:block        md:w-[220px] md:h-[220px] md:right-[4%]   /* 768–1023px */
           lg:w-[260px] lg:h-[260px] lg:right-[6%]   /* 1024–1279px */
           xl:w-[300px] xl:h-[300px] xl:right-[8%]   /* 1280–1535px */
           2xl:w-[350px] 2xl:h-[350px] 2xl:right-[10%]"> <!-- 1536px+ -->
          </div>








          <!-- Text & Video Section -->
          <div
            class="container mx-auto flex  flex-col-reverse md:flex-row items-center md:items-center md:px-[50px] xl:px-[100px] text-white md:h-[60vh] lg:h-[70vh] xl:h-[90vh] 2xl:h-[90vh] py-6 md:py-0 px-4 sm:px-6 lg:px-[50px]  2xl:px-[148px] gap-10">

            <!-- LEFT TEXT -->
            <div class="w-full md:w-1/2 h-full flex flex-col justify-center text-center md:text-left">
              <h1
                class="text-[40px] md:text-[40px] lg:text-[59px] xl:text-[70px] xl:leading-[70px] 2xl:text-[80px] 2xl:leading-[88px] font-instrument-serif lg:leading-[60px]  mb-5">
                <?php the_field('banner_title'); ?>
              </h1>
              <button class="w-[193px] h-[42px] py-[10px] px-[24px] text-[13px]
         font-medium font-instrument-sans text-[#121212] 
         bg-[#FFFFFF] hover:bg-white hover:text-gray-800 transition
         mx-auto block md:mx-0"> DOWNLOAD THE APP
              </button>

            </div>

            <!-- RIGHT VIDEO -->
            <div class="w-full md:w-1/2 h-full relative flex justify-center md:justify-end items-center">
              <!-- Background Overlay -->


              <!-- Video -->
                  <?php 
$banner_video = get_field('banner_video'); 

?>
              <div class="relative z-10 w-full max-w-[600px] max-h-[460px] px-4 md:px-0">
                <video autoplay muted loop playsinline class="w-full h-auto object-contain">
                  <source src="<?php echo $banner_video['url']; ?>" type="video/mp4"
                    class="w-[600px] h-[460px]" />
                </video>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>


    <section class=" w-full bg-[#F5F3ED] py-[35px] md:py-[100px] font-instrument-serif">
      <div class="bg-[#F5F3ED] w-full max-w-[1440px]  relative overflow-hidden mx-auto font-instrument-serif"></div>
      <h2 class=" container mx-auto text-[32px] md:text-[52px] text-center  text-black font-medium  mb-[40px] ">
        <span class="text-gray-500 font-normal">Re-Imagining</span> Confidence In Every Purchase
      </h2>


      <!-- Timeline Grid -->
      <div
        class=" container mx-auto grid grid-cols-1 px-[20px] sm:px-[50px] md:px-[50px] lg:px-[50px] xl:px-[100px]  2xl:px-[160px]  lg:grid-cols-3 gap-[40px] ">
        <!-- Box 1 -->
        <div class="relative bg-[#F5F3ED] border border-gray-400 p-[20px]  shadow-sm overflow-hidden">
          <!-- Background image -->
          <img src="<?php bloginfo('template_directory');?>/images/SmallVector.png" alt=""
            class="absolute bottom-0 right-0 w-[120px] sm:w-[150px] md:w-[180px] lg:w-[200px] xl:w-[240px] 2xl:w-[340px] h-auto z-0" />
          <!-- Overlay -->
          <div class="absolute inset-0 bg-[#F5F3ED] opacity-5 z-0"></div>

          <!-- Card Content -->
          <div class="relative z-10 text-center">
            <!-- Side label (desktop) -->
            <div
              class="hidden lg:block absolute font-instrument-serif left-[20px] top-[55%] transform-none rotate-[-90deg] origin-left text-[40px] text-[#121212] font-regular">
              Our Vision
            </div>

            <!-- Side label (mobile) -->
            <div class="block lg:hidden  text-left text-lg font-semibold text-black">
              Our Vision
            </div>
            <p
              class="text-[15px] md:text-[17px] lg:text-[24px] leading-[26px] md:leading-[36px] text-[#424245] font-instrument-sans font-regular px-2 md:px-0 text-left ml-0 md:ml-[64px]">
              To empower shoppers with freedom, comfort, and control by making product experience an essential part of
              the
              buying journey.
            </p>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="relative bg-[#F5F3ED] border border-gray-400 p-[20px] shadow-sm overflow-hidden">
          <img src="<?php bloginfo('template_directory');?>/images/SmallVector.png" alt=""
            class="absolute bottom-0 right-0 w-[120px] sm:w-[150px] md:w-[180px] lg:w-[200px] xl:w-[240px] 2xl:w-[340px] h-auto z-0" />
          <div class="absolute inset-0 bg-[#F5F3ED] opacity-5 z-0"></div>

          <div class="relative z-10 text-center">
            <div
              class="hidden lg:block absolute font-instrument-serif left-[20px] top-[64%] transform-none rotate-[-90deg] origin-left text-[40px] text-[#121212] font-regular">
              Our Mission
            </div>
            <div class="block lg:hidden  text-left text-lg font-semibold text-black">
              Our Mission
            </div>
            <p
              class="text-[15px] md:text-[17px] lg:text-[24px] leading-[26px] md:leading-[36px] text-[#424245] font-instrument-sans font-normal px-2 md:px-0 text-left ml-0 md:ml-[64px]">
              To redefine global e-commerce by creating a world where decisions are made through experience—not just
              expectation.
            </p>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="relative bg-[#F5F3ED] border border-gray-400 p-[14px] pb-[94px] shadow-sm overflow-hidden">
          <img src="<?php bloginfo('template_directory');?>/images/SmallVector.png" alt=""
            class="absolute bottom-0 right-0 w-[120px] sm:w-[150px] md:w-[180px] lg:w-[200px] xl:w-[240px] 2xl:w-[340px] h-auto z-0" />
          <div class="absolute inset-0 bg-[#F5F3ED] opacity-5 z-0"></div>

          <div class="relative z-10 text-center">
            <div
              class="hidden lg:block absolute font-instrument-serif left-[25px] top-[37%] transform-none rotate-[-90deg] origin-left text-[40px] text-[#121212] font-regular">
              Core Values
            </div>
            <div class="block lg:hidden  text-left text-lg font-semibold text-black">
              Core Values
            </div>
            <ul class="text-left ml-[20px] md:ml-[68px] text-[#737378] space-y-4 font-instrument-sans">
              <li
                class="relative pl-4 before:content-[''] before:absolute before:left-0 before:top-2 before:w-[10px] before:h-[10px] before:border before:border-[#000000] before:bg-white before:shadow-[1px_0_black,0_1px_black,1px_1px_black]">
                <span class="text-[#424245]">Customer-Centric Innovation:</span> Designing experiences that reflect real
                needs and empower confident shopping.
              </li>
              <li
                class="relative pl-4 before:content-[''] before:absolute before:left-0 before:top-2 before:w-[10px] before:h-[10px] before:border before:border-[#000000] before:bg-white before:shadow-[1px_0_black,0_1px_black,1px_1px_black]">
                <span class="text-[#424245]">Empowered Decision-Making:</span> Giving users control to discover, try,
                and choose on their own terms.
              </li>
              <li
                class="relative pl-4 before:content-[''] before:absolute before:left-0 before:top-2 before:w-[10px] before:h-[10px] before:border before:border-[#000000] before:bg-white before:shadow-[1px_0_black,0_1px_black,1px_1px_black]">
                <span class="text-[#424245]">Trust Through Transparency:</span> Clear, honest interactions that build
                loyalty and eliminate uncertainty.
              </li>
              <li
                class="relative pl-4 before:content-[''] before:absolute before:left-0 before:top-2 before:w-[10px] before:h-[10px] before:border before:border-[#000000] before:bg-white before:shadow-[1px_0_black,0_1px_black,1px_1px_black]">
                <span class="text-[#424245]">Seamless Experience:</span> Smooth, simple shopping from product discovery
                to doorstep delivery.
              </li>
            </ul>
          </div>
        </div>

      </div>

  </div>
  </section>

  <div class="flex justify-center bg-[#121212]">
    <section
      class="  relative w-full sm:px-[50px] md:px-[50px] lg:px-[50px] xl:px-[100px]    py-[35px] md:py-[100px] bg-[#121212] text-center text-white overflow-hidden">

      <!-- Background Images Inside Container -->
      <div class="hidden md:block absolute top-0 right-0  ">
        <img src="<?php bloginfo('template_directory');?>/images/RightVector.png" alt="Right side" class="w-[350px] h-[350px] " />
      </div>

      <div
        class="absolute   top-[-320px] items-end right-[-320px]   w-[600px] h-[600px] bg-[#666666] opacity-[30%] rounded-full blur-[200px] z-10">
      </div>

      <div class="hidden md:block absolute left-0 bottom-0 ">
        <img src="<?php bloginfo('template_directory');?>/images/LeftVector.png" alt="left side" class="w-[350px] h-[350px] " />
      </div>
      <div
        class=" absolute   top-[230px] left-[-320px]   w-[600px] h-[600px] bg-[#666666] opacity-[30%] rounded-full blur-[200px] z-10">
      </div>
      <!-- Content -->
      <section class="container mx-auto 2xl:px-[120px] ">
        <div class="  relative z-10 w-full  text-white">
          <h1
            class="text-[32px] sm:text-[42px] md:text-[52px] font-normal mb-[20px] md:mb-[40px] font-instrument-serif leading-tight">
            <span class="text-[#737378]">Story: From An </span>Idea To Movement
          </h1>
          <p
            class="  text-[12px] sm:text-[15px] md:text-[22px] leading-relaxed  font-instrument-sans px-[20px] sm:px-0">
            It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive shopper,
            grew tired of guesswork. Inspired by the idea that real confidence comes from experience, they envisioned a
            retail space where exploration wasn't just encouraged—it was built into the fabric of shopping itself. What
            started as sketches on a whiteboard became a customer-first platform that gives people the freedom to
            engage,
            experiment, and then decide. Today, that vision lives on in every delivery, driven by a promise to make
            shopping smarter, braver, and beautifully human.
          </p>


          <div class="flex flex-col sm:flex-row items-center justify-center gap-[8px]  mt-[32px]">
            <div class="w-[44px] h-[44px] overflow-hidden ">
              <img src="<?php bloginfo('template_directory');?>/images/Frame 2693.png" alt="CEO Image" class="object-cover w-full h-full" />
            </div>
            <div class="text-center sm:text-left font-instrument-sans font-medium sm:mt-0 ">
              <h3 class=" text-[18px] font-semibold text-white">Mashum Mollah</h3>
              <p class="text-[14px] text-[#6b6a6a]  font-bold">CEO & FOUNDER</p>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>


  <div class="w-full bg-[#F5F3ED] flex justify-center">
    <section class="text-black  w-full font-serif relative">
      <div class=" bg-[#F5F3ED]  py-[35px] md:py-[100px] px-[20px] sm:px-[50px] xl:px-0">

        <!-- Heading -->
        <h1
          class="text-[32px] sm:text-[42px] md:text-[52px] font-normal md:mb-[23px] font-instrument-serif text-center">
          <span class="text-[#737378]">Progress</span> Built with Purpose
        </h1>
        <!-- Divider -->
        <div class="max-w-[1440px] mx-auto">
          <div class="hidden xl:block relative h-[1px] w-[973px] mx-auto justify-center items-center bg-[#121212]  ">
          </div>
        </div>

       <div class="max-w-[1440px] mx-auto">
          <div class="hidden xl:block relative h-[1px] w-[973px] mx-auto justify-center items-center bg-[#121212]  ">
          </div>
        </div>

        <div class="overflow-hidden max-w-[1240px] mx-auto">
          <!-- Track -->
          <div id="sliderTrack" class="flex transition-transform duration-500 ease-in-out"
            style="transform: translateX(0%);">

            <!-- Timeline Grid first slider -->
            <div
              class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-[55px] mt-[45px] md:mt-[75px] flex-shrink-0 w-full">

              <!-- Box 1 -->
              <div class="relative xl:h-[269px] xl:w-[269px] bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">

                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[130px] transform xl:block hidden  h-[51px] w-auto z-10" />

                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Product <br> Launching</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>

              <!-- Box 2 -->
              <div class="relative xl:h-[269px] xl:w-[269px] bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">
                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[129px] transform xl:block hidden h-[51px] w-auto z-10" />
                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Financial <br> Community</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>

              <!-- Box 3 -->
              <div class="relative xl:h-[269px] xl:w-[269px] bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">
                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[129px] transform xl:block hidden  h-[51px] w-auto z-10" />
                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Build <br>Community</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>

              <!-- Box 4 -->
              <div class="relative xl:h-[269px] xl:w-[269px]  bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">
                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[130px] transform xl:block hidden  h-[51px] w-auto z-10" />
                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Business <br> Agreement</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>
            </div>
<!-- Timeline Grid second slider -->
            <div
              class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-[55px] mt-[45px] md:mt-[75px] flex-shrink-0 w-full">

              <!-- Box 1 -->
              <div class="relative xl:h-[269px] xl:w-[269px] bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">

                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[130px] transform xl:block hidden  h-[51px] w-auto z-10" />

                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Product <br> Launching</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>

              <!-- Box 2 -->
              <div class="relative xl:h-[269px] xl:w-[269px] bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">
                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[129px] transform xl:block hidden h-[51px] w-auto z-10" />
                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Financial <br> Community</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>

              <!-- Box 3 -->
              <div class="relative xl:h-[269px] xl:w-[269px] bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">
                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[129px] transform xl:block hidden  h-[51px] w-auto z-10" />
                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Build <br>Community</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>

              <!-- Box 4 -->
              <div class="relative xl:h-[269px] xl:w-[269px]  bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">
                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[130px] transform xl:block hidden  h-[51px] w-auto z-10" />
                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Business <br> Agreement</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>
            </div>
<!-- Timeline Grid third slider -->
            <div
              class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-[55px] mt-[45px] md:mt-[75px] flex-shrink-0 w-full">

              <!-- Box 1 -->
              <div class="relative xl:h-[269px] xl:w-[269px] bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">

                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[130px] transform xl:block hidden  h-[51px] w-auto z-10" />

                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Product <br> Launching</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>

              <!-- Box 2 -->
              <div class="relative xl:h-[269px] xl:w-[269px] bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">
                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[129px] transform xl:block hidden h-[51px] w-auto z-10" />
                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Financial <br> Community</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>

              <!-- Box 3 -->
              <div class="relative xl:h-[269px] xl:w-[269px] bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">
                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[129px] transform xl:block hidden  h-[51px] w-auto z-10" />
                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Build <br>Community</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>

              <!-- Box 4 -->
              <div class="relative xl:h-[269px] xl:w-[269px]  bg-[#F5F3ED] border border-[#121212] p-6 pt-10 shadow-sm">
                <div class="absolute text2025 top-[-26px] ml-[106px] 
            bg-[#F0EEE5] w-[105px] h-[50px] border border-[#121212] z-10  left-1/2 transform -translate-x-3/4
            flex items-center justify-center">
                  2025
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/Line 2.svg" alt="Line"
                  class="absolute mt-[-117px] left-[130px] transform xl:block hidden  h-[51px] w-auto z-10" />
                <div class="text-center">
                  <h3 class="text-[32px] font-instrument-serif leading-[38px]">Business <br> Agreement</h3>
                  <p class="text-[16px] text-[#555] leading-[1.5] font-instrument-sans mt-[12px]">
                    It began with a simple frustration: buying without truly knowing. Our founder, once an indecisive
                    shopper, grew tired of guesswork.
                  </p>
                </div>
              </div>
            </div>

          </div>



        </div>

        <div class=" mt-[40px] items-center justify-center mx-auto flex">
          <div class="flex items-center gap-[12px]  ">
            <!-- Left Arrow Button -->
            <button class="  " onclick="prevSlide()">
              <img src="<?php bloginfo('template_directory');?>/images/LeftArrow.png" alt="Left Arrow" class="w-[18px] h-[14px]">
            </button>

            <!-- Horizontal Progress Bar -->
            <div class="relative mx-auto flex-1 h-[3px] w-[100px] justify-center bg-[#DBDBDB] cursor-pointer"
              onclick="middleClick()">
              <div id="progress" class="absolute left-0 top-0 h-full bg-[#121212] transition-all duration-300"
                style="width: 0%;"></div>
            </div>

            <!-- Right Arrow Button -->
            <button class="" onclick="nextSlide()">
              <img src="<?php bloginfo('template_directory');?>/images/RightArrow.png" alt="Right Arrow" class="w-[18px] h-[14px]">
            </button>
          </div>


        </div>
      </div>
    </section>
  </div>

<script src="<?php bloginfo('template_directory');?>/script.js"></script>


  <?php get_footer(); ?>