<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<link type="text/css" rel="stylesheet" href="header.css" media="screen" /> 
	<link type="text/css" rel="stylesheet" href="style.css" media="screen" /> 
	<script type="text/javascript" src="script.js"></script>

	<title>  Search result  </title>


</head>

<body>

<?php include 'header.html' ; ?>

<div class="content">
	<div class="bodyContainer">

<table>
<form>
<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="carparks"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Info sent from form 
 $keywords=$_POST['keywords']; 

 // To protect MySQL injection 
 $keywords = stripslashes($keywords);
 $keywords = mysql_real_escape_string($keywords);

$sql="SELECT * FROM $tbl_name";
 $result=mysql_query($sql);

 $count=mysql_num_rows($result);
//for loop for each row
echo "$count results returned </br></br>";

while($data = mysql_fetch_row($result)){
	$purchaseID = $data[0];
	echo("<tr><td><header><b>$data[1]</b></header>$data[2]$data[4]</br>Price: $$data[3]</br>
		</form>
		<button type='submit' value=' .$purchaseID. ' name='purchase'>Purchase</button></form>
		</br></br></td></tr>");

}

?>
</form>
</table>

</div>
</div>
<?php include 'footer.html' ; ?>


</body>

</html>