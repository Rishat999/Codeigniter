<div class="content-wrapper" style="padding-left: 15%; padding-right: 15%; padding-top: 2%;">
      <div class="register-logo">
        <h1>Change Password</h1>
      </div>
      <div class="register-box-body" style="min-height: 350px;">
        <p class="login-box-msg"></p>
        <div class="alert alert-danger <?php if(!isset($_GET['errors'])) echo 'hide';?>">
            <strong>Error!</strong>
        </div>   
          <form method="POST" class="change_admin_pwd">
            <div class="form-group col-md-12">
                <label>Old Password</label>
                <div class="input-group">
                  <span class="input-group-addon">
                      <i class="fa fa-key"></i>
                  </span>
                  <input type="password" class="old_pwd form-control" placeholder="Old Password" name="old_pwd" autocomplete="off">
                </div>
            </div>   
            <div class="form-group col-md-12">
                <label>New Password</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                  </span>
                  <input type="password" class="new_pwd form-control" placeholder="New Password" name="new_pwd" autocomplete="off">
                </div>
            </div>
            <div class="form-group col-md-12">
                <label>Confirm Password</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                  </span>
                  <input type="password" class="confirm_pwd form-control" placeholder="Confirm Password" name="confirm_pwd" autocomplete="off">
                </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
              </div>
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Change Password</button>
              </div>
            </div>       
          </form>            
      </div>
    </div>
</div>












      
