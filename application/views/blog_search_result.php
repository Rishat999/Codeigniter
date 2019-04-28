<?php
if(!empty($searched_results)){
	foreach($searched_results as $row)
	{?>
		<div class="col-md-3 individual_blog">
            <div class="view">			                    
                <img src="<?php echo $row['photo'];?>" class="dog_photo">
                <div class="propertyType commercial" style="   background-color: #0e34e2;"><?php echo substr($row['created_at'], 0,10);?></div>
            </div>
            <div class="info">
                <p class="large" style="text-overflow: ellipsis"><b><?php 
                if(strlen($row['title']) > 15) echo substr($row['title'], 0,12).'...'; else
                echo $row['title'];?></b></p>
                <p class="small wb-red"  data-toggle="tooltip" data-placement="bottom" title="<?php echo $row['content'];?>">
                	<?php
                if(strlen($row['content']) > 22 ) echo substr($row['content'], 0, 20).'...'; else echo $row['content']?></p>
                
                
            </div>
            <div class="stats wb-red-bg">
                <span class="fa fa-paw" data-toggle="tooltip" data-placement="bottom" title="<?php echo $row['username']; ?>">&nbsp;By<strong><?php if(strlen($row['username']) > 15) echo substr($row['username'], 0, 12).'...'; else echo ' '.$row['username']; ?></strong></span>
            </div>
        </div>
	<?php }}
else
{?>
	<section class="content" style="padding-top: 0px;">
        <div class="row">
            <div class="col-xs-12">
                <div class="box" >           
                    <p class="text-center">
                      <img src="<?php echo base_url(); ?>assets/img/Users-icon.png" style="width: 245px;">
                    </p>
                    <p class="text-center text-danger" style="font-size:1.5em;margin-top: 5%;padding-left: 5%;padding-right: 5%;color: #fff;">Woohoo! No <b>blogs</b>exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
                    </p>
                    <div class="error-page" style="margin: 0px;text-align: center;padding-bottom: 3%;line-height: 50px;">
                        <br>
                        <h2 class="text-yellow" style="margin-top: 0px;"> 404</h2>
                        <div class="error-content">
                          <h3 style="color: #fffefe;"><i class="fa fa-warning text-yellow"></i> Oops! No Blogs!</h3>
                          <p style="color: #fff;">
                            We could not find the blogs at all.
                            Meanwhile, you may refresh this page or you can do <a href="#" onclick='location.reload(true); return false;'>Reload</a>&nbsp;Now 
                          </p>                      
                        </div>
                    </div>  
                </div>   
            </div>
        </div>  
	</section>
<?php }
?> 