<?php
	$Test = "Test";

	// connect to database
    $pdo = new PDO('mysql:host=localhost; dbname=RentCarPark', 'root', '');

     // sql insert statement
    $stmt = $pdo->prepare('INSERT INTO Test (Name) VALUES (:Firstname)');

    // Inputed data from user is recorded into the database
    $stmt->bindValue(':Firstname', 'Test', PDO::PARAM_STR);
    $stmt->execute();
?>