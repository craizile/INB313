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
        echo "&nbsp;<span id=\"{$name}Error\" class=\"error\">$error</span>";
    }
    
    /* Display text label associated with text field */
    function label($name, $label) 
    {
        echo "<div class=\"control-group required\"><label for=\"id_first_name\" 
                class=\"control-label\">$label</label><div class=\"controls\">";
        
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
        echo "<input value=\"\" type=\"text\" id=\"$name\" name=\"$name\" value=\"$value\" 
                maxlength=\"$maxlength\" />";

               

        // display relevant error text to relevant text field
        errorLabel($errors, $name);

        echo "</div></div>" ;
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
        echo "</div></div>" ;
    }
    
    /* Creates three text fields for users to input the day, month and year. Displays error 
	 * message alongside text field if incorrect input is provided and remembers previous input. */
    function inputDate($errors) 
    {
        $date = array('day', 'month', 'year');
        $maxLength = array(2, 2, 4);
        $size = array(10, 10, 20);
        $class = array('small', 'small', 'medium');
        
        // if user provided input, remember input
        $valueList = array($valueDay = postedValue($date[0]), $valueMonth = postedValue($date[1]), 
                           $valueYear = postedValue($date[2]));
        
        echo "<div class=\"control-group required\"><label for=\"id_first_name\" 
                class=\"control-label\">Date of birth (dd/mm/yyyy)</label><div class=\"controls\">";
        
        // display three text fields for use for the user's input of the date
        for ($i = 0; $i < 3; $i++) 
        {

            echo "<input type=\"text\" class=\"$class[$i]\" size=\"$size[$i]\" id=\"$date[$i]\" 
                   name=\"$date[$i]\" value=\"$valueList[$i]\" maxLength=\"$maxLength[$i]\"/>";
            
            // display relevant error text to relevant text field
            errorLabel($errors, $date[$i]);
           
        }
        echo "</div></div>" ;
    }
    
    /* Allow users to sumbit the registration form or navigate to the index webpage */
    function submitCancelBtns($pageFile) 
    {
        echo "<div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-large btn-success\">Register</button>
                <button class=\"btn btn-large btn-success\">
                <a href=\"$pageFile\">Cancel</a></button></div>";
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
        echo "</div></div>" ;
    }   
    
    /* Creates a single check box */
    function checkBox($errors, $name) 
    {
        echo "<div class=\"control-group required\">
                    <label class=\"control-label\"></label>
                    <div class=\"controls\">
                        <label for=\"id_tcs\" class=\"checkbox\">";
        
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
     
        echo "I have read and agree to the <a href=\"#\">terms and conditions</a></label>";
        errorLabel($errors, $name);
        echo "</div></div></div>" ;
    }
?>