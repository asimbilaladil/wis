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
                        <input type="hidden" name="id" value="<?php echo $value->id; ?>"/>
                        <!-- Product container link -->
                        <a href="<?php echo base_url() ?>index.php/Home/detail/<?php echo $value->id; ?>">
                           <!-- Image wrapper -->
                           <span class="image kw-prodimage">
											<!-- Primary image -->
											<img class="kw-prodimage-img" src="<?php echo base_url()?>uploads/<?php echo $value->image; ?>"/>
										</span>
                           <!--/ Image wrapper -->

                           <!-- Details -->
                           <div class="details kw-details fixclear">
                              <!-- Title -->
                              <h3 class="kw-details-title"> <?php echo $value->name; ?></h3>

                              <!-- Description -->
                              <p class="desc kw-details-desc">
                                 <?php echo $value->address; ?>
                              </p>

                              <!--/ Price -->
                           </div>
                           <!--/ details fixclear -->
                        </a>
                        <!-- Product container link -->

                        <!-- Actions -->
                        <div class="actions kw-actions">
                           <a href="<?php echo base_url() ?>index.php/Home/detail/<?php echo $value->id; ?>" rel="nofollow"
                              class="actions-addtocart add_to_cart_button product_type_simple">View Details</a>
                        </div>
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
<!--/ Products category section with custom top padding -->
