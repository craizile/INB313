<?php require 'include/custSuppPermission.inc' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <link type="text/css" rel="stylesheet" href="header.css" media="screen" /> 
    <link type="text/css" rel="stylesheet" href="style.css" media="screen" /> 
    <script type="text/javascript" src="script.js"></script>

    <title>  <!-- Insert Title  -->  </title>


</head>

<body>

<?php include 'header.html' ; ?>
	<!-- Sign out out of customer supply account -->
	<?php
        session_unset();
	?>
    <div class="content">
        <div class="bodyContainer">
	        <h3>You have now logged out</h3> 
            <p> <a href="index.php">back to home </a></p>
        </div>
    </div>
</div>

<?php include 'footer.html' ; ?>


</body>

</html>