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
 
     
//$stmt = $conn->prepare('SELECT * FROM myTable WHERE id = :id');
//$stmt->execute(array('id' => $id));

//Info sent from form 
 $ad_name=$_POST['ad_name']; 
 $ad_description=$_POST['ad_description']; 
 $price=$_POST['price'];
 $file=$_FILES['image']['tmp_name'];

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));


$stmt = $conn->prepare("INSERT INTO carparks (AdName, AdDescription, Price, Picture) VALUES ('$ad_name','$ad_description','$price', '$image')");
$stmt->execute();
echo "poo";
?>
