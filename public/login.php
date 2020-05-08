<?php

require __DIR__ . "/../config.php";

$title = "Login";
require __DIR__ . "/../includes/header_inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // assume you validated

    if(empty($errors)) {

        // query database for user with provided email
        
        $query = 'SELECT *
                    FROM users 
                    WHERE email = :email';

        $stmt = $dbh->prepare($query);

        $params = array(
            ':email' => $_POST['email']
        );

        $stmt->execute($params);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($user === false) {
            
            $errors['credentials'] = 'Sorry, those credentials do not match our records.';
            
            $_SESSION['errors'] = $errors;
            $_SESSION['post'] = $_POST;
            header('Location: login.php');
            die;
        }

        // Test if login password matches what we have saved
        if(password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            // Change the session id when a user's privilege
            // level changes... up or down (login or logout)
            session_regenerate_id();
            header('Location: profile.php');
            die;
        } 


        $errors['credentials'] = 'Sorry, those credentials do not match our records.';
        $_SESSION['errors'] = $errors;
        $_SESSION['post'] = $_POST;
        header('Location: login.php');
        die;

    } // if error empty

} // server


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>

<div class="container">
  <form action="login.php" method="post">

    <?php if(count($errors) > 0) : ?>

        <div class="errors">
            <ul>
                <?php foreach($errors as $error) : ?>
                    <li><?=$error?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php endif; ?>

    <div class="row main-login">

      <h2 style="text-align:center">Login to your account</h2>

      <div class="col">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>

    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row btn-container">
    <div class="col btn-col">
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