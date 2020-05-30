<?php

require __DIR__ . "/../config.php";

$title = "Signout";
require __DIR__ . "/../includes/header_inc.php";
unset($_SESSION["user_id"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**


if(isset($_COOKIE['Country'])){
    $_SESSION['logout'] = "You are now logged out. you are being re-directed ..";
    
    setcookie('Country','', -2600);
    $_SESSION = [];
    session_destroy();
    header( "Location: index.php" );
    
 
}else{
    header("Location: index.php");
}



?>




<!-- Footer  -->
<?php require __DIR__ . "/../includes/footer_inc.php"; ?>