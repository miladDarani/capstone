<?php

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
    public function isEmail($field,$value)
    {
        if($value !== filter_var($value, FILTER_VALIDATE_EMAIL)){
            $this->setError($field, $this->label($value). " is not a valid e-mail address.");
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



























} // /-- Validator