<?php
	$username = $this->session->userdata("username");
	$role = $this->session->userdata("role");
	$photo = $this->session->userdata("photo");
	$email = $this->session->userdata("email");
	$member_type = $this->session->userdata("member_type");
	$payment_status = $this->session->userdata("payment_status");
	$txn_id = $this->session->userdata("txn_id");
	$city = $this->session->userdata("city");
	$state = $this->session->userdata("state");
	$zip = $this->session->userdata("zip");
?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Upload a dog
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'breeder/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Upload a dog</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
        	<?php if(!empty($errors)) {?>
	        <div class="form-group col-md-12 error_display">
	          <input type="hidden" name="error_display" class="error_display_text" value="<?php echo $errors['error']; ?>">
	          <script type="text/javascript">
	            var shortCutFunction = "error";
	            var msg = $(".error_display_text").val();
	            var title = "Upload Failed!";
	            toastr[shortCutFunction](msg, title);
	          </script>
	        </div>
	      <?php  unset($errors);}?>
            <div class="box" style="min-height: 2030px;">
            	<div class="col-md-12">
            		<form method='post' class="upload_dog" enctype="multipart/form-data" novalidate="">
            			<div class="col-md-12">
            				<h4>Basic Information</h4>
            				<div class="col-md-12">
            					<div class="form-group col-md-4">
					                <label>Dog Name</label>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="glyphicon glyphicon-tower"></i>
						                </span>
						                <input type="text" class="dog_name form-control" placeholder="Name" name="dog_name" id="dog_name" autocomplete="off">
					                </div>
					            </div>
					            <div class="form-group col-md-4">
					                <label>Category</label>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="glyphicon glyphicon-tag"></i>
						                </span>
						                <select name='category' id='category' class='form-control'>
							           		<option value=''>Select the category</option>
							                <?php if($member_type=='professional'){?>			                
							                  <option value='puppy'>Puppy</option>
							                  <option value='stud'>Stud</option>
							                  <option value='adult'>Adult</option>
							                	<?php } else    {?>
							                  <option value='puppy'>Puppy</option>
							              <?php } ?>
							            </select>
					                </div>			                
					            </div>
					            <div class="form-group col-md-4">	
	                                <label>Breeds</label>   
	                                <div class="input-group">   
	                                	<span class="input-group-addon">
						                    <i class="glyphicon glyphicon-tag"></i>
						                </span>                          
		                                <select class="form-control" id="breedname" >
		                                   	<option value="">Select breed</option>
		                                    <?php foreach($breeds as $row) {?>
		                                        <option value="<?php echo $row;?>"><?php echo $row;?></option>
		                                    <?php }?>
		                                </select>
		                            </div>
	                            </div>
            				</div>            				
				            <div class="col-md-12">
	            				<div class="form-group col-md-3">
					                <label>DOB</label>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="glyphicon glyphicon-calendar"></i>
						                </span>
						                <input type='text' name='dob' id='dob' class='form-control' required >
					                </div>
					            </div> 
					            <div class="form-group col-md-3">
					                <label>Age (in Weeks)</label>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="fa fa-calendar"></i>
						                </span>
						                <input type='text' name='age' id='age' class='form-control' disabled="">
					                </div>
					            </div>
					            <div class="form-group col-md-3">
					                 <div id="otherprice">
					                	<label>Price $ </label>
						                <div class="input-group">
							                <span class="input-group-addon">
							                    <i class="fa fa-dollar"></i>
							                </span>
							                <input type='text' name='price' id='price1' class='form-control' required>
						                </div>
					                </div>
					                <div id="studprice">
					                	<label>Price </label>
						                <div class="input-group">
							                <span class="input-group-addon">
							                    <i class="fa fa-dollar"></i>
							                </span>
							                <input type="text" name='price' id='price2' class='form-control' placeholder="Type POL / amount">
						                </div>
					                </div>
						           
					            </div>
					            <div class="form-group col-md-3">
					                <label>Gender</label>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="glyphicon glyphicon-sunglasses"></i>
						                </span>
						                <select class="form-control" name='gender' id='gender' required>
						                	<option value="">Select dog gender</option>
							                <option value="male">Male</option>
							                <option value="female">Female</option>
							            </select>
					                </div>
					            </div>
	            			</div>
            			</div>            						   
			            <div class="form-group col-md-12" style="margin-left: 30px;">
				            <label>Dog Bio</label>
				            <div class="input-group" style="width: 94%;">      
				            	<textarea rows="4" cols="50" id="description" name="description" placeholder="Dog Descriptions here..." class="description form-control" required="" ></textarea>
				            </div>
				        </div>
				        <div class="col-md-12">
            				<h4>Location</h4>
            				<div class="col-md-12">
	            				<div class="form-group col-md-4">
					                <label>City</label>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="glyphicon glyphicon-map-marker"></i>
						                </span>
						                <input type="text" class="city form-control" placeholder="City name here" id="city" name="city" autocomplete="off" disabled="" value="<?php echo $city;?>">
						                <input type="hidden" name="city" id="city" value="<?php echo $city; ?>">
					                </div>
					            </div>
					            <div class="form-group col-md-4">
					                <label>State</label>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="glyphicon glyphicon-home"></i>
						                </span>
						                <input type="text" id="state" class="state form-control" placeholder="State here" name="state" autocomplete="off" disabled="" value="<?php echo $state;?>">
						                <input type="hidden" name="state" id="state" value="<?php echo $state; ?>">
					                </div>
					            </div>
					            <div class="form-group col-md-4">
					                <label>Zipcode</label>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="glyphicon glyphicon-exclamation-sign"></i>
						                </span>
						                <input type="text" class="zipcode form-control" placeholder="Zipcode" name="zipcode" autocomplete="off" disabled="" value="<?php echo $zip;?>">
						                <input type="hidden" name="zip" id="zip" value="<?php echo $zip; ?>">
					                </div>
					            </div>
	            			</div>
            			</div>            			            			
			            <div class="col-md-12">
            				<h4>Badges</h4>
            				<div class="col-md-12">
	            				<div class="container">
	            					<div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge7" name='badge7' class="flat-red badge7" value="ACA Registered">
							              <label>ACA Registered</label>
							        </div>
	            					<div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge1" name='badge1' class="flat-red badge1" value="AKC Registered">
							              <label>AKC Registered</label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge11" name='badge11' class="flat-red badge1" value="Champion Bloodline">
							              <label>Champion Bloodline</label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge4" name='badge4' class="flat-red badge4" value="Dewormed">
							              <label>Dewormed</label>
							        </div>
							        							        
	            				</div>
	            			</div>
	            			<div class="col-md-12">
	            				<div class="container">
	            					<div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge5" name='badge5' class="flat-red badge5" value="Family Raised">
							              <label>Family Raised</label>
							        </div>
	            					<div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge8" name='badge8' class="flat-red badge8" value="FLEA FREE">
							              <label>Fleas Free </label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge6" name='badge6' class="flat-red badge6" value="Health Guarantee">
							              <label>Health Guarantee</label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge10" name='badge10' class="flat-red badge10" value="Raised arround Kids">
							              <label>Raised arround Kids</label>
							        </div>							        
	            				</div>
	            			</div>
	            			<div class="col-md-12">
	            				<div class="container">	            
	            					<div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge9" name='badge9' class="flat-red badge9" value="Socialized">
							              <label>Socialized</label>
							        </div>					
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge2" name='badge2' class="flat-red badge2" value="Veterinarian Checked">
							              <label>Veterinarian Checked</label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge3" name='badge3' class="flat-red badge3" value="Vaccinated">
							              <label>Vaccinated</label>
							        </div>
	            				</div>
	            			</div>
            			</div>       			
            			<div class="col-md-12 slider_images">
            				<h4>Dog Image and Gallery</h4>
            				<style type="text/css">
            					.wrap-custom-file 
									{
									    position: relative;
									    display: inline-block;
									    width: 180px;
									    height: 180px;
									    margin: 0 0.5rem 1rem;
									    text-align: center;
									    left: 0px !important;
									}
								.dropzone .dz-image img
							      {
							        width: 165px !important;
							        height: 165px !important;
							      }	
            				</style>
              				<div class="col-md-3 imagepart1" style="text-align: center;margin-left: 38%;">    
	            					<div class="wrap-custom-file">                
					                    <input type="file" name="main" id="main" accept=".gif, .jpg, .png">
					                    <label for="main">
					                        <span>Main Image</span>
					                        <i class="fa fa-plus-circle"></i>
					                    </label>     
					                </div>
            				</div>            				          				
            			</div>
            			<div class="row">
                                <div class="form-group col-md-12">
                                    <lable for="">Gallery</lable>
                                    <div action="/dogs/upload_thumbnails" name="escort_thumbnails[]" class="dropzone" id="dropzone_escort" enctype="multipart/form-data" style="background: url('/assets/dist/img/dropzone-background.png');">
                                    	<!-- style="background: url('/assets/dist/img/dropzone-background.png');" -->
                                        <!-- <input type="file" name="file" multiple/> -->
                                    </div>
                                </div>
                            </div>
            			<div class="col-md-12" id="parental" >
            				<h4>Parental Information</h4>
            				<div class="form-group col-md-6" style="text-align: center;">
				            	<div class="col-md-6" style="margin-left: 40%;">           		
				            		<div class="wrap-custom-file">                
					                    <input type="file" name="dimg" id="dimg" accept=".gif, .jpg, .png">
					                    <label for="dimg">
					                        <span>Dad Image</span>
					                        <i class="fa fa-plus-circle"></i>
					                    </label>     
					                </div>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="glyphicon glyphicon-tower"></i>
						                </span>
						                <input type="text" class="dname form-control" placeholder="Dad Name" name="dname" autocomplete="off" id="dname">
					                </div>
				            	</div>
				            </div>
				            <div class="form-group col-md-6" style="text-align: center;">
				            	<div class="col-md-6" >
				            		<div class="wrap-custom-file">                
					                    <input type="file" name="bimg" id="bimg" accept=".gif, .jpg, .png">
					                    <label for="bimg">
					                        <span>Bitch Image</span>
					                        <i class="fa fa-plus-circle"></i>
					                    </label>     
					                </div>		
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="glyphicon glyphicon-tower"></i>
						                </span>
						                <input type="text" class="bname form-control" placeholder="Bitch Name" name="bname" autocomplete="off" id="bname">
					                </div>
				            	</div>
				                <!-- <div class="col-md-6">
					                <div class="wrap-custom-file">                
					                    <input type="file" name="bimg" id="bimg" accept=".gif, .jpg, .png">
					                    <label for="bimg">
					                        <span>Bitch Image</span>
					                        <i class="fa fa-plus-circle"></i>
					                    </label>     
					                </div>
				            	</div> -->
				            </div>
            			</div>
            			<div class="col-md-12">
            				<h4>Pedigree Chart</h4>
            				<div class="col-md-12" style="margin-left: 20%;">
					            <div class="inputs">
					             <ul class="parent-in">
					                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
					                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
					                  <li><ul style="position: relative;top: -65px;">
					                      <li><input type="text" name="s1p" id="s1p" placeholder="Parent Name" class="input1" required></li>
					                      <li><input type="text" name="s1i" id="s1i" placeholder="I.D No." class="input2" required></li>
					                  </ul></li>
					                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
					                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
					                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
					                </ul>

					                  <ul class="parent-in">
					                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
					                    <li>
					                       <ul style="position: relative;top: -95px;">
					                        <li><input type="text" name="s2p" id="s2p" placeholder="SIRE" class="input1" required></li>
					                        <li><input type="text" name="s2i" id="s2i"  placeholder="I.D No." class="input1" required></li>
					                      </ul>
					                    </li>
					                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
					                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
					                    <li>
					                       <ul style="position: relative;top: -17px;">
					                        <li><input type="text" name="s3p" id="s3p" placeholder="DAM" class="input2" required></li>
					                        <li><input type="text" name="s3i" id="s3i" placeholder="I.D No." class="input2" required></li>
					                      </ul>
					                    </li>
					                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
					                  </ul>

					                  <ul class="parent-in">
					                    <li>
					                       <ul style="margin-bottom: 35px;margin-top: 30px;">
					                        <li><input type="text" name="s4p" id="s4p"  placeholder="SIRE" class="input1" required=""></li>
					                        <li><input type="text" name="s4i" id="s4i"  placeholder="I.D No." class="input1" required=""></li>
					                      </ul>
					                    </li>
					                    <li>
					                       <ul style="margin-bottom: 35px;">
					                        <li><input type="text" name="s5p" id="s5p" placeholder="DAM"  class="input2" required></li>
					                        <li><input type="text" name="s5i" id="s5i" placeholder="I.D No."  class="input2" required></li>
					                      </ul>
					                    </li>
					                    <li>
					                       <ul style="margin-bottom: 35px;">
					                        <li><input type="text" name="s6p" id="s6p" placeholder="SIRE" class="input1" required></li>
					                        <li><input type="text" name="s6i" id="s6i" placeholder="I.D No." class="input1" required></li>
					                      </ul>
					                    </li>
					                    <li>
					                       <ul style="margin-bottom: 35px;">
					                       <li><input type="text" name="s7p" id="s7p" placeholder="DAM" class="input2" required></li>
					                        <li><input type="text" name="s7i" id="s7i" placeholder="I.D No." class="input2" required></li>
					                      </ul>
					                    </li>
					                  </ul>
					            </div>
					        </div>
            			</div>
            			<div class="row">
            				<input type='hidden' name='vendor_name' id='vendor_name' class='form-control disabled' value="<?php echo $_SESSION['username']; ?>">
            				<input type='hidden' name='breeder_id' id='breeder_id' class='form-control disabled' value="<?php echo $_SESSION['id']; ?>">
				            <input type="hidden" name="membertype" id="membertype" value="<?php echo $member_type;?>">
				            <!-- <input type="hidden" name="payment_status" id="payment_status" value="<?php echo $payment_status; ?>"> -->
				            <input type="hidden" name="txn_id" id="txn_id" value="<?php if (isset($txn_id)){ echo $txn_id;}else{echo '0';} ?>">
				            <div class="col-xs-4">
				            </div>
				            <div class="col-xs-4">
				              <button type="submit" class="btn btn-primary btn-block btn-flat">Upload</button>
				            </div>
				          </div>
            		</form>
            	</div>
            </div>             
        </div>
      </div>
    </section>
</div>
 <script>
    $(function () {
    	$( "#dob" ).datepicker();
    	$( "#dob" ).on("change paste keyup", function(){
        var d = new Date();
        var month = d.getMonth()+1;
        var day = d.getDate();
        var current = ((''+month).length<2 ? '0' : '') + month + '/' +  
            ((''+day).length<2 ? '0' : '') + day + '/' +    
        d.getFullYear();
        var dob = $("#dob").val();
        var weeks = datediff(parseDate(dob), parseDate(current));
        var Age;
        Age = weeks + " Weeks";
        if(weeks>52){
            weeks = Math.round((weeks/52))
            Age = weeks + " Year";
        }else if(weeks>8){
            weeks = Math.round((weeks/4))
            Age = weeks + " Month";
        }
        $('#age').val(Age);
  		});
    	function parseDate(str) {
		    var mdy = str.split('/');
		    return new Date(mdy[2], mdy[0]-1, mdy[1]);
		}

		function datediff(first, second) {
		    return Math.round(((second-first)/(1000*60*60*24))/7);
		}
		$('#studprice').hide();
	    $('#category').change(function(){
	        if($(this).val() == "stud"){
	        	$("#gender").val('male');
	        	document.getElementById("gender").disabled = true;
	           	$('#studprice').show();
	            $('#otherprice').hide();
	        }else{
	        	document.getElementById("gender").disabled = false;
	            $('#otherprice').show();
	            $('#studprice').hide();
	        }
	    });
    	$('.upload_dog input[type="file"]').each(function(){
	        var $file = $(this),
	        $label = $file.next('label'),
	        $labelText = $label.find('span'),
	        labelDefault = $labelText.text();
	        $file.on('change', function(event){
	          var fileName = $file.val().split( '\\' ).pop(),
	              tmppath = URL.createObjectURL(event.target.files[0]);
	              console.log($file);
	              console.log(fileName);
	              console.log(tmppath);
	          if( fileName ){
	            $label
	              .addClass('file-ok')
	              .css('background-image', 'url(' + tmppath + ')');
	            $labelText.text("");
	          }else{
	            $label.removeClass('file-ok');
	            $labelText.text(labelDefault);
	          }
	        });
    	});
    	$("#category").change(function(){    	
	    var cat = $(this).val();//
	    console.log(cat);
	    if(cat !=='puppy')
	    	$("#parental").hide();
	    else
	    	$("#parental").show();      
   		});
    	$('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
   		$('#userRequest_activity').change(function(event) {

            if ($(this).val().length > 3) {
              $(this).val(last_valid_selection);
            } else {
              last_valid_selection = $(this).val();
              $('#breedname').val(last_valid_selection);
            }
          });
	/*
	 $('#imagepart1 input[type="file"]').each(function(){
	    var $file1 = $(this),
	        $label1 = $file1.next('label'),
	        $labelText1 = $label.find('span'),
	        labelDefault1 = $labelText.text();
	    $file1.on('change', function(event){
	    	console.log("sdf");
	      var fileName1 = $file.val().split( '\\' ).pop(),
	          tmppath1 = URL.createObjectURL(event.target.files[0]);
	      if( fileName1 ){
	        $label1
	          .addClass('file-ok')
	          .css('background-image', 'url(' + tmppath1 + ')');
	        $labelText1.text("");
	      }else{
	        $label1.removeClass('file-ok');
	        $labelText1.text(labelDefault1);
	      }
	    }
	    );
	});
	$('#imagepart2 input[type="file"]').each(function(){
	    var $file2 = $(this),
	        $label2 = $file2.next('label'),
	        $labelText2 = $label2.find('span'),
	        labelDefault2 = $labelText2.text();
	    $file2.on('change', function(event){
	      var fileName2 = $file.val().split( '\\' ).pop(),
	          tmppath2 = URL.createObjectURL(event.target.files[0]);
	      if( fileName2 ){
	        $label2
	          .addClass('file-ok')
	          .css('background-image', 'url(' + tmppath2 + ')');
	        $labelText2.text("");
	      }else{
	        $label2.removeClass('file-ok');
	        $labelText2.text(labelDefault2);
	      }
	    }
	    );
	});
	$('#imagepart3 input[type="file"]').each(function(){
	    var $file3 = $(this),
	        $label3 = $file3.next('label'),
	        $labelText3 = $label3.find('span'),
	        labelDefault3 = $labelText3.text();
	    $file3.on('change', function(event){
	      var fileName3 = $file.val().split( '\\' ).pop(),
	          tmppath3 = URL.createObjectURL(event.target.files[0]);
	      if( fileName3 ){
	        $label3
	          .addClass('file-ok')
	          .css('background-image', 'url(' + tmppath3 + ')');
	        $labelText3.text("");
	      }else{
	        $label3.removeClass('file-ok');
	        $labelText3.text(labelDefault3);
	      }
	    }
	    );
	});
	$('#imagepart4 input[type="file"]').each(function(){
	    var $file4 = $(this),
	        $label4 = $file4.next('label'),
	        $labelText4 = $label4.find('span'),
	        labelDefault4 = $labelText4.text();
	    $file4.on('change', function(event){
	      var fileName4 = $file.val().split( '\\' ).pop(),
	          tmppath4 = URL.createObjectURL(event.target.files[0]);
	      if( fileName4 ){
	        $label4
	          .addClass('file-ok')
	          .css('background-image', 'url(' + tmppath4 + ')');
	        $labelText4.text("");
	      }else{
	        $label4.removeClass('file-ok');
	        $labelText4.text(labelDefault4);
	      }
	    }
	    );
	});
	$('#imagepart3 input[type="file"]').each(function(){
	    var $file3 = $(this),
	        $label3 = $file3.next('label'),
	        $labelText3 = $label3.find('span'),
	        labelDefault3 = $labelText3.text();
	    $file3.on('change', function(event){
	      var fileName3 = $file.val().split( '\\' ).pop(),
	          tmppath3 = URL.createObjectURL(event.target.files[0]);
	      if( fileName3 ){
	        $label3
	          .addClass('file-ok')
	          .css('background-image', 'url(' + tmppath3 + ')');
	        $labelText3.text("");
	      }else{
	        $label3.removeClass('file-ok');
	        $labelText3.text(labelDefault3);
	      }
	    }
	    );
	});*/
  // End loop of file input elements
  });

  </script> 	

