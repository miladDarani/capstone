<?php

//1. Config file
require __DIR__ . '/../config.php';
require __DIR__ . '/../classes/Validator.php';

$v = new Validator();
//validate fotr required field
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

//validate for other requirements
$v->isEmail('email', $_POST['email']);
$v->isPostalCode('postal_code', $_POST['postal_code']);
$v->isString('first_name', $_POST['first_name']);
$v->isString('nickname', $_POST['nick_name']);
$v->isString('last_name', $_POST['last_name']);
$v->isString('city', $_POST['city']);
$v->isString('province', $_POST['province']);
$v->isNumeric('age', $_POST['age']);
$v->max_length('age', $_POST['age'],3);
$v->max_length('first_name', $_POST['first_name'],45);
$v->max_length('last_name', $_POST['last_name'],45);
$v->max_length('nick_name', $_POST['nick_name'],45);
$v->max_length('street', $_POST['street'],145);
$v->max_length('city', $_POST['city'],145);
$v->max_length('province', $_POST['province'],50);
$v->max_length('phone', $_POST['phone'],20);
$v->max_length('email', $_POST['email'],45);
$v->isPhone('phone', $_POST['phone']);
$v->password_validator('password', $_POST['password'], $_POST['password2']);




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











