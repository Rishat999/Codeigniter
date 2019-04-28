<div class="content-wrapper">
    <section class="content-header">
      <h1>
        All Sub Admin Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Sub Admin Users</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <?php if(empty($subadmin_data)) {?>
                <p class="text-center">
                  <img src="<?php echo base_url(); ?>assets/img/Users-icon.png">
                </p>
                <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No Sub Admin Users exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
                </p>
                <div class="error-page" style="margin: 0px;  text-align: center;  margin-left: 15%;  padding-bottom: 3%;">
                    <br>
                    <h2 class="headline text-yellow" style="margin-top: 0px;"> 404</h2>
                    <div class="error-content">
                      <h3><i class="fa fa-warning text-yellow"></i> Oops! No Sub Admin Users exist.</h3>
                      <p>
                        We could not find the user you were looking for.
                        Meanwhile, you may <a href="<?php echo base_url();?>admin/breeds">refresh this page</a> 
                      </p>                      
                    </div>
                  </div>
            <?php }
            else {?>
              <div class="row">
                <div class="col-md-12">                              
                    <div class="portlet light portlet-fit ">
                        <div class="portlet-body">
                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                              <style type="text/css">
                                td, th
                                {
                                  vertical-align: middle !important;
                                  text-align: center !important;
                                }
                              </style>
                                <thead>
                                <tr>        
                                    <th>No</th>
                                    <th>Username</th>                            
                                    <th>Email</th>
                                    <th>Dog</th>
                                    <th>Breed</th>
                                    <th>Breeder</th>
                                    <th>Configuration</th>
                                    <th>Date</th>
                                    <th>Action</th>   
                                </tr>                       
                              </thead>
                              <tbody>                        
                                <?php 
                                  $i = 1;
                                  foreach($subadmin_data as $subadmin): 
                                ?>  <style type="text/css">
                                      td, th
                                      {
                                        vertical-align: middle !important;
                                        text-align: center !important;
                                      }
                                    </style>                      
                                    <tr>
                                      <td class="mailbox-name">
                                            <?php echo $i++;?>
                                      </td>
                                      <td class="mailbox-name">
                                       <?php echo $subadmin['username'];?>
                                      </td>                           
                                      <td class="mailbox-name">
                                        <?php echo $subadmin['email'];?>                          
                                      </td>
                                      <td class="mailbox-name">
                                        <?php if($subadmin['dog_control'] == 'true') 
                                        $dog_control = "Allowed"; else $dog_control = "Declined";?>
                                        <span class="pull-right-container">
                                          <small class="label bg-blue" style="font-size: 15px;"><?php echo $dog_control;?></small>
                                        </span>                               
                                      </td>
                                      <td class="mailbox-name">
                                        <?php if($subadmin['breed_control'] == 'true') 
                                        $breed_control = "Allowed"; else $breed_control = "Declined";?>
                                        <span class="pull-right-container">
                                          <small class="label bg-green" style="font-size: 15px;"><?php echo $breed_control;?></small>
                                        </span>  
                                      </td>
                                      <td class="mailbox-name">
                                        <?php if($subadmin['breeder_control'] == 'true') 
                                        $breeder_control = "Allowed"; else $breeder_control = "Declined";?>
                                        <span class="pull-right-container">
                                          <small class="label bg-red" style="font-size: 15px;"><?php echo $breeder_control;?></small>
                                        </span>
                                      </td>
                                      <td class="mailbox-name">
                                        <?php if($subadmin['configuration'] == 'true') 
                                        $configuration = "Allowed"; else $configuration = "Declined";?>
                                        <span class="pull-right-container">
                                          <small class="label bg-yellow" style="font-size: 15px;"><?php echo $configuration;?></small>
                                        </span>
                                      </td>
                                      <td class="mailbox-name">
                                       <?php echo $subadmin['created_at'];?>
                                      </td>                              
                                      <td class="mailbox-name">
                                        <button class="btn btn-rounded btn-sm btn-outline-danger delete_subadmin_btn"  id="<?php echo $subadmin['id'];?>"   data-toggle="modal"   data-target="#delete_subadmin"><i class="fa fa-trash" style="font-size: 20px;" data-toggle="tooltip" data-toggle="tooltip" title="Delete" data-placement="top"></i></button>
                                      </td>
                                    </tr>
                                <?php endforeach;?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
              <!-- <div class="table-responsive">  
                  <div class="box-body">        
                  <div class="box-body no-padding <?php if(!$subadmin_data) echo 'hide';?>">
                  <table id="tbl_subadmins" class="table table-striped table-bordered zero-configuration" >
                    <thead>
                      <tr>        
                          <th>No</th>
                          <th>Name</th> 
                          <th>Username</th>                            
                          <th>Email</th>
                          <th>Dog</th>
                          <th>Breed</th>
                          <th>Breeder</th>
                          <th>Configuration</th>
                          <th>Created Date</th>
                          <th>Manage</th>   
                      </tr>                       
                    </thead>
                    <tbody>                        
                      <?php 
                        $i = 1;
                        foreach($subadmin_data as $subadmin): 
                      ?>  <style type="text/css">
                            td, th
                            {
                              vertical-align: middle !important;
                              text-align: center !important;
                            }
                          </style>                      
                          <tr>
                            <td class="mailbox-name">
                                  <?php echo $i++;?>
                            </td>
                            <td class="mailbox-name">
                             <?php echo $subadmin['fname']."  ".$subadmin['lname'];?> 
                            </td>   
                            <td class="mailbox-name">
                             <?php echo $subadmin['username'];?>
                            </td>                           
                            <td class="mailbox-name">
                              <?php echo $subadmin['email'];?>                          
                            </td>
                            <td class="mailbox-name">
                              <?php if($subadmin['dog_control'] == 'true') 
                              $dog_control = "Allowed"; else $dog_control = "Declined";?>
                              <span class="pull-right-container">
                                <small class="label bg-blue" style="font-size: 15px;"><?php echo $dog_control;?></small>
                              </span>                               
                            </td>
                            <td class="mailbox-name">
                              <?php if($subadmin['breed_control'] == 'true') 
                              $breed_control = "Allowed"; else $breed_control = "Declined";?>
                              <span class="pull-right-container">
                                <small class="label bg-green" style="font-size: 15px;"><?php echo $breed_control;?></small>
                              </span>  
                            </td>
                            <td class="mailbox-name">
                              <?php if($subadmin['breeder_control'] == 'true') 
                              $breeder_control = "Allowed"; else $breeder_control = "Declined";?>
                              <span class="pull-right-container">
                                <small class="label bg-red" style="font-size: 15px;"><?php echo $breeder_control;?></small>
                              </span>
                            </td>
                            <td class="mailbox-name">
                              <?php if($subadmin['configuration'] == 'true') 
                              $configuration = "Allowed"; else $configuration = "Declined";?>
                              <span class="pull-right-container">
                                <small class="label bg-yellow" style="font-size: 15px;"><?php echo $configuration;?></small>
                              </span>
                            </td>
                            <td class="mailbox-name">
                             <?php echo $subadmin['created_at'];?>
                            </td>                              
                            <td class="mailbox-name">
                              <button class="btn btn-rounded btn-sm btn-outline-danger delete_subadmin_btn" style="margin-left: 19%;" id="<?php echo $subadmin['id'];?>"   data-toggle="modal"   data-target="#delete_subadmin"><i class="fa fa-trash" style="font-size: 20px;" data-toggle="tooltip" data-toggle="tooltip" title="Delete" data-placement="top"></i></button>
                            </td>
                          </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                  <div id="pagination2" class="light-theme simple-pagination" style="text-align: center;margin-left: 45%; margin-top: 1%;">
                  </div>
              </div> -->
              <?php }?>
            </div>        
            </div>
          </div>             
        </div>
      </div>
    </section>
</div>
<div class="modal fade" id="delete_subadmin">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-trash"></i> Delete Confirmation</h4>
            </div>
            <div class="modal-body">                
                <h4>Are you sure you want to delete this Sub Admin User?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="button" name="remove" class="btn-delete btn btn-danger delete_subadmin_confirm_btn" data-dismiss="modal"><i class="fa fa-trash"></i> Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">

jQuery(function($) {
    // Consider adding an ID to your table
    // incase a second table ever enters the picture.
    $('[data-toggle="tooltip"]').tooltip();
    var items = $("table tbody tr");

    var numItems = items.length;
    var perPage = 1;

    // Only show the first 2 (or first `per_page`) items initially.
    items.slice(perPage).hide();

    // Now setup the pagination using the `.pagination-page` div.
    $("#pagination2").pagination({
        items: numItems,
        itemsOnPage: perPage,
        cssStyle: "light-theme",

        // This is the actual page changing functionality.
        onPageClick: function(pageNumber) {
            // We need to show and hide `tr`s appropriately.
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;

            // We'll first hide everything...
            items.hide()
                 // ... and then only show the appropriate rows.
                 .slice(showFrom, showTo).show();
        }
    });

    // EDIT: Let's cover URL fragments (i.e. #page-3 in the URL).
    // More thoroughly explained (including the regular expression) in: 
    // https://github.com/bilalakil/bin/tree/master/simplepagination/page-fragment/index.html

    // We'll create a function to check the URL fragment
    // and trigger a change of page accordingly.
    function checkFragment() {
        // If there's no hash, treat it like page 1.
        var hash = window.location.hash || "#page-1";

        // We'll use a regular expression to check the hash string.
        hash = hash.match(/^#page-(\d+)$/);

        if(hash) {
            // The `selectPage` function is described in the documentation.
            // We've captured the page number in a regex group: `(\d+)`.
            $("#pagination2").pagination("selectPage", parseInt(hash[1]));
        }
    };

    // We'll call this function whenever back/forward is pressed...
    $(window).bind("popstate", checkFragment);

    // ... and we'll also call it when the page has loaded
    // (which is right now).
    checkFragment();
    
});
</script> -->