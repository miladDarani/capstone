<?php

require __DIR__ . "/../config.php";

$title = "Login";
require __DIR__ . "/../includes/header_inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $vi = new Capstone\Validator();
    
    $vi->ValidEmail('email',$_POST['email']);
    $errors = $vi->errors();


    if(count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        $_SESSION['post'] = $_POST;
        header('Location: login.php');
        die;
    }

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
            $flash =array(
                'class' => "success-msg",
                'message' => "Welcome " . $user['first_name'] . ", Successfully logged in."
             );
                 $_SESSION['flash'] = $flash;
            $_SESSION['first_name'] = $user['first_name'];
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
</head>
        <!-- PHP IF STATEMENT -->
        <?php if(count($errors) > 0) : ?>

        <div class="flash flash-err">

                <!-- PHP FOREACH LOOP -->
                <?php foreach($errors as $error) : ?>
                    <?=$error?>
                <?php endforeach; ?>
                <!-- END FOREACH LOOP -->
        </div>

        <?php endif; ?>
        <!-- END IF STATEMENT -->

<div class="container">

    <form action="/login.php" method="post">

        <div class="row main-login">

        <h2 style="text-align:center">Login to your account</h2>

            <div class="col">
                <input type="hidden" name="loggedIn">
                <input type="text" name="email" placeholder="Email" value="<?=old('email', $post)?>" /><?=err('email', $errors)?>
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


<script>
    $(document).ready(function(){

        $(".flash").delay(2500).slideUp(2500);

    });
</script>


<!-- Footer  -->
<?php require __DIR__ . "/../includes/footer_inc.php"; ?>