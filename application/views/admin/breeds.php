<div class="content-wrapper">
    <section class="content-header">
      <h1>
        All Breeds
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Breeds</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <?php if(empty($breeds_data)) {?>
                <p class="text-center">
                  <img src="<?php echo base_url(); ?>assets/img/Users-icon.png">
                </p>
                <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No Breeds exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
                </p>
                <div class="error-page" style="margin: 0px;  text-align: center;  margin-left: 15%;  padding-bottom: 3%;">
                    <br>
                    <h2 class="headline text-yellow" style="margin-top: 0px;"> 404</h2>
                    <div class="error-content">
                      <h3><i class="fa fa-warning text-yellow"></i> Oops! No Breeds exist.</h3>
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
                          <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                            <button  class="btn green" data-toggle="modal" data-target="#add_breed"> Add New
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                      <th>Breed Name</th>   
                                      <th>Action</th>    
                                  </tr>            
                                </thead>
                                <tbody>                        
                                  <?php 
                                    $i = 1;
                                    foreach($breeds_data as $breed): 
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
                                          <?php echo $breed['breed_name'];?>
                                        </td>      
                                        <td width="30%">
                                          <a class="delete_breed_btn" data-toggle="modal" data-target="#delete_breed"  id="<?php echo $breed['id'];?>"><i class="fa fa-trash" style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Delete" data-placement="top"></i></a>                                
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
                  <div class="box-body no-padding <?php if(!$breeds_data) echo 'hide';?>">
                  <table id="tbl_users" class="table table-striped table-bordered zero-configuration" style="text-align: center;">
                    <thead>
                      <tr>        
                          <th><p>No</p></th>
                          <th><p>Breed Name</p></th>   
                          <th><p>Action</p></th>    
                      </tr>            
                    </thead>
                    <tbody>                        
                      <?php 
                        $i = 1;
                        foreach($breeds_data as $breed): 
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
                              <p><?php echo $breed['breed_name'];?></p>
                            </td>      
                            <td width="30%">
                              <a class="delete_breed_btn" data-toggle="modal" data-target="#delete_breed"  id="<?php echo $breed['id'];?>"><i class="fa fa-trash" style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Delete" data-placement="top"></i></a>                                
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
<div class="modal fade" id="delete_breed">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-trash"></i> Delete Confirmation</h4>
            </div>
            <div class="modal-body">                
                <h4>Are you sure you want to delete this Breed?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="button" name="remove" class="btn-delete btn btn-danger delete_breed_confirm_btn" data-dismiss="modal"><i class="fa fa-trash"></i> Confirm</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="add_breed">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-plus"></i></i>Add New Breed</h4>
            </div>
            <div class="modal-body">                
                <label>Add New Breed</label>
                <input type="text" name="add_breed_name" class="add_breed_name form-control" placeholder="input breed name here" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="button" class="btn-delete btn btn-danger add_breed_add_btn" data-dismiss="modal"><i class="fa fa-trash"></i> Add New Breed</button>
            </div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">
jQuery(function($) {
    // Consider adding an ID to your table
    // incase a second table ever enters the picture.
    var items = $("table tbody tr");

    var numItems = items.length;
    var perPage = 10;

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