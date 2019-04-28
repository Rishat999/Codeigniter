<div class="content-wrapper">
    <section class="content-header">
      <h1>
        All Breeders
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Breeders</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <?php if(empty($breeders_data)) {?>
                <p class="text-center">
                  <img src="<?php echo base_url(); ?>assets/img/Users-icon.png">
                </p>
                <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No Breeders exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
                </p>
                <div class="error-page" style="margin: 0px;  text-align: center;  margin-left: 15%;  padding-bottom: 3%;">
                    <br>
                    <h2 class="headline text-yellow" style="margin-top: 0px;"> 404</h2>
                    <div class="error-content">
                      <h3><i class="fa fa-warning text-yellow"></i> Oops! No Breeders exist.</h3>
                      <p>
                        We could not find the breeder you were looking for.
                        Meanwhile, you may <a href="<?php echo base_url();?>admin/breeders">refresh this page</a> 
                      </p>                      
                    </div>
                  </div>
            <?php }
            else {?>
              <div class="table-responsive">  
                  <div class="box-body">        
                  <div class="box-body no-padding <?php if(!$breeders_data) echo 'hide';?>">
                    <!-- <div class="mailbox-controls" style="padding: 0px !important; margin-bottom: 1%;">
                      <div class="btn-group">
                        <button type="button" data-target="#doc_search_modal" data-toggle="modal" class="btn btn-default btn-sm"><i class="fa fa-search"></i> Search</button>
                       <a class="btn btn-default btn-sm pull-right" href="<?php echo base_url(); ?>docs/make_doc"><i class="fa fa-plus"></i>New Breed</a>
                      </div>                
                    </div>  -->                
                  <!-- <table id="tbl_breeders" class="table table-striped table-bordered zero-configuration" >
                    <thead>
                      <tr>        
                          <th>No</th>
                          <th>Breeder Name</th> 
                          <th>Photo</th>                            
                          <th>Email</th>
                          <th>Breed Name</th>
                          <th>Date</th>
                          <th>Payment</th>
                          <th>Membership</th>
                          <th>Actions</th>
                    </thead>
                    <tbody>                        
                      <?php 
                        $i = 1;
                        foreach($breeders_data as $breeder): 
                      ?>                        
                          <style type="text/css">
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
                             <?php echo $breeder['username'];?> 
                            </td>
                            <td class="mailbox-name" style="width: 50px;">
                              <img src="<?php if(empty($breeder['photo'])) echo base_url().'assets/img/default_user.png'; else echo $breeder['photo'];?>" style="width: 50px;">
                            </td>
                            <td class="mailbox-name">
                              <?php echo $breeder['email'];?>                          
                            </td>
                            <td class="mailbox-name">
                             <?php echo $breeder['breed_name'];?>
                            </td>
                            <td class="mailbox-name">
                             <?php echo $breeder['created_at'];?>
                            </td>
                            <td class="mailbox-name">
                             <?php if($breeder['payment_status'] == 1) $payment = "Paid"; else  $payment = "Not Paid";?>
                             <span class="pull-right-container">
                                <small class="label bg-blue" style="font-size: 15px;"><?php echo $payment;?></small>
                              </span>
                            </td>
                            <td class="mailbox-name member_type" style="cursor: pointer;" >
                              <input type="hidden" name="original_membership" class="original_membership" value="<?php echo $breeder['member_type'];?>">
                              <input type="hidden" name="original_breeder_name" class="original_breeder_name" value="<?php echo $breeder['username'];?>">
                              <?php if($breeder['member_type'] == 'professional') {?>
                              <span class="pull-right-container professional_text">
                                <small class="label bg-green  member_type_text" id="<?php echo $breeder['id'];?>" member="<?php echo $breeder['member_type'];?>" style="font-size: 15px; "><?php echo $breeder['member_type'];?></small>
                              </span>
                              <span class="pull-right-container plus_text">
                                <small class="label bg-green  member_type_text" id="<?php echo $breeder['id'];?>" member="<?php echo $breeder['member_type'];?>" style="font-size: 15px;">plus</small>
                              </span>   
                              <?php } else { ?>
                                <span class="pull-right-container plus_text">
                                <small class="label bg-green  member_type_text" id="<?php echo $breeder['id'];?>" member="<?php echo $breeder['member_type'];?>" style="font-size: 15px;"><?php echo $breeder['member_type'];?></small>
                              </span>
                              <span class="pull-right-container professional_text">
                                <small class="label bg-green  member_type_text" id="<?php echo $breeder['id'];?>" member="<?php echo $breeder['member_type'];?>" style="font-size: 15px;">professional</small>
                              </span>
                              <?php } ?>                            
                            </td>                                
                            <td style="width: 9%;">
                              <a href="/breeder/view?id=<?=$breeder['id'];?>" class="breeder_details" id="<?php echo $breeder['id'];?>" target="_blank"><i class="fa fa-eye" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="View" data-placement="top"></i></a> | 
                              <a class="breeder_delete_btn" data-toggle="modal" data-target="#delete_breeder" breeder_name = "<?php echo $breeder['username']; ?>" id="<?php echo $breeder['id'];?>"><i class="fa fa-times" style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Delete" data-placement="top"></i></a> | 
                              <a class="breeder_change_pwd_btn" data-toggle="modal" data-target="#breeder_change_pwd" breeder_name = "<?php echo $breeder['username']; ?>" id="<?php echo $breeder['id'];?>"><i class="fa fa-key" style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Change Password" data-placement="top"></i></a>                             
                          </td>                                 
                          </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                  <div id="pagination2" class="light-theme simple-pagination" style="text-align: center;margin-left: 45%; margin-top: 1%;">
                  </div> -->
              </div>
              <?php }?>
            </div>        
            </div>
            <div class="row">
                <div class="col-md-12">                              
                    <div class="portlet light portlet-fit ">
                       <!--  <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-red"></i>
                                <span class="caption-subject font-red sbold uppercase">Editable Table</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                        <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="portlet-body">
                            <!-- <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                            <button id="sample_editable_1_new" class="btn green"> Add New
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn-group pull-right">
                                            <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;"> Print </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"> Save as PDF </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;"> Export to Excel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
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
                                      <th>Name</th> 
                                      <th>Photo</th>                            
                                      <th>Email</th>
                                      <th>Breed Name</th>
                                      <th>City</th>
                                      <th>State</th>
                                      <th>Zipcode</th>
                                      
                                      <th>&nbsp;&nbsp;Date&nbsp;&nbsp;</th>
                                      <th>Payment</th>
                                      <th>Membership</th>
                                      <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>                        
                                  <?php 
                                    $i = 1;
                                    foreach($breeders_data as $breeder): 
                                  ?>                        
                                      
                                      <tr>
                                        <td class="mailbox-name">
                                              <?php echo $i++;?>
                                        </td>
                                        <td class="mailbox-name">
                                         <?php echo $breeder['username'];?> 
                                        </td>
                                        <td class="mailbox-name" style="width: 50px;">
                                          <img src="<?php if(empty($breeder['photo'])) echo base_url().'assets/img/default_user.png'; else echo $breeder['photo'];?>" style="width: 50px;">
                                        </td>
                                        <td class="mailbox-name">
                                          <?php echo $breeder['email'];?>                          
                                        </td>
                                        <td class="mailbox-name">
                                         <?php echo $breeder['breed_name'];?>
                                        </td>
                                        <td class="mailbox-name">
                                         <?php echo $breeder['city'];?>
                                        </td>
                                        <td class="mailbox-name">
                                         <?php echo $breeder['state'];?>
                                        </td>
                                        <td class="mailbox-name">
                                         <?php echo $breeder['zip'];?>
                                        </td>
                                        <td class="mailbox-name">
                                         <?php echo $breeder['created_at'];?>
                                        </td>
                                        <td class="mailbox-name">
                                         <?php if($breeder['payment_status'] == 1) $payment = "Paid"; else  $payment = "Not Paid";?>
                                         <span class="pull-right-container">
                                            <small class="label bg-blue <?php echo $breeder['username'].'payment'?>" style="font-size: 15px;"><?php echo $payment;?></small>
                                          </span>
                                        </td>
                                        <td class="mailbox-name member_type" style="cursor: pointer;" >
                                          <input type="hidden" name="original_membership" class="original_membership" value="<?php echo $breeder['member_type'];?>">
                                          <input type="hidden" name="original_breeder_name" class="original_breeder_name" value="<?php echo $breeder['username'];?>">
                                          <span class="pull-right-container">
                                            <small class="label bg-green  member_type_text" id="<?php echo $breeder['id'];?>"  breeder_name="<?php echo $breeder['username'];?>" member="<?php echo $breeder['member_type'];?>" style="font-size: 15px; "><?php 
                                           echo $breeder['member_type'];?></small>
                                          </span>      
                                        </td>                                
                                        <td style="width: 9%;">
                                          <a href="/breeder/view?id=<?=$breeder['id'];?>" class="breeder_details" id="<?php echo $breeder['id'];?>" target="_blank"><i class="fa fa-eye" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="View" data-placement="top"></i></a> | 
                                          <a class="breeder_delete_btn" data-toggle="modal" data-target="#delete_breeder" breeder_name = "<?php echo $breeder['username']; ?>" id="<?php echo $breeder['id'];?>"><i class="fa fa-times" style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Delete" data-placement="top"></i></a>  
                                          <!-- |<a class="breeder_change_pwd_btn" data-toggle="modal" data-target="#breeder_change_pwd" breeder_name = "<?php echo $breeder['username']; ?>" id="<?php echo $breeder['id'];?>"><i class="fa fa-key" style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Change Password" data-placement="top"></i></a> -->                             
                                      </td>                                 
                                      </tr>
                                  <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>             
        </div>
      </div>
    </section>
</div>
<div class="modal fade" id="delete_breeder">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-trash"></i> Delete Confirmation</h4>
            </div>
            <div class="modal-body">                
                <h4>Are you sure you want to delete this Breeder?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="button" name="remove" class="btn-delete btn btn-danger delete_breeder_confirm_btn" data-dismiss="modal"><i class="fa fa-trash"></i> Confirm</button>
            </div>
        </div>
    </div>
</div>
<div id="breeder_change_pwd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-key"></i> Change password</h4>
      </div>
      <div class="modal-body">    
          <input type="hidden" name="breeder_id" id="breeder_id">            
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="breeder_change_pwd_original" class="breeder_change_pwd_original form-control">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="breeder_change_pwd_confirm" class="breeder_change_pwd_confirm form-control">
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
          <button type="button" class="btn-delete btn btn-danger breeder_pwd_change_btn" data-dismiss="modal"><i class="fa fa-key"></i>Change password</button>
      </div>
  </div>
  </div>
</div>
<script type="text/javascript">
  $('[data-toggle="tooltip"]').tooltip();
</script>
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