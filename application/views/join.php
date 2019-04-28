<div class="container content-lg">
    <div class="title-v1">
    	<h2>Free for Life</h2>
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