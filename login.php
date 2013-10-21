<?php
    if (isset($_POST['login']))
    {
        include 'include/registrationQuestions.inc';
        if (checkPassword($_POST['username'], $_POST['password']))
        {
            session_start();
            $_SESSION['isCustSupp'] = true;
            header('Location: http://localhost/admin.php');
            exit();
        } 
        else 
        {
            echo "<h2>Login failed </h2>";
        }
    }
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Rent a Car Park</title>   
    </head>
    <body onload="document.signup.username.focus();"> 	
        <h1>Login Page</h1>
			<form action="login.php" method="post" name="signup">
				Username: <input name="username" type="text"/>
				<br/>
				Password: <input name="password" type="password"/>
				<br/> <br/>
				<input name="login" type="submit" value="Login"/>
				<a href="">Forgot Password</a>
				<br/>
			</form>
    </body> 
</html> 