<?php

//1. Config file
require __DIR__ . '/../config.php';

//2. only POST can get through
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Are you lost ?');
}

//3. create empty errors array
$errors = [];

//4.Validate all fields

//---- First Name ----\\
if(empty($_POST['first_name'])) {
    $errors['first_name'] = "First Name is a required field";
}

//---- Last Name ----\\
if(empty($_POST['last_name'])) {
    $errors['last_name'] = "Last Name is a required field";
}

//---- Nick Name ----\\
if(empty($_POST['nick_name'])) {
    // $errors['nick_name'] = "Nick Name is a required field";
}

//---- Street ----\\
if(empty($_POST['street'])) {
    $errors['street'] = "You must provide Street";
}

//---- City ----\\
if(empty($_POST['city'])) {
    $errors['city'] = "You must provide City";
}

//---- Postal Code ----\\
if(empty($_POST['postal_code'])) {
    $errors['postal_code'] = "You must provide your Postal Code or ZIP";
}

//---- Province ----\\
if(empty($_POST['province'])) {
    $errors['province'] = "You must provide your Province or State";
}

//---- Country ----\\
if(empty($_POST['country'])) {
    $errors['country'] = "You must provide your Country";
}

//---- Phone ----\\
if(empty($_POST['phone'])) {
    $errors['phone'] = "You must provide your Phone Number";
}

//---- Email1 ----\\
if(empty($_POST['email'])) {
    $errors['email'] = "You must provide your E-Mail";
} elseif ($_POST['email'] !== $_POST['email2']) {
    $errors['email'] = " E-mails entered did not match";
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email']= "Please enter a valid email address";
}

//---- Email2 ----\\
if(empty($_POST['email2']) && !empty($_POST['email'])) {
    $errors['email2'] = "You must confirm your E-Mail";
}

//---- Password1 ----\\
if(empty($_POST['password'])) {
    $errors['password'] = "You must provide a password 0-12 characrters long";
} elseif ($_POST['password'] !== $_POST['password2']) {
    $errors['password'] = "Passwords did not match";
}

// //---- Password2 ----\\
// if(empty($_POST['password2'])) {
//     $errors['password2'] = "You must confirm Password";
// }

//---- Age ----\\
if(empty($_POST['age'])) {
    $errors['age'] = "You must provide your Age";
} elseif (!is_numeric($_POST['age'])) {
    $errors['age'] = ' Age has to be numeric';
}


//5.Assign errors to session
if(count($errors) > 0) {
    $_SESSION['errors'] = $errors;
  //9A. Make post sticky
    $_SESSION['post'] = $_POST;
    
    header('Location: register.php');
    die;
}


