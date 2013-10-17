<p><b>Registration Form </br></br> Please answer all questions:</b></p><br/>

<!-- Creates registration form with relevant questions -->
<form action="register.php" method="post" name="signup">
	<fieldset>
		<?php
			include 'include/registrationQuestions.inc';
		
			$states = array('', 'ACT', 'NSW', 'NT', 'QLD', 'SA', 'TAS', 'VIC',
							'WA');
		
			inputField($errors, 'firstName', 'First Name', 15);
			inputField($errors, 'lastName', 'Last Name', 15);
			inputDate($errors);
			inputField($errors, 'email', 'Email Address', 25);
			inputField($errors, 'confirmEmail', 'Confirm Email Address', 25);
			inputPassword($errors, 'password', 'Password');
			inputPassword($errors, 'confirmPassword', 'Confirm Password');
			inputField($errors, 'phoneNumber', 'Phone number(10 digits)', 10);
			dropDownList($errors, 'states', 'State or Territory', $states, 9); 
			inputField($errors, 'streetNum', 'Street Number', 3);
			inputField($errors, 'streetName', 'Street Name', 18);
			inputField($errors, 'suburb', 'Suburb', 18);
			inputField($errors, 'postCode', 'Post Code(4 digits)', 4);
			checkBox($errors, 'term');
			submitCancelBtns("index.php");
		?>
	</feildset>
</form>