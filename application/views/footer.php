	<!-- Footer - Default Style -->
		<footer id="footer" style="color:white">
			<div class="container">
				<div class="row">
				<div class="col-sm-3">
				</div>
					<div class="col-sm-2">
						<div>
							<h3 class="title m_title"><b>TOP MENU</b></h3>
							<div class="sbs">
								<ul class="menu">
                           <li class="menu-item"><a href="<?php echo base_url(); ?>">Home</a></li>

                           <li class="menu-item"><a href="<?php echo base_url(); ?>index.php/about">About Us</a></li>
                           <li class="menu-item"><a href="<?php echo base_url(); ?>index.php/explore">Explore</a></li>

                           <li class="menu-item"><a href="<?php echo base_url(); ?>index.php/contact">Contact Us</a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<!--/ col-sm-5 -->
<div class="col-sm-2">
				</div>
				
					<div class="col-sm-4">
						<div>
							<h3 class="title m_title">GET IN TOUCH</h3>
							<div class="contact-details"><p><strong>T (212) 555 55 00</strong><br>
								Email: <a href="#">sales@holidaymaker.com</a></p>
								<p>Holiday Maker<br>
                           64 Steenbeker Weg,
                           Kiel,
                           24106 Germany</p>
										</div>
						</div>
					</div>
					<!--/ col-sm-3 -->
				</div>
				<!--/ row -->

				<!--/ row -->

				<div class="row">
					<div class="col-sm-12">
						<div class="bottom clearfix" style="color:white !important">
							<!-- social-icons -->
							<ul class="social-icons sc--clean clearfix">
								<li class="title">GET SOCIAL</li>
								<li><a href="#" target="_self" class="icon-facebook" title="Facebook"></a></li>
								<li><a href="#" target="_self" class="icon-twitter" title="Twitter"></a></li>	
								<li><a href="#" target="_self" class="icon-dribbble" title="Dribbble"></a></li>
								<li><a href="#" target="_blank" class="icon-google" title="Google Plus"></a></li>
							</ul>
							<!--/ social-icons -->

							<!-- copyright -->
							<div class="copyright">
								<a href="<?php echo base_url() ?>">
									<img src="<?php echo base_url() ?>includes/images/kallyas-logo.svg" >
								</a>
								<p>© 2018 All rights reserved.</p>
							</div>
							<!--/ copyright -->
						</div>
						<!--/ bottom -->
					</div>
					<!--/ col-sm-12 -->
				</div>
				<!--/ row -->
			</div>
			<!--/ container -->
		</footer>
		<!--/ Footer - Default Style -->
	</div>
	<!--/ Page Wrapper -->


	
	
	<!--/ Login Panel content -->
	

	<!-- ToTop trigger -->
	<a href="#" id="totop">TOP</a>
	<!--/ ToTop trigger -->


	


	<!-- JS FILES // These should be loaded in every page -->
	<script type="text/javascript" src="<?php echo base_url("includes/js/bootstrap.min.js") ?> "></script>
	<script type="text/javascript" src="<?php echo base_url("includes/js/kl-plugins.js") ?>"></script>

	<!-- JS FILES // Loaded on this page -->
	<script type="text/javascript" src="<?php echo base_url("includes/js/plugins/jquery-ui-1.10.3.custom.min.js") ?>"></script>

	<!-- Custom Kallyas JS codes -->
	<script type="text/javascript" src=" <?php echo base_url("includes/js/kl-scripts.js") ?>"></script>

	<!-- Custom user JS codes -->
	<script type="text/javascript" src="<?php echo base_url("includes/js/kl-custom.js") ?>"></script>
	
	<!-- Modernizr script -->
	<script type="text/javascript">
		//use the modernizr load to load up external scripts. This will load the scripts asynchronously, but the order listed matters. Although it will load all scripts in parallel, it will execute them in the order listed
		Modernizr.load([
			{
				// test for media query support, if not load respond.js
				test : Modernizr.mq('only all'),
				// If not, load the respond.js file
				nope : '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js'
			}
		]);
      var rangeSlider = function(){
          var slider = $('.range-slider'),
              range = $('.range-slider__range'),
              value = $('.range-slider__value');

          slider.each(function(){

              value.each(function(){
                  var value = $(this).prev().attr('value');
                  $(this).html(value);
              });

              range.on('input', function(){
                  $(this).next(value).html(this.value);
              });
          });
      };

      rangeSlider();
	</script>


</body>
</html>