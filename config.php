<?php
                    //     ──────▄▀▄─────▄▀▄              W W W !!
                    //     ─────▄█░░▀▀▀▀▀░░█▄         E O  
                    //     ─▄▄──█░░░░░░░░░░░█──▄▄   M
                    //     █▄▄█─█░░▀░░┬░░▀░░█─█▄▄█
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// ||       Milad Darani - Capstone 2020 - Main Config File             ||
// || - Responsible Displayin errors.                                   ||
// || - Responsible for making database connection.                     ||
// || - Responsible for collecting errors from Session.                 ||
// || - Responsible for collecting _POST data.                          ||
// || - Responsible for collection flash msg's.                         ||
// || - Responsible for initiating model class.                         ||
// || - Responsible for loading our functions file.                     ||
// || * DO NOT MOVE OR DELETE FROM THIS FILE *                          ||
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
define('CLASSES', __DIR__ . '/classes');
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/env.php';


session_start();

//output buffer
ob_start();

//Delete SESSION errors so its only for this one instance;
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

if(!empty($_SESSION['flash'])){
    $flash=$_SESSION['flash'];
    $_SESSION['flash']=[];
   }else {
    $flash=[];
   }
//array for logging user info to admin dashboard
$arr = ['remote_addr' => $_SERVER['REMOTE_ADDR'],
'remote_uri' => $_SERVER['REQUEST_URI'],
'request_method' => $_SERVER['REQUEST_METHOD']];


// Connection for DATABASE in in here , hidden from GIT
require __DIR__ .'/db_connect.php';


$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


Capstone\Model::init($dbh);
require __DIR__ . '/functions.php';
