<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Content Management System
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin/dashboard'; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">CMS</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box" >
          	<!-- <div class="container"> -->
            	<div class="Header col-md-12" style="padding-top: 2%;">	
            		<form method="POST" id="cms">
            		<label><b> - Header - </b></label><br>
            		<div class="form-group col-md-6">
		                <label>Site Name</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="site_name form-control" placeholder="Site Name" name="site_name" id="site_name" autocomplete="off" value="<?php echo $cms[0]['site_name'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>First Slider</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tag"></i>
			                </span>
			                <input type="text" class="slider1 form-control" placeholder="Slider1" name="slider1" id="slider1" autocomplete="off" value="<?php echo $cms[0]['slider1'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Second Slider</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tag"></i>
			                </span>
			                <input type="text" class="slider2 form-control" placeholder="Slider2" name="slider2" id="slider2" autocomplete="off" value="<?php echo $cms[0]['slider2'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Third Slider</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tag"></i>
			                </span>
			                <input type="text" class="slider3 form-control" placeholder="slider3" name="slider3" id="slider3" autocomplete="off" value="<?php echo $cms[0]['slider3'];?>">
		                </div>
		            </div>
            	</div>
            	<div class="Main col-md-12">	
            		<label><b> - Content - </b></label><br>
            		<div class="form-group col-md-6">
		                <label>Ads Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="ads_title form-control" placeholder="Site Name" name="ads_title" id="ads_title" autocomplete="off" value="<?php echo $cms[0]['ads_title'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Ads description</label>
		                <div class="input-group" style="width: 100%;">			                
			                <textarea id="ads_description" name="ads_description" class="ads_description" style="width: 100%;"  rows="5" cols="50">
			                	<?php echo ltrim($cms[0]['ads_description']);?>
			                </textarea>
		                </div>
		            </div>	
		            <div class="form-group col-md-6">
		                <label>About Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="about_title form-control" name="about_title" id="about_title" autocomplete="off" value="<?php echo $cms[0]['about_title'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>About details</label>
		                <div class="input-group" style="width: 100%;">			                
			                <textarea id="about_description" name="about_description" class="about_description" style="width: 100%;"  rows="5" cols="50">
			                	<?php echo ltrim($cms[0]['about_description']);?>
			                </textarea>
		                </div>
		            </div>	
		            
		            <div class="form-group col-md-6">
		                <label>About Item 1 Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_1_title form-control" name="a_item_1_title" id="a_item_1_title" autocomplete="off" value="<?php echo $cms[0]['a_item_1_title'];?>">
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>About Item 1 Detail</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_1_desc form-control" name="a_item_1_desc" id="a_item_1_desc" autocomplete="off" value="<?php echo $cms[0]['a_item_1_desc'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>About Item 2 Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_2_title form-control" name="a_item_2_title" id="a_item_2_title" autocomplete="off" value="<?php echo $cms[0]['a_item_2_title'];?>">
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>About Item 2 Detail</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_2_desc form-control" name="a_item_2_desc" id="a_item_2_desc" autocomplete="off" value="<?php echo $cms[0]['a_item_2_desc'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>About Item 3 Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_3_title form-control" name="a_item_3_title" id="a_item_3_title" autocomplete="off" value="<?php echo $cms[0]['a_item_3_title'];?>">
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>About Item 3 Detail</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_3_desc form-control" name="a_item_3_desc" id="a_item_3_desc" autocomplete="off" value="<?php echo $cms[0]['a_item_3_desc'];?>">
		                </div>
		            </div>  
		            <div class="form-group col-md-6">
		                <label>About Item 4 Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_4_title form-control" name="a_item_4_title" id="a_item_4_title" autocomplete="off" value="<?php echo $cms[0]['a_item_4_title'];?>">
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>About Item 4 Detail</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_4_desc form-control" name="a_item_4_desc" id="a_item_4_desc" autocomplete="off" value="<?php echo $cms[0]['a_item_4_desc'];?>">
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>About Item 5 Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_5_title form-control" name="a_item_5_title" id="a_item_5_title" autocomplete="off" value="<?php echo $cms[0]['a_item_5_title'];?>">
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>About Item 5 Detail</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_5_desc form-control" name="a_item_5_desc" id="a_item_5_desc" autocomplete="off" value="<?php echo $cms[0]['a_item_5_desc'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>About Item 6 Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_6_title form-control" name="a_item_6_title" id="a_item_6_title" autocomplete="off" value="<?php echo $cms[0]['a_item_6_title'];?>">
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>About Item 6 Detail</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="a_item_6_desc form-control" name="a_item_6_desc" id="a_item_6_desc" autocomplete="off" value="<?php echo $cms[0]['a_item_6_desc'];?>">
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>Who says</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="who_say form-control" name="who_say" id="who_say" autocomplete="off" value="<?php echo $cms[0]['who_say'];?>">
		                </div>
		            </div>  
		            <div class="form-group col-md-6">
		                <label>What he says</label>
		                <div class="input-group" style="width: 100%;">
			                <textarea id="author" name="author" class="author" style="width: 100%;"  rows="5" cols="50">
			                	<?php echo ltrim($cms[0]['author']);?>
			                </textarea>
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Price Heading</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="price_title form-control" name="price_title" id="price_title" autocomplete="off" value="<?php echo $cms[0]['price_title'];?>">
		                </div>
		            </div>  
		            <div class="form-group col-md-6">
		                <label>Price Description</label>
		                <div class="input-group" style="width: 100%;">
			                <textarea id="price_desc" name="price_desc" class="price_desc" style="width: 100%;"  rows="5" cols="50">
			                	<?php echo ltrim($cms[0]['price_desc']);?>
			                </textarea>
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>Price 1 Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="price_1_title form-control" name="price_1_title" id="price_1_title" autocomplete="off" value="<?php echo $cms[0]['price_1_title'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Price 1 Cost</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="price1 form-control" name="price1" id="price1" autocomplete="off" value="<?php echo $cms[0]['price1'];?>">
		                </div>
		            </div> 
		            <div class="form-group col-md-6">
		                <label>Price 1 Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="price_1_title form-control" name="price_1_title" id="price_1_title" autocomplete="off" value="<?php echo $cms[0]['price_1_title'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Price 2 Cost</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="price2 form-control" name="price2" id="price2" autocomplete="off" value="<?php echo $cms[0]['price2'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Price 3 Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="price_3_title form-control" name="price_3_title" id="price_3_title" autocomplete="off" value="<?php echo $cms[0]['price_3_title'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Price 3 Cost</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="price3 form-control" name="price3" id="price3" autocomplete="off" value="<?php echo $cms[0]['price3'];?>">
		                </div>
		            </div> 
		            <label><b> - Footer - </b></label><br>
            		<div class="form-group col-md-6">
		                <label>Address</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="address form-control" name="address" id="address" autocomplete="off" value="<?php echo $cms[0]['address'];?>">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Email</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="email form-control" name="email" id="email" autocomplete="off" value="<?php echo $cms[0]['email'];?>">
		                </div>
		            </div>  
		            <div class="form-group col-md-12">
		                <label>Footer heading</label>
		                <div class="input-group" style="width: 100%;">
			                <textarea id="footer" name="footer" class="footer" style="width: 100%;"  rows="5" cols="50">
			                	<?php echo ltrim($cms[0]['footer']);?>
			                </textarea>
		                </div>
		            </div>
		            <div class="col-md-5">
		            </div>
		            <div class="col-md-4">
		            	<button type="submit" class="btn btn-success" id="cms_btn" style="
    						width: 50%;">Update</button>
		            </div>    
		        </form>
            	</div>
            	<div class="main_contents ">
            		<label style="color: #fff !important;">- Footer - </label><br>            		
            	</div>            	
            <!-- </div> -->
          </div>             
        </div>
      </div>
    </section>
</div>

<!-- <script type="text/javascript">
jQuery(function($) {
    // Consider adding an ID to your table
    // incase a second table ever enters the picture.
    $('[data-toggle="tooltip"]').tooltip();
    var items = $("table tbody tr");

    var numItems = items.length;
    var perPage = 1;

    // Only show the first 2 (or first `per_page`) items initially.
    items.slice(perPage).hide();

    // Now setup the pagination using the `.pagination-page` div.
    $("#pagination2").pagination({
        items: numItems,
        itemsOnPage: perPage,
        cssStyle: "light-theme",

        // This is the actual page changing functionality.
        onPageClick: function(pageNumber) {
            // We need to show and hide `tr`s appropriately.
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;

            // We'll first hide everything...
            items.hide()
                 // ... and then only show the appropriate rows.
                 .slice(showFrom, showTo).show();
        }
    });

    // EDIT: Let's cover URL fragments (i.e. #page-3 in the URL).
    // More thoroughly explained (including the regular expression) in: 
    // https://github.com/bilalakil/bin/tree/master/simplepagination/page-fragment/index.html

    // We'll create a function to check the URL fragment
    // and trigger a change of page accordingly.
    function checkFragment() {
        // If there's no hash, treat it like page 1.
        var hash = window.location.hash || "#page-1";

        // We'll use a regular expression to check the hash string.
        hash = hash.match(/^#page-(\d+)$/);

        if(hash) {
            // The `selectPage` function is described in the documentation.
            // We've captured the page number in a regex group: `(\d+)`.
            $("#pagination2").pagination("selectPage", parseInt(hash[1]));
        }
    };

    // We'll call this function whenever back/forward is pressed...
    $(window).bind("popstate", checkFragment);

    // ... and we'll also call it when the page has loaded
    // (which is right now).
    checkFragment();
    
});
</script> -->