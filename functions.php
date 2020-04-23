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