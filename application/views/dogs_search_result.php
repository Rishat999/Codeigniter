        <?php if(!empty($searched_results))
        {
            foreach($searched_results as $row)
            {?>
                <div class="col-md-3 individual_dog">
                    <div class="view">                              
                        <img src="<?php echo $row['photo'];?>" class="dog_photo">
                        <div class="propertyType commercial"><sup>$</sup><?php echo $row['price'];?></div>
                    </div>
                    <div class="info">
                        <p class="large" style="text-overflow: ellipsis"><b><?php echo $row['dog_name'];?></b>
                        <p class="small wb-red"  data-toggle="tooltip" data-placement="bottom" title="<?php $string = $row['city'].' , '.$row['state'].' , '.$row['zip']; echo $string;?>">
                            <?php $string = $row['city'].' , '.$row['state'].' , '.$row['zip']; 
                        if(strlen($string) > 22 ) echo substr($string, 0, 22).'...'; else echo $string;?></p>
                        <p class="small" style="text-overflow: ellipsis"><?php echo $row['age'];?></p>
                        
                    </div>
                    <div class="stats wb-red-bg">
                        <span class="fa fa-paw" data-toggle="tooltip" data-placement="bottom" title="<?php echo $row['breed_name']; ?>"> <strong><?php if(strlen($row['breed_name']) > 18) echo substr($row['breed_name'], 0, 15).'...'; else echo $row['breed_name']; ?></strong></span>
                        <span class="fa fa-paw" style="float: right; margin-top: 2%;"> <strong><?php echo $row['gender'];?></strong></span> 
                    </div>
                </div>
            <?php } ?>
        <?php }
        else
        {?>            
            <section class="content" style="padding-top: 0px;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box" >           
                            <p class="text-center" style="padding-top: 40px;">
                              <img src="<?php echo base_url(); ?>assets/img/logo.png" style="
                                width: 270px;  height: 250px;">
                            </p>
                            <p class="text-center" style="font-size:1.5em;margin-top: 5%;padding-left: 5%;padding-right: 5%;color: #fff;">Woohoo! No <b>dogs</b> matching your search keys! | <a href="#" onclick='location.reload(true); return false;'>New Search</a>
                            </p>
                            <div class="error-page" style="margin: 0px;text-align: center;padding-bottom: 3%;line-height: 50px;">
                                <br>
                                <h2 class="text-yellow" style="margin-top: 0px;"> 404</h2>
                                <div class="error-content" style="font-size: 15px;padding-left: 5%;padding-right: 5%;">
                                  <h3 style="color: #fffefe;"><i class="fa fa-warning text-yellow"></i> Oops! No search results!</h3>
                                  <p style="color: #fff;">
                                    We could not find the dogs you were looking for.
                                    Meanwhile, you may refresh this page or you can do <a href="#" onclick='location.reload(true); return false;'>Reload</a>&nbsp;Now 
                                  </p>                      
                                </div>
                            </div>  
                        </div>   
                    </div>
                </div>  
            </section>  
        <?php }   ?>  
