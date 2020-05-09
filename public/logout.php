<?php 

session_start();
unset($_SESSION["user_id"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
setcookie("Country", "", time() - 3600);
header("Location: index.php");