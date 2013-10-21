<html>
<table>
<form>
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
		</form><input type='submit'name='transmit'value='Purchase'></form>
		</br></br></td></tr>");

}

?>
</form>
</table>
</html>