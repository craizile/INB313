<?php

$price = $_POST['submit'];
$purchaseID = $_POST['ID'];
echo "Items in Cart</br>
CarparkID: $purchaseID </br>
Amount Owed: $$price</br>
<button name='price' value='$price'>CHECK OUT</button>";

?>