<div class="content-wrapper">
    <section class="content-header">
      <h1>
        All Puppys
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Puppies</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" >
            <?php if(empty($puppys)) {?>
                <p class="text-center" style="padding-top: 40px;">
                  <img src="<?php echo base_url(); ?>assets/img/puppy.png">
                </p>
                <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No Puppy exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
                </p>
                <div class="error-page" style="margin: 0px;  text-align: center;  margin-left: 15%;  padding-bottom: 3%;">
                    <br>
                    <h2 class="headline text-yellow" style="margin-top: 0px;"> 404</h2>
                    <div class="error-content">
                      <h3><i class="fa fa-warning text-yellow"></i> Oops! No Puppy exist.</h3>
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
                                      <th>Breeder</th>
                                      <th>City</th>
                                      <th>State</th>
                                      <th>Price</th>
                                      <th>Gender</th>
                                      <th>Age</th>
                                      <th>Actions</th>
                                  </tr>
                                </thead>
                                  <tbody>                        
                                    <?php 
                                      $i = 1;
                                      foreach($puppys as $puppy): 
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
                                           <?php echo $puppy['dog_name'];?> 
                                          </td>
                                          <td class="mailbox-name" style="width: 50px;">
                                            <img src="<?php if(empty($puppy['photo'])) echo base_url().'assets/img/default_gallery.jpg'; else echo $puppy['photo'];?>" style="width: 50px; height: 50px;">
                                          </td>
                                          <td class="mailbox-name">
                                            <a href="/breeder/view?id=<?=$puppy['breeder_id'];?>" class="breeder_details" id="<?php echo $puppy['breeder_id'];?>" target="_blank"><?php echo $puppy['vendor_name'];?> </a>
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $puppy['city'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $puppy['state'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-red" style="font-size: 15px;">$<?php echo $puppy['price'];?></small>
                                            </span>                               
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-blue" style="font-size: 15px;"><?php echo $puppy['gender'];?></small>
                                            </span>                               
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-green" style="font-size: 15px;"><?php echo $puppy['age'];?></small>
                                            </span>                               
                                          </td>                                        
                                          <td style="width: 9%;">
                                            <a href="/dogs/view?id=<?=$puppy['id'];?>" class="puppy_details" id="<?php echo $puppy['id'];?>" target="_blank"><i class="fa fa-eye" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="View" data-placement="top"></i></a> | 
                                            <a class="puppy_delete_btn" data-toggle="modal" data-target="#delete_puppy"  id="<?php echo $puppy['id'];?>"><i class="fa fa-times" style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Delete" data-placement="top"></i></a>                  
                                        </td>                                 
                                        </tr>
                                    <?php endforeach;?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
             <!--  <div class="table-responsive">  
                  <div class="box-body">        
                  <div class="box-body no-padding <?php if(!$puppys) echo 'hide';?>">
                  <table id="tbl_puppys" class="table table-striped table-bordered zero-configuration" >
                    <thead>
                      <tr>        
                          <th>No</th>
                          <th>Name</th> 
                          <th>Photo</th>                            
                          <th>Description</th>
                          <th>Breeder</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Price</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>                        
                      <?php 
                        $i = 1;
                        foreach($puppys as $puppy): 
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
                             <?php echo $puppy['dog_name'];?> 
                            </td>
                            <td class="mailbox-name" style="width: 50px;">
                              <img src="<?php if(empty($puppy['photo'])) echo base_url().'assets/img/default_dog.png'; else echo $puppy['photo'];?>" style="width: 50px;">
                            </td>
                            <td class="doc_desc_cell">
                              <p><?php echo $puppy['description'];?></p>                          
                            </td>
                            <td class="mailbox-name">
                             <?php echo $puppy['breeder_name'];?> 
                            </td>
                            <td class="mailbox-name">
                             <?php echo $puppy['city'];?> 
                            </td>
                            <td class="mailbox-name">
                             <?php echo $puppy['state'];?> 
                            </td>
                            <td class="mailbox-name">
                              <span class="pull-right-container">
                                <small class="label bg-red" style="font-size: 15px;">$<?php echo $puppy['price'];?></small>
                              </span>                               
                            </td>
                            <td class="mailbox-name">
                              <span class="pull-right-container">
                                <small class="label bg-blue" style="font-size: 15px;"><?php echo $puppy['gender'];?></small>
                              </span>                               
                            </td>
                            <td class="mailbox-name">
                              <span class="pull-right-container">
                                <small class="label bg-green" style="font-size: 15px;"><?php echo $puppy['age'];?></small>
                              </span>                               
                            </td>
                            <td class="mailbox-name">
                              <span class="pull-right-container">
                                <small class="label bg-yellow" style="font-size: 15px;"><?php echo $puppy['status'];?></small>
                              </span>                               
                            </td>                        
                            <td style="width: 9%;">
                              <a href="/dogs/view?id=<?=$puppy['id'];?>" class="puppy_details" id="<?php echo $puppy['id'];?>" target="_blank"><i class="fa fa-eye" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="View" data-placement="top"></i></a> | 
                              <a class="puppy_delete_btn" data-toggle="modal" data-target="#delete_puppy"  id="<?php echo $puppy['id'];?>"><i class="fa fa-times" style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Delete" data-placement="top"></i></a>                  
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
<div class="modal fade" id="delete_puppy">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-trash"></i> Delete Confirmation</h4>
            </div>
            <div class="modal-body">                
                <h4>Are you sure you want to delete this Puppy?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="button" name="remove" class="btn-delete btn btn-danger delete_puppy_confirm_btn" data-dismiss="modal"><i class="fa fa-trash"></i> Confirm</button>
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