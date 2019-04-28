<div class="content-wrapper">
    <section class="content-header">
      <h1>
        My dogs
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'breeder/dashboard'; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My dogs</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" >
            <?php if(empty($available_puppy) && empty($available_stud) && empty($available_adult)) {?>
                <p class="text-center" style="padding-top: 40px;">
                  <img src="<?php echo base_url(); ?>assets/img/puppy.png">
                </p>
                <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! You don't have dogs available! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
                </p>
                <div class="error-page" style="margin: 0px;  text-align: center;  margin-left: 15%;  padding-bottom: 3%;">
                    <br>
                    <h2 class="headline text-yellow" style="margin-top: 0px;"> 404</h2>
                    <div class="error-content">
                      <h3><i class="fa fa-warning text-yellow"></i> Oops! No dogs exist.</h3>
                      <p>
                        We could not find the dogs you were looking for.
                        Meanwhile, you may refresh this page or you can <a href="upload">Upload a dog</a>&nbsp;Now 
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
                                      <th>Name</th> 
                                      <th>Photo</th>                                             
                                      <th>Breeds</th>
                                      <th>City</th>
                                      <th>State</th>
                                      <th>Category</th>
                                      <th>Price</th>
                                      <th>Gender</th>
                                      <th>Age</th>
                                      <th>Actions</th>
                                  </tr>
                                </thead>
                                  <style type="text/css">
                                    td, th
                                    {
                                      vertical-align: middle !important;
                                      text-align: center !important;
                                    }
                                  </style>
                                  <tbody>                        
                                    <?php 
                                    $i = 1;
                                    if(!empty($available_puppy)) {
                                      
                                      foreach($available_puppy as $puppy): 
                                      ?>        
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
                                            <?php echo $puppy['breed_name'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $puppy['city'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $puppy['state'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-yellow" style="font-size: 15px;"><?php echo $puppy['category'];?></small>
                                            </span>                               
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
                                            <a href="/dogs/edit?id=<?=$puppy['id'];?>" class="edit_dog" id="<?php echo $puppy['id'];?>" target="_blank"><i class="fa fa-edit" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
                                            | 
                                            <a href="/dogs/view?id=<?=$puppy['id'];?>" class="puppy_details" id="<?php echo $puppy['id'];?>" target="_blank"><i class="fa fa-eye" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="View" data-placement="top"></i></a> | 
                                            <a class="dog_delete_btn" data-toggle="modal" data-target="#delete_dog"  id="<?php echo $puppy['id'];?>" category="puppy"><i class="fa fa-times"  style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Delete" data-placement="top"></i></a>                  
                                        </td>                                 
                                        </tr>
                                    <?php endforeach; }?>
                                    <?php        
                                      if(!empty($available_stud)) {                              
                                       foreach($available_stud as $stud){
                                      ?>        
                                        <tr>
                                          <td class="mailbox-name">
                                                <?php echo $i++;?>
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $stud['dog_name'];?> 
                                          </td>
                                          <td class="mailbox-name" style="width: 50px;">
                                            <img src="<?php if(empty($stud['photo'])) echo base_url().'assets/img/default_gallery.jpg'; else echo $stud['photo'];?>" style="width: 50px; height: 50px;">
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $stud['breed_name'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $stud['city'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $stud['state'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-yellow" style="font-size: 15px;"><?php echo $stud['category'];?></small>
                                            </span>                               
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-red" style="font-size: 15px;">$<?php echo $stud['price'];?></small>
                                            </span>                               
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-blue" style="font-size: 15px;"><?php echo $stud['gender'];?></small>
                                            </span>                               
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-green" style="font-size: 15px;"><?php echo $stud['age'];?></small>
                                            </span>                               
                                          </td>                                        
                                          <td style="width: 9%;">
                                            <a href="/dogs/edit?id=<?=$stud['id'];?>" class="edit_dog" id="<?php echo $stud['id'];?>" target="_blank"><i class="fa fa-edit" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="Edit" data-placement="top"></i></a> |
                                            <a href="/dogs/view?id=<?=$stud['id'];?>" class="stud_details" id="<?php echo $stud['id'];?>" target="_blank"><i class="fa fa-eye" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="View" data-placement="top"></i></a> | 
                                            <a class="dog_delete_btn" data-toggle="modal" data-target="#delete_dog"  id="<?php echo $stud['id'];?>" category="stud"><i class="fa fa-times"  style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Delete" data-placement="top"></i></a>                  
                                        </td>                                 
                                        </tr>
                                       <?php } }?>
                                    <?php
                                      if(!empty($available_adult)) {    
                                       foreach($available_adult as $adult){
                                      ?>        
                                        <tr>
                                          <td class="mailbox-name">
                                                <?php echo $i++;?>
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $adult['dog_name'];?> 
                                          </td>
                                          <td class="mailbox-name" style="width: 50px;">
                                            <img src="<?php if(empty($adult['photo'])) echo base_url().'assets/img/default_gallery.jpg'; else echo $adult['photo'];?>" style="width: 50px; height: 50px;">
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $adult['breed_name'];?>  
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $adult['city'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                           <?php echo $adult['state'];?> 
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-yellow" style="font-size: 15px;"><?php echo $adult['category'];?></small>
                                            </span>                               
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-red" style="font-size: 15px;">$<?php echo $adult['price'];?></small>
                                            </span>                               
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-blue" style="font-size: 15px;"><?php echo $adult['gender'];?></small>
                                            </span>                               
                                          </td>
                                          <td class="mailbox-name">
                                            <span class="pull-right-container">
                                              <small class="label bg-green" style="font-size: 15px;"><?php echo $adult['age'];?></small>
                                            </span>                               
                                          </td>                                        
                                          <td style="width: 9%;">
                                            <a href="/dogs/edit?id=<?=$adult['id'];?>" class="edit_dog" id="<?php echo $adult['id'];?>" target="_blank"><i class="fa fa-edit" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="Edit" data-placement="top"></i></a> |
                                            <a href="/dogs/view?id=<?=$adult['id'];?>" class="adult_details" id="<?php echo $adult['id'];?>" target="_blank"><i class="fa fa-eye" style="font-size: 20px; cursor: pointer;"  data-toggle="tooltip" title="View" data-placement="top"></i></a> | 
                                            <a class="dog_delete_btn" data-toggle="modal" data-target="#delete_dog"  id="<?php echo $adult['id'];?>" category="adult"><i class="fa fa-times"  style="font-size: 20px; cursor: pointer;" data-toggle="tooltip"  title="Delete" data-placement="top"></i></a>                  
                                        </td>                                 
                                        </tr>
                                       <?php } }?>
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
<div class="modal fade" id="delete_dog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-trash"></i> Delete Confirmation</h4>
            </div>
            <div class="modal-body">                
                <h4>Are you sure you want to delete this dog?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="button" name="remove" class="btn-delete btn btn-danger delete_dog_confirm_btn" data-dismiss="modal"><i class="fa fa-trash"></i> Confirm</button>
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