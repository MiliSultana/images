<footer class="bg-[#F5F3ED] border-t border-[#DBDBDB]">
    <div
      class="container mx-auto bg-[#F5F3ED] text-[#121212] relative  text-left px-[20px] sm:px-[50px] md:px-[50px] lg:px-[50px] xl:px-[100px]  2xl:px-[148px] py-[35px] md:py-[100px] overflow-hidden">
      <div class=" flex flex-wrap 2xl:gap-[106px] lg:gap-[82px]">

        <!-- Logo & Description -->
        <div class="max-w-[300px]  mb-10">
          <?php 
           if(is_active_sidebar('footer1')){
            dynamic_sidebar('footer1');
           }
           ?>
          <div class="flex">
             <?php 
           if(is_active_sidebar('logos')){
            dynamic_sidebar('logos');
           }
           ?>
           </div>
        </div>

        <!-- Footer Links -->
        <div class="flex flex-wrap gap-9  xl:gap-[84px] 2xl:gap-[129px]">
          <!-- Seller -->
          <div>
           <?php 
           if(is_active_sidebar('footer2')){
            dynamic_sidebar('footer2');
           }
           ?>
          </div>

          <!-- Delivery -->
          <div>
            <?php 
           if(is_active_sidebar('footer3')){
            dynamic_sidebar('footer3');
           }
           ?>
          </div>

          <!-- Quick Links -->
          <div>
             <?php 
           if(is_active_sidebar('footer4')){
            dynamic_sidebar('footer4');
           }
           ?>
          </div>

          <!-- Social Media -->
          <div>
               <?php 
           if(is_active_sidebar('footer5')){
            dynamic_sidebar('footer5');
           }
           ?>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="w-full bg-[#F5F3ED] mx-auto">
         <?php 
           if(is_active_sidebar('footer_bottom')){
            dynamic_sidebar('footer_bottom');
           }
           ?>
      </div>
    </div>
  </footer>
  <script src="script.js"></script>

</body>

</html>