<?php
    $role = $this->session->userdata('role');
    $this->session->userdata("dog_control");
    $this->session->userdata("breeder_control");
    $this->session->userdata("breed_control");
    $this->session->userdata("configuration");
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="clearfix"></div>
        <ul class="sidebar-menu" style="margin-top: 4% !important;">
            <li class="header">MAIN NAVIGATION</li>
             
            <?php 
                if($role == 'admin') { ?>
                    <li>
                        <a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/cms"><i class="fa fa-dashboard"></i> <span>CMS</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo base_url();?>admin/breeder"><i class="fa fa-paw"></i> <span>All Users</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right" style="margin-right: 5%;"></i>
                            </span>
                            <ul class="treeview-menu" style="display: block;">
                                <li>
                                    <a href="<?php echo base_url();?>admin/breeders">
                                        <i class="fa fa-user"></i>Breeders
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/subadmin">
                                        <i class="fa fa-user"></i>Sub Admin Users
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/new_subadmin">
                                        <i class="fa fa-user"></i>New Sub Admin
                                    </a>                            
                                </li>                        
                            </ul>
                        </a>
                    </li>           
                    <li class="treeview">
                        <a href="<?php echo base_url();?>admin/puppy"><i class="fa fa-paw"></i> <span>All Dogs</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right" style="margin-right: 5%;"></i>
                            </span>
                            <ul class="treeview-menu" style="display: block;">
                                <li>
                                    <a href="<?php echo base_url();?>admin/puppy">
                                        <img src="<?php echo base_url();?>assets/img/puppy.png" class="dog_icon" style="width: 20px; margin-right: 5%;">Puppies
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/stud">
                                        <img src="<?php echo base_url();?>assets/img/stud.png" class="dog_icon" style="width: 20px; margin-right: 5%;">Studs
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/adult">
                                        <img src="<?php echo base_url();?>assets/img/adult.png" class="dog_icon" style="width: 20px; margin-right: 5%;">Adults
                                    </a>                            
                                </li>                        
                            </ul>
                        </a>
                    </li>  
                    <li>
                        <a href="<?php echo base_url();?>admin/breeds"><i class="fa fa-link"></i> 
                            <span>All Breeds</span>
                        </a>
                    </li>            
                    <li>
                        <a href="<?php echo base_url();?>admin/change_password"><i class="fa fa-key"></i> 
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/change_avatar"><i class="fa fa-picture-o"></i> 
                            <span>Upload photo</span>
                        </a>
                    </li>
                <?php }
                else if($role == 'subadmin') 
                { 
                    if($this->session->userdata("dog_control") == "true")
                        {?>
                            <li class="treeview">
                                <a href="<?php echo base_url();?>admin/puppy"><i class="fa fa-paw"></i> <span>All Dogs</span>
                                    <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right" style="margin-right: 5%;"></i>
                                    </span>
                                    <ul class="treeview-menu" style="display: block;">
                                        <li>
                                            <a href="<?php echo base_url();?>admin/puppy">
                                                <img src="<?php echo base_url();?>assets/img/puppy.png" class="dog_icon" style="width: 20px; margin-right: 5%;">Puppies
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>admin/stud">
                                                <img src="<?php echo base_url();?>assets/img/stud.png" class="dog_icon" style="width: 20px; margin-right: 5%;">Studs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>admin/adult">
                                                <img src="<?php echo base_url();?>assets/img/adult.png" class="dog_icon" style="width: 20px; margin-right: 5%;">Adults
                                            </a>                            
                                        </li>                        
                                    </ul>
                                </a>
                            </li>
                        <?php } 
                    if($this->session->userdata("breeder_control") == "true") {?>
                        <li>
                            <a href="<?php echo base_url();?>admin/breeders">
                                <i class="fa fa-user"></i>Breeders
                            </a>
                        </li>
                    <?php }
                    if($this->session->userdata("breed_control") == "true") {?>
                        <li>
                            <a href="<?php echo base_url();?>admin/breeds"><i class="fa fa-link"></i> 
                                <span>All Breeds</span>
                            </a>
                        </li>
                    <?php }
                    if($this->session->userdata("breed_control") == "true") {?>

                    <?php }
                } else if($role == 'breeder') { ?>
                    <li>
                        <a href="<?php echo base_url();?>breeder/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>breeder/upload"><i class="fa fa-upload"></i> 
                            <span>Upload a dog</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>breeder/payment"><i class="fa fa-dollar"></i> 
                            <span>Payment</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>breeder/change_avatar"><i class="fa fa-picture-o"></i> 
                            <span>Upload a photo</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>breeder/gallery"><i class="fa fa-picture-o"></i> 
                            <span>Upload Photo Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>breeder/change_password"><i class="fa fa-key"></i> 
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>breeder/myprofile"><i class="fa fa-user"></i> 
                            <span>My profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>breeder/mydogs"><i class="fa fa-user"></i> 
                            <span>My Dogs</span>
                        </a>
                    </li>
                <?php }?>
            
            <!-- 
            <li>
                <a href="<?php echo base_url();?>admin/breeder"><i class="fa fa-user"></i> 
                    <span>Breeder</span>
                </a>
            </li> -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>