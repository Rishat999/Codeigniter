<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/plugins/custom-carousel/owl.css">
<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css"> -->
<script type="text/javascript" src="<?php echo base_url()?>/assets/plugins/custom-carousel/owl.carousel.js"></script>

<div class="row">
    <div class="col-xs-12">
      <div class="box" >
        <?php if(empty($breeder_data)) {?>
            <p class="text-center" style="padding-top: 40px;">
              <img src="<?php echo base_url(); ?>assets/img/puppy.png">
            </p>
            <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No Breeder data exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
            </p>
            <div class="error-page" style="margin: 0px;  text-align: center;  margin-left: 15%;  padding-bottom: 3%;">
                <br>
                <h2 class="headline text-yellow" style="margin-top: 0px;"> 404</h2>
                <div class="error-content">
                  <h3><i class="fa fa-warning text-yellow"></i> Oops! No breeder data exist.</h3>
                  <p>
                    We could not find the user you were looking for.
                    Meanwhile, you may <a href="<?php echo base_url();?>admin/puppy">go to the dogs page</a> 
                  </p>                      
                </div>
              </div>
        <?php }
        else {?>
          <div class="table-responsive">  
            <div class="box-body">        
              <div class="box-body no-padding <?php if(!$breeder_data) echo 'hide';?>">
                <div class="cover-photo" style="/* margin-left: 10%; */margin-top: 74px;text-align: center;">
                  <img src="<?php echo base_url().'assets/img/breeder_background.jpg'?>" style=" width: 980px;height: 250px; margin: 0 auto; background-color: #f5f5f5; position: relative;  z-index: 1;">
                </div>
                <div class="body">
                  <section class="left-col user-info">
                    <div class="profile-avatar">
                      <div class="inner" >
                        <img src="<?php if(empty($breeder_data[0]['photo'])) echo base_url()."assets/img/default_gallery.png"; else echo $breeder_data[0]['photo'];?>" style=" width: 206px;    height: 206px;" id="dog_photo">
                      </div>
                    </div>
                    <style type="text/css">
                      
                      .badges
                      {
                        display: table;
                      }
                      .badges img
                      {
                        display: table-cell;
                      }
                      .owl-stage-outer
                      {
                        width: 170px !important;
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
                                  .owl-item:hover
                                  {
                                    box-shadow: 4px 5px #cbcece;
                                  }
                    </style>
                    <div class="col-md-12 gallerys owl-carousel" id="gallery" style="
                        margin-top: 5%;">
                        <div class="item">
                          <img src="<?php if(!empty($breeder_data[0]['gallery1'])) echo $breeder_data[0]['gallery1']; else echo '/assets/img/default_gallery.png';?>" style="width: 51px !important; height: 50px !important; cursor: pointer;">
                        </div>
                        <div class="item">
                          <img src="<?php if(!empty($breeder_data[0]['gallery2'])) echo $breeder_data[0]['gallery2']; else echo '/assets/img/default_gallery.png';?>" style="width: 51px !important; height: 50px !important; cursor: pointer;">
                        </div>
                        <div class="item">
                          <img src="<?php if(!empty($breeder_data[0]['gallery3'])) echo $breeder_data[0]['gallery3']; else echo '/assets/img/default_gallery.png';?>" style="width: 51px !important; height: 50px !important; cursor: pointer;">
                        </div>
                        <div class="item">
                          <img src="<?php if(!empty($breeder_data[0]['gallery4'])) echo $breeder_data[0]['gallery4']; else echo '/assets/img/default_gallery.png';?>" style="width: 51px !important; height: 50px !important; cursor: pointer;">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 46%;">
                      <h1 style="margin-left: 6%;"><?php echo $breeder_data[0]['username'];?></h1>
                      
                    </div>
                    <div class="meta"> 
                      <?php
                            $breed_array = array();
                            if(strpos($breeder_data[0]['breed_name'],','))
                            {
                                $temp_array  = explode(',', $breeder_data[0]['breed_name']);
                                for($i = 0; $i < count($temp_array); $i++)
                                {
                                  array_push($breed_array, $temp_array[$i]);
                                }
                            }
                            else
                            {
                              array_push($breed_array, $breeder_data[0]['breed_name']);
                            }
                          ?><?php if(empty($breeder_data[0]['breed_name'])) echo "Please select breeds"; else { 
                          $j = 1; 
                          foreach($breed_array as $row)
                          {?>
                            <h2><i class="fa fa-paw"></i><?php echo $j.' . '. $row.'<br>';?></h2>
                          <?php $j++;}}
                          ?>           
                      <p>
                        <a href="<?php if(empty($breeder_data[0]['site_url'])) echo base_url(); else echo $breeder_data[0]['site_url'];?>"><i class="fa fa-fw fa-link"></i><?php if(empty($breeder_data[0]['site_url'])) echo base_url(); else echo $breeder_data[0]['site_url'];?></a>
                      </p>                     
                      <p>
                        <!-- <span class="pull-right-container"> 
                          <small class="label bg-yellow" style="font-size: 15px;"><p style="margin-top: 10px;"><i class="fa fa-fw fa-map-marker"></i>
                            <?php if(empty($breeder_data[0]['state'])) echo "No State Address"; else echo $breeder_data[0]['city']." , ".$breeder_data[0]['state']." , ".$breeder_data[0]['zip'];?></p>
                          </small>
                        </span> -->
                          <i class="fa fa-fw fa-map-marker"></i>
                            <?php if(empty($breeder_data[0]['state'])) echo "No State Address"; else echo $breeder_data[0]['city'].'  '.$breeder_data[0]['state'].'  '.$breeder_data[0]['zip'].' .';?></p>
                        </p>  
                      <p><i class="fa fa-fw fa-phone" style="margin-right: 5px;"></i><?php if(empty($breeder_data[0]['phone'])) echo "No phone"; else echo $breeder_data[0]['phone'];?></p>            
                      <p>
                        <i class="fa fa-fw fa-cogs" style="margin-right: 5px;"></i><?php if(empty($breeder_data[0]['email'])) echo "No data"; else echo $breeder_data[0]['email'];?></p>
                    </div>
                  </section>
                  <section class="section center-col content" style="width: 70%;">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#about">About me</a></li>
                      <li><a data-toggle="tab" href="#available_puppy">Available Puppys</a></li>
                      <li><a data-toggle="tab" href="#available_stud">Available Studs</a></li>
                      <li><a data-toggle="tab" href="#available_adult">Available Adults</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="about" class="tab-pane fade in active">
                        <h3>About me</h3>
                        <p><?php if(empty($breeder_data[0]['about'])) echo "No descriptions about him";
                              else echo $breeder_data[0]['about'];?></p>
                      </div>  
                      <div id="available_puppy" class="tab-pane fade">
                        <?php if(empty($breeder_data[0]['available_puppy'])) {?>
                          <h3 >No available puppys</h3>
                         <?php }
                        if(!empty($breeder_data[0]['available_puppy'])) {
                          if(count($available_puppy) == 1 && $available_puppy[0] == '')
                          {?>                            
                            <h3 >No available puppys</h3>
                          <?php }
                          else{
                        foreach($available_puppy as $row) {?>
                          <div class="col-md-4">
                            <div class="owl-item" style="width: 200px;margin-right: 30px; margin-top: 5px;">
                              <div class="feature-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="<?php echo '/dogs/detail_view?id='.$row['id']?>"><img src="<?php if(empty($row['photo'])) echo base_url().'assets/img/default_gallery.jpg'; else echo $row['photo'];?>" style="width: 200px;height: 200px;"></a>
                                        <span class="price" style="margin-left: 15px;margin-top: 5px;font-size: 20px;"><sup>$</sup><?php echo $row['price'];?></span>
                                    </div>
                                    <div class="lower-content" style="padding-top: 0px; padding-left: 5px; padding-right: 5px;">
                                        <h5>Name : <b><?php echo $row['dog_name'];?></b></h5>
                                        <h5>Breed : <?php echo $row['breed_name'];?></h5>
                                        <h5>Gender : <?php echo $row['gender'];?></h5>
                                        <h5>Age : <?php echo $row['age'];?></h5>
                                        <a href="<?php echo '/dogs/detail_view?id='.$row['id']?>" class="read-more"><i class="fa fa-angle-right"></i> View details</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } } }?>
                      </div>
                      <div id="available_stud" class="tab-pane fade">
                        <?php if(empty($breeder_data[0]['available_stud'])) {?>
                          <h3 >No available studs</h3>
                         <?php }?>   
                        <?php 

                        if(!empty($breeder_data[0]['available_stud']) ) {
                          if(count($available_stud) == 1 && $available_stud[0] == '')
                          {?>
                            <h3 >No available studs</h3>
                          <?php }
                          else
                          {
                        foreach($available_stud as $row) {?>
                          <div class="col-md-4">
                            <div class="owl-item" style="width: 200px;margin-right: 30px; margin-top: 5px;">
                              <div class="feature-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="<?php echo '/dogs/detail_view?id='.$row['id']?>"><img src="<?php if(empty($row['photo'])) echo base_url().'assets/img/default_gallery.jpg'; else echo $row['photo'];?>" style="width: 200px;height: 200px;"></a>
                                       <span class="price" style="margin-left: 15px;margin-top: 5px;font-size: 20px;"><sup>$</sup><?php echo $row['price'];?></span>
                                    </div>
                                    <div class="lower-content" style="padding-top: 0px; padding-left: 5px; padding-right: 5px;">
                                        <h5>Name : <b><?php echo $row['dog_name'];?></b></h5>
                                        <h5>Breed : <?php echo $row['breed_name'];?></h5>
                                        <h5>Gender : <?php echo $row['gender'];?></h5>
                                        <h5>Age : <?php echo $row['age'];?></h5>
                                        <a href="<?php echo '/dogs/detail_view?id='.$row['id']?>" class="read-more"><i class="fa fa-angle-right"></i> View details</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } } }?>
                      </div>  
                      <div id="available_adult" class="tab-pane fade">
                        <?php if(empty($breeder_data[0]['available_adult'])) {?>
                          <h3 >No available adults</h3>
                         <?php }?> 
                         <?php 
                         if(!empty($breeder_data[0]['available_adult'])) {
                          if(count($available_adult) == 1 && $available_adult[0] == '')
                          {?>
                            <h3 >No available adults</h3>
                          <?php }
                          else
                          {
                         foreach($available_adult as $row) {?>
                          <div class="col-md-4">
                            <div class="owl-item" style="width: 200px;margin-right: 30px; margin-top: 5px;">
                              <div class="feature-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="<?php echo '/dogs/detail_view?id='.$row['id']?>"><img src="<?php if(empty($row['photo'])) echo base_url().'assets/img/default_gallery.jpg'; else echo $row['photo'];?>" style="width: 200px;height: 200px;"></a>
                                        <span class="price" style="margin-left: 15px;margin-top: 5px;font-size: 20px;"><sup>$</sup><?php echo $row['price'];?></span>
                                    </div>
                                    <div class="lower-content" style="padding-top: 0px; padding-left: 5px; padding-right: 5px;">
                                        <h5>Name : <b><?php echo $row['dog_name'];?></b></h5>
                                        <h5>Breed : <?php echo $row['breed_name'];?></h5>
                                        <h5>Gender : <?php echo $row['gender'];?></h5>
                                        <h5>Age : <?php echo $row['age'];?></h5>
                                        <a href="<?php echo '/dogs/detail_view?id='.$row['id']?>" class="read-more"><i class="fa fa-angle-right"></i> View details</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } } }?>   
                                      
                      </div> 

                    </div>  

                  </section>    
                  <h3 >Disclaimer</h3>
                      <div class="policy" style="width: 70%;margin-left: 27%; margin-bottom: 5%;"> 
                       <div class="container" style="width: 100%;border: 1px dashed;padding: 10px;box-shadow: 3px 4px #dfe2e2;">
                              <b>Buyers</b><br>
                              These listings are provided as a service to the public. PAS is not affiliated with and does not license or endorse any breeders, including those listed on this site. PAS has no control over their business practices and is not liable for any dealings between you and any breeder. PAS does not sell dogs and makes no warranty or guarantee as to the health, quality, parentage or value of any dog. PAS accepts no responsibility for andy transaction between seller and buyer.<br>

                              <b>Advertisers</b><br>
                              PAS reserves the right to correct or cancel at will the listing of this pup/stud/Pet. By listing with us, you the breeder agree to provide the Buyer with proper Pedigreed Information.  By with us  you the breeder agree that any and all contracts, conditions or guarantees are solely between you the breeder and the purchaser, and PAS will be held harmless.  By your submission you agree to all terms and conditions listed herein. 
                            </div>
                      </div>              
                </div>
              </div>              
            </div>        
          </div>
          <?php }?>        
      </div>             
    </div>
  </div>
<script type="text/javascript"> 
  $("#gallery").owlCarousel({
    items: 2,
    loop: true,
    autoplay: true,
    autoplayTimeout: 1000,
    stopOnHover : false
  });
  $(".breeder_gallery img").click(function()
  {
    var src = $(this).attr('src');
    $(".breeder_photo").attr('src',src);
  })
  $("#gallery .item img").click(function(){
    var src = $(this).attr('src');
    $("#dog_photo").attr('src',src);
  })  
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
.image-grid.col-3 li {
  width: 32%;
  margin-right: 2%;
  margin-bottom: 2%;
  height: 0;
  padding-bottom: 30%;
  background-image: url(http://placekitten.com/200/200);
  -webkit-background-size: 100%;
  background-size: 100%;
}
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