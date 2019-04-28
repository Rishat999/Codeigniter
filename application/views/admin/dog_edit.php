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
        Edit <b><?php echo $dog_data[0]['dog_name'];?></b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'breeder/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><?php echo $dog_data[0]['dog_name'];?></li>
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
            <div class="box" style="min-height: 1900px;">
            	<div class="col-md-12">
            		<form method='post' class="edit_dog" enctype="multipart/form-data" novalidate="">
            			<div class="col-md-12">
            				<h4>Basic Information</h4>
            				<div class="col-md-12">
            					<div class="form-group col-md-4">
						                <label>Dog Name</label>
						                <div class="input-group">
							                <span class="input-group-addon">
							                    <i class="glyphicon glyphicon-tower"></i>
							                </span>
							                <input type="text" class="dog_name form-control" placeholder="Name" name="dog_name" id="dog_name" autocomplete="off" value="<?php echo $dog_data[0]['dog_name'];?>">
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
								                <?php if($member_type=='plus'){?>
								                  <option value='puppy' <?php if($dog_data[0]['category'] == 'puppy') echo "selected";?>>Puppy</option>
								                	<?php } else      {?>
								                  <option value='puppy' <?php if($dog_data[0]['category'] == 'puppy') echo "selected";?>>Puppy</option>
								                  <option value='stud' <?php if($dog_data[0]['category'] == 'stud') echo "selected";?>>Stud</option>
								                  <option value='adult' <?php if($dog_data[0]['category'] == 'adult') echo "selected";?>>Adult</option>
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
		                                        <option value="<?php echo $row;?>" <?php if($dog_data[0]['breed_name'] == $row) echo "selected";?>><?php echo $row;?></option>
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
						                <input type='text' name='dob' id='dob' class='form-control' required value="<?php echo $dog_data[0]['dob'];?>" >
					                </div>
					            </div> 
					            <div class="form-group col-md-3">
					                <label>Age (in Weeks)</label>
					                <div class="input-group">
						                <span class="input-group-addon">
						                    <i class="fa fa-calendar"></i>
						                </span>
						                <input type='text' name='age' id='age' class='form-control' disabled="" value="<?php echo $dog_data[0]['age'];?>">
					                </div>
					            </div>
					            <div class="form-group col-md-3">
					                 <div id="otherprice">
					                	<label>Price $ </label>
						                <div class="input-group">
							                <span class="input-group-addon">
							                    <i class="fa fa-dollar"></i>
							                </span>
							                <input type='text' name='price' id='price1' class='form-control' required value="<?php echo $dog_data[0]['price'];?>">
						                </div>
					                </div>
					                <div id="studprice">
					                	<label>Price </label>
						                <div class="input-group">
							                <span class="input-group-addon">
							                    <i class="fa fa-dollar"></i>
							                </span>
							                <input type="text" name='price' id='price2' class='form-control' placeholder="Type POL / amount" value="<?php if($dog_data[0]['category'] == 'stud' || $dog_data[0]['category'] == 'adult') echo $dog_data[0]['price'];?>">
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
							                <option value="male" <?php if($dog_data[0]['gender']== 'male')  echo "selected";?>>Male</option>
							                <option value="female" <?php if($dog_data[0]['gender']== 'female')  echo "selected";?>>Female</option>
							            </select>
					                </div>
					            </div>
	            			</div>
            			</div>            						   
			            <div class="form-group col-md-12" style="margin-left: 30px;">
				            <label>Dog Bio</label>
				            <div class="input-group" style="width: 94%;">      
				            	<textarea rows="4" cols="50" id="description" name="description" placeholder="Dog Descriptions here..." class="description form-control" required="" ><?php echo $dog_data[0]['description'];?></textarea>
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
							            <input type="checkbox" id="badge7" name='badge7' class="flat-red badge7" value="ACA Registered" <?php if($dog_data[0]['badge7'] !=='false') echo "checked";?>>
							              <label>ACA Registered</label>
							        </div>
	            					<div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge1" name='badge1' class="flat-red badge1" value="AKC Registered" <?php if($dog_data[0]['badge1'] !=='false') echo "checked";?>>
							              <label>AKC Registered</label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge11" name='badge11' class="flat-red badge1" value="Champion Bloodline"  <?php if($dog_data[0]['badge11'] !=='false') echo "checked";?>>
							              <label>Champion Bloodline</label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge4" name='badge4' class="flat-red badge4" value="Dewormed" <?php if($dog_data[0]['badge4'] !=='false') echo "checked";?>>
							              <label>Dewormed</label>
							        </div>
							        							        
	            				</div>
	            			</div>
	            			<div class="col-md-12">
	            				<div class="container">
	            					<div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge5" name='badge5' class="flat-red badge5" value="Family Raised" <?php if($dog_data[0]['badge5'] !=='false') echo "checked";?>>
							              <label>Family Raised</label>
							        </div>
	            					<div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge8" name='badge8' class="flat-red badge8" value="FLEA FREE" <?php if($dog_data[0]['badge8'] !=='false') echo "checked";?>>
							              <label>Fleas Free </label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge6" name='badge6' class="flat-red badge6" value="Health Guarantee" <?php if($dog_data[0]['badge6'] !=='false') echo "checked";?>>
							              <label>Health Guarantee</label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge10" name='badge10' class="flat-red badge10" value="Raised arround Kids" <?php if($dog_data[0]['badge10'] !=='false') echo "checked";?>>
							              <label>Raised arround Kids</label>
							        </div>							        
	            				</div>
	            			</div>
	            			<div class="col-md-12">
	            				<div class="container">	            
	            					<div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge9" name='badge9' class="flat-red badge9" value="Socialized" <?php if($dog_data[0]['badge9'] !=='false') echo "checked";?>>
							              <label>Socialized</label>
							        </div>					
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge2" name='badge2' class="flat-red badge2" value="Veterinarian Checked"  <?php if($dog_data[0]['badge2'] !=='false') echo "checked";?>>
							              <label>Veterinarian Checked</label>
							        </div>
							        <div class="form-group col-md-3" style="width: 23%;">
							            <input type="checkbox" id="badge3" name='badge3' class="flat-red badge3" value="Vaccinated" <?php if($dog_data[0]['badge3'] !=='false') echo "checked";?>>
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
					                    <label for="main" style="background-image: url('<?= $dog_data[0]['photo'];?>')">
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
                                    	<?php 
                                    	$gallerys = json_decode($dog_data[0]['gallery']);
                                    	$i = 1; 
                                    		foreach($gallerys as $row) { 
                                    				$item_position = strrpos($row,'/',0);
                                    				$item_name = substr($row, $item_position + 1, strlen($row));
                                    			?>
                                    			<div id="<?php echo $i;?>"class="dz-preview dz-processing dz-image-preview dz-success dz-complete">  <div class="dz-image"><img data-dz-thumbnail="" alt="badge1.png" src="<?php echo $row;?>"></div>  <div class="dz-details">    <div class="dz-size"><span data-dz-size=""></div>    <div class="dz-filename"><span data-dz-name=""><?php  echo $item_name;?></span></div>  </div>  <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;"></span></div>  <div class="dz-error-message"><span data-dz-errormessage=""></span></div>  <div class="dz-success-mark">    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">      <title>Check</title>      <defs></defs>      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>      </g>    </svg>  </div>  <div class="dz-error-mark">    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">      <title>Error</title>      <defs></defs>      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">          <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>        </g>      </g>    </svg>  </div><a class="dz-remove remove_thumb" href="javascript:undefined;" id="<?php echo $i;?>" data-dz-remove="" >Remove file</a></div>
                                    	<?php $i++;}
                                    	?>
                                    	<!-- style="background: url('/assets/dist/img/dropzone-background.png');" -->
                                        <!-- <input type="file" name="file" multiple/> -->
                                    </div>
                                </div>
                            </div>
                        <?php
							if($dog_data[0]['category'] == 'puppy')
							{?>
								<div class="col-md-12" id="parental" >
		            				<h4>Parental Information</h4>
		            				<div class="form-group col-md-6" style="text-align: center;">
						            	<div class="col-md-6" style="margin-left: 40%;">           		
						            		<div class="wrap-custom-file">                
							                    <input type="file" name="dimg" id="dimg" accept=".gif, .jpg, .png">
							                    <label for="dimg" style="background-image: url('<?= $dog_data[0]['dimg'];?>')">
							                        <span>Dad Image</span>
							                        <i class="fa fa-plus-circle"></i>
							                    </label>     
							                </div>
							                <div class="input-group">
								                <span class="input-group-addon">
								                    <i class="glyphicon glyphicon-tower"></i>
								                </span>
								                <input type="text" class="dname form-control" placeholder="Dad Name" name="dname" autocomplete="off" id="dname" value="<?php echo $dog_data[0]['dname'];?>">
							                </div>
						            	</div>
						            </div>
						            <div class="form-group col-md-6" style="text-align: center;">
						            	<div class="col-md-6" >
						            		<div class="wrap-custom-file">                
							                    <input type="file" name="bimg" id="bimg" accept=".gif, .jpg, .png">
							                    <label for="bimg" style="background-image: url('<?= $dog_data[0]['bimg'];?>')">
							                        <span>Bitch Image</span>
							                        <i class="fa fa-plus-circle"></i>
							                    </label>     
							                </div>		
							                <div class="input-group">
								                <span class="input-group-addon">
								                    <i class="glyphicon glyphicon-tower"></i>
								                </span>
								                <input type="text" class="bname form-control" placeholder="Bitch Name" name="bname" autocomplete="off" id="bname" value="<?php echo $dog_data[0]['bname'];?>">
							                </div>
						            	</div>
						            </div>
		            			</div>
							<?php }                        	
                        ?>
            			
            			<div class="col-md-12">
            				<h4>Pedigree Chart</h4>
            				<div class="col-md-12" style="margin-left: 20%;">
                            <div class="inputs">
                             <ul class="parent-in">
                                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
                                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
                                  <li><ul style="position: relative;top: -65px;">
                                      <label>Parent Name / I.D No.</label>
                                      <li><input type="text" name="s1p" id="s1p" placeholder="Parent Name" class="input1" value="<?php echo $pedigree['s1p'];?>" ></li>
                                      <li><input type="text" name="s1i" id="s1i" placeholder="I.D No." class="input2" value="<?php echo $pedigree['s1i'];?>" ></li>
                                  </ul></li>
                                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
                                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
                                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
                                </ul>

                                  <ul class="parent-in">
                                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
                                    <li>
                                       <ul style="position: relative;top: -95px;">
                                        <label>SIRE / I.D No.</label>
                                        <li><input type="text" name="s2p" id="s2p" placeholder="SIRE" class="input1" value="<?php echo $pedigree['s2p'];?>" ></li>
                                        <li><input type="text" name="s2i" id="s2i"  placeholder="I.D No." class="input1" value="<?php echo $pedigree['s2i'];?>" ></li>
                                      </ul>
                                    </li>
                                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
                                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
                                    <li>
                                       <ul style="position: relative;top: -17px;">
                                        <label>DAM / I.D No.</label>
                                        <li><input type="text" name="s3p" id="s3p" placeholder="DAM" class="input2" value="<?php echo $pedigree['s3p'];?>" ></li>
                                        <li><input type="text" name="s3i" id="s3i" placeholder="I.D No." class="input2" value="<?php echo $pedigree['s3i'];?>" ></li>
                                      </ul>
                                    </li>
                                  <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
                                  </ul>

                                  <ul class="parent-in">
                                    <li>
                                       <ul style="margin-bottom: 35px;margin-top: 30px;">
                                        <label>SIRE / I.D No.</label>
                                        <li><input type="text" name="s4p" id="s4p"  placeholder="SIRE" class="input1" value="<?php echo $pedigree['s4p'];?>" ></li>
                                        <li><input type="text" name="s4i" id="s4i"  placeholder="I.D No." class="input1" value="<?php echo $pedigree['s4i'];?>" ></li>
                                      </ul>
                                    </li>
                                    <li>
                                       <ul style="margin-bottom: 35px;">
                                        <label>DAM / I.D No.</label>
                                        <li><input type="text" name="s5p" id="s5p" placeholder="DAM"  class="input2" value="<?php echo $pedigree['s5p'];?>" ></li>
                                        <li><input type="text" name="s5i" id="s5i" placeholder="I.D No."  class="input2" value="<?php echo $pedigree['s5i'];?>" ></li>
                                      </ul>
                                    </li>
                                    <li>
                                       <ul style="margin-bottom: 35px;">
                                        <label>SIRE / I.D No.</label>
                                        <li><input type="text" name="s6p" id="s6p" placeholder="SIRE" class="input1" value="<?php echo $pedigree['s6p'];?>" ></li>
                                        <li><input type="text" name="s6i" id="s6i" placeholder="I.D No." class="input1" value="<?php echo $pedigree['s6i'];?>" ></li>
                                      </ul>
                                    </li>
                                    <li>
                                       <ul style="margin-bottom: 35px;">
                                        <label>DAM / I.D No.</label>
                                       <li><input type="text" name="s7p" id="s7p" placeholder="DAM" class="input2" value="<?php echo $pedigree['s7p'];?>" ></li>
                                        <li><input type="text" name="s7i" id="s7i" placeholder="I.D No." class="input2" value="<?php echo $pedigree['s7i'];?>" ></li>
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
				            <input type="hidden" name="dog_id" id="dog_id" value="<?php echo $dog_data[0]['id'];?>">
				            <!-- <input type="hidden" name="payment_status" id="payment_status" value="<?php echo $payment_status; ?>"> -->
				            <input type="hidden" name="txn_id" id="txn_id" value="<?php if (isset($txn_id)){ echo $txn_id;}else{echo '0';} ?>">
				            <div class="col-xs-4">
				            </div>
				            <div class="col-xs-4">
				              <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
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
    	$('[data-toggle="tooltip"]').tooltip();
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
	           	$('#studprice').show();
	            $('#otherprice').hide();
	        }else{
	            $('#otherprice').show();
	            $('#studprice').hide();
	        }
	    });
    	$('.edit_dog input[type="file"]').each(function(){
	        var $file = $(this),
	        $label = $file.next('label'),
	        $labelText = $label.find('span'),
	        labelDefault = $labelText.text();
	        $file.on('change', function(event){
	          var fileName = $file.val().split( '\\' ).pop(),
	              tmppath = URL.createObjectURL(event.target.files[0]);
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
   	$(".remove_thumb").click(function(){
   		var id = $(this).attr("id");
   		console.log(id);
   		$(".dz-preview").eq(id - 1).remove();
   	})
   		/**/
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

