
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

									<li><?php
                              echo $result->name;
									?></li>

								</ul>
								<!--/ Breadcrumbs -->

								<div class="clearfix"></div>
							</div>
							<!--/ col-sm-6 -->

							<div class="col-sm-6">
								<!-- Sub-header titles -->
								<div class="subheader-titles">
									<h2 class="subheader-maintitle"><?php echo $result->name;?></h2>
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
					<div class="right_sidebar col-md-9">
						<!-- Product -->
						<div class="product">
							<!-- Product page -->
							<div class="row product-page">
								<!-- Product main images -->
								<div class="single_product_main_image col-sm-5">
									<!-- Badge container -->
									
									<!--/ Badge container -->

									<!-- Images -->
									<div class="images">
										<!-- Main image -->
										<a href="#" class="kl-store-main-image zoom">
											<img width="600" height="600"  src="<?php echo base_url()?>uploads/<?php echo $result->image; ?>" class="attachment-shop_single wp-post-image"/>
										</a>
										<!-- Main image -->

									</div>
									<!--/ Images -->
								</div>
								<!--/ single_product_main_image col-sm-5 -->

								<!-- Main data -->
								<div class="main-data col-sm-7">
									<div class="summary entry-summary">
										<!-- Product title -->
										<h2 class="product_title entry-title"><?php echo $result->name;?></h2>
										<!-- Description -->
                     <div>
											<h3>Description</h3>
											<p class="desc kw-details-desc">

											<?php echo $result->address;?>
											</p>
										</div>
										<!--/ Description -->

									

									
										<!--/ Meta -->
									</div>
									<!-- .summary -->
								</div>
								<!--/ main-data col-sm-7 -->
							</div>
							<!--/ row product-page -->

							<!-- Description & Reviews tabs -->
						
							<!-- Description & Reviews tabs -->

						</div>
						<!--/ Product -->
					</div>
				</div>
				<!--/ row -->
			</div>
			<!--/ container -->
		</section>
		<!--/ Product page content section with custom top padding -->
