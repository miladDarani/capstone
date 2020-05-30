<?php

require __DIR__ . "/../config.php";

$title = "Signout";
require __DIR__ . "/../includes/header_inc.php";
unset($_SESSION["user_id"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**


session_destroy();
$_SESSION = [];
header( "Location: index.php" );
die;
    
 




?>




<!-- Footer  -->
<?php require __DIR__ . "/../includes/footer_inc.php"; ?>