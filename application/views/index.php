<?php include('templates/header.php')?>
<section id="intro" class="intro-section">
    <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
	        <ul>
	            <li data-transition="curtain-1" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
		            <img src="assets/img/sliders/1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
		            <div class="tp-caption rs-caption-1 sft start"
			            data-x="center"
			            data-hoffset="0"
			            data-y="100"
			            data-speed="800"
			            data-start="2000"
			            data-easing="Back.easeInOut"
			            data-endspeed="300">
			            <?php echo $cms[0]['site_name'];?>
			        </div>
		            <div class="tp-caption rs-caption-2 sft"
			          data-x="center"
			          data-hoffset="0"
			          data-y="200"
			          data-speed="1000"
			          data-start="3000"
			          data-easing="Power4.easeOut"
			          data-endspeed="300"
			          data-endeasing="Power1.easeIn"
			          data-captionhidden="off"
			          style="z-index: 6">
			          <?php echo $cms[0]['slider1'];?><br>
			        </div>
			        <div class="tp-caption rs-caption-3 sft"
				        data-x="center"
				        data-hoffset="0"
				        data-y="360"
				        data-speed="800"
				        data-start="3500"
				        data-easing="Power4.easeOut"
				        data-endspeed="300"
				        data-endeasing="Power1.easeIn"
				        data-captionhidden="off"
				        style="z-index: 6">
				        <span class="page-scroll"><a href="#about" class="btn-u btn-brd btn-brd-hover btn-u-light"><?php echo $cms[0]['about_title'];?></a></span>
				        
				    </div>
		    	</li>
			    <li data-transition="sliderotate" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
			        <img src="assets/img/sliders/2.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
			        <div class="tp-caption rs-caption-1 sft start"
				      data-x="center"
				      data-hoffset="0"
				      data-y="100"
				      data-speed="800"
				      data-start="1500"
				      data-easing="Back.easeInOut"
				      data-endspeed="300">
				      <?php echo $cms[0]['site_name'];?>
				    </div>
				    <div class="tp-caption rs-caption-2 sft"
					    data-x="center"
					    data-hoffset="0"
					    data-y="200"
					    data-speed="1000"
					    data-start="2500"
					    data-easing="Power4.easeOut"
					    data-endspeed="300"
					    data-endeasing="Power1.easeIn"
					    data-captionhidden="off"
					    style="z-index: 6">
					    <?php echo $cms[0]['slider2'];?><br>
					</div>
					<div class="tp-caption rs-caption-3 sft"
						data-x="center"
						data-hoffset="0"
						data-y="360"
						data-speed="800"
						data-start="3500"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
					    <span class="page-scroll"><a href="#about" class="btn-u btn-brd btn-brd-hover btn-u-light"><?php echo $cms[0]['about_title'];?></a></span>					    
					</div>
				</li>
				<li data-transition="incube-horizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
				    <img src="assets/img/sliders/3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
				    <div class="tp-caption rs-caption-1 sft start"
					    data-x="center"
					    data-hoffset="0"
					    data-y="110"
					    data-speed="800"
					    data-start="1500"
					    data-easing="Back.easeInOut"
					    data-endspeed="300">
					    <?php echo $cms[0]['site_name'];?>
					</div>
					<div class="tp-caption rs-caption-2 sfb"
						data-x="center"
						data-hoffset="0"
						data-y="210"
						data-speed="800"
						data-start="2500"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						<?php echo $cms[0]['slider3'];?><br>
					</div>
					<div class="tp-caption rs-caption-3 sfb"
						data-x="center"
						data-hoffset="0"
						data-y="370"
						data-speed="800"
						data-start="3500"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						<span class="page-scroll"><a href="#about" class="btn-u btn-brd btn-brd-hover btn-u-light"><?php echo $cms[0]['about_title'];?></a></span>						
					</div>
				</li>
			</ul>
			<div class="tp-bannertimer tp-bottom"></div>
			<div class="tp-dottedoverlay twoxtwo"></div>
		</div>
	</div>
</section>
<!-- End Intro Section -->
<!-- Latest 20 ads for plus and professional -->
<div class="flat-testimonials bg-image-v1 parallaxBg" style="background-position: 50% -2px;">
	<div class="container">
		<div class="headline-center headline-light margin-bottom-60">
			<h2><?php echo $cms[0]['ads_title'];?></h2>
			<p><?php echo $cms[0]['ads_description'];?></p>
		</div><!--/end Headline Center-->
		<div class="row " id="latest_dogs">
			<?php if(empty($latest_dogs)){ ?>
				<!-- <h2>No latest dogs</h2> -->
			<?php }
			else { 
				foreach ($latest_dogs as $row) { ?>

					<a href="<?php echo '/dogs/detail_view?id='.$row['id']?>" target="_blank">
						<div class="col-sm-4 item">
							<div class="flat-testimonials-in md-margin-bottom-50">
								<div class="propertyType commercial" style="position: absolute;
    								top: 30px;   left: 12%;    height: 30px;    font-size: 20px;"><sup>$</sup><?php echo $row['price'];?></div>
								<img class="img-responsive" src="<?php echo $row['photo'];?>" alt="" style="width: 300px; height: 180px; ">

								<h3><b style="color: #23e80d;"><?php echo $row['dog_name'];?></b></h3>
								<span class="color-green" style="font-size: 20px;color: #000;
									"><?php echo $row['category'];?></span>
								<p ><?php if(strlen($row['description']) > 150) echo substr($row['description'], 0, 147).'...';  else echo $row['description'];?></p>
								<p ><i class="fa fa-paw" style="margin-right: 2%;"></i><?php if(strlen($row['breed_name']) > 30) echo substr($row['breed_name'], 0, 27).'...';  else echo $row['breed_name'];?></p>
							</div>
						</div>		
					</a>		
				<?php }

			}
			?>												
		</div><!--/end row-->
	</div><!--/end container-->
</div>
<!--  About Section -->
<section id="about" class="about-section section-first">  
    <div class="about-image bg-grey">   
        <div class="container content-lg">
	        <div class="title-v1">
		        <h2><?php echo $cms[0]['about_title'];?></h2>
		        <p><?php echo $cms[0]['about_description'];?></p>
	        </div>
        <div class="row">
            <div class="col-md-6 content-boxes-v3 margin-bottom-40">
	            <div class="clearfix margin-bottom-30">
	              <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-trophy"></i>
	              <div class="content-boxes-in-v3">
	                <h2 class="heading-sm"><?php echo $cms[0]['a_item_1_title'];?></h2>
	                <p><?php echo $cms[0]['a_item_1_desc'];?></p>
	              </div>
	            </div>
	            <div class="clearfix margin-bottom-30">
	              <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-directions"></i>
	              <div class="content-boxes-in-v3">
	                <h2 class="heading-sm"><?php echo $cms[0]['a_item_2_title'];?></h2>
	                <p><?php echo $cms[0]['a_item_2_desc'];?></p>
	              </div>
	            </div>
	            <div class="clearfix margin-bottom-30">
	              <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-diamond"></i>
	              <div class="content-boxes-in-v3">
	                <h2 class="heading-sm"><?php echo $cms[0]['a_item_3_title'];?></h2>
	                <p><?php echo $cms[0]['a_item_3_desc'];?></p>
	              </div>
	            </div>
            </div>
            <div class="col-md-6">
           		<img class="img-responsive" src="assets/img/mockup/mymock.jpg" alt="">
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<img class="img-responsive" src="assets/img/mockup/mymock1.jpg" alt="" >
        	</div>
        	<div class="col-md-6 content-boxes-v3 mg-3">
        		<div class="clearfix margin-bottom-30">
	              <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-trophy"></i>
	                <div class="content-boxes-in-v3">
		                <h2 class="heading-sm"><?php echo $cms[0]['a_item_4_title'];?></h2>
		                <p><?php echo $cms[0]['a_item_4_desc'];?></p>
	                </div>	                
	            </div>
	            <div class="clearfix margin-bottom-30">
	              <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-directions"></i>
	                <div class="content-boxes-in-v3">
		                <h2 class="heading-sm"><?php echo $cms[0]['a_item_5_title'];?></h2>
		                <p><?php echo $cms[0]['a_item_5_desc'];?></p>
	                </div>
	            </div>
	            <div class="clearfix margin-bottom-30">
	              <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-diamond"></i>
	                <div class="content-boxes-in-v3">
		                <h2 class="heading-sm"><?php echo $cms[0]['a_item_6_title'];?></h2>
		                <p><?php echo $cms[0]['a_item_6_desc'];?></p>
	                </div>
	            </div>
        	</div>
        </div>
    </div>
    <div class="parallax-quote parallaxBg">
        <div class="container">
            <div class="parallax-quote-in">
	            <p><?php echo $cms[0]['author'];?></p>
            </div>
        </div>
    </div>      
</section>
<!--  About Section -->
<!-- Services Section -->

<section id="services">
<div class="container content-lg">
    <div class="title-v1">
    	<h2><?php echo $cms[0]['price_title'];?></h2>
    </div>
    <div class="row service-box-v1">
        <div class="col-md-4 col-sm-6">
        	<div class="service-block service-block-default basic">
				<i class="icon-custom icon-lg icon-bg-u rounded-x fa fa-lightbulb-o"></i>
				<h1 class="heading-sm"><?php echo $cms[0]['price_1_title'];?></h1>
				<p>This is the <b><?php echo $cms[0]['price_1_title'];?></b> membership</p>
				<ul class="list-unstyled">
		            <li>1 Active PUPPY ads</li>
		            <li>5 pictures per ads</li>
		            <li style="white-space: nowrap;">Ads is posted in order as received</li>
		            <li></li>
		        </ul>
		        <div class="bottom" style="margin-top: 30%;">
		        	<h3><b><?php if($cms[0]['price1']==0) echo "Free For Life";?></b></h3>
		        	<a class="btn btn-success btn-raised join" id="basic" href="/login">Join Now</a>
		        </div>		        
			</div>	        
        </div>
        <div class="col-md-4 col-sm-6">
	      	<div class="service-block service-block-default plus">
				<i class="icon-custom icon-lg icon-bg-u rounded-x icon-line icon-present"></i>
				<h1 class="heading-sm"><?php echo $cms[0]['price_2_title'];?></h1>
				<p>This is the <b><?php echo $cms[0]['price_2_title'];?></b> membership</p>
				<ul class="list-unstyled">
		            <li>Basic plan</li>
		            <li>Any category additional ads</li>
		            <li>2 months expirations / ads</li>
		            <li>5 pictures per ads</li>
		            <li style="white-space: nowrap;">Ads is posted in order as received</li>
		            <li>Ads featured on homepage</li>
		            <li></li>
		        </ul>
		        <div class="bottom">
		        	<h3><b>$<?php echo $cms[0]['price2'];?></b></h3>
		        	<a class="btn btn-success btn-raised join" id="plus" href="<?php echo base_url('join/buy/a'.$cms[0]['price2']); ?>">Paypal</a>
		        </div>	
			</div>	                
        </div>
        <div class="col-md-4 col-sm-12">
	      	<div class="service-block service-block-default professional">
				<i class="icon-custom icon-lg icon-bg-u rounded-x icon-line icon-rocket"></i>
				<h1 class="heading-sm"><?php echo $cms[0]['price_3_title'];?></h1>
				<p>This is the <b><?php echo $cms[0]['price_3_title'];?></b> membership</p>
				<ul class="list-unstyled">
		            <li>Basic plan</li>
		            <li>12 ads per category</li>
		            <li>Yearly expiration</li>
		            <li>5 pictures per ads</li>
		            <li style="white-space: nowrap;">Ads is posted in order as received</li>
		            <li>Ads featured on homepage</li>
		            <li></li>
		        </ul>
		        <div class="bottom">
		        	<h3><b>$<?php echo $cms[0]['price3'];?></b></h3>
		        	<a class="btn btn-success btn-raised join" id="professional" href="<?php echo base_url('join/buy/b'.$cms[0]['price3']); ?>">Paypal</a>
		        </div>	
			</div>
        </div>
    </div>
</div>
</section>
<div class="parallax-counter-v4 parallaxBg1" id="facts" style="background-position: 50% 66px;">
	<div class="container content-sm">
		<div class="row">
			<div class="col-md-3 col-xs-6 md-margin-bottom-50">
				<i class="fa fa-user"></i>
				<span class="counter"><?php echo $breeder_count;?></span>
				<h4>Breeders</h4>
			</div>
			<div class="col-md-3 col-xs-6 md-margin-bottom-50">
				<i class="fa fa-paw"></i>
				<span class="counter"><?php echo $dog_count;?></span>
				<h4>Total Dogs</h4>
			</div>
			<div class="col-md-3 col-xs-6">
				<i class="icon-emoticon-smile"></i>
				<span class="counter"><?php echo $ads_count;?></span>
				<h4>Total Ads</h4>
			</div>
			<div class="col-md-3 col-xs-6">
				<i class="icon-bulb"></i>
				<span class="counter">576</span>
				<h4>Visitors</h4>
			</div>
		</div><!--/end row-->
	</div><!--/end container-->
</div>
<?php include('templates/footer.php')?>
