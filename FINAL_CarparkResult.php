<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<link type="text/css" rel="stylesheet" href="header.css" media="screen" /> 
	<link type="text/css" rel="stylesheet" href="style.css" media="screen" /> 
	<script type="text/javascript" src="script.js"></script>

	<title>  <!-- Insert Title  -->  </title>


</head>

<body>

<?php include 'header.html' ; ?>

<div class="content">
	<div class="bodyContainer">

<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="rentcarpark"; // Database name 
$tbl_name="carparks"; // Table name 

// Connect to server and select databse.
$conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    


$keywords = $_POST['keywords'];
$keywords = strtoupper($keywords);

if(!isset($keywords) || $keywords == false){
	$stmt = $conn->prepare("SELECT * FROM $tbl_name");
    $stmt -> execute();
}
else{
  $stmt=$conn->prepare("SELECT * FROM $tbl_name WHERE UPPER(AdName) LIKE '%$keywords%' OR UPPER(AdDescription) LIKE '%$keywords%' OR UPPER(Location) LIKE '%$keywords%'");
  $stmt->execute ();
}

$count= $stmt->rowCount();
//Display amount of results
echo "$count results returned </br></br>";

$arrayPrice = [];
$arrayID = [];
$index= -1;

// 1: name,
// 2: dis,
// .pic: pic,
// 5: suburb,
// 3: price,


foreach ($stmt as $data) {
	    $arrayPrice[] = $data[3];
	    $arrayID[] = $data[0];
	    $index = $index+1;
	    $picture = "data:image/jpeg;base64," . base64_encode($data[4]);
        echo("
        	<form action='bookingform.php' method='post'>
        	<div class=\"block1\">
	        	<span class=\"name\"><h4>$data[1]</h4></span>
	        	<span class=\"price\">Price: $$data[3]</span>
	        	<div class=\"img\"><img src=".$picture."></img></div>
	        	<span class=\"dis\"><b>$data[5]</b></span>
	        	<span class=\"dis2\"><p>$data[2]</p></span>

				<div class=\"button\">
					<input type='hidden' value='$arrayID[$index]' name='ID'>
					<button name='submit' value='$arrayPrice[$index]'>Purchase</button>
				</div>

			</div>
			</form>");
    }
?>
</div>
</div>

<?php include 'footer.html' ; ?>


</body>

</html>