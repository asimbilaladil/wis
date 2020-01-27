<!-- Page sub-header -->
<div id="page_header" class="page-subheader">
   <div class="bgback"></div>

   <!-- Animated Sparkles -->
   <div class="th-sparkles"></div>
   <!--/ Animated Sparkles -->

   <!-- Sub-Header content wrapper -->
   <div class="ph-content-wrap">
      <div class="ph-content-v-center">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <!-- Breadcrumbs -->
                  <ul class="breadcrumbs fixclear">
                     <li><a href="#">Home</a></li>

                     <li>Explore</li>

                  </ul>
                  <!--/ Breadcrumbs -->

                  <div class="clearfix"></div>
               </div>
               <!--/ col-sm-6 -->

               <div class="col-sm-6">
                  <!-- Sub-header titles -->
                  <div class="subheader-titles">
                     <h2 class="subheader-maintitle">Explore</h2>
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

<!-- Product page content section with custom top padding -->
<section id="content" class="hg_section ptop-60">
   <div class="container">
      <div class="row">
         <!-- Content with right sidebar -->
         <h1>City Sightseeing By Walk</h1>
         <div class="form-group col-sm-3">
            <label for="sel1">Start Point:</label>
            <select class="form-control" id="set1">
               <option value ='1'>Bahnhof Kiel</option>
               <option value = '2'>Citti Park</option>
               <option value = '3'>Botanical Garden</option>
              
            </select>
         </div>

         <div class="form-group col-sm-3">
            <label for="sel1">End Point:</label>
            <select class="form-control" id="set2">
               <option value = '1' >Bahnhof Kiel</option>
               <option value = '2' >Citti Park</option>
               <option value = '3' >botanical Garden</option>
            </select>
            
         </div> 
         <div class="form-group col-sm-6">
         
            <img width='400' height='400' id='cityMapId' src=''> 
         </div> 
  
         
        
         <!-- .summary -->
      </div>
      <div class="row">
      <div class="form-group col-sm-6">
         
         <button onclick='searchOnClick()' class="btn btn-primary" id="search-button">
               Search
            </button>
         </div>
</div>

<div class="row">
      <div class="form-group col-sm-12">
         
         <div>
            <h4><b>Stops<b></h4>
            <div id='mapDescriptionId'> </div>
            </div>
         </div>
</div>
      <!--/ main-data col-sm-7 -->
   </div>

   </div>
   <!--/ Product -->
   </div>
   </div>
   <!--/ row -->
   </div>
   <!--/ container -->
</section>

<!-- Product page content section with custom top padding -->
<section id="content" class="hg_section ptop-60">
   <div class="container">
      <div class="row">
         <!-- Content with right sidebar -->
      <iframe style="width: 100%; height: 500px " frameBorder="0"   src="<?php echo site_url('home/explore_map'); ?>"
      ></iframe>
         <!-- .summary -->
      </div>
      <!--/ main-data col-sm-7 -->
   </div>

   </div>
   <!--/ Product -->
   </div>
   </div>
   <!--/ row -->
   </div>
   <!--/ container -->
</section>





<!--/ Product page content section with custom top padding -->
