<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/plugins/custom-carousel/owl.css">
<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css"> -->
<script type="text/javascript" src="<?php echo base_url()?>/assets/plugins/custom-carousel/owl.carousel.js"></script>

<div class="row">
    <div class="col-xs-12">
      <div class="box" >
        <?php if(empty($dog_data)) {?>
            <p class="text-center" style="padding-top: 40px;">
              <img src="<?php echo base_url(); ?>assets/img/puppy.png">
            </p>
            <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No dog data exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
            </p>
            <div class="error-page" style="margin: 0px;  text-align: center;  margin-left: 15%;  padding-bottom: 3%;">
                <br>
                <h2 class="headline text-yellow" style="margin-top: 0px;"> 404</h2>
                <div class="error-content">
                  <h3><i class="fa fa-warning text-yellow"></i> Oops! No dog data exist.</h3>
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
              <div class="box-body no-padding <?php if(!$dog_data) echo 'hide';?>">
                <div class="cover-photo" style="/* margin-left: 10%; */margin-top: 74px;text-align: center;">
                  <img src="<?php echo base_url().'assets/img/breeder_background.jpg'?>" style=" width: 980px;height: 250px; margin: 0 auto; background-color: #f5f5f5; position: relative;  z-index: 1;">
                </div>
                <div class="body">
                  <section class="left-col user-info">
                    <div class="profile-avatar">
                      <div class="inner" >
                        <img src="<?php if(empty($dog_data[0]['photo'])) echo base_url()."assets/img/default_gallery.jpg"; else echo $dog_data[0]['photo'];?>" style=" width: 206px;    height: 206px;" id="dog_photo">
                      </div>
                    </div>
                    <style type="text/css">
                      .user-info i
                      {                         
                        margin-right: 1%;
                      }
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
                    </style>
                    <div class="col-md-12 gallerys owl-carousel" id="gallery" style="
                        margin-top: 5%;">
                      <?php 
                        if(!empty($dog_data[0]['gallery'])) {
                        $real_gallery = json_decode($dog_data[0]['gallery']);
                        foreach($real_gallery as $row)
                        {?>
                          <div class="item">
                            <img src="<?php echo $row;?>" style="width: 51px !important; height: 50px !important; cursor: pointer;">
                          </div>
                        <?php }}
                        else
                        {?>
                          <div class="item">
                            <img src="/assets/img/default_gallery.png" style="width: 51px !important; height: 50px !important; cursor: pointer;">
                          </div>
                        <?php }
                      ?>
                    </div>
                    <div class="col-md-12 badges owl-carousel" id="intro">
                      <?php       
                        if($dog_data[0]['badge1'] != 'false') {?>
                          <div class="item">
                            <img src="/assets/img/badges/badge1.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div>
                      <?php }?>
                      <?php                        
                        if($dog_data[0]['badge2'] != 'false') {?>
                          <div class="item">
                            <img src="/assets/img/badges/badge2.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div>
                      <?php }?>
                      <?php                        
                        if($dog_data[0]['badge3'] != 'false'){?>
                          <div class="item">
                            <img src="/assets/img/badges/badge3.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div>
                      <?php }?>
                      <?php                        
                        if($dog_data[0]['badge4'] != 'false'){?>
                          <div class="item">
                            <img src="/assets/img/badges/badge4.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div>                            
                      <?php }?>
                      <?php                        
                        if($dog_data[0]['badge5'] !='false'){?>
                          <div class="item">
                            <img src="/assets/img/badges/badge5.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div> 
                      <?php }?>
                      <?php                        
                        if($dog_data[0]['badge6'] !='false'){?>
                          <div class="item">
                            <img src="/assets/img/badges/badge6.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div> 
                      <?php }?>
                      <?php                        
                        if($dog_data[0]['badge7'] !='false'){?>
                          <div class="item">
                            <img src="/assets/img/badges/badge7.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div>                            
                      <?php }?>                           
                      <?php                        
                        if($dog_data[0]['badge8'] !='false'){?>
                          <div class="item">
                            <img src="/assets/img/badges/badge8.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div> 
                      <?php }?>
                      <?php                        
                        if($dog_data[0]['badge9'] !='false'){?>
                          <div class="item">
                            <img src="/assets/img/badges/badge9.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div>
                      <?php }?>
                      <?php                        
                        if($dog_data[0]['badge10'] !='false'){?>
                          <div class="item">
                            <img src="/assets/img/badges/badge10.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div>
                      <?php }?>
                      <?php                        
                        if($dog_data[0]['badge11'] !='false'){?>
                          <div class="item">
                            <img src="/assets/img/badges/badge11.png" style="width: 51px;height: 50px; cursor: pointer;">
                          </div>
                      <?php }?>
                    </div>
                    <div class="row" style="margin-top: 46%;"">
                      <h1 style="margin-left: 6%;"><?php echo $dog_data[0]['breed_name'];?></h1>
                    </div>
                    <div class="meta">                        
                      <h2 style="margin-top: 0%;"><i class="fa fa-fw fa-paw"></i>
                        <span class="pull-right-container"> 
                          <small class="label bg-blue" style="font-size: 15px;"><?php echo $dog_data[0]['dog_name'];?>                                  
                          </small>
                        </span>
                      </h2>
                      <p><i class="fa fa-<?php if($dog_data[0]['gender'] == 'female') echo "fe"?>male" style="margin-right: 10px;"></i>
                        <span class="pull-right-container"> 
                          <small class="label bg-green" style="font-size: 15px;"><?php if(empty($dog_data[0]['gender'])) echo "coming soon"; else echo $dog_data[0]['gender'];?>    
                          </small>
                        </span></p>
                      <p><i class="fa fa-fw  fa-calendar-o" style="margin-right: 5px;"></i>
                        <span class="pull-right-container"> 
                          <small class="label bg-yellow" style="font-size: 15px;"><?php if(empty($dog_data[0]['age'])) echo "No data"; else echo $dog_data[0]['age'];?>
                          </small>
                        </span></p>  
                      <p><i class="fa fa-fw fa-dollar" style="margin-right: 5px;"></i>
                        <span class="pull-right-container"> 
                          <small class="label bg-red" style="font-size: 15px;"><?php echo $dog_data[0]['price'];?>                                  
                          </small>
                        </span></p>            
                      <p style="margin-top: 10px;"><i class="fa fa-fw fa-map-marker"></i>
                      <?php if(empty($dog_data[0]['state'])) echo "No State Address"; else echo $dog_data[0]['city']." , ".$dog_data[0]['state']." , ".$dog_data[0]['zip'];?></p>
                      <p><i class="fa fa-fw fa-cogs" style="margin-right: 5px;"></i><?php if(empty($dog_data[0]['category'])) echo "No data"; else echo $dog_data[0]['category'];?></p>
                    </div>
                  </section>
                  <section class="section center-col content" style="width: 70%;">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#about">Description</a></li>
                      <?php if($dog_data[0]['category'] == 'puppy') {?>
                        <li><a data-toggle="tab" href="#parent">Parents</a></li>
                      <?php }?>
                      <li><a data-toggle="tab" href="#pedigree">Pedigree</a></li>
                      <li><a data-toggle="tab" href="#breeder_info">Breeder</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="about" class="tab-pane fade in active">
                        <p style="   margin-top: 10px;"><?php if(empty($dog_data[0]['description'])) echo "No descriptions ";
                        else echo $dog_data[0]['description'];?></p>
                        <h3 >Disclaimer</h3>
                        <div class="policy"style="margin-bottom: 5%;"> 
                           <div class="container" style="width: 100%;border: 1px dashed;padding: 10px;box-shadow: 3px 4px #dfe2e2;">
                                  <b>Buyers</b><br>
                                  These listings are provided as a service to the public. PAS is not affiliated with and does not license or endorse any breeders, including those listed on this site. PAS has no control over their business practices and is not liable for any dealings between you and any breeder. PAS does not sell dogs and makes no warranty or guarantee as to the health, quality, parentage or value of any dog. PAS accepts no responsibility for andy transaction between seller and buyer.<br>

                                  <b>Advertisers</b><br>
                                  PAS reserves the right to correct or cancel at will the listing of this pup/stud/Pet. By listing with us, you the breeder agree to provide the Buyer with proper Pedigreed Information.  By with us  you the breeder agree that any and all contracts, conditions or guarantees are solely between you the breeder and the purchaser, and PAS will be held harmless.  By your submission you agree to all terms and conditions listed herein. 
                                </div>
                        </div>
                      </div>           
                      <?php if($dog_data[0]['category'] == 'puppy') {?>
                        <div id="parent" class="tab-pane fade" style="margin-top: 5%;">
                          <style type="text/css">
                            .parent:hover
                            {
                                  transform: scale(1.1);
                                  /*z-index: 2;*/
                                  /*background-color: #a9e0e0;*/
                                  color: #fff;
                                  cursor: pointer;
                                  border: none;
                            }
                          </style>
                          <div class="col-md-6">
                             <div class="portlet box blue" style=" margin-top: -10px">
                              <div class="portlet-title">
                                <div class="caption">
                                  <i class="fa fa-photo"></i>Dad Dog : <?php if(!empty($dog_data[0]['dname']))echo $dog_data[0]['dname']; else echo "don't have dad dog";?>
                                </div>
                              </div>
                              <div class="portlet-body" style="min-height: 250px;"> 
                                <div class="col-md-12" style="margin-top: 1%;">
                                  <img src="<?php if(!empty($dog_data[0]['dimg'])) echo $dog_data[0]['dimg']; else echo "/assets/img/default_gallery.png";?>" style="width: 200px; height:200px;margin-left: 8%;" class="parent">
                                </div>  
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                             <div class="portlet box red" style=" margin-top: -10px">
                              <div class="portlet-title">
                                <div class="caption">
                                  <i class="fa fa-photo"></i>Bitch Dog : <?php if(!empty($dog_data[0]['bname']))echo $dog_data[0]['bname']; else echo "don't have bitch dog";?>
                                </div>
                              </div>
                              <div class="portlet-body" style="min-height: 250px;"> 
                                <div class="col-md-12" style="margin-top: 1%;">
                                  <img src="<?php if(!empty($dog_data[0]['bimg'])) echo $dog_data[0]['bimg']; else echo "/assets/img/default_gallery.png";?>" style="width: 200px; height:200px;margin-left: 8%;" class="parent"> 
                                </div>  
                              </div>
                            </div>
                          </div>
                          <h3 >Disclaimer</h3>
                          <div class="policy"style="margin-bottom: 5%;"> 
                             <div class="container" style="width: 100%;border: 1px dashed;padding: 10px;box-shadow: 3px 4px #dfe2e2;">
                                  <b>Buyers</b><br>
                                  These listings are provided as a service to the public. PAS is not affiliated with and does not license or endorse any breeders, including those listed on this site. PAS has no control over their business practices and is not liable for any dealings between you and any breeder. PAS does not sell dogs and makes no warranty or guarantee as to the health, quality, parentage or value of any dog. PAS accepts no responsibility for andy transaction between seller and buyer.<br>

                                  <b>Advertisers</b><br>
                                  PAS reserves the right to correct or cancel at will the listing of this pup/stud/Pet. By listing with us, you the breeder agree to provide the Buyer with proper Pedigreed Information.  By with us  you the breeder agree that any and all contracts, conditions or guarantees are solely between you the breeder and the purchaser, and PAS will be held harmless.  By your submission you agree to all terms and conditions listed herein. 
                                </div>
                          </div>
                        </div>
                      <?php }?>            
                      <div id="pedigree" class="tab-pane fade">
                        <div class="col-md-12">
                          <div class="inputs">
                           <ul class="parent-in">
                                <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
                                <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;" ></li>
                                <li><ul style="position: relative;top: -65px;">
                                    <label>Parent Name / I.D No.</label>
                                    <li><input type="text" name="s1p" id="s1p" placeholder="Parent Name" class="input1" value="<?php echo $pedigree['s1p'];?>" readonly></li>
                                    <li><input type="text" name="s1i" id="s1i" placeholder="I.D No." class="input2" value="<?php echo $pedigree['s1i'];?>" readonly></li>
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
                                      <li><input type="text" name="s2p" id="s2p" placeholder="SIRE" class="input1" value="<?php echo $pedigree['s2p'];?>" readonly></li>
                                      <li><input type="text" name="s2i" id="s2i"  placeholder="I.D No." class="input1" value="<?php echo $pedigree['s2i'];?>" readonly></li>
                                    </ul>
                                  </li>
                                <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
                                <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
                                  <li>
                                     <ul style="position: relative;top: -17px;">
                                      <label>DAM / I.D No.</label>
                                      <li><input type="text" name="s3p" id="s3p" placeholder="DAM" class="input2" value="<?php echo $pedigree['s3p'];?>" readonly></li>
                                      <li><input type="text" name="s3i" id="s3i" placeholder="I.D No." class="input2" value="<?php echo $pedigree['s3i'];?>" readonly></li>
                                    </ul>
                                  </li>
                                <li><input type="text" name="" placeholder="" class="input2" style="background: transparent;border: 0;"></li>
                                </ul>

                                <ul class="parent-in">
                                  <li>
                                     <ul style="margin-bottom: 35px;margin-top: 30px;">
                                      <label>SIRE / I.D No.</label>
                                      <li><input type="text" name="s4p" id="s4p"  placeholder="SIRE" class="input1" value="<?php echo $pedigree['s4p'];?>" readonly></li>
                                      <li><input type="text" name="s4i" id="s4i"  placeholder="I.D No." class="input1" value="<?php echo $pedigree['s4i'];?>" readonly></li>
                                    </ul>
                                  </li>
                                  <li>
                                     <ul style="margin-bottom: 35px;">
                                      <label>DAM / I.D No.</label>
                                      <li><input type="text" name="s5p" id="s5p" placeholder="DAM"  class="input2" value="<?php echo $pedigree['s5p'];?>" readonly></li>
                                      <li><input type="text" name="s5i" id="s5i" placeholder="I.D No."  class="input2" value="<?php echo $pedigree['s5i'];?>" readonly></li>
                                    </ul>
                                  </li>
                                  <li>
                                     <ul style="margin-bottom: 35px;">
                                      <label>SIRE / I.D No.</label>
                                      <li><input type="text" name="s6p" id="s6p" placeholder="SIRE" class="input1" value="<?php echo $pedigree['s6p'];?>" readonly></li>
                                      <li><input type="text" name="s6i" id="s6i" placeholder="I.D No." class="input1" value="<?php echo $pedigree['s6i'];?>" readonly></li>
                                    </ul>
                                  </li>
                                  <li>
                                     <ul style="margin-bottom: 35px;">
                                      <label>DAM / I.D No.</label>
                                     <li><input type="text" name="s7p" id="s7p" placeholder="DAM" class="input2" value="<?php echo $pedigree['s7p'];?>" readonly></li>
                                      <li><input type="text" name="s7i" id="s7i" placeholder="I.D No." class="input2" value="<?php echo $pedigree['s7i'];?>" readonly></li>
                                    </ul>
                                  </li>
                                </ul>
                          </div>
                        </div>
                        <h3 >Disclaimer</h3>
                          <div class="policy"style="margin-bottom: 5%;"> 
                             <div class="container" style="width: 100%;border: 1px dashed;padding: 10px;box-shadow: 3px 4px #dfe2e2;">
                                  <b>Buyers</b><br>
                                  These listings are provided as a service to the public. PAS is not affiliated with and does not license or endorse any breeders, including those listed on this site. PAS has no control over their business practices and is not liable for any dealings between you and any breeder. PAS does not sell dogs and makes no warranty or guarantee as to the health, quality, parentage or value of any dog. PAS accepts no responsibility for andy transaction between seller and buyer.<br>

                                  <b>Advertisers</b><br>
                                  PAS reserves the right to correct or cancel at will the listing of this pup/stud/Pet. By listing with us, you the breeder agree to provide the Buyer with proper Pedigreed Information.  By with us  you the breeder agree that any and all contracts, conditions or guarantees are solely between you the breeder and the purchaser, and PAS will be held harmless.  By your submission you agree to all terms and conditions listed herein. 
                                </div>
                          </div>
                      </div>
                      <div id="breeder_info" class="tab-pane fade">  
                        <div class="col-md-12" style="margin-top: 5%;margin-bottom: 5%;">
                          <div class="col-md-4">
                            <img src="<?php if(!empty($breeder_info['photo']))echo $breeder_info['photo']; else echo '/assets/img/default_gallery.png';?>" style="width: 200px;height: 200px;border: 2px dashed #a9a7a7;" class="breeder_photo">
                          </div>
                          <div class="col-md-7" style="margin-top: -5px;line-height: 30px;margin-left: 40px;">
                              <div>
                                Name : <?php echo $breeder_info['username'];?>
                              </div>
                              <div>
                                Email : <?php echo $breeder_info['email'];?>
                              </div>
                              <div>
                                Phone : <?php echo $breeder_info['phone'];?>
                              </div>                                
                              <div>
                                Created Date : <?php echo $breeder_info['created_at'];?>
                              </div>
                              <div>
                                City : <?php echo $breeder_info['city'];?>
                              </div>
                              <div>
                                State : <?php echo $breeder_info['state'];?>
                              </div>
                              <div>
                                Zipcode : <?php echo $breeder_info['zip'];?>
                              </div>
                              <div>
                                Site URL : <a href="<?php echo $breeder_info['site_url']?>"><?php echo $breeder_info['site_url'];?></a>
                              </div>                               
                              <div>
                                Description : <?php echo $breeder_info['about'];?>
                              </div>
                          </div>
                        </div>                        
                        <?php 
                              $gallery1 = $breeder_info['gallery1'];
                              $gallery2 = $breeder_info['gallery2'];
                              $gallery3 = $breeder_info['gallery3'];
                              $gallery4 = $breeder_info['gallery4'];
                              ?>  
                              <style type="text/css">
                                #breeder_info h2 {
                                    display: flex;
                                    width: 100%;
                                    justify-content: center;
                                    align-items: center;
                                    text-align: center;
                                }

                                #breeder_info h2:before,
                                #breeder_info h2:after {
                                    content: '';
                                    border-top: 2px solid;
                                    margin: 0 20px 0 0;
                                    flex: 1 0 20px;
                                }

                                #breeder_info h2:after {
                                    margin: 0 0 0 20px;
                                }
                              </style>
                              <h2 style="margin-top: 20px !important;">Breeder Gallery</h2>
                              <div class="col-md-12 breeder_gallery" style="margin-top: 3%;">
                                <style type="text/css">
                                  .breeder_gallery img:hover
                                  {
                                        transform: scale(1.1);
                                        z-index: 20;
                                        background-color: #a9e0e0;
                                        color: #fff;
                                        cursor: pointer;
                                        border: none;
                                  }
                                </style>
                                <div class="col-md-3">
                                  <img src="<?php 
                                  if(!empty($gallery1)) echo $gallery1;
                                  else echo '/assets/img/default_gallery.png';?>" 
                                  style="width: 150px;height: 150px;border: 5px solid #a9a9a9; z-index: 1;">
                                </div>
                                <div class="col-md-3">
                                  <img src="<?php 
                                  if(!empty($gallery2)) echo $gallery2;
                                  else echo '/assets/img/default_gallery.png';?>" 
                                  style="width: 150px;height: 150px;border: 5px solid #a9a9a9; z-index: 1;">
                                </div>
                                <div class="col-md-3">
                                  <img src="<?php 
                                  if(!empty($gallery3)) echo $gallery3;
                                  else echo '/assets/img/default_gallery.png';?>" 
                                  style="width: 150px;height: 150px;border: 5px solid #a9a9a9; z-index: 1;">
                                </div> 
                                <div class="col-md-3">
                                  <img src="<?php 
                                  if(!empty($gallery4)) echo $gallery4;
                                  else echo '/assets/img/default_gallery.png';?>" 
                                  style="width: 150px;height: 150px;border: 5px solid #a9a9a9; z-index: 1;">
                                </div>
                              </div>
                              <h3 >Disclaimer</h3>
                              <div class="policy"style="margin-bottom: 5%;"> 
                                 <div class="container" style="width: 100%;border: 1px dashed;padding: 10px;box-shadow: 3px 4px #dfe2e2;">
                                  <b>Buyers</b><br>
                                  These listings are provided as a service to the public. PAS is not affiliated with and does not license or endorse any breeders, including those listed on this site. PAS has no control over their business practices and is not liable for any dealings between you and any breeder. PAS does not sell dogs and makes no warranty or guarantee as to the health, quality, parentage or value of any dog. PAS accepts no responsibility for andy transaction between seller and buyer.<br>

                                  <b>Advertisers</b><br>
                                  PAS reserves the right to correct or cancel at will the listing of this pup/stud/Pet. By listing with us, you the breeder agree to provide the Buyer with proper Pedigreed Information.  By with us  you the breeder agree that any and all contracts, conditions or guarantees are solely between you the breeder and the purchaser, and PAS will be held harmless.  By your submission you agree to all terms and conditions listed herein. 
                                </div>
                              </div>
                      </div>               
                    </div>                                  
                  </section>
                </div>
              </div>              
            </div>        
          </div>
          <?php }?>        
      </div>             
    </div>
  </div>
<script type="text/javascript">
  $("#intro").owlCarousel({
    items: 2,
    loop: true,
    autoplay: true,
    autoplayTimeout: 1000,
    stopOnHover : false
  });
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
  $("#intro .item img").click(function(){
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
  /*background-image: url(<?php echo $dog_data[0]['photo'];?>);
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