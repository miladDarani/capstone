<?php


ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
define('CLASSES', __DIR__ . '/classes');
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/env.php';


// define('ENV', 'PRODUCTION'); 
// define('ENV', 'DEVELOPMENT'); 
// start a session
// this allows us to save data and access it on another page
// if that page has loaded this config file.
session_start();

//output buffer
ob_start();

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

require CLASSES . '/Model.php';



require __DIR__ .'/db_connect.php';

$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

Model::init($dbh);
require __DIR__ . '/functions.php';
