
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        My profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'breeder/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">My profile</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
            <div class="box" >
              <?php if(isset($notification)) {?>
                  <script type="text/javascript">
                     var shortCutFunction = "success";
                     var msg = "Your profile is updated successfully!";
                    var title = "Update Success!";
                    toastr[shortCutFunction](msg, title);
                  </script>
              <?php }?>
                <div class="table-responsive">  
                      <div class="box-body" style="margin-left: 24px;">        
                      <div class="cover-photo">
                        <img src="<?php echo base_url().'assets/img/breeder_background.jpg'?>" style=" width: 980px;height: 250px; margin: 0 auto; background-color: #f5f5f5; position: relative;  z-index: 1;">
                      </div>
                      <div class="body">
                        <section class="left-col user-info">
                          <style type="text/css">
                            .user-info i
                            {                         
                              margin-right: 5%;
                            }
                            .feature-block .image-box .price {
                                        position: absolute;
                                        left: 0;
                                        top: 0;
                                        height: 45px;
                                        width: 60px;
                                        font-size: 24px;
                                        line-height: 45px;
                                        color: #ffffff;
                                        font-weight: 700;
                                        background-color: #fb4848;
                                        text-align: center;
                                    }
                                  .feature-block .image-box img {
                                      display: block;
                                      width: 100%;
                                      height: auto;
                                  }
                                  .feature-block .lower-content {
                                        position: relative;
                                        background-color: #ffffff;
                                        text-align: center;
                                        padding: 28px 15px;
                                        border: 1px dashed #aaaaaa;
                                    }
                                  .feature-block .lower-content .read-more:hover {
                                      color: #ffffff;
                                      background-color: #fb4848;
                                      
                                  }
                                  .feature-block .lower-content .read-more {
                                      position: relative;
                                      display: inline-block;
                                      font-size: 12px;
                                      line-height: 18px;
                                      color: #666666;
                                      font-weight: 400;
                                      padding: 10px 20px;
                                      border: 1px solid #dddddd;
                                      -webkit-transition: all 300ms ease;
                                      -moz-transition: all 300ms ease;
                                      -ms-transition: all 300ms ease;
                                      -o-transition: all 300ms ease;
                                      transition: all 300ms ease;
                                  }
                          </style>
                          <div class="profile-avatar">
                            <div class="inner" >
                              <img src="<?php if(empty($myprofile['photo'])) 
                              echo base_url()."assets/img/default_user.jpeg";
                              else echo $myprofile['photo'];?>" 
                              style=" width: 206px;    height: 206px;">
                            </div>
                          </div>
                          <h1><?php echo $myprofile['username'];?></h1>
                          <?php
                            $breed_array = array();
                            if(strpos($myprofile['breed_name'],','))
                            {
                                $temp_array  = explode(',', $myprofile['breed_name']);
                                for($i = 0; $i < count($temp_array); $i++)
                                {
                                  array_push($breed_array, $temp_array[$i]);
                                }
                            }
                            else
                            {
                              array_push($breed_array, $myprofile['breed_name']);
                            }
                            

                          ?><?php if(empty($myprofile['breed_name'])) echo "Please select breeds"; else { 
                          $j = 1; 
                          foreach($breed_array as $row)
                          {?>
                            <h2><i class="fa fa-paw"></i><?php echo $j.' . '. $row.'<br>';?></h2>
                          <?php $j++;}}
                          ?>
                          <div class="meta" style="width: 115%;">
                            <p>
                              <i class="fa fa-fw fa-user"></i>
                              <span class="pull-right-container"> 
                                <small class="label bg-blue" style="font-size: 15px;"><?php echo $myprofile['member_type'];?>                                  
                                </small>
                              </span>
                            </p>
                            <p>
                              <i class="fa fa-fw fa-dollar"></i>
                              <span class="pull-right-container"> 
                                <small class="label bg-red" style="font-size: 15px;">
                                   <?php if(empty($myprofile['payment_status'])) echo "Not paid"; else echo 'Payment Done';?>     
                                </small>
                              </span>
                            </p>
                            <p>
                              <i class="fa fa-fw fa-calendar"></i>
                              <span class="pull-right-container"> 
                                <small class="label bg-yellow" style="font-size: 15px;">
                                   <?php echo $myprofile['created_at'];?>     
                                </small>
                              </span>
                            </p>
                            <p>
                              <i class="fa fa-fw fa-phone"></i>
                              <span class="pull-right-container"> 
                                <small class="label bg-green" style="font-size: 15px;">
                                   <?php if(empty($myprofile['phone'])) echo "No phone"; else echo $myprofile['phone'];?>     
                                </small>
                              </span>
                            </p>
                            <p style="margin-top: 10px;"><i class="fa fa-fw fa-map-marker"></i>
                            <?php if(empty($myprofile['state']) || empty($myprofile['city']) || empty($myprofile['zip'])) echo "Complete address"; else echo $myprofile['city']." , ".$myprofile['state']." , ".$myprofile['zip'];?></p>
                            <a href="<?php if(empty($myprofile['site_url'])) echo base_url(); else echo $myprofile['site_url'];?>"><i class="fa fa-fw fa-link"></i><?php if(empty($myprofile['site_url'])) echo base_url(); else echo $myprofile['site_url'];?></a><br>
                            
                            
                            <p><a style="cursor: pointer;"><i class="fa fa-fw fa-envelope"></i><?php echo $myprofile['email'];?></a></p>
                            <p><i class="fa fa-fw fa-user"></i>About me :<br> <?php if(empty($myprofile['about'])) echo "Fill out information"; else echo $myprofile['about'];?></p>
                          </div>
                        </section>
                        <section class="section center-col content" style="width: 70%;border: 2px solid #d0d2d1;margin-left: 2%;margin-top: 10%;padding-right: -10pxpx;">
                          <form method="POST" class="edit_profile" action="update_profile">
                            <input type="hidden" name="id" value="<?php echo $this->session->userdata('id');?>">
                            <div class="form-group col-md-6">
                                <label>Username</label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                  </span>
                                  <input type="text" class="username form-control" value="<?php echo $myprofile['username'];?>" name="username" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                  </span>
                                  <input type="email" class="email form-control" value="<?php echo $myprofile['email'];?>" name="email" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Breeds</label>                                
                                <div class="input-group">
                                  <input class="form-control" id="breedname" name="breed_name" type="text" value="<?php echo $myprofile['breed_name'];?>" readonly>
                                  Select  by holding <i>ctrl key</i>
                                   <select class="form-control multiselect" id="userRequest_activity" multiple="multiple">
                                      <?php foreach($breeds as $row) {?>
                                        <option value="<?php echo $row['breed_name'];?>"><?php echo $row['breed_name'];?></option>
                                      <?php }?>
                                   </select>
                                  
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-fw fa-map-marker"></i>
                                  </span>
                                  <input type="text" class="city form-control" name="city" autocomplete="off" value="<?php echo $myprofile['city'];?>"<?php if(!empty($myprofile['city'])) echo "disabled";?>>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>State</label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-fw fa-map-marker"></i>
                                  </span>
                                  <input type="text" class="state form-control" name="state" autocomplete="off" value="<?php echo $myprofile['state'];?>" <?php if(!empty($myprofile['state'])) echo "disabled";?>>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Zipcode</label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-fw fa-map-marker"></i>
                                  </span>
                                  <input type="text" class="zip form-control" name="zip" autocomplete="off" value="<?php echo $myprofile['zip'];?>" <?php if(!empty($myprofile['zip'])) echo "disabled";?> >
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-phone"></i>
                                  </span>
                                  <input type="text" class="phone form-control" value="<?php echo $myprofile['phone'];?>" name="phone" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Site URL</label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-fw fa-link"></i>
                                  </span>
                                  <input type="text" class="site_url form-control" value="<?php echo $myprofile['site_url'];?>" name="site_url" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>About me</label>
                                <div class="input-group" style="width: 100%;">      
                                  <textarea rows="4" cols="50" id="description" name="about"  class="description form-control" value="<?php echo $myprofile['about'];?>"><?php echo $myprofile['about'];?></textarea>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-4">       
                              </div>
                              <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                              </div>
                            </div>
                          </form>
                        </section>   
                        <section>                          
                        </section>  
                      </div>                  
                  </div>

            </div>                        
        </div>
      </div>
    </section>
</div>
<script type="text/javascript">
  $('#userRequest_activity').change(function(event) {

            if ($(this).val().length > 3) {
              $(this).val(last_valid_selection);
            } else {
              last_valid_selection = $(this).val();
              $('#breedname').val(last_valid_selection);
            }
          });
        
</script>
<style type="text/css">
  html 
  {
  font-family: "proxima-nova",sans-serif;
  }

/* apply a natural box layout model to all elements */
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html, html a {
  -webkit-font-smoothing: antialiased !important;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}

a {
  text-decoration: none;
  color: inherit;
}

/* ==== */
.site-header {
  height: 44px;
  width: 100%;
  /*border-bottom: 1px solid #E1e1e1;*/
}

/*.cover-photo {
  width: 980px;
  height: 250px;
  margin: 0 auto;
  background-color: #f5f5f5;
  position: relative;
  z-index: 1;
 background-image: url(<?php echo base_url().'assets/img/breeder_background.jpg'?>);
  background-image: url(http://placekitten.com/980/250);
}*/

.body {
  width: 980px;
  margin: 0 auto;
  z-index: 4;
  position: relative;
}

.left-col, .right-col {
  width: 226px;
  float: left;
  min-height: 400px;
  position: relative;
}

.left-col {
  margin-right: 24px;
  position: relative;
  top: -150px;
  left: 8px;
}

.center-col {
  float: left;
  width: 480px;
  margin-right: 24px;
  min-height: 400px;
}

.right-col {
  background-color: blue;
}

/* LEFT COL */
.user-info h1 {
  font-size: 24px;
  font-weight: 600;
  line-height: 1.2;
  padding-top: 4px;
}
.user-info h2 {
  color: #666;
  font-size: 16px;
}
.user-info .meta {
  padding: 8px 0;
  font-size: 14px;
}
.user-info .meta p {
  line-height: 1.6;
}
.user-info .meta i {
  font-size: 0.95em;
  padding-right: 2px;
}

.profile-avatar {
  width: 218px;
  height: 218px;
  border: 1px solid #e1e1e1;
  background-color: #fff;
  right: 0;
}
.profile-avatar .inner {
  width: 206px;
  height: 206px;
  margin: 5px;
  /*background-image: url(http://placekitten.com/220/220);*/
  /*background-image: url(<?php echo $breeder_data[0]['photo'];?>);
*/}

/* CENTER */
.image-grid {
  width: 100%;
}
.image-grid li {
  float: left;
  background-color: #EFEFEF;
}
/*.image-grid.col-3 li {
  width: 32%;

  margin-right: 2%;
  margin-bottom: 2%;
  height: 0;
  padding-bottom: 30%;
  background-image: url(<?php echo base_url().'assets/img/default_gallery.jpg'?>);
  -webkit-background-size: 100%;
  background-size: 100%;
}*/
.image-grid.col-3 li:nth-child(3n) {
  margin-right: 0;
}

.profile-nav {
  height: 46px;
  background-color: white;
  border-bottom: 2px solid #E1E1E1;
  margin-bottom: 8px;
}
.profile-nav ul > li {
  color: #999;
  font-size: 14px;
  float: left;
  line-height: 44px;
  font-weight: 600;
  padding: 0 22px;
  cursor: pointer;
}
.profile-nav li.active {
  color: #1E1E1E;
}

.content .unit {
  padding: 8px 0 10px 0;
  /*border-bottom: 2px solid #E1E1E1;*/
  margin-bottom: 8px;
}
.content .unit:last-child {
  margin-bottom: 16px;
}
.content .unit h3 {
  margin-bottom: 4px;
  color: #777;
}
.content .unit h3 a {
  color: #1e1e1e;
  font-weight: 600;
}
.content .unit p.time {
  color: #777;
  font-size: 14px;
  margin-bottom: 8px;
}
.content .unit .more {
  font-size: 14px;
  color: #777;
}
.content .unit .more a {
  color: #777;
}

</style>