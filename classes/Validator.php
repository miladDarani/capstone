<?php
namespace Capstone;

//4. Validation
class Validator
{
    // empty error array
    private $errors = [];
   //-------------------------------------------------------------------------------------\\

    /**
     * Required Field
     * @param  [form field] $field
     * @param  [form field value] $value
     * @return [error string]
     */
    public function required ($field, $value){
    
        if(empty($value))
        {
            $this->setError($field, $this->label($field). " is a required field.");
        }
    }
   //-------------------------------------------------------------------------------------\\


    /**
     * checks for valid email field
     * @param  [form input field]  $field [description]
     * @param  [form input value]  $value [description]
     * @return error string if true
     */
    public function isEmail($field,$value,$field2, $value2)
    {
        if($value !== filter_var($value, FILTER_VALIDATE_EMAIL)){
            $this->setError($field, $this->label($value). " is not a valid e-mail address.");
        }elseif ($value !==  $value2) {
             $this->setError($field," e-mails do not a match");
             $this->setError($field2," e-mails do not a match");
        }
    }

    //-------------------------------------------------------------------------------------\\

    public function isEmailMatch ($email1, $email2) {
        if($email1 !== $email2) {
            $this->setError($email1, $this->$email1 . " are not a match");
        }
    }



    //-------------------------------------------------------------------------------------\\

    /**
     * Errors Getter
     * @return [error array]
     */
    public function errors(){
        return  $this->errors;
    }

   //-------------------------------------------------------------------------------------\\

    /**
     * sets an error in the error array
     * @param [String] $field   
     * @param [String] $message 
     */
    private function setError ($field, $message)
    {
        $errors;
        if(empty($this->errors[$field])){
            $this->errors[$field] = $message;
        }
    }

    //-------------------------------------------------------------------------------------\\

    /**
     * beautify text
     * @param  [field] $field 
     * @return [variable]        
     */
    private function label ($field) 
    {
        $label = str_replace('_', " ", $field);
        $label = ucwords($label);
        return $label;
    }

    //-------------------------------------------------------------------------------------\\
    
    public function isPostalCode($field,$value) {

        $can_post_pattern = '/^[A-Z][0-9][A-Za-z][- ]?[0-9][A-Za-z][0-9]$/';
        $usa_post_pattern = '/^[0-9]{5}$/';

        if(empty($value)) {
            $this->setError($field, $this->label($value) .  "You must provide your Postal Code or ZIP");
        }
        if($_POST['country']==='USA'){
            if(preg_match($usa_post_pattern, $value)){

            }else {
                 $this->setError($field, $this->label($value) .  " You must enter a valid USA ZIP ");
            };
        }  
        if($_POST['country']==='Canada'){
            if(preg_match($can_post_pattern, $value)){

            }else {
                 $this->setError($field, $this->label($value) .  " You must enter a valid Canada Postal Code ");
            };
        }  

} // --isPostal

//-------------------------------------------------------------------------------------\\

    public function isString($field, $value) {
        $string_pattern = '/^[A-z]{1,}$/';

        if(!empty($value)){
            if(preg_match($string_pattern,$value)){
            } else {
                $this->setError($field, $this->label($field). " can only contain alphabetical characters");
            }
        }
    }

//-------------------------------------------------------------------------------------\\

     public function isNumeric($field, $value) {
        if(is_numeric($value)){
            $this->setError($field, $this->label($field). " can only contain numbers");
        }

    }


//-------------------------------------------------------------------------------------\\

    public function isPhone ($field, $value) {

        $phone_pattern = '/^[0-9]{3}[- ]?[0-9]{3}[- ]?[0-9]{4}$/';

        if(preg_match($phone_pattern, $value))
        {
           
        } 
        elseif (strlen($value) < 10) {
            $this->setError($field, $this->label($field). " Phone must be 10 characters at least");
        }
        else{
            
            $this->setError($field, $this->label($field). " format is incorrect  ex. 204-555-6666 or 2045556666");
            }
        } // isPhone
        

//-------------------------------------------------------------------------------------\\

        public function max_length ($field, $value, $number) {
            if(strlen($value) > $number) {
                $this->setError($field, $this->label($field). " field has a maximum character length of {$number}");
            }
        }

         public function min_length ($field, $value, $number) {
            if(strlen($value) < $number) {
                $this->setError($field, $this->label($field). " field must contain at least {$number} character minimum");
            } elseif(strlen($value) < $number AND is_numeric($value)) {
                $this->setError($field, $this->label($field). " not a valid entry");
            }
        }


//-------------------------------------------------------------------------------------\\

        public function password_validator ($field, $pass1, $pass2) {
            $pass_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/";

            if($pass1 === $pass2) {

                if(preg_match($pass_pattern, $pass1)){

                }
                else {
                    $this->setError($field, $this->label($field). " must contain at least <strong>1 lowercase, 1 uppercase, ,1 numeric, 1 special character</strong> and be at <strong>least 8 characters long</strong>");
                }

            } else {
                $this->setError($field, $this->label($field) . "s do not match"); 
            }
        }


//-------------------------------------------------------------------------------------\\

        public function zero_check ($field, $value){
            if ($value === 0) {
                $this->setError($field, $this->label($field) . "zero is not a valid " . $this->label($field));
            }
        }




//-------------------------------------------------------------------------------------\\
//Private set error





} // /-- Validator