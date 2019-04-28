<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
       <li><a href="<?php echo base_url().'breeder/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
            <div class="box" style="min-height: 400px;">
            	<div class="row col-lg-12" style="margin-top: 4%;">            		       
					    <div class="col-lg-4 col-md-6">
					        <div class="panel panel-yellow">
					            <div class="panel-heading">
					                <div class="row">
					                    <div class="col-xs-3">
					                        <img src="<?php echo base_url().'assets/img/dashboard_dog.png'?>" style="width: 70px;">
					                    </div>
					                    <div class="col-xs-9 text-right">
					                        <div>Total dogs</div>
					                        <div class="huge"><?php echo $count_all_dogs; ?></div>
					                    </div>
					                </div>
					            </div>
					             <a>
					                <div class="panel-footer">
					                    <span class="pull-left">View Details</span>
					                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					                    <div class="clearfix"></div>
					                </div>
					            </a>
					        </div>
					    </div>
					    <div class="col-lg-4 col-md-6">
					        <div class="panel panel-green">
					            <div class="panel-heading">
					                <div class="row">
					                    <div class="col-xs-3">
					                        <!-- <i class="fa fa-usd fa-5x"></i> -->
					                        <img src="<?php echo base_url().'assets/img/dashboard_male.png'?>" style="width: 70px;">
					                    </div>
					                    <div class="col-xs-9 text-right">
					                        <div>Total Male Dogs</div>
					                        <div class="huge"><?php echo $count_male_dogs;?></div>
					                    </div>
					                </div>
					            </div>
					             <a>
					                <div class="panel-footer">
					                    <span class="pull-left">View Details</span>
					                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					                    <div class="clearfix"></div>
					                </div>
					            </a>
					        </div>
					    </div>
					    <div class="col-lg-4 col-md-6">
					        <div class="panel panel-red">
					            <div class="panel-heading">
					                <div class="row">
					                    <div class="col-xs-3">
					                        <!-- <i class="fa fa-usd fa-5x"></i> -->
					                        <img src="<?php echo base_url().'assets/img/dashboard_female.png'?>" style="width: 70px;">
					                    </div>
					                    <div class="col-xs-9 text-right">
					                        <div>Total Female Dogs</div>
					                        <div class="huge"><?php echo $count_female_dogs;?></div>
					                    </div>
					                </div>
					            </div>
					             <a>
					                <div class="panel-footer">
					                    <span class="pull-left">View Details</span>
					                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					                    <div class="clearfix"></div>
					                </div>
					            </a>
					        </div>
					    </div>
	            	</div>
	            	<div class="row col-lg-12">
	        			<div class="col-lg-4 col-md-6">
					        <div class="panel panel-primary">
					            <div class="panel-heading">
					                <div class="row">
					                    <div class="col-xs-3">
					                        <!-- <i class="fa fa-usd fa-5x"></i> -->
					                        <img src="<?php echo base_url().'assets/img/puppy.png'?>" style="width: 70px;">
					                    </div>
					                    <div class="col-xs-9 text-right">
					                        <div>Total Puppies</div>
					                        <div class="huge"><?php echo $count_puppy_dogs;?></div>
					                    </div>
					                </div>
					            </div>
					             <a>
					                <div class="panel-footer">
					                    <span class="pull-left">View Details</span>
					                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					                    <div class="clearfix"></div>
					                </div>
					            </a>
					        </div>
					    </div>
					    <div class="col-lg-4 col-md-6">
					        <div class="panel panel-yellow">
					            <div class="panel-heading">
					                <div class="row">
					                    <div class="col-xs-3">
					                        <!-- <i class="fa fa-usd fa-5x"></i> -->
					                        <img src="<?php echo base_url().'assets/img/stud.png'?>" style="width: 75px;">
					                    </div>
					                    <div class="col-xs-9 text-right">
					                        <div>Total Studs</div>
					                        <div class="huge"><?php echo $count_stud_dogs;?></div>
					                    </div>
					                </div>
					            </div>
					             <a>
					                <div class="panel-footer">
					                    <span class="pull-left">View Details</span>
					                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					                    <div class="clearfix"></div>
					                </div>
					            </a>
					        </div>
					    </div>
					    <div class="col-lg-4 col-md-6">
					        <div class="panel panel-green">
					            <div class="panel-heading">
					                <div class="row">
					                    <div class="col-xs-3">
					                        <img src="<?php echo base_url().'assets/img/adult.png'?>" style="width: 70px;">
					                    </div>
					                    <div class="col-xs-9 text-right">
					                        <div>Total Adults</div>
					                        <div class="huge"><?php echo $count_adult_dogs;?></div>
					                    </div>
					                </div>
					            </div>
					             <a>
					                <div class="panel-footer">
					                    <span class="pull-left">View Details</span>
					                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					                    <div class="clearfix"></div>
					                </div>
					            </a>
					        </div>
					    </div>				    
	            	</div>
            		              	
            </div>             
        </div>
      </div>
    </section>
</div>