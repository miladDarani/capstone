<?php
require __DIR__ . "/../config.php";
$title = "Blog";

require __DIR__ . "/../includes/header_inc.php";

// require __DIR__ . "/../classes/Model.php";
use Capstone\BlogModel;

$post = new BlogModel();
$p = $post->allPosts();



?>


      <div id="row_blog">



        <?php foreach ($p as $key => $value) : ?>
          
           <div class="blog-div">

              <div class="blog2-title">

                <img src="images/<?=$value['image']?>" alt="25 Tips">
                <h3 class="header-h2"><?=$value['title']?></h3><hr />

                <p>This is a simple description and it will be dynamic as you can see if you look at the code <?=$value['full_desc']?></p>

                <div class="bottom-space">
                   <button class="btn">Read More</button>
                </div>

              </div>
              

            </div>


        <?php endforeach; ?>
     


           








      
      </div> <!-- row blog -->


      <div id="more">
        <a href="#">1</a>
        <a href="#">2</a>
      </div>

 <?php 


require __DIR__ . "/../includes/footer_inc.php";

?>