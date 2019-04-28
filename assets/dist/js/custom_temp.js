$(document).ready(function(){
	toastr.options = {
        closeButton: true,
        debug: false,
        positionClass: "toast-top-right",
        onclick: null,
        showDuration: "1000",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "50000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut"
    };
    				
    var level;


    $(".admin_login").submit(function(e){
    	e.preventDefault();
    	var Formdata = $(this).serialize();
    	$.ajax({
            url : '/admin/login',
            type : 'POST',
            /*data : send_data,*/
            data : Formdata,
            success : function(response) {
            	console.log(response);
            	var flag = response[0];
            	var role = response.substring(2, response.length);
            	if(flag == 1)
            	{	
            		if(role=='admin')
            			window.location.href='/admin/dashboard';
            		else
            			window.location.href=window.location.origin+"/breeder/dashboard";
            	}		
            	else
            	{
            		if(flag == -2)
            		{	            			
            			Lobibox.notify('error', {
							          msg: 'No such user!'
							      });
            			$(".admin_login_email").val('');

            		}
            		else
            		{
            			Lobibox.notify('error', {
							          msg: 'Wrong password!'
							      });
            			$(".admin_login_pass").val('');
            		}
            	}	       	     	
            }				            
        });
        return false;
    })


    $(".change_admin_pwd").submit(function(e){
    	e.preventDefault();
    	var old_pwd = $(".old_pwd").val();
    	var new_pwd = $(".new_pwd").val();
    	var confirm_pwd = $(".confirm_pwd").val();
    	if(new_pwd == confirm_pwd)
    	{
    		$.ajax({
            url : '/admin/change_admin_pwd',
            type : 'POST',
            data : {"old_pwd" : old_pwd , "new_pwd" : new_pwd},
            success : function(response) {
            	console.log(response);
            	if(response == "updated")
            	{	
            		Lobibox.notify('success', {
							          msg: 'Password Updated!'
							      });
            		//setTimeout(function(){window.location.href='/login';}, 5000);
            	}
            	else
            	{
            		if(response == "wrong old password")
            		{
            			Lobibox.notify('error', {
							          msg: 'Wrong Old Password!'
							      });
            			$(".old_pwd").val('');
            		}
            		else
            		{
            			Lobibox.notify('error', {
							          msg: 'Please try again!'
							      });
            			$(".new_pwd").val('');
            			$(".confirm_pwd").val('');
            		}
            	}            		     	
            }				            
        });
    	}
    	else
    	{
    		Lobibox.notify('error', {
							          msg: "Passwords don't match!"
							      });
    	}
    })

    $(".subadmin_register").submit(function(e){
    	e.preventDefault();
    	var Formdata = $(this).serialize();
    	if($(".pass").val() == $(".confirm_pass").val())
				{						
					var breeder_control = document.getElementById('breeder_control').checked;
					var dog_control = document.getElementById('dog_control').checked;
					var breed_control = document.getElementById('breed_control').checked;
					var configuration = document.getElementById('configuration').checked;					
					var send_data = {
						/*'fname' : $(".fname").val(),
						'lname' : $(".lname").val(),*/
						'username' : $(".username").val(),
						'email' : $(".email").val(),
						'breed_control' : breed_control,
						'breeder_control' : breeder_control,
						'dog_control' : dog_control,
						'configuration' : configuration,
			            'password' : $(".pass").val()
						};
					console.log(send_data);
	                $.ajax({
			            url : '/admin/register_subadmin',
			            type : 'POST',
			            data : send_data,
			            success : function(response) {
			            	console.log(response);
				            	if(response == 'success')
				            	{		        		
					                Lobibox.notify('success', {
								          msg: 'Sub Admin User'+ '  '+$(".username").val()+ '   '+'is registered Successfully!'
								      });
					                setTimeout(function(){window.location.href=window.location.origin+'/admin/subadmin';}, 5000);
					                
				            	}
				            	else
				            	{
				            		/*var shortCutFunction = "error";
					                var msg = response;
					                var title = "Registration failed!";
					                toastr[shortCutFunction](msg, title);*/
					                Lobibox.notify('error', {
								          msg: 'Registration failed!'
								      });
				            	}			            	
			                }				            
			        });
			        return false;
				}
			else
			{
	            Lobibox.notify('error', {
		          msg: 'Confirm your password again!'
		      });
			}
    })

    $(".delete_subadmin_btn").click(function(){
    	var del_subadmin_id = $(this).attr("id");
    	console.log(del_subadmin_id);
    	$(".delete_subadmin_confirm_btn").click(function(e){
    		$.ajax({
	            url : '/admin/del_subadmin',
	            type : 'POST',
	            data : {"delete_id": del_subadmin_id},
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'success')
	            	{	

		                Lobibox.notify('success', {
					        msg: 'Deleting now Successfully!'
					    });
		                setTimeout(function(){window.location.reload();}, 5000);
		                
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Delete failed!'
					    });
	            	}				            	
	            }				            
	        });
    	})
    })

    $(".breeder_delete_btn").click(function(){
    	var del_breeder_id = $(this).attr("id");
    	console.log(del_breeder_id);
    	$(".delete_breeder_confirm_btn").click(function(e){
    		$.ajax({
	            url : '/admin/del_breeder',
	            type : 'POST',
	            data : {"delete_id": del_breeder_id},
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'success')
	            	{	

		                Lobibox.notify('success', {
					        msg: 'Deleting now Successfully!'
					    });
		                setTimeout(function(){window.location.reload();}, 5000);
		                
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Delete failed!'
					    });
	            	}				            	
	            }				            
	        });
    	})
    })

    $(".breeder_change_pwd_btn").click(function(){
    	var change_id = $(this).attr("id");
		var del_name = $(this).attr('breeder_name');		
		$("#breeder_id").val(change_id);
		$(".breeder_pwd_change_btn").click(function(){
			var pwd = $(".breeder_change_pwd_original").val();
			var pwd_confirm = $(".breeder_change_pwd_confirm").val();
			if(pwd == pwd_confirm && pwd.length !== 0 && pwd_confirm.length !== 0)
			{					
				$.ajax({
		            url : '/admin/change_subadmin_pass',
		            type : 'POST',
		            data : {"pwd" : pwd,  "breeder_id":change_id},
		            success : function(response) {
		            	console.log(response);
			            	if(response == 'success')
			            	{				            		
				                Lobibox.notify('success', {
							          msg: 'Breeder'+ '  '+ "<span style='color: #0026ef; font-weight:bold;'>" + del_name +"</span>" + '   '+'Password changing now!'
							      });	
							    //setTimeout(function(){window.location.reload();}, 5000);		
			            	}
			            	else
			            	{		            		
				                Lobibox.notify('error', {
							          msg: 'Password Change Failed Try again after 5 seconds!'
							      });
				                //setTimeout(function(){window.location.reload();}, 5000);
			            	}				            	
		                }				            
		        });
			}
			else
			{	
				if(pwd.length == 0 && pwd_confirm.length == 0)
				{						
					if(pwd.length == 0)
						Lobibox.notify('error', { msg: 'Input password'});
					else if(pwd.length == 0)
						Lobibox.notify('error', { msg: 'Input confirm password'});
					return false;
				}
				else
				{
					$(".breeder_change_pwd_original").val("");
					$(".breeder_change_pwd_confirm").val("");	
					Lobibox.notify('error', { msg: 'Password does not match!'});
					return false;
				}
				
			}
			
		})
    })

    $(".breeder_details").click(function(){
    	var detail_id = $(this).attr("id");

    })

    $(".puppy_delete_btn").click(function(){
    	var delete_puppy_id = $(this).attr("id");
    	$(".delete_puppy_confirm_btn").click(function(e){
    		$.ajax({
	            url : '/dogs/del_dog',
	            type : 'POST',
	            data : {"delete_id": delete_puppy_id},
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'success')
	            	{	

		                Lobibox.notify('success', {
					        msg: 'Deleting now Successfully!'
					    });
		                setTimeout(function(){window.location.href="/admin/puppy";}, 5000);
		                
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Delete failed!'
					    });
	            	}				            	
	            }				            
	        });
    	})
    })

    $(".stud_delete_btn").click(function(){
    	var delete_stud_id = $(this).attr("id");
    	$(".delete_stud_confirm_btn").click(function(e){
    		$.ajax({
	            url : '/dogs/del_dog',
	            type : 'POST',
	            data : {"delete_id": delete_stud_id},
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'success')
	            	{	

		                Lobibox.notify('success', {
					        msg: 'Deleting now Successfully!'
					    });
		                setTimeout(function(){window.location.href="/admin/stud";}, 5000);
		                
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Delete failed!'
					    });
	            	}				            	
	            }				            
	        });
    	})
    })

    $(".adult_delete_btn").click(function(){
    	var delete_adult_id = $(this).attr("id");
    	$(".delete_adult_confirm_btn").click(function(e){
    		$.ajax({
	            url : '/dogs/del_dog',
	            type : 'POST',
	            data : {"delete_id": delete_adult_id},
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'success')
	            	{	

		                Lobibox.notify('success', {
					        msg: 'Deleting now Successfully!'
					    });
		                setTimeout(function(){window.location.href="/admin/adult";}, 5000);
		                
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Delete failed!'
					    });
	            	}				            	
	            }				            
	        });
    	})
    })

    $(".delete_breed_btn").click(function(){
    	var delete_breed_id = $(this).attr("id");
    	$(".delete_breed_confirm_btn").click(function(){
    		$.ajax({
	            url : '/admin/del_breed',
	            type : 'POST',
	            data : {"delete_id": delete_breed_id},
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'success')
	            	{	

		                Lobibox.notify('success', {
					        msg: 'Deleting now Successfully!'
					    });
		                setTimeout(function(){window.location.reload();}, 5000);
		                
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Delete failed!'
					    });
	            	}				            	
	            }				            
	        });
    	})
    })
    
    var membership;
    
    $(".member_type_text").click(function(e){
    	var breeder_id = $(this).attr("id");    	
    	var breeder_name = $(this).attr("breeder_name");    	
    	membership = $(this).attr("member");
    	console.log(breeder_id);
    	console.log(breeder_name);
    	console.log(membership);
    	if(membership == 'plus')
    	{	
    		membership = "professional";   
    		$(this)[0].removeAttribute("member");
	    	$(this)[0].setAttribute("member", membership);
	    	$(this).html(membership);	    	
	    	$.ajax({
		            url : '/admin/update_breeder_membership',
		            type : 'POST',
		            data : {"id": breeder_id , "member_type" : membership},
		            success : function(response) {
		            	console.log(response);
		            	if(response == 'success')
		            	{	
			                Lobibox.notify('success', {
						        msg: 'User ' + '<span style="color:#000; font-size:15px;">'+ '<b>'+breeder_name+ '</b>'+'</span>' +' updated as '+ '<span style="color:#000; font-size:15px;">'+ 
						        '<b>'+membership+'</b>'+'</span>' +'  successfully!'
						    });
			                
		            	}
		            	else
		            	{
			                Lobibox.notify('error', {
						        msg: 'Membership update failed!'
						    });
		            	}				            	
		            }				            
		        }); 	
    	}
    	else if(membership == 'basic')
    	{	
    		var payment_className = breeder_name+"payment";
    		$("."+breeder_name+"payment").html("paid");
    		membership ="plus";
    		$(this)[0].removeAttribute("member");
	    	$(this)[0].setAttribute("member", membership);
	    	$(this).html(membership);	    	
	    	$.ajax({
		            url : '/admin/update_breeder_membership',
		            type : 'POST',
		            data : {"id": breeder_id , "member_type" : membership},
		            success : function(response) {
		            	console.log(response);
		            	if(response == 'success')
		            	{	
			                Lobibox.notify('success', {
						        msg: 'User ' + '<span style="color:#000; font-size:15px;">'+ '<b>'+breeder_name+ '</b>'+'</span>' +' updated as '+ '<span style="color:#000; font-size:15px;">'+ 
						        '<b>'+membership+'</b>'+'</span>' +'  successfully!'
						    });
			                
		            	}
		            	else
		            	{
			                Lobibox.notify('error', {
						        msg: 'Membership update failed!'
						    });
		            	}				            	
		            }				            
	        }); 	
    	}
    		
    	
    })
    /*upload a dog*/
    $(".upload_dog").submit(function(e){
    	e.preventDefault();
    	console.log($(this).serialize);
    	var images = [];
		$('#dropzone_escort .dz-details .dz-filename span').each(function(){
			images.push($(this).html());
		});
		//var file_data = $('#add_escort_logo').prop('files')[0];
		/*var dimg = $('#dimg').val().split( '\\' ).pop();
		var bimg = $('#bimg').val().split( '\\' ).pop();
		var photo = $('#main').val().split( '\\' ).pop();*/
		
		var dimg = $('#dimg').prop('files')[0];
		var bimg = $('#bimg').prop('files')[0];
		var photo = $('#main').prop('files')[0];
		var dog_name = $(".doc_num").val();
    	var category = $("#category").val();
    	if(category == 'puppy')
    	{
    		var dname = $("#dname").val();
    		var bname = $("#bname").val();
    	}
    	else
    	{
    		var dname = '';
    		var bname = '';
    		var dimg='';
    		var bimg = '';
    	}
    	var dog_name = $("#dog_name").val();
    	var breeder_name = $("#vendor_name").val();
    	var breed_name = $("#breedname").val();
    	var dob = $("#dob").val();
    	var age = $("#age").val();
    	price = $("#price1").val();
    	/*if(category == 'stud')
    	{
    		price = $("#price2").val();
    	}
    	else
    	{
    		price = $("#price1").val();
    	}*/
    	
    	var gender = $("#gender").val();
    	var description = $("#description").val();
    	var city = $("#city").val();
    	var state = $("#state").val();
    	var zip = $(".zipcode").val();
    	var badge1 = document.getElementById('badge1').checked;
    	if(badge1 == true)
    		badge1 = $("#badge1").val();
    	var badge2 = document.getElementById('badge2').checked;
    	if(badge2 == true)
    		badge2 = $("#badge2").val();
    	var badge3 = document.getElementById('badge3').checked;
    	if(badge3 == true)
    		badge3 = $("#badge3").val();
    	var badge4 = document.getElementById('badge4').checked;
    	if(badge4 == true)
    		badge4 = $("#badge4").val();
    	var badge5 = document.getElementById('badge5').checked;
    	if(badge5 == true)
    		badge5 = $("#badge5").val();
    	var badge6 = document.getElementById('badge6').checked;
    	if(badge6 == true)
    		badge6 = $("#badge6").val();
    	var badge7 = document.getElementById('badge7').checked;
    	if(badge7 == true)
    		badge7 = $("#badge7").val();
    	var badge8 = document.getElementById('badge8').checked;
    	if(badge8 == true)
    		badge8 = $("#badge8").val();
    	var badge9 = document.getElementById('badge9').checked;
    	if(badge9 == true)
    		badge9 = $("#badge9").val();
    	var badge10 = document.getElementById('badge10').checked;
    	if(badge10 == true)
    		badge10 = $("#badge10").val();
    	var badge11 = document.getElementById('badge11').checked;
    	if(badge11 == true)
    		badge11 = $("#badge11").val();
    	// var send_data = {
    	// 	/*'dimg' : dimg,
    	// 	'bimg' : bimg,*/
    	// 	'main' : photo,
    	// 	'gallery' : images,
    	// 	'dog_name' : dog_name,
    	// 	'category' : category,
    	// 	'dname' : dname,
    	// 	'bname' : bname,
    	// 	'breeder_name' : breeder_name,
    	// 	'dob' : dob,
    	// 	'age' : age,
    	// 	'price' : price,
    	// 	'gender' : gender,
    	// 	'description' : description,
    	// 	'city' : city,
    	// 	'state' : state,
    	// 	'zip' : zip,
    	// 	'badge1' : badge1,
    	// 	'badge2' : badge2,
    	// 	'badge3' : badge3,
    	// 	'badge4' : badge4,
    	// 	'badge5' : badge5,
    	// 	'badge6' : badge6,
    	// 	'badge7' : badge7,
    	// 	'badge8' : badge8,
    	// 	'badge9' : badge9,
    	// 	'badge10' : badge10,
    	// 	'badge11' : badge11,
    	// 	's1p' : $("#s1p").val(),
    	// 	's1i' : $("#s1i").val(),
    	// 	's2p' : $("#s2p").val(),
    	// 	's2i' : $("#s2i").val(),
    	// 	's3p' : $("#s3p").val(),
    	// 	's3i' : $("#s3i").val(),
    	// 	's4p' : $("#s4p").val(),
    	// 	's4i' : $("#s4i").val(),
    	// 	's5p' : $("#s5p").val(),
    	// 	's5i' : $("#s5i").val(),
    	// 	's6p' : $("#s6p").val(),
    	// 	's6i' : $("#s6i").val(),
    	// 	's7p' : $("#s7p").val(),
    	// 	's7i' : $("#s7i").val()
    	// }
    	// console.log(send_data);
    	
		console.log(photo);
		console.log(dimg);
		console.log(bimg);
		var fdata = new FormData();        
		fdata.append('dimg', dimg); 
		fdata.append('bimg', bimg); 
		fdata.append('main', $('#main').prop('files')[0]); 
		fdata.append('gallery', images);
		fdata.append('dog_name', dog_name);
    	fdata.append('category', category);
    	fdata.append('dname', dname);
    	fdata.append('bname', bname);
    	//fdata.append('vendor_name', breeder_name);
    	fdata.append('breed_name', breed_name);
    	fdata.append('dob', dob);
    	fdata.append('age', age);
    	fdata.append('price', price);
    	fdata.append('gender', gender);
    	fdata.append('description', description);
    	fdata.append('city', city);
    	fdata.append('state', state);
    	fdata.append('zip', zip);
    	fdata.append('badge1', badge1);
    	fdata.append('badge2', badge2);
    	fdata.append('badge3', badge3);
    	fdata.append('badge4', badge4);
    	fdata.append('badge5', badge5);
    	fdata.append('badge6', badge6);
    	fdata.append('badge7', badge7);
    	fdata.append('badge8', badge8);
    	fdata.append('badge9', badge9);
    	fdata.append('badge10', badge10);
    	fdata.append('badge11', badge11);
    	fdata.append('s1p', $("#s1p").val());
    	fdata.append('s1i', $("#s1i").val());
    	fdata.append('s2p', $("#s2p").val());
    	fdata.append('s2i', $("#s2i").val());
    	fdata.append('s3p', $("#s3p").val());
    	fdata.append('s3i', $("#s3i").val());
    	fdata.append('s4p', $("#s4p").val());
    	fdata.append('s4i', $("#s4i").val());
    	fdata.append('s5p', $("#s5p").val());
    	fdata.append('s5i', $("#s5i").val());
    	fdata.append('s6p', $("#s6p").val());
    	fdata.append('s6i', $("#s6i").val());
    	fdata.append('s7p', $("#s7p").val());
    	fdata.append('s7i', $("#s7i").val());
    	//var make_data = $(this).serialize()+
    	$.ajax({
	            url : '/admin/upload_dog_data',
	            type : 'POST',
	            dataType: 'text',  // what to expect back from the PHP script, if anything
		        cache: false,
		        contentType: false,
		        processData: false,
	            data : fdata,
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'success')
	            	{	
		                Lobibox.notify('success', {
					        msg: 'The Dog : ' + "<b style='color:#000;'>" +dog_name+'  ' +"</b>"+"is uploaded!"
					    });
		                setTimeout(function(){window.location.href=window.location.origin+"/breeder/mydogs";}, 5000);
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Uploading a dog failed!'
					    });
	            	}				            	
	            }				            
	        });
    })

    /*add new breed*/
    $(".add_breed_add_btn").click(function(e){
    	var new_breed = $(".add_breed_name").val();
    	$.ajax({
	            url : '/admin/new_breed',
	            type : 'POST',
	            data : {"new_breed" : new_breed},
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'success')
	            	{	
		                Lobibox.notify('success', {
					        msg: 'The Breed : ' + "<b style='color:#000;'>" +new_breed +"</b>"+"is added!"
					    });
		                setTimeout(function(){window.location.reload();}, 5000);
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Uploading a dog failed!'
					    });
	            	}				            	
	            }				            
	        });
    })

     $(".dog_delete_btn").click(function(){
    	var delete_dog_id = $(this).attr("id");
    	var del_category = $(this).attr('category');
    	$(".delete_dog_confirm_btn").click(function(e){
    		$.ajax({
	            url : '/dogs/del_dog',
	            type : 'POST',
	            data : {"delete_id": delete_dog_id, "delete_category" : del_category},
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'successsuccess')
	            	{	

		                Lobibox.notify('success', {
					        msg: 'Deleting now Successfully!'
					    });
		                setTimeout(function(){window.location.reload();}, 5000);
		                
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Delete failed!'
					    });
	            	}				            	
	            }				            
	        });
    	})
    })
    /*$(".upload1").click(function(e){
    	var temp_path = $('#image1')[0].files[0];
    	$.ajax({
	            url : '/admin/upload_dog_image',
	            type : 'POST',
	            data : 
	            ,
	            success : function(response) {
	            	console.log(response);
	            	if(response == 'success')
	            	{	
		                Lobibox.notify('success', {
					        msg: 'The Dog : ' + "<b style='color:#000;'>" +dog_name +"</b>"+"is uploaded!"
					    });
		                setTimeout(function(){window.location.href=window.location.origin+"/admin/dashboard";}, 5000);
	            	}
	            	else
	            	{
		                Lobibox.notify('error', {
					        msg: 'Uploading a dog failed!'
					    });
	            	}				            	
	            }				            
	        });
    })*/
    /*for uploading admin photo*/
    /*if($("#uimage").length){
    document.getElementById("uimage").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("pre_image").src = e.target.result;
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
	}*/
	/*$(".subadmin_register").submit(function(e){
		e.preventDefault();
		console.log($(this).serialize());
		var pwd = $(".pass").val();
		var confirm_pwd = $(".confirm_pass").val();
		if(pwd == confirm_pwd)
		{
			var Formdata = {
			'username': $(".username").val(),
			'email': $(".email").val(),
			'breeder_control': document.getElementById("breeder_control").checked,
			'dog_control': document.getElementById("dog_control").checked,
			'breed_control': document.getElementById("breed_control").checked,
			'configuration': document.getElementById("configuration").checked,
			'password': $(".pass").val(),
			}
			$.ajax({
	            url : '/admin/register_subadmin',
	            type : 'POST',
	            data : Formdata,
	            success : function(response) {
	            	console.log(response);
		            				            	
	                }				            
	        });
		}
		else
		{	
			$(".confirm_pass").val('');
			Lobibox.notify('error', {
					        msg: 'Passwords do not match!'
					    });

		}
		
	})*/

	$("#doc_number_id").bind('input', function(){
		var doc_number = $("#doc_number_id").val();
		$.ajax({
            url : '/docs/check_doc_number',
            type : 'POST',
            data : {'doc_num': doc_number},
            success : function(response) {
            	console.log(response);
	            	if(response == 'already')
	            	{	
	            		Lobibox.notify('error', {
					          msg: 'This document number already exits!'
					      });         
		                document.getElementById("main_file_modal").disabled = true;
		                document.getElementById("related_file_modal").disabled = true;
	            	}
	            	else
	            	{
		                document.getElementById("main_file_modal").disabled = false;
		                document.getElementById("related_file_modal").disabled = false;
	            	}				            	
                }				            
        });
	})

	

	

})