<?php
require __DIR__ . "/../config.php";
$title = "Blog";

require __DIR__ . "/../includes/header_inc.php";

// require __DIR__ . "/../classes/Model.php";
require __DIR__ . "/../classes/BlogModel.php";

$post = new BlogModel();
$p = $post->allPosts();



?>

      <div id="row_blog">



        <?php foreach ($p as $key => $value) : ?>
          
           <div class="blog-div">

              <div class="blog2-title">

                <img src="images/blog1.jpg" alt="25 Tips">
                <h2 class="header-h2"><?=$value['title']?></h2>

                <p><?=$value['full_desc']?></p>

                <div class="bottom-space">
                   <a href="#">Read More</a>
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