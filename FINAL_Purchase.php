<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<link type="text/css" rel="stylesheet" href="header.css" media="screen" /> 
	<link type="text/css" rel="stylesheet" href="style.css" media="screen" /> 
	<script type="text/javascript" src="script.js"></script>

	<title>  Purchase  </title>


</head>

<body>

<?php include 'header.html' ; ?>

<form action="bookingform.php"

<?php


$price = $_POST['submit'];
$purchaseID = $_POST['ID'];
echo "Items in Cart</br>
CarparkID: $purchaseID </br>
Amount Owed: $$price</br>
<button name='price' value='$price'>CHECK OUT</button>";

?>


<?php include 'footer.html' ; ?>


</body>

</html>