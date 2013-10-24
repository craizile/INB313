<html>
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

foreach ($stmt as $data) {
	    $arrayPrice[] = $data[3];
	    $arrayID[] = $data[0];
	    $index = $index+1;
	    $picture = "data:image/jpeg;base64," . base64_encode($data[4]);
        echo("<form action='FINAL_Purchase.php' method='post'>
        	<table><tr><td><header><b>$data[1]</b></header></tr>
        	<tr><td>");
        echo("
        	$data[2]
        	</td>");
        echo("
        <td>	
		<img src=".$picture."></img>
		</td>");
		echo("
		<td>Suburb: $data[5]</td></tr>");
		echo("
		<tr><td>
		</br>Price: $$data[3]</br>
		<input type='hidden' value='$arrayID[$index]' name='ID'>
		<button name='submit' value='$arrayPrice[$index]'>Purchase</button>
		</br></br></td></table></form>");
    }
?>
</html>