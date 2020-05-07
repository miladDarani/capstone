<?php

require __DIR__ . "/../config.php";
$title = "Login";
require __DIR__ . "/../includes/header_inc.php";




?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>

    <div class="container">
  <form action="/action_page.php">
    <div class="row main-login">
      <h2 style="text-align:center">Login to your account</h2>
      

    

      <div class="col">
   

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>

    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="#" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
</head>
<body>
    
</body>
</html>




<!-- Footer  -->
<?php require __DIR__ . "/../includes/footer_inc.php"; ?>