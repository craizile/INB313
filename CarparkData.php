<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="password911"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="carparks"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Info sent from form 
 $ad_name=$_POST['ad_name']; 
 $ad_description=$_POST['ad_description']; 
 $price=$_POST['price'];
 $file=$_FILES['image']['tmp_name'];

 // To protect MySQL injection 
 $ad_name = stripslashes($ad_name);
 $ad_description = stripslashes($ad_description);
 $price = stripslashes($price);
 $price = mysql_real_escape_string($price);
 $ad_description = mysql_real_escape_string($ad_description);
 $price = mysql_real_escape_string($price);

if(!isset($file))   

echo "please select an image";   

else 
{
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

}

mysql_query("INSERT INTO carparks (ad_name, ad_description, price) VALUES ('$ad_name','$ad_description','$price')");
echo "poo";
?>