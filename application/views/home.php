<!-- Slideshow - Fullscreen background image and animateme scroll effect-->
<div id="slideshow" class="kl-slideshow static-content__slideshow scrollme" style="background-color: #595d61;">
   <div class="bgback">
   </div>

   <!-- Animated Sparkles -->
   <div class="th-sparkles">
   </div>
   <!--/ Animated Sparkles -->

   <!-- Static content wrapper - fullscreen mode -->
   <div class="kl-slideshow-inner static-content__wrapper static-content--fullscreen">
      <!-- Static content background with animateme scroll efect -->
      <div class="static-content__source animateme" data-when="span" data-from="0" data-to="0.75" data-easing="linear"
           data-translatey="300" data-opacity="0.1" data-scale="1.5">
         <!-- Background -->
         <div class="kl-bg-source">
            <!-- Background image -->
            <div class="kl-bg-source__bgimage"
                 style="background-image:url(<?php echo base_url()?>uploads/image.jpg); background-repeat:no-repeat; background-attachment:scroll; background-position-x:center; background-position-y:center; background-size:cover">
            </div>
            <!--/ Background image -->

            <!-- Gradient overlay -->
            <div class="kl-bg-source__overlay" style="">
            </div>
            <!--/ Gradient overlay -->
         </div>
         <!--/ Background -->
      </div>
      <!-- Static content container -->
      <div class="static-content__inner container">
         <!-- Container with animateme effect and safe padding default top 300px -->
         <div class="kl-slideshow-safepadding sc__container animateme ptop-300" data-when="span" data-from="0"
              data-to="0.75" data-translatey="200" data-opacity="0.1" data-easing="linear">
            <!-- Title element -->
            <div class="kl-title-block clearfix tbk--text-light text-center tbk-symbol--line tbk--colored tbk-icon-pos--before-title">
               <!-- Title with custom font size, line height, black, twin style and bottom margin -->
               <h3 class="tbk__title fs-62 lh-62 black fw-thin mb-20">Welcome to Holiday Maker</h3>

               <!-- Sub-title with custom black color and thin style  -->

            </div>
            <!--/ Title element -->

            <!-- Button skewed lined medium -->
            <form name="s" method="post" class="text-center" action="<?php echo base_url() ?>index.php/home/searchList">
               <input type="text" name="search" style="width: 700px;
    height: 40px;" placeholder="Search by Name"/>
               <button class="btn btn-primary" name="but" value="">Search</button>
            </form>
         </div>
         <!--/ Buttons wrapper -->


      </div>
      <!--/ Container with animateme effect and safe padding default top 250px -->
   </div>
   <!--/ Static content container -->

   <!-- To next section trigger (end of slideshow section) -->
   <a class="tonext-btn js-tonext-btn" href="#" data-endof=".kl-slideshow">
      <span class="mouse-anim-icon"></span>
   </a>
   <!-- To next section trigger (end of slideshow section) -->
</div>
<!--/ Static content wrapper - fullscreen mode -->
</div>
<!--/ Slideshow - Fullscreen background image and animateme scroll effect-->

<!-- Media container element + content section with custom white background color and custom paddings -->
<section id="about" class="hg_section bg-white ptop-100 pbottom-100">
   <div class="full_width">
      <div class="row gutter-lg">
         <div class="col-md-2 col-sm-12">
            <!-- Media container style 2 element - with custom height(.h-520) -->

            <!--/ Media container style 2 element - with custom height(.h-520) -->
         </div>
         <!--/ col-md-5 col-sm-12 -->

         <div class="col-md-8 col-sm-12">
            <div class="row hg_col_eq_last">
               <div class="col-md-12 col-sm-12">
                  <!-- Title element with custom bottom padding -->
                  <div class="kl-title-block clearfix text-left tbk-symbol--line tbk-icon-pos--after-title pbottom-0">
                     <!-- Title with custom montserrat font, size, line height and thin style -->
                     <h3 class="tbk__title montserrat fs-38 lh-46 fw-thin">About</h3>

                     <!-- Title symbol -->
                     <span class="tbk__symbol ">
										<span></span>
									</span>
                     <!--/ Title symbol -->

                     <!-- Sub-title with custom font size, line height and very thin style -->
                     <h4 class="tbk__subtitle fs-18 lh-32 fw-vthin">Our Website offer you perfect information for your
                        Holiday. You can navigate best shopping malls, Departmental stores and many more places.</h4>
                  </div>
                  <!--/ Title element with custom bottom padding -->

                  <!-- Separator style 2 -->
                  <div class="hg_separator style2 clearfix">
                  </div>
                  <!--/ Separator style 2 -->
               </div>
               <!--/ col-md-12 col-sm-12 -->

               <!--/ col-md-4 col-sm-4 -->
            </div>
            <!--/ row hg_col_eq_last -->
         </div>
         <!--/ col-md-7 col-sm-12 -->
      </div>
      <!--/ row gutter-lg -->
   </div>
   <!--/ full_width -->
</section>

