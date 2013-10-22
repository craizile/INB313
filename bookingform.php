<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<link type="text/css" rel="stylesheet" href="header.css" media="screen" /> 
	<link type="text/css" rel="stylesheet" href="style.css" media="screen" /> 
	<script type="text/javascript" src="script.js"></script>

	<title>  Booking Form  </title>

</head>

<body>

<?php include 'header.html' ; ?>

<div class="bodyContainer">
	<div class="modal">        
	    <div class="modal-header">
	    	Booking <span>for a car park</span>
	    </div>

		<form id="form-id" class="form">
			<div class="modal-body">
				<div class="control-group required ">
					<label for="id_first_name" class="control-label"> Name </label>		
					<div class="controls">
						 <input type="text" name="nametxt" required />
					</div>
                </div>
                <div class="control-group required ">
					<label for="id_first_name" class="control-label"> Phone </label>		
					<div class="controls">
						<input type="" name="phonetxt" required />
					</div>
                </div>
                <div class="control-group required ">
					<label for="id_first_name" class="control-label"> Payment Method </label>		
					<div class="controls">
						<input type="radio" name="payment" value="Credit Card" id="div1" /> Credit Card  <input type="radio" name="payment"  value="paypal" id="div2" /> PayPal 
					</div>
                </div>
                <div id='formdiv1' style='display:none'>
	                <div class="control-group required ">
						<label for="id_first_name" class="control-label"> Card Number </label>		
						<div class="controls">
							<input type="text" name="txtcard1" maxlength="4" size="4" class="small" required />  <input type="text" name="txtcard2" maxlength="4" size="4" class="small"required />  <input type="text" name="txtcard3" maxlength="4" size="4" class="small" required />  <input type="text" name="txtcard4" maxlength="4" size="4" class="small" required /> <br>
							<!-- <img src="images/cclogo.jpg" alt="cclogospic" width="300" height="28" /> -->
						</div>
	                </div>
	                <div class="control-group required ">
						<label for="id_first_name" class="control-label"> Cardholder Name </label>		
						<div class="controls">			     
					     	<input type="text" name="ccname" size="30" maxlength="20" required />
					    </div>
	                </div>
	                <div class="control-group required ">
						<label for="id_first_name" class="control-label"> Expirty Date </label>		
						<div class="controls">
					    	<input type="text" name="expmonth" size="2" maxlength="2" class="small" required /> <input type="text" name="expyear" size="4" maxlength="4" class="medium" required />
					    </div>
	                </div>
	                <div class="control-group required ">
						<label for="id_first_name" class="control-label"> CVV </label>		
						<div class="controls"> 
					    	<input type="text" maxlength="3" name="ccCVV" size="3" required />
					    </div> 
					</div>
				</div>
			    <div id="formdiv2" style="display:none">
				    <h4><a href="http://www.Paypal.com/"> Pay using PayPal </a></h4>
				    <p> When you press the PayPal link, you will be directed to PayPal website where you can login or create a PayPal account and submit your payment. Upon full payment, you will be transferred back in to this website to obtain booking information.</p>
				</div>
			</div>

			<div class="modal-footer">
   				 <button class="btn btn-large btn-success">
   				 	<a href="successbook.php">Purchase</a>
   				 </button>
   				 <button type="reset" class="btn btn-large btn-success">
   				 	Delete
   				 </button>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" charset="utf-8">
$('#form-id').change(function() {
    if ($('#div1').prop('checked')) {
        $('#formdiv1').show();
    } 
    else {
        $('#formdiv1').hide();
    }
    if ($('#div2').prop('checked')) {
        $('#formdiv2').show();
    }
    else {
        $('#formdiv2').hide();
    }
});
  </script>

<?php include 'footer.html' ; ?>


</body>

</html>