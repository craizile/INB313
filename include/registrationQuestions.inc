<?php
    /* If error is in $errors array return error message else 
     * return nothing */
    function errorMessage($errors, $name)
    {
        if (isset($errors[$name]))
        {
            return $error = $errors[$name];
        }
        else
        {
            return $error = '';
        }
    }
    
    /* Display red colored error message next to associated question if user supplies an invalid answer */
    function errorLabel($errors, $name) 
    {
        $error = errorMessage($errors, $name);
        echo "&nbsp;<span id=\"{$name}Error\" class=\"error\" style=\"color:red\">$error</span>";
    }
    
    /* Display text label associated with text field */
    function label($name, $label) 
    {
        echo "<label for=\"$name\">$label: </label>";
    }
    
    /* Stores user input to be used if registration is unsuccessful and the 
	 * registration form is presented back to the user */
    function postedValue($name) 
    {
        if (isset($_POST[$name]))
        {
            return $prefill = htmlspecialchars($_POST[$name]);
        } 
        else
        {
            return $prefill = '';
        }
    }
    
    /* Create text field for users to provide text input.
     * Displays error message alongside text field if incorrect input is provided and 
	 * remembers previous input. */
    function inputField($errors, $name, $label, $maxlength) 
    {
        // displays relevant text to text field
        label($name, $label); 
        // if user provided input, remember input
        $value = postedValue($name);
        
        // display text field
        echo "<input type=\"text\" size=\"20\" id=\"$name\" name=\"$name\" 
               value=\"$value\" maxlength=\"$maxlength\"/>";
        // display relevant error text to relevant text field
        errorLabel($errors, $name);
        echo "<br/><br/>";
    }
    
    /* Create text field for users to provide password input, each character is displayed
     * as circle symbols. Displays error message alongside text field if incorrect input is provided and
	 * remembers previous input. */
    function inputPassword($errors, $name, $label)
    {
        // displays relevant text to text field
        label($name, $label);   
        // if user provided input, remember input
        $value = postedValue($name);
        
        // display text field
        echo "<input type=\"password\" size=\"20\" id=\"$name\" name=\"$name\" 
               value=\"$value\" maxlength=\"8\"/>";
        // display relevant error text to relevant text field
        errorLabel($errors, $name);
        echo "<br/><br/>";
    }
    
    /* Creates three text fields for users to input the day, month and year. Displays error 
	 * message alongside text field if incorrect input is provided and remembers previous input. */
    function inputDate($errors) 
    {
        $date = array('day', 'month', 'year');
        $maxLength = array(2, 2, 4);
        $size = array(10, 10, 20);
        
        // if user provided input, remember input
        $valueList = array($valueDay = postedValue($date[0]), $valueMonth = postedValue($date[1]), 
                           $valueYear = postedValue($date[2]));
        
        echo "Date of birth (dd/mm/yyyy): <br/> ";
        // display three text fields for use for the user's input of the date
        for ($i = 0; $i < 3; $i++) 
        {

            echo "<input type=\"text\" size=\"$size[$i]\" id=\"$date[$i]\" 
                   name=\"$date[$i]\" value=\"$valueList[$i]\" maxLength=\"$maxLength[$i]\"/>";
            echo "&nbsp;";
            // display relevant error text to relevant text field
            errorLabel($errors, $date[$i]);
            echo "&nbsp;";
        }
        echo "<br/><br/>";
    }
    
    /* Allow users to sumbit the registration form or navigate to the index webpage */
    function submitCancelBtns($pageFile) 
    {
        echo "<input type=\"submit\" value=\"Submit\"/>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href=\"$pageFile\">Cancel</a>";
    }
    
    /* Creates a drop down list. Displays error message alongside text field and remembers previous input. */
    function dropDownList($errors, $name, $label, $list, $size) 
    {   
        label($name, $label);
        
        echo "<select name=\"$name\" id=\"$name\">";
        for ($i = 0; $i < $size; $i++) 
        {
            // if user has selected an input remember input 
            // if form fails to validate
            if ($_REQUEST[$name] == $list[$i]) 
            {
                echo "<option value=\"$list[$i]\" selected=\"selected\" >$list[$i]</option>";
            } 
            // create dropdown box
            else
            {
                echo "<option value=\"$list[$i]\" >$list[$i]</option>";
            }
        }
        echo "</select>";
        errorLabel($errors, $name);
        echo "<br/><br/>";
    }   
    
    /* Creates a single check box */
    function checkBox($errors, $name) 
    {
        echo "You must read and accept the <a href=\"\">
              <b>Terms and Conditions</b></a> to use this service. Do you accept? Yes";
        
        // remembers if the user has selected the checkbox
        // if form fails to validate
        if (isset($_POST["term"]))
        {
            echo "<input type=\"checkbox\" name=\"$name\" value=\"Yes\" checked=\"checked\"/>";
        }
        // create unchecked checkbox
        //else 
        {
            echo "<input type=\"checkbox\" name=\"$name\" value=\"Yes\" />";
        }
     
        echo "<br/>If you do not accept, please click Cancel at the bottom of the page.";
        errorLabel($errors, $name);
        echo "<br/><br/>";
    }
?>