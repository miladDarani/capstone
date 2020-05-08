<?php

//1. Config file
require __DIR__ . '/../config.php';


//2. only POST can get through
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Are you lost ?');
}
// require __DIR__ . '/../classes/Validator.php';
$v = new Capstone\Validator();
//validate fotr required field

    //--------- First Name ----------\\
    $v->required('first_name', $_POST['first_name']);
    $v->isString('first_name', $_POST['first_name']);
    $v->max_length('first_name', $_POST['first_name'],45);
    $v->min_length('first_name', $_POST['first_name'],2);
    

    //--------- Last Name ----------\\
    $v->required('last_name', $_POST['last_name']);
    $v->isString('last_name', $_POST['last_name']);
    $v->min_length('last_name', $_POST['last_name'],2);
    $v->max_length('last_name', $_POST['last_name'],45);

    //--------- Nick Name ----------\\
    $v->required('nick_name', $_POST['nick_name']);
    $v->isString('nickname', $_POST['nick_name']);
    $v->max_length('nick_name', $_POST['nick_name'],45);
    $v->min_length('nick_name', $_POST['nick_name'],2);

    //--------- Street ----------\\
    $v->required('street', $_POST['street']);
    $v->max_length('street', $_POST['street'],145);

    //--------- City ----------\\
    $v->required('city', $_POST['city']);
    $v->isString('city', $_POST['city']);
    $v->max_length('city', $_POST['city'],145);

    //--------- Postal Code ----------\\
    $v->required('postal_code', $_POST['postal_code']);
    $v->isPostalCode('postal_code', $_POST['postal_code']);

    //--------- Province ----------\\
    $v->required('province', $_POST['province']);
    $v->isString('province', $_POST['province']);
    $v->max_length('province', $_POST['province'],50);

    //--------- Country----------\\
    $v->required('country', $_POST['country']);

    //--------- Phone ----------\\
    $v->required('phone', $_POST['phone']);
    $v->max_length('phone', $_POST['phone'],20);
    $v->isPhone('phone', $_POST['phone']);

    //--------- E-Mail ----------\\
    $v->required('email', $_POST['email']);
    $v->max_length('email', $_POST['email'],45);
    $v->isEmail('email', $_POST['email'], 'email2', $_POST['email2']);
    $v->checkDBemail('email',$_POST['email']);
    // $v->isEmailMatch($_POST['email2'], $_POST['email']);

    //--------- Password----------\\
    $v->required('password', $_POST['password']);
    $v->max_length('password', $_POST['password'],255);
    $v->max_length('password2', $_POST['password2'],255);
    $v->password_validator('password', $_POST['password'], $_POST['password2']);

    //--------- Age ----------\\
    $v->required('age', $_POST['age']);
    $v->isNumeric('age', $_POST['age']);
    $v->max_length('age', $_POST['age'],3);

//End of Validation



$errors = $v->errors();




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

$encrypted_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

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
':password' => $encrypted_password,
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











