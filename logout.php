<?php require 'include/custSuppPermission.inc' ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Rent a Car PArk</title> 
    </head>
    <body onload="document.signup.username.focus();"> 	
        <h1>Logout page</h1>
			<!-- Sign out out of customer supply account -->
			<?php
				session_start();
				unset($_SERVER['isCustSupp']);
			?>
			<h2>You have now logged out</h2>
    </body> 
</html> 