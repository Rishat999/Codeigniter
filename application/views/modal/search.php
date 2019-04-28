<div class="modal fade" id="user_search_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-search"></i> Search User</h4>
            </div>
            <div class="modal-body">
                <form method="POST" class="user_search" action="users/search_users">  
                <div class="form-group">                    
                    <input type="text" class="form-control search_user_key" placeholder="Enter Username here" name="search_user_key">
                </div>                 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="submit" value="1" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="doc_search_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-search"></i> Search Documents</h4>
            </div>
            <div class="modal-body">
                <form method="POST" class="user_search" action="search_docs">  
                <div class="form-group">                    
                    <input type="text" class="form-control search_user_key" placeholder="Enter Document Name here" name="search_user_key">
                </div>                 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="submit" value="1" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                </form>
            </div>
        </div>
    </div>
</div>