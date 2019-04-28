<section id="dogs">
	<div class="row" style="margin-right: 0px !important;">
		<div class="container">
			<div class="col-sm-3">                
			    <div class="breeder-left">
			        <div class="breeder-sort area">
			            <h5>Filter Result</h5 >
			            <div class="breeder-zip">
			                <select class="filter form-control ">
			                    <option value="">Sort by </option>
			                    <option value="dog_add_date">Latest </option>
			                    <option value="price">Price</option>
			                    <option value="age">Age</option>
			                    <option value="gender">Gender</option>
			              </select>                            
			            </div>
			        </div>
			    </div>
			    <h4 class="add-head">Advanced Search</h4>
			    <div class="advanced-search">              
			        <div class="breeder-dist-area">
			          <h5>Choose Breed</h5>
			          <select class="form-control " id="selbreed">
			                       <option value="all">--All Breed--</option>
			              <?php      
			              if(!empty($breeds))
			              	{
			              	   	foreach($breeds as $row) {   ?>
			                       <option value="<?php echo $row;?>"><?php echo $row;?></option>
			                       <?php    }                 
			                 } else {?>
			                 <option>------No Breed Found----</option>
			                 <?php
			                 }
			            ?>
			          </select>
			        </div>
			        <div class="breeder-dist-area">
			          <h5>Gender</h5>
			          <select name="gender" id="gender" class="breeder-zip form-control ">
			            <option value="all">All gender</option>
			            <option value="Male">Male</option>
			            <option value="Female">Female</option>
			          </select>
			        </div>   
			        <div class="breeder-dist-area">
			          <h5>Choose Zipcode</h5>
			          <select class="form-control " id="zips">
			                       <option value="all">--All Zipcodes--</option>
			              <?php      
			              if(!empty($zipcodes))
			              	{
			              	   	foreach($zipcodes as $row) {   ?>
			                       <option value="<?php echo $row;?>"><?php echo $row;?></option>
			                       <?php    }                 
			                 } else {?>
			                 <option>------No Zipcode Found----</option>
			                 <?php
			                 }
			            ?>
			          </select>
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
			        </div>    -->       
			        <h5>Price</h5>
			        <div class="form-inpts-btns">              
			          <input type="text" class="form-control breeder-zip" id="hidden_minimum_price" value="0" placeholder="from">           
			          <input type="text" class="form-control breeder-zip" id="hidden_maximum_price" value="50000" placeholder="to">           
			        </div>     
			        <div class="breeder-select-area badges">
			           <input type="checkbox" id="badge7" class="badge7">ACA <br>
			           <input type="checkbox" id="badge1" class="badge1">AKC<br>
			           <input type="checkbox" id="badge11" class="badge11">Champion Bloodline<br>
			           <input type="checkbox" id="badge4" class="badge4">Dewormed<br>
			           <input type="checkbox" id="badge5" class="badge5">Family Raised <br>
			           <input type="checkbox" id="badge8" class="badge8">Fleas Free<br>
			           <input type="checkbox" id="badge6" class="badge6">Health Guarantee<br>
			           <input type="checkbox" id="badge10" class="badge10">Raised arround Kids <br>
			           <input type="checkbox" id="badge9" class="badge9">Socialized <br>
			           <input type="checkbox" id="badge2" class="badge2">Veterinarian <br>
			           <input type="checkbox" id="badge3" class="badge3">Vaccinated <br>
			        </div>
			    </div> 
			</div>
			<div class="col-sm-9 dog_show filter_data">
				<?php
				if(!empty($puppys)) {
					foreach($puppys as $row)
					{?>
						<a href="<?php echo '/dogs/detail_view?id='.$row['id']?>" target="_blank">
							<div class="col-md-3 individual_dog">
			                <div class="view">			                    
			                    <img src="<?php echo $row['photo'];?>" class="dog_photo">
			                    <div class="propertyType commercial"><sup>$</sup><?php echo $row['price'];?></div>
			                </div>
			                <div class="info">
			                    <p class="large" style="text-overflow: ellipsis"><b><?php echo $row['dog_name'];?></b>
			                    <p class="small wb-red"  data-toggle="tooltip" data-placement="bottom" title="<?php $string = $row['city'].' , '.$row['state'].' , '.$row['zip']; echo $string;?>">
			                    	<?php $string = $row['city'].' , '.$row['state'].' , '.$row['zip']; 
			                    if(strlen($string) > 22 ) echo substr($string, 0, 22).'...'; else echo $string;?></p>
			                    <p class="small" style="text-overflow: ellipsis"><?php echo $row['age'];?></p>
			                    
			                </div>
			                <div class="stats wb-red-bg">
			                    <span class="fa fa-paw" data-toggle="tooltip" data-placement="bottom" title="<?php echo $row['breed_name']; ?>"> <strong><?php if(strlen($row['breed_name']) > 18) echo substr($row['breed_name'], 0, 15).'...'; else echo $row['breed_name']; ?></strong></span>
			                    <span class="fa fa-paw" style="float: right; margin-top: 2%;"> <strong><?php echo $row['gender'];?></strong></span>	
			                </div>
			            </div>
						</a>
						
					<?php }}
				else
				{?>
					<section class="content" style="padding-top: 0px;">
		                <div class="row">
		                    <div class="col-xs-12">
		                        <div class="box" >           
		                            <p class="text-center" style="padding-top: 40px;">
		                              <img src="<?php echo base_url(); ?>assets/img/logo.png" style="
		                                width: 270px;  height: 250px;">
		                            </p>
		                            <p class="text-center" style="font-size:1.5em;margin-top: 5%;padding-left: 5%;padding-right: 5%;color: #fff;">Woohoo! No <b>puppies</b> exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
		                            </p>
		                            <div class="error-page" style="margin: 0px;text-align: center;padding-bottom: 3%;line-height: 50px;">
		                                <br>
		                                <h2 class="text-yellow" style="margin-top: 0px;"> 404</h2>
		                                <div class="error-content" style="font-size: 15px;padding-left: 5%;padding-right: 5%;">
		                                  <h3 style="color: #fffefe;"><i class="fa fa-warning text-yellow"></i> Oops! No dogs!</h3>
		                                  <p style="color: #fff;">
		                                    We could not find the dogs you were looking for.
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

			<div id="pagination2" class="light-theme simple-pagination">
            </div> 
		</div>		
	</div>
</section>
<script>
    var brd = 0;
    $('#hidden_minimum_price').on('keydown keypress keyup change',function(){
        filter_data();
    });
    $('#hidden_maximum_price').on('keydown keypress keyup change',function(){
        filter_data();
    });
    $('#gender').change(function(){
        filter_data();
    });
    $('#selbreed').on('change',function(){
        brd=1;
        filter_data();
    });
    $('.filter').change(function(){
    	filter_data();
    })
    $('.badge1').click(function(){
        filter_data();
    });
    $('.badge2').click(function(){
        filter_data();
    });
    $('.badge3').click(function(){
        filter_data();
    });
    $('.badge4').click(function(){
        filter_data();
    });
    $('.badge5').click(function(){
        filter_data();
    });
    $('.badge6').click(function(){
        filter_data();
    });
    $('.badge7').click(function(){
        filter_data();
    });
    $('.badge8').click(function(){
        filter_data();
    });
    $('.badge9').click(function(){
        filter_data();
    });
    $('.badge10').click(function(){
        filter_data();
    });
    $('.badge11').click(function(){
        filter_data();
    });
    $('#zips').on('change',function(){
        filter_data();
    })
    pagaination_reset();
    function pagaination_reset()
    {
    	var items = $(".individual_dog");
	    var numItems = items.length;
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
    function filter_data(){
        $('.filter_data').html("<div id ='loading'></div>");
        $("#pagination2").show();
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var b1="0";
        var b2="0";
        var b3="0";
        var b4="0";
        var b5="0";
        var b6="0";
        var b7="0";
        var b8="0";
        var b9="0";
        var b10="0";
        var b11="0";
        if($('.badge1').is(":checked"))
        {	
            b1 = "1";
        }
        if($('.badge2').is(":checked"))
            b2 = "1";
        if($('.badge3').is(":checked"))
            b3 = "1";
        if($('.badge4').is(":checked"))
            b4 = "1";
        if($('.badge5').is(":checked"))
            b5 = "1";
        if($('.badge6').is(":checked"))
            b6 = "1";
        if($('.badge7').is(":checked"))
            b7 = "1";
        if($('.badge8').is(":checked"))
            b8 = "1";
        if($('.badge9').is(":checked"))
            b9 = "1";
        if($('.badge10').is(":checked"))
            b10 = "1";
        if($('.badge11').is(":checked"))
            b11 = "1";
        var filter = $(".filter").val();       
        var gen = $('#gender').val();
        var gender = gen;
        var zip =$('#zips').val();       
        var breed_name = $('#selbreed').val();
        var dt={action:action, minimum_price:minimum_price, maximum_price:maximum_price, breed_name:breed_name, gender:gender, filter:filter, zip:zip, badge1:b1, badge2:b2, badge3:b3, badge4:b4, badge5:b5, badge6:b6, badge7:b7, badge8:b8, badge9:b9, badge10:b10 , badge11:b11};
    	console.log(dt);
         
       
       $.ajax({
          url:"dogs/search_puppy",
          method:"POST",
          data:dt,
          success:function(data){
          	console.log(data);
          	console.log(data.toString().search("individual_dog"));
          	$('.filter_data').html(data);
          	if(data.toString().search("individual_dog") == -1)
          	{	
          		console.log("no results");
          		$("#pagination2").hide();
		    }
		    else
		    {	
		    	console.log("yes");
          		pagaination_reset();
		    }
          }
       });
   }
   
   $('.common_selector').click(function(){
       filter_data();
   });
    
  
                    
   /*$('#price_range').slider({
      range:true,
      min:0,
      max:1000,
      values:[0, 1000],
      step:5,
      stop:function(event, ui){
          $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
          $('#hidden_minimum_price').val(ui.values[0]);
          $('#hidden_maximum_price').val(ui.values[1]);
          filter_data();
      }
   });*/
                
</script>