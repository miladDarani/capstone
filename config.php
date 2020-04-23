<?php
//start a session
session_start();

//get VALUES OUT OF SESSION and then CLEAR them 

//if there are errors , get them out so we can use them easily
        //else we just create the empty array so we dont get issues later.

if(isset($_SESSION['errors'])) {
    // we are copy them out in this step 
    $errors = $_SESSION['errors'];
    // we delete them in this step
    $_SESSION['errors'] = [];

}


if(isset($_SESSION['post'])) {
    // we are copy them out in this step 
    $post = $_SESSION['post'];
    // we delete them in this step
    $_SESSION['post'] = [];
}





define('DB_DSN', 'mysql:host=localhost;dbname=books');
define('DB_USER', 'root');
define('DB_PASS', 'root');

$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require 'functions.php';