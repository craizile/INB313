<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="password911"; // Mysql password 
$db_name="rentcarpark"; // Database name 
$tbl_name="carparks"; // Table name 

// Connect to server and select databse.
$conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

//Info sent from form 
 $ad_name=$_POST['ad_name']; 
 $ad_description=$_POST['ad_description']; 
 $price=$_POST['price'];
 $location=$_POST['location'];
 $file=$_FILES['image']['tmp_name'];

//Converting image
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

//Input all data to DB
$stmt = $conn->prepare("INSERT INTO carparks (AdName, AdDescription, Price, Picture, Location) VALUES ('$ad_name','$ad_description','$price', '$image','$location')");
$stmt->execute();
echo "poo";
?>
