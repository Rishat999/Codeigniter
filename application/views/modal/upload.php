<div class="modal fade" id="upload_main_docs">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Upload Main Documents</h4>
            </div>
            <div class="modal-body">
                <div class="upload-wrapper">
                    <form action="/docs/upload_main_files" class="dropzone">
                        <input type="hidden" name="document_number" id="document_number" class="documnet_number">
                        
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="button" class="btn btn-primary pull-right" data-dismiss="modal"><i class="fa fa-send"></i> Finish</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="upload_related_docs">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Upload Related Documents</h4>
            </div>
            <div class="modal-body">
                <div class="upload-wrapper">
                    <form action="/docs/upload_related_files" class="dropzone">
                        <input type="hidden" name="document_number" id="document_related_number" class="documnet_number">
                        
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button  type="button" class="btn btn-primary pull-right" data-dismiss="modal"><i class="fa fa-send"></i> Finish</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
    'use strict';
    var fi = $('#fileupload'); //file input 
    var process_url = 'http://skimmo.fr/validation/server/php/upload.php'; //PHP script
    var progressBar = $('<div/>').addClass('progress').append($('<div/>').addClass('progress-bar')); //progress bar
    var uploadButton = $('<button/>').addClass('button btn-blue upload').text('Upload');    //upload button
    var count = 0;
    var arrFname = [];
    var arrDesc = [];
    var fbtnF = true;

    // remove description error
    $('#description').bind('input propertychange', function() {
        if (this.value != '') {
            if ($(this).parent().find("span.text-danger").css("display") != "none") {
                $(this).parent().find("span.text-danger").hide(); 
            }
        }
    });

    $("#btnFinish").click(function() {
        if (!fbtnF) return;
        fbtnF = false;

        if (count == 0) {
            window.location.href = "<?php echo base_url(); ?>docs";
        } else {
            $.ajax({
                type: "post",
                url: "<?php echo base_url(); ?>index.php/sendemail/sendToPoweruser",
                data: {
                    arrFname: arrFname,
                    arrDesc: arrDesc
                },
                success: function(response) {
                    if (response == "success") {
                        window.location.href = "<?php echo base_url(); ?>docs?us";
                    } else {
                        window.location.href = "<?php echo base_url(); ?>docs?usef";
                    }
                }
            });
        }
    });
    
    uploadButton.on('click', function () {
        var description = $("#description")[0].value;
        if (description == "") {
            var error = $('<span class="text-danger"/>').text("Please input description of file you are going to upload.");
            $("#description").parent().append(error);
            return;
        }
        var $this = $(this), data = $this.data();
        var filename = data['files'][0]['name'];
        // console.log(data);
        $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>index.php/docs/upload",
            data: {
                filename: filename,
                description: description
            },
            success: function(response) {
                console.log(response);
                switch (response) {
                    case '-2': // filename exists
                        var error = $('<span class="text-danger"/>').text("sorry, this file name already exists.");
                        $(data.context.children().append(error));
                        break;
                    case '-1': // failed uploading
                        var error = $('<span class="text-danger"/>').text("sorry, failed uploading for some reason.");
                        $(data.context.children().append(error));
                        break;
                    case '1': // success uploading and sending email
                        // save filename and description in temp array to send email later
                        count++;
                        arrFname.push(filename);
                        arrDesc.push(description);
console.log(data.submit());
                        data.submit().always(function () {
                            $this.parent().find('.progress').show();
                            $this.parent().find('.remove').remove();
                            $this.remove();
                        });
                        break;
                }
            }
        });

    });

    //initialize blueimp fileupload plugin
    fi.fileupload({
        url: process_url,
        dataType: 'json',
        autoUpload: false,
        // acceptFileTypes: /(\.|\/)(pdf)$/i,
        acceptFileTypes: /^.+\.([pP][dD][fF])$/,
        maxFileSize: 3145728, //3MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/ 
        .test(window.navigator.userAgent),
        // previewMaxWidth: 50,
        // previewMaxHeight: 50,
        // previewCrop: true,
        dropZone: $('#dropzone')
    });
    
    fi.on('fileuploadadd', function (e, data) {
        
        data.context = $('<div/>').addClass('file-wrapper').appendTo('#files');
        $.each(data.files, function (index, file) {  
            var node = $('<div/>').addClass('file-row');
            var removeBtn  = $('<button/>').addClass('button btn-red remove').text('Remove');
            removeBtn.on('click', function(e, data){
                $(this).parent().parent().remove();
            });
            
            var file_txt = $('<div/>').addClass('file-row-text').append('<span>'+file.name + ' (' +format_size(file.size) + ')' + '</span>');
            
            file_txt.append(removeBtn);
            file_txt.prependTo(node).append(uploadButton.clone(true).data(data));
            progressBar.clone().appendTo(file_txt);
            if (!index){
                node.prepend(file.preview);
            }
            
            node.appendTo(data.context);
        });
    });

    fi.on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
            if (file.preview) {
                node .prepend(file.preview);
            }
            if (file.error) {
                node.append($('<span class="text-danger"/>').text(file.error));
            }
            if (index + 1 === data.files.length) {
                data.context.find('button.upload').prop('disabled', !!data.files.error);
            }
    });
    
    fi.on('fileuploadprogress', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        if (data.context) {
            data.context.each(function () {
                $(this).find('.progress').attr('aria-valuenow', progress).children().first().css('width',progress + '%').text(progress + '%');
            });
        }
    });

    fi.on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>') .attr('target', '_blank') .prop('href', file.url);
                $(data.context.children()[index]).addClass('file-uploaded');
                $(data.context.children()[index]).find('canvas').wrap(link);
                $(data.context.children()[index]).find('.file-remove').hide(); 
                var done = $('<span class="text-success"/>').text('Uploaded!');
                $(data.context.children()[index]).append(done);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index]).append(error);
            }
        });
    });
    
    fi.on('fileuploadfail', function (e, data) {
     $('#error_output').html(data.jqXHR.responseText);
    });
    
    function format_size(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }
        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }
        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }
        return (bytes / 1000).toFixed(2) + ' KB';
    }

});
</script>