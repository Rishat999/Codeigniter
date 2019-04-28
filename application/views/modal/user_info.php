<div class="modal fade" id="user_info_modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-user"></i> User Info</h4>
            </div>
            <?php echo form_open('users'); ?>
            <div class="modal-body">
                <table style="font-size:1.2em;" class="table table-striped">
                    <input type="hidden" name="user_id" class="user_id_here">
                    <tr>
                        <td class="col-sm-5">Date Created</td>
                        <td>:</td>
                        <td class="text-primary"><span class="date_here"></span></td>
                    </tr>
                    <tr>
                        <td class="col-sm-5">Username</td>
                        <td>:</td>
                        <td class="text-danger"><input type="text" name="name" class="name_here form-control"></td>
                    </tr>
                    <tr>
                        <td class="col-sm-5">Email Address</td>
                        <td>:</td>
                        <td class="text-danger"><input type="email" name="email_address" class="email_here form-control"></td>
                    </tr>
                    <tr>
                        <td class="col-sm-5">New Password</td>
                        <td>:</td>
                        <td class="text-danger"><input type="password" name="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td class="col-sm-5">Confirm Password</td>
                        <td>:</td>
                        <td class="text-danger"><input type="password" name="tmp_password" class="form-control"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
            </div>
            </form>
        </div>
    </div>
</div>