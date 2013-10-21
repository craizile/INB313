<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<link type="text/css" rel="stylesheet" href="header.css" media="screen" /> 
	<link type="text/css" rel="stylesheet" href="style.css" media="screen" /> 


	<title>  Booking Form  </title>


</head>

<body>

 <?php include 'header.html' ; ?> 

<form>
		Name : <input type="text" name="nametxt"  required><br><br>
		
		Phone : <input type="" name="phonetxt" required><br><br>
		
		Payment Method : <input type="radio" name="payment" value="Credit Card" onclick="javascript:yesnoCheck();" id="yesCheck" checked> Credit Card  <input type="radio" name="payment" value="paypal" onclick="javascript:yesnoCheck();" id="noCheck"> PayPal <br><br>
		
		Card Number : <input type="text" name="txtcard1" maxlength="4" size="4" required>  <input type="text" name="txtcard2" maxlength="4" size="4"required>  <input type="text" name="txtcard3" maxlength="4" size="4" required>  <input type="text" name="txtcard4" maxlength="4" size="4" required> <br>
		
		<!-- Pic of cc logos -->
		&nbsp&nbsp&nbsp&nbsp<img src="cclogo.jpg" alt="cclogospic" width="300" height="28"> <br> <br>
		
		Cardholder Name : <input type="text" name="ccname" size="30" maxlength="20" required><br><br>
		
		Expiry Date : <input type="text" name="expmonth" size="2" maxlength="2" required> <input type="text" name="expyear" size="4" maxlength="4" required> <br><br>
		
		CVV : <input type="text" maxlength="3" name="ccCVV" size="3" required> <br><br>
		
		<input type="submit" value="Purchase" onclick="successbook.html"> <input type="reset" value="Delete">
</form>	

<?php include 'footer.html' ; ?>


</body>

</html>