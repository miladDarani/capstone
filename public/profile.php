<?php
require __DIR__ . "/../config.php";
$title = "Profile";

require __DIR__ . "/../includes/header_inc.php";


if(empty($_SESSION['user_id'])) {
    $errors['credentials'] = 'You must be logged in to see that page.';
    $_SESSION['errors'] = $errors;
    header('Location: login.php');
    die;
}


// logged in


$query = 'SELECT * FROM users WHERE user_id = :user_id';

$stmt = $dbh->prepare($query);

$params = array(
    ':user_id' => $_SESSION['user_id']
);

$stmt->execute($params);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

setcookie('Country', $user['country']);
$_SESSION['success'] = ' Welcome back '. $user['first_name'];

if(isset($_COOKIE['Country'])) {
    $class='hidden';
} else {
   $class="success-msg";
}

?>


<div class="<?=$class?>">
 
 
    <p><?=$_SESSION['success']?></p>
   
</div>

<div class="profile">
    <?php 

        

    ?>
    

    <div class="yellow-row">
        <ul>
            <li>Joined: <span class="profile-info"><?=$user['created_at'];?></span></li>
            <form action=""></form>
            <p><a href="logout.php">Logout</a></p>
        </ul>


        <div class="name-wrapper">
            <h2 class="fullname"><?=$user['first_name'] . ' ' . $user['last_name'] ?> </h2>
        </div>

        <div class="extras-wrapper">

            <div class="location">
                <h2 class="fullname">AKA: </h2>
                <p><?=$user['nick_name']?></p>
                <p><?=$user['age'] . 'yrs';?></p>
                
            </div>


            <div class="profile-pic">

                <img src="https://api.adorable.io/avatars/150/<?=$user['first_name'];?>@adorable.png" alt="lorem picsum">

            </div>
            

            <div class="location">
                <h2 class="fullname"><?=$user['country']?> </h2>
                <p><?=$user['province'];?></p>
                <p><?=$user['city'];?></p>
            </div>

        </div>  

             <h3 class='contact-h3'>Contact info:</h3>

        <div class="more-info">

            <p><?=$user['street'];?></p>
            <p>Postal Code: <?=$user['postal_code'];?></p>
            <p>Phone: <?=$user['phone'];?></p>
            <p>E-Mail: <?=$user['email'];?></p>
        </div>

    </div>
    

    <div class="comments">
        <p><i class="fas fa-comments"></i> </p>
        <h1>Number of comments</h1>
        <h1 class="comment-num">0</h1>
    </div>
   
    
</div>


















<script>
    $(document).ready(function(){

        $(".success-msg p").delay(2000).slideUp(2500);

    });
</script>

<?php require __DIR__ . "/../includes/footer_inc.php";?>