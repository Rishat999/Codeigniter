<section id="userlogin" class="userlogin">
  <div class="container content-lg">
    <div class="title-v1">
      <h2 class="Mytitle">Login</h2>      
      </div>
      <div class="row contacts-in">
      	<div class="sub_container">
      		<div class="col-md-12">
      			<div class="col-md-4">
      			</div>
      			<div class="col-md-4">
      				<form method="post" action="admin/login" id="login" class="sky-form contact-style">
			            <fieldset>			              
			              <label>Email <span class="color-red">*</span></label>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <input type="email" name="email"  class="form-control login_email" required="">
			                  </div>
			                </div>
			              </div>
			              <label>Password</label>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <input type="password" name="password" class="form-control login_password" required="">
			                  </div>
			                </div>
			              </div>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <a class="pull-left register_btn">Create New Account</a>
			                    <a class="pull-right forget_btn">Forget Password?</a>
			                  </div>
			                </div>
			              </div>
			              <button id="login_submit_btn" class="btn-u btn-brd btn-brd-hover btn-u-dark loginbtns">Login</button>
			            </fieldset>	            
			        </form>
			        <form method="post" id="register" class="sky-form contact-style">
			            <fieldset>
			              <label>Username</label>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <input type="text" name="username" class="form-control register_username">
			                  </div>
			                </div>
			              </div>
			              <label>Email <span class="color-red">*</span></label>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <input type="email" name="email"  class="form-control register_email" required="">
			                  </div>
			                </div>
			              </div>
			              <label>Password</label>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <input type="password" name="password" class="form-control register_password" required="">
			                  </div>
			                </div>
			              </div>
			              <label>Confirm Password</label>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <input type="password" name="confirm_password" class="form-control register_confirm_password">
			                  </div>
			                </div>
			              </div>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <a class="pull-left login_btn">Member Login</a>
			                  </div>
			                </div>
			              </div>			              
			              <button type="submit" id="register_submit_btn" class="btn-u btn-brd btn-brd-hover btn-u-dark loginbtns">Register</button>
			            </fieldset>	            
			        </form>
			        <form method="post" id="forget" class="sky-form contact-style">
			            <fieldset>			              
			              <label>Email <span class="color-red">*</span></label>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <input type="email" name="email" class="form-control forget_email">
			                  </div>
			                </div>
			              </div>
			              <label>Password</label>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <input type="password" name="password" class="form-control forget_password">
			                  </div>
			                </div>
			              </div>
			              <div class="row">
			                <div class="col-md-12 margin-bottom-20 col-md-offset-0">
			                  <div>
			                    <a class="pull-left login_btn">Member Login</a>
			                  </div>
			                </div>
			              </div>
			              <button type="submit" id="forget_submit_btn" class="btn-u btn-brd btn-brd-hover btn-u-dark loginbtns">Reset Password</button>
			            </fieldset>	            
			        </form>
      			</div>
      			<div class="col-md-3">
      			</div>	          
        	</div>
      	</div>  
      </div>
    </div>
</section>
<script type="text/javascript">
	$("#register").hide();
	$("#forget").hide();

	$(".register_btn").click(function(e){
		e.preventDefault();
		$("#login").hide();
		$("#register").show();
		$("#forget").hide();
		$(".Mytitle").html('Register');
		
		
	})
	$("#register").submit(function(f){
			f.preventDefault();
			if($(".register_password").val() == $(".register_confirm_password").val())
			{
				var send_data = {
					"username" : $(".register_username").val(),
					"email" : $(".register_email").val(),
					"password": $(".register_password").val()
				};
				$.ajax({
		            url : '/users/register_user',
		            type : 'POST',
		            data : send_data,
		            success : function(response) {
		            	console.log(response);
		            	if(response == 'success')
		            	{		        		
			                Lobibox.notify('success', {
						          msg: 'Breeder'+ '  '+ '<b style="color:#000;">'+$(".register_username").val() +'</b>'+ '   '+'is registered Successfully!'
						      });
			                $("#login").show();
							$("#register").hide();
							$("#forget").hide();
							$(".Mytitle").html('Login');
			                
		            	}
		            	else if(response == 'User already exists')
		            	{		            		
			                Lobibox.notify('info', {
						          msg: 'User Already exists!'
						      });
		            	}	
		            	else
		            	{		            		
			                Lobibox.notify('error', {
						          msg: 'Please try again!'
						      });
		            	}			            	
		            }				            
		        });
		        return false;
			}
			else
			{
				Lobibox.notify('error', {
								          msg: 'Passwords do not match!'
								      });
				$(".register_password").val('');
				$(".register_confirm_password").val('');
			}
		})
	$(".login_btn").click(function(){
		$("#login").show();
		$("#register").hide();
		$("#forget").hide();
		$(".Mytitle").html('Login');


	})
	$("#login_submit_btn").click(function(e){			
			e.preventDefault();
			var Formdata = {
				"email" : $(".login_email").val(),
				"password" : $(".login_password").val()
			};			
			$.ajax({
	            url : '/admin/login',
	            type : 'POST',
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
	            			window.location.href=window.location.origin+"/breeder/myprofile";
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
	$(".forget_btn").click(function(){
		$("#forget").show();
		$("#register").hide();
		$("#login").hide();
		$(".Mytitle").html('Forget Password');
	})
	$("#forget").submit(function(e){
		e.preventDefault();
		var data_to_send = {
			"email": $(".forget_email").val(),
			"password" : $(".forget_password").val()
		};
		console.log(data_to_send);
		$.ajax({
		            url : '/users/forget_password',
		            type : 'POST',
		            data : data_to_send,
		            success : function(response) {
		            	console.log(response);
		            	if(response == 'success')
		            	{		        		
			                Lobibox.notify('success', {
						          msg: 'Password updated!'
						      });
			                /*$("#login").show();
							$("#register").hide();
							$("#forget").hide();
							$(".Mytitle").html('Login');*/
							setTimeout(function(){window.location.href='/login';}, 5000);
			                
		            	}
		            	else
		            	{		            		
			                Lobibox.notify('error', {
						          msg: 'Please try again!'
						      });
		            	}			            	
		            }				            
	        });
	    return false;
	})
</script>