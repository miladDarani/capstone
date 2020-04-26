<?php
require __DIR__ . "/../config.php";
$title = "Register";
require __DIR__ . "/../includes/header_inc.php";
if(empty($_GET['user_id'])) {
    
    die( "please use form to add a new user");
}

//17
$query = "SELECT * 
FROM users
WHERE
user_id = :user_id";


//18
$stmt = $dbh->prepare($query);


//19
$params = array (
':user_id' => intval($_GET['user_id'])
);

//20
$stmt->execute($params);

//21
$result = $stmt->fetch();

dd($result);


?>







<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>