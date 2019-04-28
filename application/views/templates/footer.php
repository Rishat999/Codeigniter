<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="<?php echo base_url();?>"><img id="logo-footer" class="footer-logo" src="<?php echo base_url();?>assets/img/logo.png" alt=""></a>
							<div class="flink" style="margin-left: 17%;">
		                        <a href="https://www.akc.org/" target="_New"><img src="/assets/img/flink3.png" class="img-responsive footer-link" ></a>
		                        <a href="https://acadogs.com/" target="_New"><img src="/assets/img/flink.png" class="img-responsive footer-link" ></a>
		                        <!-- <a href="https://adbadog.com/" target="_New"><img src="/assets/img/flink4.png" class="img-responsive footer-link" ></a> -->
		                    </div>
						</div><!--/col-md-3-->
						<!-- End About -->
						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>MAIN MENU</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="<?php echo base_url();?>">Home</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/puppy">Puppies</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/studs">Studs</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/adults">Adults</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/breeder">Breeder</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/contact">Contact Us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/blog">Blog</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/join">Join</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/login">Login</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->
						<!-- Latest -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="posts">
								<div class="headline"><h2>SSL Certificates</h2></div>
								<ul class="list-unstyled latest-list">
									<!-- <li>
										<img src="/assets/img/SSL-certificates/security1.png" class="security">
									</li> -->
									<li>
										<img src="/assets/img/SSL-certificates/security2.png" class="security">
									</li>
									<li>
										<img src="/assets/img/SSL-certificates/security3.png" class="security">
									</li>
								</ul>
							</div>
						</div><!--/col-md-3-->
						<!-- End Latest -->

						

						<!-- Address -->
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline"><h2>Contact Us</h2></div>
							<ul class="list-unstyled latest-list">
								<li><i class="radius-3x fa fa-map-marker"></i>
									<a>Address: <?php echo $cms[0]['address'];?> <br /></a>
								</li>
								<li><i class="radius-3x fa fa-globe"></i>
									<a href="mailto:ask@pupsandstud.com" class="">Email: <?php echo $cms[0]['email'];?></a>
								</li>									
							</ul>	
							<!-- <p>Subscribe to our newsletter and stay up to date with latest ads</p>
							<div class="input-group margin-bottom-50">
								<input class="form-control" type="email" placeholder="Enter email">
								<div class="input-group-btn">
									<button type="button" class="btn-u input-btn">Subscribe</button>
								</div>
							</div>	 -->					
							<!-- <address class="md-margin-bottom-40">

								Address: Houston, TX, 77082 <br />
								Email: <a href="mailto:ask@pupsandstud.com" class="">ask@pupsandstud.com</a>
							</address> -->
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<!-- <p>
								2018 &copy; Pups and Stud . All Rights Reserved.
								<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
							</p> -->
							<p><?php echo $cms[0]['footer'];?></p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="https://www.facebook.com/pupsandstud/" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/pupsandstud" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="instagram">
										<i class="fa fa-instagram"></i>
									</a>
								</li>								
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
<!-- JS Global Compulsory -->
  <!-- <script src="assets/plugins/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- JS Implementing Plugins -->
  <script src="<?php echo base_url();?>assets/plugins/smoothScroll.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/pace/pace.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/jquery.parallax.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/counter/waypoints.min.js"></script>
  <!-- <script src="assets/plugins/iCheck/icheck.min.js"></script> -->
  <script src="<?php echo base_url();?>assets/plugins/counter/jquery.counterup.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <!-- JS Page Level-->
  <!-- <script type="text/javascript" src="assets/plugins/pagination/js/jquery.simplePagination.js"></script> -->
  <script src="<?php echo base_url();?>assets/js/app.js"></script>
  <script src="<?php echo base_url();?>assets/js/forms/login.js"></script>
  <script src="<?php echo base_url();?>assets/js/forms/contact.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/pace-loader.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/owl-carousel.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/style-switcher.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/revolution-slider.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/Lobibox/lobibox.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
jQuery(function($) {


	if($('#pagination_breeder').length > 0)
	{
		var items = $(".individual_breeder");
	    var numItems = items.length;
	    if(numItems == 0)
	    	$("#pagination_breeder").hide();
	    var perPage = 6;
	    items.slice(perPage).hide();
	    $("#pagination_breeder").pagination({
	        items: numItems,
	        itemsOnPage: perPage,
	        cssStyle: "light-theme",
	        onPageClick: function(pageNumber) {
	            var showFrom = perPage * (pageNumber - 1);
	            var showTo = showFrom + perPage;
	            items.hide()
	                 .slice(showFrom, showTo).show();
	        }
	    });
	    function checkFragment() {
	        var hash = window.location.hash || "#page-1";
	        hash = hash.match(/^#page-(\d+)$/);
	        if(hash) {
	            $("#pagination_breeder").pagination("selectPage", parseInt(hash[1]));
	        }
	    };
	    $(window).bind("popstate", checkFragment);
	    checkFragment();
	}

	if($('#pagination2').length > 0) {

	    var items = $(".individual_dog");
	    var numItems = items.length;
	    if(numItems == 0)
	    	$("#pagination2").hide();
	    var perPage = 12;
	    items.slice(perPage).hide();
	    $("#pagination2").pagination({
	        items: numItems,
	        itemsOnPage: perPage,
	        cssStyle: "light-theme",
	        onPageClick: function(pageNumber) {
	            var showFrom = perPage * (pageNumber - 1);
	            var showTo = showFrom + perPage;
	            items.hide()
	                 .slice(showFrom, showTo).show();
	        }
	    });
	    function checkFragment() {
	        var hash = window.location.hash || "#page-1";
	        hash = hash.match(/^#page-(\d+)$/);
	        if(hash) {
	            $("#pagination2").pagination("selectPage", parseInt(hash[1]));
	        }
	    };
	    $(window).bind("popstate", checkFragment);
	    checkFragment();
	}
	
    if($('#pagination_blog').length > 0) {
	    var items = $(".individual_blog");
	    var numItems = items.length;
	    if(numItems == 0)
	    	$("#pagination_blog").hide();
	    var perPage = 12;
	    items.slice(perPage).hide();
	    $("#pagination_blog").pagination({
	        items: numItems,
	        itemsOnPage: perPage,
	        cssStyle: "light-theme",
	        onPageClick: function(pageNumber) {
	            var showFrom = perPage * (pageNumber - 1);
	            var showTo = showFrom + perPage;
	            items.hide()
	                 .slice(showFrom, showTo).show();
	        }
	    });
	    function checkFragment() {
	        var hash = window.location.hash || "#page-1";
	        hash = hash.match(/^#page-(\d+)$/);
	        if(hash) {
	            $("#pagination_blog").pagination("selectPage", parseInt(hash[1]));
	        }
	    };
	    $(window).bind("popstate", checkFragment);
	    checkFragment();
	}
    
});
</script>
  <!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
    <![endif]-->
  </body>
  </html>
