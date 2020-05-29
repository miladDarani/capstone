<?php
require __DIR__ . "/../config.php";
$title = "Blog_Detail";

require __DIR__ . "/../includes/header_inc.php";

// require __DIR__ . "/../classes/Model.php";
use Capstone\BlogModel;
use Capstone\CommentsModel;

if(!empty($flash)){

}

$post = new BlogModel();

$one_post = $post->onePost($_GET['post_id']);

if(!empty($_GET['post_id'])){
    $_SESSION['post_id'] = $_GET['post_id'];
}

$comment_model = new CommentsModel();

$comments = $comment_model->postComments($_SESSION['post_id']);


?>

<?php if(!empty($flash)) :?> 
    <div class="flash-area <?=esc($flash['class'])?>">

      <span><?=esc($flash['message'])?></span>

    </div>
 <?php endif; ?>

<div class="page-wrapper">

<?php foreach ($one_post as $key => $value) : ?>

<div class="main container">
  <h5><?=esc($value['category'])?></h5>
  <h1><?=esc($value['title'])?></h1>
  <a class="authorlink"><?=esc($value['author_name'])?></a>
  <figure>

    <div style="position:relative">
            <div class="share">
      <a href="#">

        <svg viewBox="0 -45 512.00013 512" xmlns="http://www.w3.org/2000/svg">
          <path d="m194.816406 422.710938c-85.453125 0-152.992187-14.929688-185.304687-40.953126l-.628907-.507812-.570312-.570312c-7.675781-7.679688-10.191406-17.753907-6.894531-27.636719l.300781-.820313c4-10.003906 13.800781-16.738281 24.421875-16.800781 21.859375-.378906 40.984375-2.984375 58.339844-8.042969-27.683594-12.875-46.914063-35.167968-58.355469-67.433594-3.847656-10.0625-.527344-21.21875 8.339844-27.871093 2.1875-1.644531 4.660156-2.886719 7.277344-3.71875-15.382813-17.757813-26.746094-37.964844-33.109376-59.335938l-.199218-.664062-.136719-.679688c-2.160156-10.808593 2.671875-21.921875 11.527344-26.707031 3.714843-2.132812 7.75-3.238281 11.800781-3.332031-4.367188-9.40625-7.542969-19.0625-9.425781-28.777344-5.226563-26.921875-.914063-53.910156 12.8125-80.214844l3.175781-6.351562c2.542969-5.082031 7.402344-8.652344 13.003906-9.5625 5.601563-.90625 11.34375.945312 15.355469 4.957031l5.785156 5.792969c45.703125 47.914062 86.640625 70.648437 157.417969 86.203125 3.160156-27.167969 14.90625-52.421875 33.855469-72.296875 22.550781-23.648438 52.664062-36.917969 84.792969-37.371094h.210937c23.441406 0 52.519531 13.382813 70.105469 22.820313 15.085937-4.9375 33.261718-12.582032 52.121094-20.664063 8.824218-4.140625 19.703124-2.2460938 26.640624 4.691406 6.800782 6.800781 8.6875 16.390625 5.078126 25.710938-1.371094 3.816406-2.925782 7.5625-4.65625 11.226562 2.582031 1.183594 4.945312 2.789063 6.941406 4.785157 6.035156 6.035156 8.550781 15.480468 6.40625 24.066406l-.230469.816406c-7.226563 23.289062-21.109375 42.257812-39.46875 54.164062-3.066406 163.285157-126.027344 295.078126-276.730469 295.078126zm-156.511718-57.675782c30.449218 17.226563 88.476562 27.648438 156.511718 27.648438 65.410156 0 127.136719-28.082032 173.804688-79.074219 47.050781-51.410156 72.960937-119.679687 72.960937-192.234375v-.816406c0-6.570313 3.617188-12.566406 9.4375-15.652344 11.808594-6.253906 21.371094-16.90625 27.589844-30.527344-6.414063 1.011719-12.933594-1.5625-16.929687-6.929687-4.644532-6.238281-4.695313-14.664063-.128907-20.957031 2.464844-3.398438 4.699219-6.933594 6.691407-10.589844-16.285157 6.839844-31.75 12.972656-45.175782 17.046875-4.878906 1.476562-10.316406.898437-14.773437-1.589844-23.902344-13.316406-46.164063-21.277344-59.585938-21.316406-49.527343.757812-89.796875 43.175781-89.796875 94.605469 0 5.316406-2.359375 10.300781-6.464844 13.679687-4.109374 3.375-9.453124 4.726563-14.671874 3.695313-81.609376-16.078126-129.96875-40.1875-180.257813-90.722657-7.207031 17.269531-9.175781 34.664063-5.84375 51.839844 3.378906 17.398437 12.367187 34.832031 25.996094 50.414063 5.179687 5.914062 5.867187 14.375 1.710937 21.050781-4.140625 6.652343-12.011718 9.761719-19.578125 7.734375-5.914062-1.585938-11.351562-3.667969-16.507812-6.34375 10.503906 22.816406 28.570312 43.917968 51.28125 59.480468 6.582031 4.511719 9.332031 12.921876 6.691406 20.453126-2.644531 7.542968-10.03125 12.398437-18.015625 11.804687-8.699219-.644531-16.40625-2.296875-23.5-5.082031 12.734375 25.933594 33.082031 40.203125 64.429688 45.65625 7.464843 1.300781 13.277343 7.195312 14.464843 14.667968 1.191407 7.472657-2.507812 14.878907-9.199219 18.429688-26.71875 14.164062-55.921874 21.765625-91.140624 23.628906zm0 0" /></svg>

      </a>
      <br>
      <a href="#">

        <svg viewBox="-110 1 511 511.99996" xmlns="http://www.w3.org/2000/svg">
          <path d="m180 512h-81.992188c-13.695312 0-24.835937-11.140625-24.835937-24.835938v-184.9375h-47.835937c-13.695313 0-24.835938-11.144531-24.835938-24.835937v-79.246094c0-13.695312 11.140625-24.835937 24.835938-24.835937h47.835937v-39.683594c0-39.347656 12.355469-72.824219 35.726563-96.804688 23.476562-24.089843 56.285156-36.820312 94.878906-36.820312l62.53125.101562c13.671875.023438 24.792968 11.164063 24.792968 24.835938v73.578125c0 13.695313-11.136718 24.835937-24.828124 24.835937l-42.101563.015626c-12.839844 0-16.109375 2.574218-16.808594 3.363281-1.152343 1.308593-2.523437 5.007812-2.523437 15.222656v31.351563h58.269531c4.386719 0 8.636719 1.082031 12.289063 3.121093 7.878906 4.402344 12.777343 12.726563 12.777343 21.722657l-.03125 79.246093c0 13.6875-11.140625 24.828125-24.835937 24.828125h-58.46875v184.941406c0 13.695313-11.144532 24.835938-24.839844 24.835938zm-76.8125-30.015625h71.632812v-193.195313c0-9.144531 7.441407-16.582031 16.582032-16.582031h66.726562l.027344-68.882812h-66.757812c-9.140626 0-16.578126-7.4375-16.578126-16.582031v-44.789063c0-11.726563 1.191407-25.0625 10.042969-35.085937 10.695313-12.117188 27.550781-13.515626 39.300781-13.515626l36.921876-.015624v-63.226563l-57.332032-.09375c-62.023437 0-100.566406 39.703125-100.566406 103.609375v53.117188c0 9.140624-7.4375 16.582031-16.578125 16.582031h-56.09375v68.882812h56.09375c9.140625 0 16.578125 7.4375 16.578125 16.582031zm163.0625-451.867187h.003906zm0 0" /></svg>

      </a>
    </div>
    <img src="images/blog-pics/<?=esc($value['image'])?>">
    </div>   
  </figure>
  <br>
  <hr>
  <div class="fl text-desc two " >
        <h1 style="text-align: center;"><?=esc($value['title'])?></h1>
        <p><?=esc($value['full_desc'])?></p>

  </div>
  <sidebar class="fl">

<!--     <h2>Popular Posts</h2>




    <div class="post__card-2">
      <div class="post__card_-2">

        <div class="post__card_meta-2">
          <p class="post__card_title-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="post__card_alttitle-2">Design</p>
        </div>
        <div class="post__card__image-2" style="background-image: url(https://images.unsplash.com/photo-1517736996303-4eec4a66bb17?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1268&amp;q=80)">
        </div>

      </div>
    </div>




    <div class="post__card-2">
      <div class="post__card_-2">

        <div class="post__card_meta-2">
          <p class="post__card_title-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="post__card_alttitle-2">Design</p>
        </div>
        <div class="post__card__image-2" style="background-image: url(https://images.unsplash.com/photo-1517736996303-4eec4a66bb17?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1268&amp;q=80)">
        </div>

      </div>
    </div>




    <div class="post__card-2">
      <div class="post__card_-2">

        <div class="post__card_meta-2">
          <p class="post__card_title-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="post__card_alttitle-2">Design</p>
        </div>
        <div class="post__card__image-2" style="background-image: url(https://images.unsplash.com/photo-1517736996303-4eec4a66bb17?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1268&amp;q=80)">
        </div>

      </div>
    </div>




    <div class="post__card-2">
      <div class="post__card_-2">

        <div class="post__card_meta-2">
          <p class="post__card_title-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="post__card_alttitle-2">Design</p>
        </div>
        <div class="post__card__image-2" style="background-image: url(https://images.unsplash.com/photo-1517736996303-4eec4a66bb17?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1268&amp;q=80)">
        </div>

      </div>
    </div>




    <div class="post__card-2">
      <div class="post__card_-2">

        <div class="post__card_meta-2">
          <p class="post__card_title-2">Lorem ipsum dolor sit amet.</p>
          <p class="post__card_alttitle-2">Design</p>
        </div>
        <div class="post__card__image-2" style="background-image: url(https://images.unsplash.com/photo-1517736996303-4eec4a66bb17?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1268&amp;q=80)">
        </div>

      </div>
    </div>



    <div class="post__card-2">
      <div class="post__card_-2">

        <div class="post__card_meta-2">
          <p class="post__card_title-2">Lorem ipsum dolor sit amet.</p>
          <p class="post__card_alttitle-2">Design</p>
        </div>

        <div class="post__card__image-2" style="background-image: url(https://images.unsplash.com/photo-1517736996303-4eec4a66bb17?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1268&amp;q=80)">
        </div>

      </div>
    </div> -->


</sidebar>
        <div id="comments-container">
            <h2>Comments</h2>
            <hr>
            



        </div>


<?php foreach($comments as $comment) : ?>
   
        <div class="other-comments-wrapper" style="text-align:left; margin-top: 50px; margin-bottom:50px ;padding: 15px;">
            <div class="inside-wrap">

                        <div class="commment-img" style="text-align:center;">
                            <img src="https://api.adorable.io/avatars/150/<?=esc($comment['first_name'])?>@adorable.png" alt="Profile Picture">
                        </div>

                        <div class="comment-content">
                            <div class="comment-name">
                                <h5><?=esc($comment['first_name'] ." " . $comment['last_name'] )?> </h5>&nbsp;
                                <h5 style="font-size:14px; color:#aaa"> - <?=esc($comment['date_added'])?> </h5>
                            </div>
                            <p name="comment" id="comment" rows="5"><?=esc($comment['comment_text'])?></p>
                        </div>
            </div>
        </div>

<?php endforeach; ?>        


        <div class="comment-wrapper">
                <h4>Leave a comment</h4>


                <?php if(!auth()) :?>
                    <p>Please <a href="register.php">register </a> or <a href="login.php">login</a> to leave a comment</p>
                <?php else : ?>
                <form action="process_comment.php" method="post">
                  
                    <input type="hidden" name="user_id" value="<?=esc($_SESSION['user_id'])?>">
                    <input type="hidden" name="post_id" value="<?=esc($_SESSION['post_id'])?>">

                    <div class="inside-wrap">

                        <div class="commment-img">
                            <img src="https://api.adorable.io/avatars/150/Milad@adorable.png" alt="Profile Picture">
                        </div>

                        <textarea name="comment_text" id="comment" rows="5"></textarea>
                        <div class="send-btn"><button href="#" class=try-btn>Send</button></div>
                    </div>

                </form>

                <?php endif; ?>


            </div>

    </div>
</div> <!-- Main Container -->

  <?php endforeach; ?>

</div> <!-- Page Wrapper -->
 <?php 


require __DIR__ . "/../includes/footer_inc.php";

?>

