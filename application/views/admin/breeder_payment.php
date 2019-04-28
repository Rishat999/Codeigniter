<?php
	$username = $this->session->userdata("username");
	$role = $this->session->userdata("role");
	$photo = $this->session->userdata("photo");
	$email = $this->session->userdata("email");
	$member_type = $this->session->userdata("member_type");
	$payment_status = $this->session->userdata("payment_status");
	$txn_id = $this->session->userdata("txn_id");
	$city = $this->session->userdata("city");
	$state = $this->session->userdata("state");
	$zip = $this->session->userdata("zip");
?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Payment
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'breeder/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Payment</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
            <div class="box">
            	<div class="loading" id="loadingShipp" style="display:none;">Loading&#8230;</div>   
					<form id="payment_frm" name="payment_frm" class="appnitro"  method="post" action="payment_db.php">
					    <div class="subscribePlan" id="CareseekerSubscriptionRate">
					        <div class="subCol" style="background-color: #d6d3d3; padding-top: 20px;    padding-bottom: 20px;    text-align: center;    box-shadow: beige;"><strong style="color: #4e4e4e;">			Subscribe for <span style="font-size: 20px;   color: #000;   margin-left: 1%;    margin-right: 1%;">PROFESSIONAL</span> Plan </strong><span style="font-size: 20px;   color: #000;   margin-left: 1%;    margin-right: 1%;">$25</span></div>
					        <div class="container">
					        	<table width="100%" class="table table-responsive">
					                <tr>
					                    <th>Item</th>
					                    <th>Unit Price</th>
					                    <th>Quantity</th>
					                    <th>Sub Total</th>
					                </tr>
					                <tr>
					                    <td>Plus Membership</td>
					                    <td>$25</td>
					                    <td><input type="number" class="form-control" value="1" id="mnth" style="width: 80px;" disabled=""></td>
					                    <td>$<span id="srt">25</span></td>
					                </tr>
					            </table>
					        </div>
					        </div>                
					        <div class="subscribePlan" id="CareseekerOneTimePostingRate" style="display: none;">
					            <div class="subCol"><strong>Subscribe for PLUS Plan </strong></div>
					            <table width="100%" class="table table-responsive">
					                <tr>
					                    <th>Item</th>
					                    <th>Unit Price</th>
					                    <th>Quantity</th>
					                    <th>Sub Total</th>
					                </tr>
					                <tr>
					                    <td>Plus Membership</td>
					                    <td>$1.5</td>
					                    <td><!-- <input type="text" class="form-control" value="1" id="mnth" style="width: 80px;"></td> -->1
					                    <td>$<span id="srt">1.5</span></td>
					                </tr>
					            </table>
					        </div>              
					       <!-- <input type="hidden" name="amnt" id="amnt" value="<?php if(isset($_REQUEST['amnt1'])){ echo $_REQUEST['amnt1']; }else{ echo '25'; }?>">
					       <input type="hidden" name="plan" id="plan" value="<?php if($_REQUEST['plan_name1']=='1'){echo '1';}else{ echo '2'; }?>"> -->
					      <div class="col-lg-12">
					        <div class="paymentSelect">
					          <div class="paymentMethod">
					            <table class="table table-bordered table-hover table-striped">
					              <thead>
					                <tr>
					                  <th class="firstTitlemargin">Payment Method</th>
					                </tr>
					              </thead>
					              <tbody>
					                <tr>
					                  <td><div class="radioCustomStyle">
					                      <input type="radio" name="Payment_Method" id="a-option" class="pay_method" value="1" checked="">
					                      <label for="a-option"> <i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-cc-paypal" aria-hidden="true"></i> PayPal </label>
					                    </div>
					                  </td>
					                </tr>
					              </tbody>
					            </table>
					          </div>
					          <div class="paymentMethod">
					            <table class="table table-bordered table-hover table-striped">
					              <thead>
					                <tr>
					                  <th class="firstTitlemargin">Subscription Type </th>
					                </tr>
					              </thead>
					              <tbody>
					                <tr>
					                  <td><div class="radioCustomStyle">
					                      <input type="radio" name="Subscription_Type" class="Subscription_Type" id="e-option" value="1">
					                      <label for="e-option"> <i class="fa fa-check" aria-hidden="true"></i>PLUS</label>
					                      <div class="check"></div>
					                    </div>
					                    <div class="radioCustomStyle">
					                        <input type="radio" name="Subscription_Type" id="f-option" class="Subscription_Type" value="2" checked>
					                      <label for="f-option"> <i class="fa fa-check" aria-hidden="true"></i>PROFESSIONAL</label>
					                      <div class="check"></div>
					                    </div></td>
					                </tr>
					              </tbody>
					            </table>
					          </div>
					            <div class="paymentMethod" id="paymentType">
					            <table class="table table-bordered table-hover table-striped">
					              <thead>
					                <tr>
					                  <th class="firstTitlemargin">Payment Type </th>
					                </tr>
					              </thead>
					              <tbody>
					                <tr>
					                  <td><div class="radioCustomStyle">
					                      <input type="radio" name="Payment_Type" id="c-option" value="1">
					                      <label for="c-option"> <i class="fa fa-check" aria-hidden="true"></i>One Time</label>
					                      <div class="check"></div>
					                    </div>
					                    <div class="radioCustomStyle">
					                      <input type="radio" name="Payment_Type" id="d-option" value="2" checked>
					                      <label for="d-option"> <i class="fa fa-check" aria-hidden="true"></i>Recurring </label>
					                      <div class="check"></div>
					                    </div></td>
					                </tr>
					              </tbody>
					            </table>
					          </div>
					        </div>					        
					        <div class="col-lg-12" style="padding-bottom: 40px;">
					        	<div class="col-xs-5">
					            </div>
					            <div class="col-xs-4">
					               <button class="btn btn-sm btn-primary" type="button" id="payNowBtn"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Pay Now</button>
					            </div>
						      </div>           
					    </div>
					</form>
					<div class="col-lg-3 col-md-6">
					</div>
					<div class="row">
					</div>
				</div>             		
            </div>             
        </div>
      </div>
    </section>
</div>
<script type="text/javascript">
	/*$('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });*/
	$("#mnth").on("change keydown keypress keyup",function(){
	    var vall = (1.5 * parseFloat($(this).val()));
	    $("#srt").html(vall);
	    $('#amnt').val(vall);
	});
	$('.Subscription_Type').click(function() {
	    if($('#e-option').is(':checked')) { 
	        $('#amnt').val('1.5');
	        $('#plan').val('1');
	        $('#paymentType').slideUp();
	        $('#CareseekerOneTimePostingRate').show();
	        $('#CareseekerSubscriptionRate').hide();
	    }
	    if($('#f-option').is(':checked')) { 
	        $('#amnt').val('25');
	        $('#plan').val('2');
	        $('#paymentType').slideDown();
	        $('#CareseekerOneTimePostingRate').hide();
	        $('#CareseekerSubscriptionRate').show();
	    }
	});

	$('#payNowBtn').click(function() {
	  $('#loadingShipp').show();
	  $('#payment_frm').submit();
	});
</script>