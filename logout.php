<?php require 'include/custSuppPermission.inc' ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Rent a Car Park</title> 
    </head>
    <body> 	
        <h1>Logout page</h1>
			<!-- Sign out out of customer supply account -->
			<?php
                session_unset();
			?>
			<h2>You have now logged out</h2>
    </body> 
</html> 