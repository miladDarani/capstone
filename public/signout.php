<?php

require __DIR__ . "/../config.php";

$title = "Signout";
require __DIR__ . "/../includes/header_inc.php";
unset($_SESSION["user_id"]);  


// session destroy
$_SESSION = [];
    $flash =array(
      'class' => "success-msg",
      'message' => "You have successfully logged out"
    );
$_SESSION['flash'] = $flash;
header( "Location: index.php" );
die;
    
?>

<!-- Footer  -->
<?php require __DIR__ . "/../includes/footer_inc.php"; ?>