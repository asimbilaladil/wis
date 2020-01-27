<!-- Page sub-header with redish color -->
<div id="page_header" class="page-subheader uh_flat_redish ">
   <div class="bgback"></div>

   <!-- Animated Sparkles -->
   <div class="th-sparkles"></div>
   <!--/ Animated Sparkles -->

   <!-- Sub-Header content wrapper with custom min height .min-300  -->
   <div class="ph-content-wrap min-300">
      <div class="ph-content-v-center">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <!-- Breadcrumbs -->
                  <ul class="breadcrumbs fixclear">
                     <li><a href="<?php echo base_url(); ?>">Home</a></li>
                     <li>List</li>
                  </ul>
                  <div class="clearfix"></div>
               </div>
               <!--/ col-sm-6 -->

               <div class="col-sm-6">
                  <!-- Sub-header titles -->
                  <div class="subheader-titles">
                     <h2 class="subheader-maintitle"></h2>
                     <h4 class="subheader-subtitle"></h4>
                  </div>
                  <!--/ Sub-header titles -->
               </div>
               <!--/ col-sm-6 -->
            </div>
            <!--/ row -->
         </div>
         <!--/ container -->
      </div>
      <!--/ .ph-content-v-center -->
   </div>
   <!--/ Sub-Header content wrapper -->
</div>
<!--/ Page sub-header -->

<!-- Products category section with custom top padding -->
<section class="hg_section ptop-60">
   <div class="container">
      <div class="row">
         <!-- Content with left sidebar -->
         <div class="left_sidebar col-md-9">
            <!-- Title with bold style -->
            <!-- Products list -->
            <ul class="products clearfix">
               <?php

               foreach ($result as $value) {
                  ?>
                  <!-- Product #2 -->
                  <li class="product">
                     <div class="product-list-item prod-layout-classic">
                        <!-- Badge container -->

                        <!--/ Badge container -->
                        <!-- Product container link -->
                           <!-- Image wrapper -->
                           <span class="image kw-prodimage">
											<!-- Primary image -->
											<img class="kw-prodimage-img" src="<?php echo base_url() . $value->image; ?>"/>
										</span>
                           <!--/ Image wrapper -->

                           <!-- Details -->
                           <div class="details kw-details fixclear">
                              <!-- Title -->
                              <h3 class="kw-details-title"> <?php echo $value->name; ?></h3>

                              <!-- Description -->
                              <p class="desc kw-details-desc">
                                 Price :  <?php echo $value->price; ?>
                                 <br>
                                 Start time : <?php echo $value->start_time; ?> and End time :  <?php echo $value->end_time; ?>

                              </P> <p class="desc kw-details-desc">
                                 Stops :  <?php echo $value->stops; ?>
                                 </br>
                                 Language :
                                 <?php echo $value->language; ?>
                              </p> <p class="desc kw-details-desc">
                                 <br>
                                 Places :
                                 <?php echo $value->places; ?>

                              </p>
                              <p class="desc kw-details-desc">
                                 Description :
                                 <?php echo $value->description; ?>
                              </P>

                              <!--/ Price -->
                           </div>
                           <!--/ details fixclear -->
                        </a>
                        <!-- Product container link -->

                        <!--/ Actions -->
                     </div>
                     <!--/ product-list-item -->
                  </li>

                  <?php

               }
               ?>
            </ul>

            <!--/ Products list -->
         </div>
         <!-- Sidebar left -->
         <!--/ Sidebar left col-md-3 -->
      </div>
      <!--/ row -->
   </div>
   <!--/ container -->
</section>
