    <div class="content-wrapper" style="padding-left: 15%; padding-right: 15%; padding-top: 2%;">
      <div class="register-logo">
        <b>Upload Photo</b>
      </div>
      <div class="register-box-body">    
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
        <form class="upload_photo" method="POST" action="/breeder/do_upload" enctype="multipart/form-data">
          <div class="form-group col-md-12">
              <!-- <label for="txtImg" class="control-label col-md-12" style="text-align: center;">You can upload <b>gif</b> | <b>jpg</b> | <b>png</b> file for your avatar</label>
              <img id="pre_image" type="file" class = "preview_image" src="<?php echo base_url().'assets/img/default_user.jpeg'?>" style="  margin-left: 35%;    margin-bottom: 5%;   margin-top: 5%; width: 200px;">
              <input type="file" name="userimage" id="uimage" class="form-control txtW" multiple/> -->
              <label for="txtImg" class="control-label col-md-12" style="text-align: center;margin-bottom: 5%;">You can upload <b>gif</b> | <b>jpg</b> | <b>png</b> file for your avatar</label>
              <div class="wrap-custom-file">                
                  <input type="file" name="userimage" id="uimage" accept=".gif, .jpg, .png">
                  <label for="uimage" style="background-image: url('<?= $this->session->userdata('photo');?>')">
                      <span>Image Upload</span>
                      <i class="fa fa-plus-circle"></i>
                  </label>
              </div>
          </div>   
          <div class="row">
            <div class="col-xs-4">       
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Upload</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
    $('.upload_photo input[type="file"]').each(function(){
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
  </script>  