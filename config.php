<?php


ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);


// define('ENV', 'PRODUCTION'); 
define('ENV', 'DEVELOPMENT'); 
// start a session
// this allows us to save data and access it on another page
// if that page has loaded this config file.
session_start();

//6. Take errors out of SESSION and put in variable
//6. Delete SESSION errors so its only for this one instance;
if(isset($_SESSION['errors'])) {
    $errors =  $_SESSION['errors'];
    $_SESSION['errors'] = []; // clear old errors from session
} else {
    $errors = [];
}

// If there are post values, get them out so we can use them easily
if(isset($_SESSION['post'])) {
    $post =  $_SESSION['post'];
    $_SESSION['post'] = []; // clear old post values from session
} else {
    $post = [];
}


// Once this file is loaded, our program will have access
// to all the following constants

// Constant is a value that cannot be changed after it is set
// define the constant GST, set it's value to 0.5
define('GST', 0.5);

// Define DB connection parameters
if(ENV === 'DEVELOPMENT') {

    define('DB_DSN', 'mysql:host=localhost;dbname=books' );
    define('DB_USER', 'root');
    define('DB_PASS', 'root');

}

if(ENV === 'PRODUCTION') {

    define('DB_DSN', 'mysql:host=localhost;dbname=wdd1' );
    define('DB_USER', 'wdd1');
    define('DB_PASS', 'jkdsh65');

}

$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require __DIR__ . '/functions.php';
