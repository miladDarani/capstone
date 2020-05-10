<?php 
require __DIR__ . "/../config.php";
$title="Logout";


unset($_SESSION["user_id"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**


if(isset($_COOKIE['Country'])){
    $_SESSION['logout'] = "You are now logged out. you are being re-directed ..";
    echo "<div class='logout-msg'><p>" . $_SESSION['logout'] . "</p></div>";
    header( "refresh:5;url=index.php" );
    
    die;
}else{
    header("Location: index.php");
}



