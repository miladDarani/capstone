<?php
require __DIR__ . "/../config.php";
use Capstone\Model;
use Capstone\CommentsModel;
$title = "Profile";

require __DIR__ . "/../includes/header_inc.php";

$comment_model = new CommentsModel();

$comments = $comment_model->userComments($_SESSION['user_id']);

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

if($user['is_admin'] == 1){
    
    $_SESSION['is_admin'] = $user['is_admin'];

}



// setcookie('Country', $user['country']);



if(isset($_SESSION['user_id'])) {
    $flash =array(
    'class' => "success-msg",
    'message' => "Welcome " . $user['first_name'] . ", Successfully logged in."
    );
} 


$_SESSION['flash'] = $flash;





?>


<?php if(!empty($flash)) :?> 

       <div class="flash-area <?=esc($flash['class']) ?> success-msg">
   
         <span><?=esc($flash['message'])?></span>
   
        </div>

<?php endif; ?>
<div class="profile">
    <?php 

        $flash = [];

    ?>
    

    <div class="yellow-row">
        <ul>
            <li>Joined: <span class="profile-info"><?=$user['created_at'];?></span></li>
            <form action=""></form>
            <p>
                <form action="signout.php" method="post">
                    <button class="btn">Logout</button>
                </form>
                <?php if($user['is_admin'] == 1) : ?>
                    <form action="/admin" method="post">
                    <button style="margin-top:10px; letter-spacing: .7px; background-color: #22e089; " class="btn">Admin</button>
                </form>
                <?php endif; ?>
            </p>
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

        <h1 class="comment-num"><?=count($comments)?></h1>
    </div>

    <div class="comments-row">
        
        <table id="comment-table">
            <tr>
                <th></th>
                <th>Comment</th>
                <th>Date</th>
                <th>Post</th>
               
                
            </tr>
            <?php foreach ($comments as $comment) : ?>
          
                

              <tr>
                <td>
                    <a href="blog_detail.php?page=blog_detail&post_id=<?=esc($comment['post_id'])?>" > <img style="width:100px;" src="images/blog-pics/<?=esc($comment['image'])?>" alt="<?=esc($comment['title'])?>"></a>
                </td>
                <td><a style="color:#005df7" href="blog_detail.php?page=blog_detail&post_id=<?=esc($comment['post_id'])?>" ><?=esc($comment['comment_text'])?></a></td>
                <td><?=esc($comment['date_added'])?></td>
                <td class="title-size" ><a href="blog_detail.php?page=blog_detail&post_id=<?=esc($comment['post_id'])?>" ><?=esc($comment['title'])?></a></td>
                
               
                  
              </tr>
              

 
   
            <?php endforeach; ?>

        </table>
    </div>

    
    
</div>


















<script>
    $(document).ready(function(){

        $(".success-msg p").delay(2000).slideUp(2500);

    });
</script>

<?php require __DIR__ . "/../includes/footer_inc.php";?>