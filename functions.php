<?php 

/**
 * Dump and die
 * @param  [variable] $var [what you need to output ]
 * @return [text]      [the results of your param selection]
 */
function dd($var)

{
    echo '<pre>';
        var_dump($var);
    echo '</pre>';
}



/**
 * beautify text
 * @param  [field] $field 
 * @return [variable]        
 */
function label ($field) 
{
    $label = str_replace('_', " ", $field);
    $label = ucwords($label);
    return $label;
}

/**
 * 
 * @param  $string
 * @return [sanitized output]  
 */
function esc_attr($string)
{
    return htmlentities($string, ENT_QUOTES, "UTF-8");
}

//10. function to send stuff in the value fields in index.php
function old($field, $post)
{
    if(!empty($post[$field])) {
        return $post[$field];
    } else {
        return '';
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
        setError($Field, label($field). " is a required field.");
    }
}