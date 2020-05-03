<?php

//4. Validation
class Validator
{

    private $errors = [];

    public function required ($field, $value)
    {
    if(empty($value)){
        $this->setError($field, label($field). " is a required field.");
        }
    }



    public function errors(){
        return  $this->errors;
    }


    private function setError ($field, $message)
    {
        $errors;
        if(empty($this->errors[$field])){
            $this->errors[$field] = $message;
        }
    }





}