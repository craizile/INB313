<p><b>Registration is successful!!!<b></p>
<?php
    $Test = "Test";

    // connect to database
    $pdo = new PDO('mysql:host=localhost; dbname=RentCarPark', 'root', '');
    
    // sql insert statement
    $stmt = $pdo->prepare('INSERT INTO customerSupply (Firstname, Surname, Emailaddress, Password, Phonenumber, 
                                                       StateorTerritory, StreetNum, StreetName, Suburb, Postcode) VALUES (:Firstname, 
                                                       :Surname, :Emailaddress, :Password, :Phonenumber, :StateorTerritory, 
                                                       :StreetNum, :StreetName, :Suburb, :Postcode)');
    
    // Inputed data from user is recorded into the database
    $stmt->bindValue(':Firstname', $_POST['firstName']);
    $stmt->bindValue(':Surname', $_POST['lastName']);
    $stmt->bindValue(':Emailaddress', $_POST['email']);
    $stmt->bindValue(':Password', $_POST['password']);
    $stmt->bindValue(':Phonenumber', $_POST['phoneNumber']);
    $stmt->bindValue(':StateorTerritory', $_POST['states']);
    $stmt->bindValue(':StreetNum', $_POST['streetNum']);
    $stmt->bindValue(':StreetName', $_POST['streetName']);
    $stmt->bindValue(':Suburb', $_POST['suburb']);
    $stmt->bindValue(':Postcode', $_POST['postCode']);
    $stmt->execute();
?>