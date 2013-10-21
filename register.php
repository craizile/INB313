<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<Head>
		<link type="text/css" rel="stylesheet" href="header.css" media="screen" /> 
		<link type="text/css" rel="stylesheet" href="style.css" media="screen" />
        <script type="text/javascript" src="script.js"></script>
		<Title>Register</Title>
	</head>
	<body>
		<?php include 'header.html' ; ?>
		    <!-- Present the user with a registration form that will validate user's input using
			     server side validation -->

        <div class="bodyContainer">
            <?php
                $errors = array();
                
                // checks if the form has any inputs
                if ($_POST)
                {
                    // validate all fields
                    include 'include/validateForm.inc';
                   
                    // if no errors, process data 
                    if (count($errors) == 0)
                    {
                        require 'include/registrationSuccess.inc';
                    }
                    // display the same form with previous user input
                    else 
                    {
                        require 'include/registrationForm.inc';
                    }
                }
                // display form with blank fields
                else 
                {
                    require 'include/registrationForm.inc';
                }
            ?>
        </div>
        <?php include 'footer.html' ; ?>
	</body>
</html>