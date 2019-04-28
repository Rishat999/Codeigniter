<section id="breeder">
	<div class="row" style="margin-right: 0px !important;">
		<div class="container">
			<div class="col-md-3">                
			    <div class="breeder-left">			    	
			        <div class="breeder-sort area">
			            <h5>Filter Results</h5 >
			            <div class="breeder-zip">
			                <select class="filter form-control ">
			                    <option value="">Sort by </option>
			                    <option value="username"> A ~ Z</option>
			                    <option value="created_at">Latest</option>
			              </select>                            
			            </div>
			        </div>
			    </div>
			    <h4 class="add-head">Advanced Search</h4>
			    <div class="advanced-search">              
			        <div class="breeder-dist-area">
			          <h5>Available Breeds</h5>
			          <select class="breeder-zip form-control " id="selbreed">
			                <option value="all">--All Breed--</option>
			                <?php
			                	for($i = 0; $i < count($breeds); $i++)
			                	{?>
			                		<option value="<?php echo $breeds[$i]['breed_name'];?>"><?php echo $breeds[$i]['breed_name'];?></option>
			                	<?php }
			                ?>
			              
			          </select>
			        </div>	
			        <div class="breeder-dist-area">
			        	<h5>Breeder name</h5 >
            			<input type="text" id="brdrnm" class="form-control breeder-zip" placeholder="Enter Breeder name">
			        </div>		          
			        <!-- <div class="breeder-dist-area">
			          <h5>Distance</h5>
			          <select class="breeder-zip form-control ">
			            <option>Distance</option>
			            <option>1 mile</option>
			            <option>5 mile</option>
			            <option>10 mile</option>
			            <option>15 mile</option>
			            <option>20 mile</option>
			          </select>
			        </div>   -->        
			        <div class="breeder-zip-area">
			          <h5>Search By Zipcode</h5>
			          <input id="zips" type="text" class="form-control breeder-zip" placeholder="Enter Zipcode">
			        </div>   
			        <div class="breeder-select-area" style="margin-top: 21%;line-height: 40px;">
			            <input type="checkbox" class=" "  id="has_puppy">Has Puppy <br>
			            <input type="checkbox" class=" "  id="has_stud">Has Studs <br>
			            <input type="checkbox" class=" "  id="has_adult">Has Adult 
			        </div>
			    </div> 
			</div>
			<div class="col-md-9 breeder_show filter_data">				
				<?php
				if(!empty($breeders_data)){
					foreach($breeders_data as $row)
					{?>
						<div class="col-md-4 individual_breeder" >
							<div class="view view-tenth">
								<img class="img-responsive" src="<?php if(!empty($row['photo'])) echo $row['photo']; else echo base_url()."assets/img/default_gallery.png";?>" alt="">
								<div class="mask">
									<h2><?php echo $row['username'];?></h2>
									<p><?php if(strlen($row['about']) > 100) echo substr($row['about'], 0, 97).'...'; else echo $row['about']; ?></p>
									<p><?php echo $row['city'].' , '.$row['state'].' '. $row['zip'];?></p>
									<a href="breeder/detail_view?id=<?php echo $row['id'];?>" class="info">Read More</a>
								</div>
							</div>
						</div>
					<?php }}
				else
				{?>
					<section class="content" style="padding-top: 0px;">
		                <div class="row">
		                    <div class="col-xs-12">
		                        <div class="box" >           
		                            <p class="text-center">
		                              <img src="<?php echo base_url(); ?>assets/img/Users-icon.png" style="width: 245px;">
		                            </p>
		                            <p class="text-center" style="font-size:1.5em;margin-top: 5%;padding-left: 5%;padding-right: 5%;color: #fff;">Woohoo! No <b>breeders</b> exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
		                            </p>
		                            <div class="error-page" style="margin: 0px;text-align: center;padding-bottom: 3%;line-height: 50px;">
		                                <br>
		                                <h2 class="text-yellow" style="margin-top: 0px;"> 404</h2>
		                                <div class="error-content">
		                                  <h3 style="color: #fffefe;"><i class="fa fa-warning text-yellow"></i> Oops! No Breeders!</h3>
		                                  <p style="color: #fff;">
		                                    We could not find the breeders at all.
		                                    Meanwhile, you may refresh this page or you can do <a href="#" onclick='location.reload(true); return false;'>Reload</a>&nbsp;Now 
		                                  </p>                      
		                                </div>
		                            </div>  
		                        </div>   
		                    </div>
		                </div>  
		        	</section>
				<?php }
				?>
			</div>
			<div id="pagination_breeder" class="light-theme simple-pagination" style="padding-top: 0px;">
            </div> 
		</div>		
	</div>
</section>
<script>   
    
    $("#brdrnm").keyup(function()
    {	
    	filter_data();
    	
    })
    $('#selbreed').on('change',function(){
        filter_data();
    });
    $('.filter').change(function(){
    	filter_data();
    })
    
    $('#zips').on('keyup',function(){
        filter_data();
    })
    $("#has_puppy").click(function(){
    	filter_data();
    })
    $("#has_stud").click(function(){
    	filter_data();
    })
    $("#has_adult").click(function(){
    	filter_data();
    })
    pagaination_reset();
    function pagaination_reset()
    {
    	var items = $(".individual_breeder");
	    var numItems = items.length;
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
    

    function filter_data(){
        $('.filter_data').html("<div id ='loading'></div>");
        $("#pagination_breeder").show();
        var filter = $(".filter").val();       
        var gen = $('#gender').val();
        var gender = gen;
        var zip =$('#zips').val();  
        var breeder_name = $('#brdrnm').val();     
        var breed_name = $('#selbreed').val();
        var has_puppy = "0";
	    var has_stud = "0";
	    var has_adult = "0";
        if($('#has_puppy').is(":checked"))
        {	
            has_puppy = "1";
        }
        if($('#has_stud').is(":checked"))
        {	
            has_stud = "1";
        }
        if($('#has_adult').is(":checked"))
        {	
            has_adult = "1";
        }
        var dt={breed_name:breed_name, filter:filter, zip:zip , breeder_name:breeder_name, has_puppy:has_puppy, has_adult:has_adult, has_stud:has_stud};
    	console.log(dt);    
        $.ajax({
	          url:"breeder/search_breeder",
	          method:"POST",
	          data:dt,
	          success:function(data){
	          	$('.filter_data').html(data);
	          	if(data.toString().search("individual_breeder") == -1)
	          	{	
	          		console.log("no results");
	          		$("#pagination_breeder").hide();
			    }
			    else
			    {	
			    	console.log("yes");
	          		pagaination_reset();
			    }
	          }
        });
   }   
</script>