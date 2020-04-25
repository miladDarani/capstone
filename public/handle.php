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

//---- Last Name ----\\
if(empty($_POST['last_name'])) {
    $errors['last_name'] = "Last Name is a required field";
}
