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
    $errors['nick_name'] = "Nick Name is a required field";
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
}elseif (mb_strlen($_POST['province']) > 2) {
    $errors['province'] = 'Enter 2 Character abbreviation, i.e NY or ON';
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

//12. the SQL query
//12. escape it in SQL to make it safe like so :name

$query = 'INSERT INTO users
          (first_name, last_name, nick_name, street, city, postal_code, province, country, phone, email, password)
          VALUES
          (:first_name, :last_name, :nick_name, :street, :city, :postal_code, :province, :country, :phone, :email, :password)';

//13. create stmt to prepare query 
$stmt = $dbh->prepare($query);


//14. set params
$params = array (
':first_name' => $_POST['first_name'],
':last_name' => $_POST['last_name'],
':nick_name' => $_POST['nick_name'],
':street' => $_POST['street'],
':city' => $_POST['city'],
':postal_code' => $_POST['postal_code'],
':province' => $_POST['province'],
':country' => $_POST['country'],
':phone' => $_POST['phone'],
':email' => $_POST['email'],
':password' => $_POST['password']

);

//15 execute query
$stmt->execute($params);

//16.value of the primary key of the last record on this session
$user_id = $dbh->lastInsertId();

dd($user_id);
if ($user_id > 0 ) {
    header('Location: success.php?user_id=' . $user_id);
    die;
}











