<?php 
                    //     ──────▄▀▄─────▄▀▄              W W W !!
                    //     ─────▄█░░▀▀▀▀▀░░█▄         E O  
                    //     ─▄▄──█░░░░░░░░░░░█──▄▄   M
                    //     █▄▄█─█░░▀░░┬░░▀░░█─█▄▄█
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// ||       Milad Darani - Capstone 2020 - Functions file               ||
// || Where all cuztom functions are stored .                           ||
// || they will loaded on every page via config file                    ||
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

//-------------------------------------------------------\\

/**
 * Dump and die
 * @param  [variable] $var [what you need to output ]
 * @return [text]      
 */
function dd($var)

{
    echo '<pre>';
        var_dump($var);
    echo '</pre>';
}

//-------------------------------------------------------\\

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
//-------------------------------------------------------\\

/**
 * 
 * @param  $string
 * @return [sanitized output]  
 */
function esc_attr($string)
{
    return htmlentities($string, ENT_QUOTES, "UTF-8");
}
//-------------------------------------------------------\\

/**
 * 
 * @param  $string
 * @return [sanitized output]  
 */
function esc($string)
{
    return htmlentities($string, ENT_QUOTES, "UTF-8");
}
//-------------------------------------------------------\\

/**
 * function to send stuff in the value fields in index.php
 * @param  string $field 
 * @param  string $post  
 * @return string       
 */
function old($field, $post)
{
    if(!empty($post[$field])) {
        return $post[$field];
    } else {
        return '';
    }
}
//-------------------------------------------------------\\


/**
 * adding red errors to labels of form
 * @param  string $field [logs errors to display to user]
 * @param  [string] 
 * @return [string]  
 */
function err($field, $post)
{
    if(!empty($post[$field])) {
        return  esc_attr($post[$field])  ;
    } else {
        return '';
    }
}
//-------------------------------------------------------\\



/**
 * [auth description]
 * @return [int] [authentication function]
 */
function auth ()
{
    if(isset($_SESSION['user_id'])  && $_SESSION['user_id'] > 0){
        return true;
    }
    return false;
}







