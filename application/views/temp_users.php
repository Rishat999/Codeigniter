<div class="table-responsive mailbox-messages">
                <?php echo validation_errors("<script>
                  Lobibox.notify('error', { msg:'", "'});</script>"); ?>
                <table id="tbl_users" class="table table-hover table-striped">
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
                          <td class="mailbox-name">
                                    <?php echo $i++;?>
                          </td>
                          <td class="mailbox-name">
                            <strong>
                                <?php echo $user->name;?>           
                            </strong>      
                          </td> 
                          <td class="mailbox-name">
                                    <?php echo $user->email_address;?> 
                          </td> 
                          <td class="mailbox-name">
                                    <?php echo $user->role; ?>  
                          </td>
                          <td class="mailbox-name">
                                    <?php echo $user->level; ?>  
                          </td>  
                          <td class="mailbox-name">
                                    <?php echo $user->availability; ?>  
                          </td>
                          <td class="text-success" style="margin-top: -2%;">
                            <?php echo $user->registered_at; ?> 
                          </td>
                          <td>                          
                            <input type="checkbox" name="user_id[]" value="<?php echo $user->id;?>">
                          </td>    
                      </tr>                      
                  <?php endforeach; ?>                    
                </tbody>
                </table>
                <div id="pagination2" class="light-theme simple-pagination" style="text-align: center;margin-left: 45%; margin-top: 1%;">
                </div>
                <!-- /.table -->
              </div>