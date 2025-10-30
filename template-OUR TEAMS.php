<?php  
//Template Name:OUR TEAMS
?>

<?php get_header(); ?>
<section class="container items-center justify-center mx-auto ">
        <div
            class="sm:px-[50px] md:px-[50px] lg:px-[50px] xl:px-[100px] 2xl:px-[148px] flex flex-wrap items-center justify-center pb-[20px] h-auto md:h-[40vh] px-[20px] md:py-0">


            <!-- LEFT TEXT -->
            <div class="  w-full md:w-1/2 mb-10 mt-0 sm:mt-[20px] md:mb-0  text-center md:text-left">
                <h1
                    class="text-[40px] md:text-[40px] md:leading-[40px] lg:text-[60px] font-instrument-serif font-normal lg:leading-[60px] xl:text-[60px] xl:leading-[60px] 2xl:text-[80px] 2xl:leading-[88px]  ">
                    <?php the_field('banner_title'); ?>
                </h1>

            </div>

            <!-- RIGHT text -->
            <div class="w-full md:w-1/2 relative flex justify-end items-center overflow-hidden  md:h-full">


                <!-- p -->
                <div class="relative z-10">
                    <p class=" text-[18px] ml-0 2xl:ml-[142px] font-instrument-sans">
                        <?php the_field('banner_description'); ?>
                    </div>
            </div>

        </div>
    </section>




    <div
  class="relative container px-[20px] sm:px-[50px] md:px-[50px] lg:px-[50px]  2xl:px-[148px] mx-auto mt-0 md:mt-[70px] mb-[100px]
   grid gap-[40px] sm:gap-[60px] md:gap-[40px] lg:gap-[60px] xl:gap-[50px] 2xl:gap-[80px] grid-cols-1
    sm:grid-cols-2 lg:grid-cols-3">
<!-- Background Image -->
<!-- Background Image -->
<div class="absolute z-0 hidden lg:block 
            lg:w-[600px] lg:h-[450px] lg:top-[100px] lg:left-[200px]
            xl:w-[720px] xl:h-[540px] xl:top-[120px] xl:left-[260px]
            2xl:w-[845px] 2xl:h-[640px] 2xl:top-[150px] 2xl:left-[330px]">
  <img src="<?php bloginfo('template_directory');?>/images/Vector.png" alt="Background" class="w-full h-full object-cover" />
</div>

<!-- Blur Effect -->
<div class="absolute z-0 rounded-full blur-[200px] bg-[#666666]/80 hidden lg:block
            lg:w-[400px] lg:h-[400px] lg:top-[140px] lg:left-[350px]
            xl:w-[460px] xl:h-[460px] xl:top-[160px] xl:left-[430px]
            2xl:w-[520px] 2xl:h-[520px] 2xl:top-[200px] 2xl:left-[508px]">
</div>






<!-- Team Member Card -->
   <?php if( have_rows('img_peragraph') ): ?>
          <?php while( have_rows('img_peragraph') ): the_row(); ?>
<div class="profile-card bg-[#F5F3ED] text-white relative" data-description="<?php the_sub_field('peragraph'); ?>">
    <!-- Name/Title container at top -->
    <div class="name-title hidden px-[16px] pt-[16px] font-instrument-sans font-medium relative">
        <h3 class="text-[18px] text-[#121212] uppercase"><?php the_sub_field('name'); ?></h3>
        <p class="text-[11px] text-[#737378] uppercase"><?php the_sub_field('designation'); ?></p>

        <!-- Close button -->
        <button class="close-btn hidden absolute top-[16px] right-[16px] border-[1px] border-black bg-[#F5F3ED]">
        <?php 
$cross_img = get_sub_field('cross_icon'); 

?>    
        <img src="<?php echo $cross_img['url']; ?>" alt="Close" class="w-[18px] h-[18px] p-[4px]" />
        </button>
    </div>

    <!-- Image/Paragraph container -->
    <div class="content-area relative">
        <?php 
$image = get_sub_field('image'); 

?>  
        <img src="<?php echo $image['url']; ?>" alt="Team Member" class="w-[360px] h-[360px] z-10" />
    </div>

    <!-- Footer section -->
    <div class="footer-section flex justify-between items-center py-[19px] px-[16px] font-medium">
        <div class="font-instrument-sans font-medium w-[328px] h-[36px]">
            <h3 class="text-[18px] text-[#121212] uppercase"><?php the_sub_field('name'); ?></h3>
            <p class="text-[11px] text-[#737378] uppercase"><?php the_sub_field('designation'); ?></p>
        </div>
        <div>
            <button class="toggle-btn bg-[#F5F3ED] border border-[#F5F3ED] hover:bg-[#F5F3ED] transition">
            <?php 
            $plus_img=get_sub_field('plus_icon') ;
            ?>   
            <img src="<?php echo $plus_img['url'];?>" alt="Add"
                    class="w-[20px] h-[20px] p-[3px] border-[1px] border-black" />
            </button>
        </div>
    </div>
</div>




 <?php endwhile; ?>
      <?php endif; ?>
       

      

      
</div>

 



    </div>
    <script src="<?php bloginfo('template_directory');?>/script.js"></script>

    <?php get_footer(); ?>