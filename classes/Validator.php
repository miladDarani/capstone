<?php
namespace Capstone;
use PDO;
//4. Validation Class
class Validator
{
    // empty error array
    private $errors = [];
   //-------------------------------------------------------------------------------------\\

    /**
     * Required Field
     * @param  string $field
     * @param  string $value
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
     * @param  string $field
     * @param  string $value
     * @return [error string]
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


    /**
     * checks for valid email field
     * @param  string $field
     * @param  string $value
     * @return [error string]
     */
    public function ValidEmail($field,$value)
    {
        if($value !== filter_var($value, FILTER_VALIDATE_EMAIL)){
            $this->setError($field, $this->label($value). " is not a valid e-mail address.");
        }
    }


    //-------------------------------------------------------------------------------------\\

    //1. build a validator that checks to see if email address matches database
    //function getAllBooks()
 public function checkDBemail($field,$emailz)
{

    global $dbh;
    $query = 'SELECT users.email FROM users';
    $stmt = $dbh->query($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
   foreach($result as $arr1)
{
    if(in_array($emailz,$arr1))
    {
        $this->setError($field," E-mail provided is already in use");
       
    }
     if($emailz !== filter_var($emailz, FILTER_VALIDATE_EMAIL))
     {
            $this->setError($field, $this->label($emailz). " is not a valid e-mail address.");
        }
}


    //create loop to go through the $result array
    // if (array_search($emailz, $result) == true) {
       
    //      $this->setError($field,  " in the database");
    // } else {
    //     $this->setError($field,  " in the database xxxx else");
    // }
    // 
  
       
}

    //-------------------------------------------------------------------------------------\\
    /**
     * [isEmailMatch description]
     * @param  string $field
     * @param  string $value
     * @return [error string]
     */
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
     * @param  [string] $field 
     * @return [variable]        
     */
    private function label ($field) 
    {
        $label = str_replace('_', " ", $field);
        $label = ucwords($label);
        return $label;
    }

    //-------------------------------------------------------------------------------------\\
    /**
     * check postal code for US and Canada
     * @param  string  $field 
     * @param  string  $value 
     * @return string error        
     */
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
    /**
     * [isString description]
     * @param  string  $field 
     * @param  string  $value 
     * @return string error      
     */
    public function isString($field, $value) {
        $string_pattern = '/^[a-zA-Z]([\w -]*[a-zA-Z])?$/';

        if(!empty($value)){
            if(preg_match($string_pattern,$value)){
            } else {
                $this->setError($field, $this->label($field). " can only contain alphabetical characters");
            }
        }
    }

//-------------------------------------------------------------------------------------\\
    /**
     * [isNumeric description]
     * @param  string or number  $field 
     * @param  string  $value 
     * @return string error       
     */
     public function isNumeric($field, $value) {
        if(!is_numeric($value)){
            $this->setError($field, $this->label($field). " can only contain numbers");
        }

    }


//-------------------------------------------------------------------------------------\\
    /**
     * checks phone for north american number
     * @param  string or number  $field 
     * @param  string  $value 
     * @return error       
     */
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
        /**
         * [max_length description]
         * @param  [string] $field  
         * @param  [string] $value  
         * @param  [string] $number 
         * @return [string]         
         */
        public function max_length ($field, $value, $number) {
            if(strlen($value) > $number) {
                $this->setError($field, $this->label($field). " field has a maximum character length of {$number}");
            }
        }

         /**
         * min_length description]
         * @param  [string] $field  
         * @param  [string] $value  
         * @param  [string] $number 
         * @return [string]         
         */
         public function min_length ($field, $value, $number) {
            if(strlen($value) < $number) {
                $this->setError($field, $this->label($field). " field must contain at least {$number} character minimum");
            } elseif(strlen($value) < $number AND is_numeric($value)) {
                $this->setError($field, $this->label($field). " not a valid entry");
            }
        }


//-------------------------------------------------------------------------------------\\
        /**
         * [password_validator description]
         * @param  [string] $field 
         * @param  [string] $pass1 
         * @param  [string] $pass2 
         * @return [string]        
         */
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







} // /-- Validator