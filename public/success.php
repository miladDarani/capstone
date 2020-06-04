esc(<?php
require __DIR__ . "/../config.php";
$title = "Success" ;
require __DIR__ . "/../includes/header_inc.php";
if(empty($_SESSION['user_id'])) {
    
    die( "please use form to add a new user");
}

$query = "SELECT * 
FROM users
WHERE
user_id = :user_id";

$stmt = $dbh->prepare($query);

$params = array (
':user_id' => intval($_SESSION['user_id'])
);

$stmt->execute($params);

$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>   

    <h1>Thank you for registering with S O U N D C O M E T</h1>

    <ul>
        <li><strong>User ID</strong>: <?=esc($_SESSION['user_id'])?></li>
        <li><strong>First Name</strong>: <?=esc($result['first_name'])?></li>
        <li><strong>Last Name</strong>: <?=esc($result['last_name'])?></li>
        <li><strong>Nick Name</strong>: <?=esc($result['nick_name'])?></li>
        <li><strong>Street Name</strong>: <?=esc($result['street'])?></li>
        <li><strong>City</strong>: <?=esc($result['city'])?></li>
        <li><strong>Postal Code</strong>: <?=esc($result['postal_code'])?></li>
        <li><strong>Province</strong>: <?=esc($result['province'])?></li>
        <li><strong>Country</strong>: <?=esc($result['country'])?></li>
        <li><strong>Phone Number</strong>: <?=esc($result['phone'])?></li>
        <li><strong>E-Mail</strong>: <?=esc($result['email'])?></li>
        <li><strong>Age</strong>: <?=esc($result['age'])?></li>
      
    </ul>

    <p><a href="register.php">Add Another User Record</a></p>

<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>