<?php
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
        <li><strong>User ID</strong>: <?=$_SESSION['user_id']?></li>
        <li><strong>First Name</strong>: <?=$result['first_name']?></li>
        <li><strong>Last Name</strong>: <?=$result['last_name']?></li>
        <li><strong>Nick Name</strong>: <?=$result['nick_name']?></li>
        <li><strong>Street Name</strong>: <?=$result['street']?></li>
        <li><strong>City</strong>: <?=$result['city']?></li>
        <li><strong>Postal Code</strong>: <?=$result['postal_code']?></li>
        <li><strong>Province</strong>: <?=$result['province']?></li>
        <li><strong>Country</strong>: <?=$result['country']?></li>
        <li><strong>Phone Number</strong>: <?=$result['phone']?></li>
        <li><strong>E-Mail</strong>: <?=$result['email']?></li>
        <li><strong>Age</strong>: <?=$result['age']?></li>
      
    </ul>

    <p><a href="register.php">Add Another User Record</a></p>

<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>