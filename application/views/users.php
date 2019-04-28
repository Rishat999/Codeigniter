

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List of Users</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <?php if(empty($users)) {?>
                <p class="text-center">
                  <img src="<?php echo base_url(); ?>assets/img/Users-icon.png">
                </p>
                <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No users exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
                </p>
                <div class="error-page" style="margin: 0px;  text-align: center;  margin-left: 15%;  padding-bottom: 3%;">
                    <br>
                    <h2 class="headline text-yellow" style="margin-top: 0px;"> 404</h2>
                    <div class="error-content">
                      <h3><i class="fa fa-warning text-yellow"></i> Oops! No Users exist.</h3>
                      <p>
                        Please <a href="/register">Register</a> first.
                        We could not find the user you were looking for.
                        Meanwhile, you may <a href="<?php echo base_url();?>users">refresh this page</a> 
                      </p>                      
                    </div>
                    <!-- /.error-content -->
                  </div>
            <?php }
            else {?>
              <div class="table-responsive">  
                  <div class="box-body">        
                  <div class="box-body no-padding <?php if(!$users) echo 'hide';?>">
                    <div class="mailbox-controls" style="padding: 0px !important; margin-bottom: 1%;">
                      <div class="btn-group">
                        <button type="button" data-target="#user_search_modal" data-toggle="modal" class="btn btn-default btn-sm"><i class="fa fa-search"></i> Search</button>
                       <a class="btn btn-default btn-sm pull-right" href="<?php echo base_url(); ?>register"><i class="fa fa-plus"></i>New User</a>
                      </div>                
                    </div>                 
                  <table id="tbl_users" class="table table-striped table-bordered zero-configuration">
                    <thead>
                      <tr>        
                          <th>No</th>
                          <th>Name</th>   
                          <th>Email Address</th>   
                          <th>User Role</th>   
                          <th>Level</th>
                          <th>Availability</th>
                          <th>Created Date</th>
                          <th>Management</th>                              
                    </thead>
                      <tbody>
                        <?php 
                          $i = 1;
                          foreach($users as $user): 
                        ?>                        
                            <tr>
                              <td class="mailbox-name" width="5%">
                                    <?php echo $i++;?>
                              </td>
                              <td class="mailbox-name" width="25%" >
                                <strong>
                                    <?php echo $user->name;?>           
                                </strong>      
                              </td> 
                              <td class="mailbox-name" width="20%">
                                        <?php echo $user->email_address;?> 
                              </td> 
                              <td class="mailbox-name" width="15%">
                                        <?php echo $user->role; ?>  
                              </td>
                              <td class="mailbox-name" width="5%">
                                        <?php echo $user->level; ?>  
                              </td>  
                              <td class="mailbox-name" width="10%">
                                        <?php echo $user->availability; ?>  
                              </td>
                              <td class="mailbox-name" width="10%">
                                <?php echo $user->registered_at; ?> 
                              </td>
                              <td width="10%">
                                <a href="/users/edit?user_id=<?php echo $user->id;?>" class="btn btn-rounded btn-sm btn-outline-danger edit_user" id="edit_<?php echo $user->id;?>"><i class="fa fa-edit" style="font-size: 20px;"></i></a>
                                <a  class="btn btn-rounded btn-sm btn-outline-danger delete_btn" id="<?php echo $user->id;?>" data-toggle="modal" data-target="#delete"><i class="fa fa-trash" style="font-size: 20px;"></i></a>
                              </td>
                            </tr>
                        <?php endforeach;?>
                      </tbody>
                  </table>
                  <div id="pagination2" class="light-theme simple-pagination" style="text-align: center;margin-left: 45%; margin-top: 1%;">
                  </div>
              </div>
              <?php }?>
              <!-- /.mail-box-messages -->
            </div>
            <?php if(isset($nodata)): ?>
                <p class="text-center"><img src="<?php echo base_url(); ?>assets/img/Users-icon.png"></p>
                <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No user in this system! | <a href="#" onclick='location.reload(true); return false;'>Reload</a></p>
            <?php endif; ?>
                <?php if(isset($nosearch)): ?>
                <div class="error-page">
                    <br>
                    <h2 class="headline text-yellow"> 404</h2>

                    <div class="error-content">
                      <h3><i class="fa fa-warning text-yellow"></i> Oops! User not found.</h3>

                      <p>
                        We could not find the user you were looking for.
                        Meanwhile, you may <a href="<?php echo base_url();?>users">refresh this page</a> or try using the <a href="#user_search_modal" data-toggle="modal">search again</a>.
                      </p>

                      <form class="search-form" method="POST" action="<?php echo base_url(); ?>users/search">
                        <div class="input-group">
                          <input type="text" name="keyword" class="form-control" placeholder="Enter keyword...">

                          <div class="input-group-btn">
                            <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.input-group -->
                      </form>
                    </div>
                    <!-- /.error-content -->
                  </div>
            <?php endif; ?>
                
            </div><!-- /.box-body -->
          </div><!-- /.box -->              
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php $this->load->view('modal/confirm'); ?>
<?php $this->load->view('modal/user_info'); ?>
<?php $this->load->view('modal/search'); ?>
<?php $this->load->view('script/user'); ?>



<script type="text/javascript">
jQuery(function($) {

    // Consider adding an ID to your table
    // incase a second table ever enters the picture.
    var items = $("table tbody tr");

    var numItems = items.length;
    var perPage = 3;

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
</script>