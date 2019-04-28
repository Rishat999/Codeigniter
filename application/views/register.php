  <!-- <body class="hold-transition register-page"> -->
    <div class="content-wrapper" style="padding-left: 15%; padding-right: 15%; padding-top: 2%;">
      <div class="register-logo">
        <b>Register&nbsp;User</b>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg"></p>
          <div class="alert alert-danger <?php if(!isset($_GET['errors'])) echo 'hide';?>">
            <strong>Error!</strong>
        </div>
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <form class="user_register" method="POST">
          <div class="form-group col-md-6">
              <label>Username</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                <input type="text" class="username form-control" placeholder="Name" name="name" autocomplete="off">
              </div>
          </div>          
          <div class="form-group col-md-6">
              <label>Email Address</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input type="email" class="email form-control" placeholder="Email Address" name="email_address" autocomplete="off">
              </div>
          </div>
          <div class="form-group col-md-6">
              <label>User Role</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-users"></i>
                </span>
                <select class="bs-select form-control user_role" name="user_role" tabindex="-98">
                  <option value="" selected="">Select User Role</option>
                  <optgroup label="Top Level 5">
                      <option value="admin">Admin</option>                       
                  </optgroup>
                  <optgroup label="Level 4">                      
                      <option value="Data Entry">Data Entry</option>
                      <option value="Dean Office">Dean Office</option>
                  </optgroup>
                  <optgroup label="Level 3">
                      <option value="Dean">Dean</option>                        
                  </optgroup>
                  <optgroup label="Level 2">
                    <option value="Asst. Dean for administration affairs">Asst. Dean for 
                      administration affairs</option>
                    <option value="Asst. Dean for scientific affair">Asst. Dean for scientific affair</option>
                    <option value="Scientific Departments">Scientific Departments</option>
                  </optgroup>
                  <optgroup label="Level 1">
                      <option value="HR">HR</option>
                      <option value="Financial">Financial</option>
                      <option value="Qos">Qos</option>
                  </optgroup>
                </select>             
              </div>
          </div>
          <div class="form-group col-md-6">
              <label>User Availability</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                <select name="user_availability" class="form-control user_availability">
                  <option value="" selected="">Select availability of user</option>
                  <option value="available">Available</option>
                  <option value="unavailable">Unavailable</option>
                </select>
              </div>
          </div>
          <div class="form-group col-md-6">
              <label>Password</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input type="password" class="pass form-control" placeholder="Password" name="password" autocomplete="off">
              </div>
          </div>
          <div class="form-group col-md-6">
              <label>Confirm Password</label>
              <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input type="password" class="confirm_pass form-control" placeholder="Confirm Password" name="tmp_password" autocomplete="off">
              </div>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->
<?php $this->load->view('modal/upload'); ?>
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