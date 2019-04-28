<div class="row">
  <div class="col-xs-12">
    <div class="box" >
      <?php if(empty($blog)) {?>
          <p class="text-center" style="padding-top: 40px;">
            <img src="<?php echo base_url(); ?>assets/img/puppy.png">
          </p>
          <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No Blog data exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
          </p>
          <div class="error-page" style="margin: 0px;  text-align: center;  margin-left: 15%;  padding-bottom: 3%;">
              <br>
              <h2 class="headline text-yellow" style="margin-top: 0px;"> 404</h2>
              <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i> Oops! No blog data exist.</h3>
                <p>
                  We could not find the user you were looking for.
                  Meanwhile, you may <a href="<?php echo base_url();?>admin/puppy">go to the dogs page</a> 
                </p>                      
              </div>
            </div>
      <?php }
      else {?>
          <div class="box-body">        
              <div class="cover-photo" style="margin-top: 74px;text-align: center;">
                <img src="<?php echo base_url().'assets/img/breeder_background.jpg'?>" style=" width: 980px;height: 250px; margin: 0 auto; background-color: #f5f5f5; position: relative;  z-index: 1;">
              </div>
              <div class="body">
                <div class="col-md-4" style="padding-left: 0px; margin-bottom: 5%;">
                  <img src="<?php if(empty($blog['photo'])) echo base_url()."assets/img/default_gallery.png"; else echo $blog['photo'];?>" style="  width: 300px;
                    height: 300px;border: dashed 2px;" id="blog_photo">
                </div>
                <div class="col-md-8" style="line-height: 50px;font-size: 15px;">
                    <div class="row ">
                        <span class="pull-right-container"> 
                          <small class="label bg-green" style="font-size: 15px;">Title : <?php if(!empty($blog['title'])) echo $blog['title']; else echo "No title";?>
                          </small>
                        </span>                        
                    </div>
                    <div class="row">
                      <span class="pull-right-container"> 
                        <small class="label bg-red" style="font-size: 15px;">Publisher : <?php if(!empty($blog['username'])) echo $blog['username']; else echo "No publisher";?>
                        </small>
                      </span>                        
                    </div>
                    <div class="row">
                      <span class="pull-right-container"> 
                        <small class="label bg-yellow" style="font-size: 15px;">Url : <a href="<?php if(!empty($blog['url'])) echo $blog['url']; else echo "#";?>"><?php if(!empty($blog['url'])) echo $blog['url']; else echo "No url";?></a>
                        </small>
                      </span>                         
                    </div>
                    <div class="row">
                      <span class="pull-right-container"> 
                        <small class="label bg-blue" style="font-size: 15px;">Email : <a href="<?php if(!empty($blog['url'])) echo $blog['url']; else echo "#";?>"><?php if(!empty($blog['email'])) echo $blog['email']; else echo "No email";?></a>
                        </small>
                      </span>                        
                    </div>                    
                    <div class="row">
                      <span class="pull-right-container"> 
                        <small class="label" style="font-size: 15px;     background-color: #bf59b9 !important;">Posted Date : <a href="<?php if(!empty($blog['url'])) echo $blog['url']; else echo "#";?>"><?php if(!empty($blog['created_at'])) echo $blog['created_at']; ?></a>
                        </small>
                      </span> 
                    </div>
                    <div class="row">
                      <span class="pull-right-container"> 
                        <small class="label" style="font-size: 15px;     background-color: #bd8354 !important;">Content :<?php if(!empty($blog['content'])) echo $blog['content']; else echo "No content";?>
                          
                        </small>
                      </span>                        
                    </div>
                </div>
              </div>
          </div>   
        <?php }?>        
    </div>             
  </div>
</div>
<script type="text/javascript"> 
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