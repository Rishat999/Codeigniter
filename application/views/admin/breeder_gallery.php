<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Breeder Gallery
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'breeder/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Breeder Gallery</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
            <div class="box" style="min-height: 350px;">
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
    		    <div class="col-md-12 slider_images" style=" margin-top: 3%;">
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
    				</style>
    				<?php 
    				$temp = explode(',', $gallery_data);
    				$gallery1 = $temp[0];
    				$gallery2 = $temp[1];
    				$gallery3 = $temp[2];
    				$gallery4 = $temp[3];
    				?>
      				<div class="col-md-3 imagepart1" style="text-align: center;">
      					<label>Gallery Image 1 </label> 
      						<form method="POST" action="gallery_upload" enctype="multipart/form-data">
      							<input type="hidden" name="imagenum" value="1">
      							<div class="wrap-custom-file">                
				                    <input type="file" name="galleryimage" id="image1" accept=".gif, .jpg, .png">				                    
				                    <label for="image1" id="image1" style="background-image: url('<?= $gallery1;?>')">
				                        <span>Click here</span>
				                        <i class="fa fa-plus-circle"></i>
				                    </label>     
				                </div>
				                <button class="btn btn-primary btn-block btn-flat upload1" style="
									width: 50%;   margin-left: 25%;" type="submit">Upload</button>
      						</form>      
    				</div>
    				<div class="col-md-3 imagepart2" style="text-align: center;">
      					<label>Gallery Image 2 </label>
      					<form method="POST" action="gallery_upload" enctype="multipart/form-data">
      						<input type="hidden" name="imagenum" value="2">
	    					<div class="wrap-custom-file">                
			                    <input type="file" name="galleryimage" id="image2" accept=".gif, .jpg, .png">
			                    <label for="image2" style="background-image: url('<?= $gallery2;?>')">
			                        <span>Click here</span>
			                        <i class="fa fa-plus-circle"></i>
			                    </label>     
			                </div>
			                <button class="btn btn-primary btn-block btn-flat upload2" style="
								width: 50%;   margin-left: 25%;">Upload</button>
						</form>
    				</div>
    				<div class="col-md-3 imagepart3" style="text-align: center;">
      					<label>Gallery Image 3 </label>
      					<form method="POST" action="gallery_upload" enctype="multipart/form-data">
      						<input type="hidden" name="imagenum" value="3">
	    					<div class="wrap-custom-file">                
			                    <input type="file" name="galleryimage" id="image3" accept=".gif, .jpg, .png">
			                    <label for="image3" style="background-image: url('<?= $gallery3;?>')">
			                        <span>Click here</span>
			                        <i class="fa fa-plus-circle"></i>
			                    </label>     
			                </div>
			                <button class="btn btn-primary btn-block btn-flat upload3" style="
								width: 50%;   margin-left: 25%;" >Upload</button>
						</form>
    				</div>
    				<div class="col-md-3 imagepart4" style="text-align: center;">
      					<label>Gallery Image 4 </label>
      					<form method="POST" action="gallery_upload" enctype="multipart/form-data">
      						<input type="hidden" name="imagenum" value="4">
	    					<div class="wrap-custom-file">                
			                    <input type="file" name="galleryimage" id="image4" accept=".gif, .jpg, .png">
			                    <label for="image4" style="background-image: url('<?= $gallery4;?>')">
			                        <span>Click here</span>
			                        <i class="fa fa-plus-circle"></i>
			                    </label>     
			                </div>
			                <button class="btn btn-primary btn-block btn-flat upload4" style="
								width: 50%;   margin-left: 25%;">Upload</button>
						</form>
    				</div>            				
    			</div>         	
            </div>             
        </div>
      </div>
    </section>
</div>
<script type="text/javascript">
	$('.slider_images input[type="file"]').each(function(){
	        var $file = $(this),
	        $label = $file.next('label'),
	        $labelText = $label.find('span'),
	        labelDefault = $labelText.text();
	        $file.on('change', function(event){
	        	console.log($('#image1')[0].files[0]);
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
</script>