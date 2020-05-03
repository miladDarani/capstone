<?php

//4. Validation
class Validator
{

    private $errors = [];

    public function required ($field, $value)
    {
    if(empty($value)){
        $this->setError($field, $this->label($field). " is a required field.");
        }
    }

    /**
     * [isEmail description]
     * @param  [type]  $field [description]
     * @param  [type]  $value [description]
     * @return boolean        [description]
     */
    function isEmail($field,$value)
    {
        if($value !== filter_var($value, FILTER_VALIDATE_EMAIL)){
            $this->setError($field, $this->label($value). " is not a valid e-mail address.");
        }
    }

    public function errors(){
        return  $this->errors;
    }


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




}