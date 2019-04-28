<?php
	if(!empty($searched_results)){
		foreach($searched_results as $row)
	{?>
		<div class="col-md-4 individual_breeder">
			<div class="view view-tenth">
				<img class="img-responsive" src="<?php echo $row['photo'];?>" alt="">
				<div class="mask">
					<h2><?php echo $row['username'];?></h2>
					<p><?php if(strlen($row['about']) > 100) echo substr($row['about'], 0, 97).'...'; else echo $row['about']; ?></p>
					<a href="#" class="info">Read More</a>
				</div>
			</div>
		</div>
	<?php } }
	else
	{?>
		<section class="content" style="padding-top: 0px;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box" >           
                            <p class="text-center">
                              <img src="<?php echo base_url(); ?>assets/img/Users-icon.png" style="width: 245px;">
                            </p>
                            <p class="text-center" style="font-size:1.5em;margin-top: 5%;padding-left: 5%;padding-right: 5%;color: #fff;">Woohoo! No <b>breeders</b> matching your search keys! | <a href="#" onclick='location.reload(true); return false;'>New Search</a>
                            </p>
                            <div class="error-page" style="margin: 0px;text-align: center;padding-bottom: 3%;line-height: 50px;">
                                <br>
                                <h2 class="text-yellow" style="margin-top: 0px;"> 404</h2>
                                <div class="error-content">
                                  <h3 style="color: #fffefe;"><i class="fa fa-warning text-yellow"></i> Oops! No search results!</h3>
                                  <p style="color: #fff;">
                                    We could not find the breeders you were looking for.
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