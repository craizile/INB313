<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <link type="text/css" rel="stylesheet" href="header.css" media="screen" /> 
    <link type="text/css" rel="stylesheet" href="style.css" media="screen" /> 
    <script type="text/javascript" src="script.js"></script>

    <title>  Log in  </title>


</head>
    <body onload="document.signup.username.focus();"> 
    <?php include 'header.html' ; ?>	
        <div class="content">
            <div class="bodyContainer">
                <h3>Login Page</h3> 

                 <?php
                    if (isset($_POST['login']))
                    {
                        include 'include/registrationQuestions.inc';
                        if (checkPassword($_POST['username'], $_POST['password']))
                        {
                            $email = $_POST['username'];
                            $con=mysqli_connect("localhost","root","","rentcarpark");
                            $result = mysqli_query($con,"SELECT * FROM customersupply WHERE Emailaddress='$email'");
                            $record = mysqli_fetch_assoc($result);

                            session_start();
                            $_SESSION['isCustSupp'] = true;
                            $_SESSION['username'] = $record['Firstname'];
                            header('Location: http://localhost/INB313/index.php');
                            exit();
                        } 
                        else 
                        {
                            echo "<h4>Login failed - invide email address or password </h4>";
                        }
                    }
                ?>


    			<form action="login.php" method="post" name="signup">
    				Email Address: <input name="username" type="text"/>
    				<br/>
    				Password: <input name="password" type="password"/>
    				<br/> <br/>
    				<input name="login" type="submit" value="Login"/>
    				<a href="#">Forgot Password</a>
    				<br/>
    			</form>
            </div>
        </div>
    <?php include 'footer.html' ; ?>
    </body> 
</html> 