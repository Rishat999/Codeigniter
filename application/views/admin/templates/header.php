<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pups and Stud</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/Lobibox/lobibox.css">
    <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png" />
    <!-- Pagination Plugin -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/plugins/pagination/css/simplePagination.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-toastr/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/all.css">  
    <!-- datatables -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/datatables.min.css"> 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/datatables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/metronic_component.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/dropzone.css">
    <!-- end of datatables -->
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/sb-admin-2.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/dist/js/app.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
    
    <script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/Lobibox/lobibox.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- File Upload Plugin -->
    <script src="<?php echo base_url();?>assets/dist/js/vendor/jquery.ui.widget.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/jquery.fileupload.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/jquery.fileupload-process.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/jquery.fileupload-validate.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-toastr/toastr.js"></script>
    <!-- datatable -->
    <script src="<?php echo base_url();?>assets/plugins/datatables/datatable.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/datatables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/table-datatables-editable.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/dropzone.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/jquery-progress-upload.js"></script>
    <!-- end -->
    <script src="<?php echo base_url();?>assets/dist/js/custom.js"></script>
    <!-- Pagination Plugin -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pagination/js/jquery.simplePagination.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/script.js"></script>
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="<?php echo base_url();?>" class="logo" style=" min-height: 59px;">
          <span class="logo-mini" style="margin-top: 20% !important;">P&S</span>
          <span class="logo-lg" style="margin-top: 2% !important;"><img src="http://local.pupsandstud123.com/assets/img/logo.png" style="width:30%">Pups and Stud</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" style="font-size: 20px;" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">            
            <ul class="nav navbar-nav">
              <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" >
                    <img src="<?php if(empty($this->session->userdata('photo'))) echo base_url()."assets/img/default_user.jpeg"; echo $this->session->userdata('photo');?>" class="admin_avatar" alt="" style=" border-radius: 50% !important;"><?php echo $this->session->userdata('username');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!--<li><a href="profile.php"> Profile</a></li>-->
                    <li><a href="<?php echo base_url(); ?>admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              <!-- <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="hidden-xs">Hello, <?php echo $this->session->userdata('username');?> <i class="fa fa-caret-down"></i></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-footer">                    
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>login/logout" class="btn btn-warning btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li> -->
              <!-- Control Sidebar Toggle Button -->
              <li class="hide">
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-bullhorn"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>