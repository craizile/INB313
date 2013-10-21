<p><b>Registration is successful!!!<b></p>
<?php
    // connect to database
    //$pdo = new PDO('mysql:host=localhost; dbname=RentCarPark', 'root', 'INB302');
    
    // sql insert statement
    //$stmt = $pdo->prepare('INSERT INTO customerSupply (Firstname, Surname, Emailaddress, Password,
						   //Phonenumber, StateorTerritory, StreetNum, StreetName, Suburb, Postcode) VALUES (:Firstname, 
                           //:Surname, :Emailaddress, :Password, :Phonenumber, :StateorTerritory, 
                           //:StreetNum, :StreetName, :suburb, :Postcode');
    
    // Inputed data from user is recorded into the database
    //$stmt->bindValue(':Firstname', $_GET['firstName']);
    //$stmt->bindValue(':Surname', $_GET['lastName']);
    //$stmt->bindValue(':Emailaddress', $_GET['email']);
    //$stmt->bindValue(':Password', $_GET['password']);
    //$stmt->bindValue(':Phonenumber', $_GET['phoneNumber']);
    //$stmt->bindValue(':StateorTerritory', $_GET['states']);
    //$stmt->bindValue(':StreetNum', $_GET['streetNum']);
	//$stmt->bindValue(':StreetName', $_GET['streetName']);
	//$stmt->bindValue(':Suburb', $_GET['suburb']);
    //$stmt->bindValue(':Postcode', $_GET['postCode']);
	//$stmt->execute();
	
	echo $_GET['firstName'];
	echo $_POST['firstName'];
?>