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
    $_SESSION['first_name'] = $user['first_name'];
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
        

        <div class="info1">

            <div class="profile-pic">

                <img src="https://api.adorable.io/avatars/200/<?=$user['first_name'];?>@adorable.png" alt="lorem picsum">

            </div>
            

            <div class="main-info" style="border-bottom: .5px solid #ccc">
                
                <h2 class='name-of-user'>

                    <strong><?=$user['first_name'] . ' ' . $user['last_name'] ?></strong>

                    <i class="fas marker-icon fa-map-marker-alt" style="margin-left:25px;font-size:12px; color:#ccc">
                        <span style="font-family: 'Quicksand', sans-serif; font-size:12px; color:#ccc" >
                            <?=$user['province'] . ", " . $user['country'] ;?>      
                        </span>
                    </i>

                </h2>

                <p class="nick">
                    <?=$user['nick_name'];?>
                </p>

                <p class="info-label-small" style="margin:20px auto 0 auto;">comments</p>
                <p class="info-number"><?=count($comments)?></p>

                <p class="info-label-small" style="margin:20px auto 0 auto;" > Member Since: <?=$user['created_at'];?></p>
            
            </div>

                    <div class="btn-div1">

            <div>
                <form class= "signout-form" action="signout.php" method="post">
                    <button class="btn">Logout</button>
                </form>
            </div>
            <div>
                <?php if($user['is_admin'] == 1) : ?>

                    <form action="/admin" method="post">
                        <button  style="letter-spacing: .7px; background-color: #22e089; margin:0 20px; " class="btn admin-btn">Admin</button>
                    </form>
                
                <?php endif; ?>
            </div>

        </div><!-- btn-div1 -->
                

            

        

        </div> <!-- /info1 -->
      
        <div class="info2">

            <div class="info2-left" style="padding: 0 53px; ">
                <div class="info2-l-wrapper1">
                    <h3 style="margin:0; padding-bottom: 10px;">Membership Level</h3> 
                    <p class="info-label-small"> Subscription:
                    <a href="pricing.php" style="color:#777; text-decoration: none;background-color: #cdfad5; padding:10px;">FREE</a>
                    </p>
                    <p class="info-label-small" style="border-bottom: .5px solid #ccc;padding-bottom:40px;"> upgrade to <br> <a style="color:#2289e0; text-decoration: none" href="pricing.php">Basic </a> for $4.99mth </p>
                </div>

                <div class="info2-l-wrapper2">
                    <h3 style="margin:0; padding-bottom: 10px;">Skills</h3> 
                    <ul style="list-style: none;padding-left: 0;margin-bottom: 170px">
                        <li>Sound Design</li>
                        <li>Audio Editing</li>
                        <li>Mixing</li>
                        <li>Mastering</li>
                        <li>Blogging</li>
                    </ul>
                </div>
            </div>


            <div class="info2-right">
                <button class="tablink" onclick="openPage('Home', this, 'blue')" id="defaultOpen"><i class="fas fa-address-card" style="margin-right:5px;"></i>About</button>
                <button class="tablink" onclick="openPage('News', this, 'blue')" ><i class="fas fa-comments" style="margin-right:5px;"></i>Comments</button>
  

                <div id="Home" class="tabcontent">
                    <p class="info-label-small">CONTACT INFORMATION</p>
                    <table cellspacing="0" cellpadding="0" id="contact-table">
                        <tr>
                            <th>Phone: </th>
                            <td style="color:#2289e0"><?=$user['phone'];?></td>
                        </tr>
                        
                        <tr>
                            <th>Address: </th>
                            <td><?=$user['street'] . ", " . $user['city'] . ", " . $user['province'] ?><br><?=$user['postal_code'] . ", " . $user['country'] ;?></td>
                        </tr>   
                         
                        <tr>    
                            <th>E-mail: </th>
                            <td style="color:#2289e0"><?=$user['email'];?></td>
                        </tr>

                        <tr>
                            <th>Age: </th>
                            <td><?=$user['age'];?></td>
                        </tr>

                        <tr>
                            <th>From: </th>
                            <td><?=$user['country'];?></td>
                        </tr>
                    </table>
                </div>

                <div id="News" class="tabcontent">
                        <table id="comment-table">
                            <tr>
                                <th></th>
                                <th>Post</th>
                                <th>Comment</th>
                                <th>Date</th>
                                
                            </tr>

                            <?php foreach ($comments as $comment) : ?>
                          
                              <tr>

                                <td>
                                    <a href="blog_detail.php?page=blog_detail&post_id=<?=esc($comment['post_id'])?>" > <img style="width:100px;" src="images/blog-pics/<?=esc($comment['image'])?>" alt="<?=esc($comment['title'])?>"></a>
                                </td>
                                
                                <td class="title-size" ><a  style="font-size:13px" href="blog_detail.php?page=blog_detail&post_id=<?=esc($comment['post_id'])?>" ><?=esc($comment['title'])?></a></td> 
                                <td><a style="color:#005df7; font-size: 13px" href="blog_detail.php?page=blog_detail&post_id=<?=esc($comment['post_id'])?>" ><?=esc($comment['comment_text'])?></a></td>
                                <td style="width:100px; font-size:11px;"><?=esc($comment['date_added'])?></td>
                                

                              </tr>

                            <?php endforeach; ?>

        </table>
                    </div>

                
                



            </div>
        </div><!-- /info2 -->

    </div>
    <script>
   function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.border = "none";
    

    
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.borderBottom = "2px solid #2289e0";
  
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
    </script>



    <div class="comments-row">
        
        
    </div>

    
    
</div>


















<script>
    $(document).ready(function(){

        $(".success-msg p").delay(2000).slideUp(2500);

    });
</script>

<?php require __DIR__ . "/../includes/footer_inc.php";?>