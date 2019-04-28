var UserTableDatatablesEditable = function () {

    var initTable = function () {
        var table = $('#userEditableTable');

        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "_MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            buttons: [
                /*{ extend: 'csv', className: 'btn default' }*/
            ],

            "order": [
                [0, 'asc']
            ],
            
            "lengthMenu": [
                [5, 10, 15, 20, -1],
                [5, 10, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 5,

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });
        console.log("table");
        table.on('click', '.edit-user', function (e) {
            $('#editUserModal .email').val("");
            var uid = $(this).attr('id');
            $('#editUserModal').modal();
            $('#editUserModal .uid').val(uid);
            $('#editUserModal .username').val($(".login_"+uid).html());
            if($(".role_"+uid).html()=="admin")
                $('#editUserModal .role').val(1);
            else if($(".role_"+uid).html()=="reseller")
                $('#editUserModal .role').val(2);
            else if($(".role_"+uid).html()=="user")
                $('#editUserModal .role').val(3);
            else if($(".role_"+uid).html()=="limited User")
                $('#editUserModal .role').val(4);
            var expire = $(".expire_date_"+uid).html().split('-');
            var date = new Date(expire[2], expire[1], expire[0]);
            expire = date.getFullYear()+'-'+
                    (date.getMonth()>9?date.getMonth():'0'+date.getMonth())+'-'+
                    (date.getDate()>9?date.getDate():'0'+date.getDate());
            //console.log(expire);
            $('#editUserModal input.expire_date').val(expire);
            $('#editUserModal .parent').val($(".parent_"+uid).html());
            if($(".active_"+uid).html()=="Active")
                $('#editUserModal .aactive').prop('checked', true);
            else
                $('#editUserModal .aactive').prop('checked', false);
        });
        table.on('click', '.assign-user', function (e) {
            var selectId = $(".userTable .assign-user").attr('id');
            var selectName = $('.userTable').find('.login_'+selectId).html();
            console.log("selectId: "+selectId);
            console.log("selectName: "+selectName);
            var assignUserHtml = "<option value='"+selectId+"'>"+selectId+'- '+selectName+"</option>";
            $('#assignVehicleUser .userlist').html(assignUserHtml);
            $('#assignVehicleUser').modal();
            $(".assign-vehice-user-form").submit(function(e){
                e.preventDefault();
                console.log("@#@#@#@#@#@#@#@#@#@#@#@#");
                var user_id = $("#assignVehicleUser .userlist").val();
                var vehicle_id = $("#assignVehicleUser .vehiclelist").val();
                var alloc_date = $('#assignVehicleUser .d_allocation').val();
                var term={
                    "vid[]": vehicle_id,
                    "user_id": user_id,
                    "d_allocation": alloc_date
                };
                console.log(term);
                var url="api.php?url=vehicle/assignUser.php&method=get&authtoken=2bcdb0b987a5755f7ebfadc8cf25faab5ff29878";
                $.ajax({
                    type:"post",
                    url: url,
                    data:term,
                    success: function(data){
                        console.log(data['status']);
                        if(data['status']=="success")
                            location.reload(true);
                    }
                });
            });   
        });
        
    }
    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }
            initTable();
        }

    };

}();


jQuery(document).ready(function() {
    //TableDatatablesButtons.init();
});