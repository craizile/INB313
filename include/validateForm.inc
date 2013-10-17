<?php
    $letter = '/^[a-zA-z]+$/';
    $alphanumeric = '/^[0-9a-zA-Z]+$/';
    $number = '/^[0-9]+$/';
	
	validateField($errors, $_POST, 'firstName', $letter, array('First Name', 'letter'));
    validateField($errors, $_POST, 'lastName', $letter, array('Last Name', 'letter'));
	validateDate($errors, $_POST, array('day', 'month', 'year'), array('Day (1-31)', 'Month (1-12)', 'Year (1980 - 2001)'),
			     $number); 
    validateEmail($errors, $_POST, 'email');
    confirmField($errors, $_POST, 'confirmEmail', 'email');
    validateField($errors, $_POST, 'password', $alphanumeric, array('Password (1-8 alphanumeric characters only)', 
                  'alphanumeric'));
    confirmField($errors, $_POST, 'confirmPassword', 'password');
    validateField($errors, $_POST, 'phoneNumber', $number, array('Phone number', 'number'));
    dropboxSelected($errors, $_POST, 'states');
	validateField($errors, $_POST, 'streetNum', $number, array('Street number', 'number'));
	validateField($errors, $_POST, 'streetName', $alphanumeric, array('Street name', 'alphanumeric'));
	validateField($errors, $_POST, 'suburb', $letter, array('Suburb', 'letter'));
    validateField($errors, $_POST, 'postCode', $number, array('Post code', 'numbers'));
    isItSelected($errors, $_POST, 'term', 'You must select the checkbox if you agree and want to register');
    
    /* Checks if the text field is empty or has invalid characters.
     * If invalid appropriate error message is displayed */ 
    function validateField(&$errors, $fieldList, $fieldName, $validInput, $errorMessage)
    {
        if (!isset($fieldList[$fieldName]) || $fieldList[$fieldName] == '') 
        {
            $errors[$fieldName] = "$errorMessage[0] required";
        }  
        else if (!preg_match($validInput, $fieldList[$fieldName])) 
        {
            $errors[$fieldName] = "Invalid please supply $errorMessage[1] characters only";
        } 
    }
    
    /* Checks if the text is empty or has invalid email address format.
     * If invalid appropriate error message is displayed */
    function validateEmail(&$errors, $fieldList, $fieldName)
    {
        if (!isset($fieldList[$fieldName]) || $fieldList[$fieldName] == '') 
        {
            $errors[$fieldName] = 'Email address required';
        } 
        else if (!filter_var($fieldList[$fieldName], FILTER_VALIDATE_EMAIL))
        {
            $errors[$fieldName] = 'Invalid email, email must be in this format example@example.com';
        }
    }
  
    /* Checks if the text is empty or does not match the relevant text field
     * If invalid appropriate error message is displayed */
    function confirmField(&$errors, $fieldList, $fieldName, $textName)
    {
        if (!isset($fieldList[$fieldName]) || $fieldList[$fieldName] == '') 
        {
            $errors[$fieldName] = "Confirm $textName required";
        }  
        else if ($fieldList[$fieldName] != $fieldList[$textName])
        {
            $errors[$fieldName] = "Confirm $textName does not match with above $textName";
        }
    }
    
    /* Checks if the text field is empty or has invalid numbers.
     * If invalid appropriate error message is displayed */ 
    function validateDate(&$errors, $fieldList, $fieldName, $errorMessage, $validInput) 
    {
        $dateRange = array(1, 31, 1, 12, 1980, 2001);
        $indexMin = 0;
        $indexMax = 1;
        
        // validate day, month and year text field
        for ($i = 0; $i < 3; $i++)
        {
            if (!isset($fieldList[$fieldName[$i]]) || $fieldList[$fieldName[$i]] == '') 
            {
                $errors[$fieldName[$i]] = "$errorMessage[$i] required";
            }      
            // check if numerical values of day, month and year have appropriate values
            else if ($fieldList[$fieldName[$i]] < $dateRange[$indexMin] || $fieldList[$fieldName[$i]] > $dateRange[$indexMax] 
                && !preg_match($validInput, $fieldList[$fieldName[$i]]))
            {
                $errors[$fieldName[$i]] = "Invalid $fieldName[$i] must have a numerical value between $dateRange[$indexMin] and 
                                      $dateRange[$indexMax]";
            }
            $indexMin = $indexMin + 2;
            $indexMax = $indexMax + 2;
        }
    }
    
    /* Checks if a value is selected from the dropbox */
    function dropboxSelected(&$errors, $fieldList, $fieldName)
    {
        if (!isset($fieldList[$fieldName]) || $fieldList[$fieldName] == '') 
        {
            $errors[$fieldName] = "You must select a state from the dropbox";
        } 
    }
    
    /* Checks if the checkbox is selected */
    function isItSelected(&$errors, $fieldList, $fieldName, $errorMessage)
    {
        if (!isset($fieldList[$fieldName])) 
        {
            $errors[$fieldName] = $errorMessage;
        } 
    }
?>