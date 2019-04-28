    <div class="content-wrapper" style="padding-left: 15%; padding-right: 15%; padding-top: 2%;">
      <div class="register-logo">
        <b>Register&nbsp;Sub Admin</b>
      </div>
      <div class="register-box-body">        
        <form class="subadmin_register" method="POST">
          <div class="form-group col-md-6">
              <label>First Name</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                <input type="text" class="fname form-control" placeholder="First Name" name="fname" autocomplete="off" required="">
              </div>
          </div>          
          <div class="form-group col-md-6">
              <label>Last Name</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                <input type="text" class="lname form-control" placeholder="Last Name" name="lname" autocomplete="off" required="">
              </div>
          </div>          
          <div class="form-group col-md-6">
              <label>Username</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                <input type="text" class="username form-control" placeholder="User Name" name="username" autocomplete="off" required="">
              </div>
          </div>          
          <div class="form-group col-md-6">
              <label>Email Address</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input type="email" class="email form-control" placeholder="Email Address" name="email" autocomplete="off" required="">
              </div>
          </div>           
          <div class="form-group col-md-3">
            <input type="checkbox" id="breeder_control" name="breeder_control" class="flat-red breeder_control">
              <label style="margin-left: 5%;">All Breeders</label>
          </div>
          <div class="form-group col-md-3">
           <input type="checkbox" id="dog_control" class="flat-red dog_control" name="dog_control" >
            <label style="margin-left: 5%;">All Dogs</label>              
          </div>
          <div class="form-group col-md-3">
            <input type="checkbox" class="flat-red breed_control" id="breed_control" name="breed_control">
            <label style="margin-left: 5%;">All Breeds</label>              
          </div>
          <div class="form-group col-md-3">
            <input type="checkbox" class="flat-red configuration" id="configuration"  name="configuration">
            <label style="margin-left: 5%;">Configuration</label>  
          </div>
          <div class="form-group col-md-6">
              <label>Password</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-key"></i>
                </span>
                <input type="password" class="pass form-control" placeholder="Password" name="password" autocomplete="off" required="">
              </div>
          </div>
          <div class="form-group col-md-6">
              <label>Confirm Password</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-key"></i>
                </span> 
                <input type="password" class="confirm_pass form-control" placeholder="Confirm Password" name="tmp_password" autocomplete="off" required="">
              </div>
          </div>
          <div class="row">
            <div class="col-xs-4">       
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
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
  </script>  
<?php if(isset($_GET['success'])): ?>
  <script>
      Lobibox.notify('success', {
          msg: 'Registered Successfully!'
      });
  </script>
<?php endif; ?>    