<?php

//1. Config file
require __DIR__ . '/../config.php';
require __DIR__ . '/classes/Validator.php';

$v = new Validator();

$v->required('first_name', $_POST['first_name']);
$v->required('last_name', $_POST['last_name']);
$v->required('nick_name', $_POST['nick_name']);
$v->required('street', $_POST['street']);
$v->required('city', $_POST['city']);
$v->required('postal_code', $_POST['postal_code']);
$v->required('province', $_POST['province']);
$v->required('country', $_POST['country']);
$v->required('phone', $_POST['phone']);
$v->required('email', $_POST['email']);
$v->required('password', $_POST['password']);
$v->required('age', $_POST['age']);

$errors = $v->errors();


//2. only POST can get through
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Are you lost ?');
}

//3. create empty errors array
// $errors = [];


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
          (first_name, last_name, nick_name, street, city, postal_code, province, country, phone, email, password, age)
          VALUES
          (:first_name, :last_name, :nick_name, :street, :city, :postal_code, :province, :country, :phone, :email, :password, :age)';

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
':password' => $_POST['password'],
':age' => $_POST['age']

);

//15 execute query
$stmt->execute($params);

//16.value of the primary key of the last record on this session
$user_id = $dbh->lastInsertId();
$_SESSION['user_id'] = $user_id;
if ($user_id > 0 ) {

    header('Location: success.php');
    // ?user_id=' . $user_id
    die;
}











