<div class="modal">      
    <div class="modal-header">
    	Register <span>for an account</span>
    </div>
	<!-- Creates registration form with relevant questions -->
	
	<form action="register.php" method="post" name="signup" accept-charset="utf-8" class="form">
		<div class="modal-body">
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
				inputField($errors, 'phoneNumber', 'Phone number <br>(10 digits)', 10);
				dropDownList($errors, 'states', 'State or Territory', $states, 9); 
				inputField($errors, 'streetNum', 'Street Number', 3);
				inputField($errors, 'streetName', 'Street Name', 18);
				inputField($errors, 'suburb', 'Suburb', 18);
				inputField($errors, 'postCode', 'Post Code (4 digits)', 4);
				checkBox($errors, 'term');
				submitCancelBtns("index.php");
			?>
	</form>
</div>

