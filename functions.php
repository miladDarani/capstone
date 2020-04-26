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
 * [label description]
 * @param  [type] $field [description]
 * @return [type]        [description]
 */
function label ($field) 
{
    $label = str_replace('_', " ", $field);
    $label = ucwords($label);
    return $label;
}

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

