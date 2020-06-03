<?php
require __DIR__ . "/../config.php";
$title = "Blog";

require __DIR__ . "/../includes/header_inc.php";

use Capstone\BlogModel;

$post = new BlogModel();
$p = $post->allPosts();



?>

<div class="row-blog-header"><h1>B L O G</h1></div>
<div id="row_blog">



  <?php foreach ($p as $key => $value) : ?>
      <div class="blog-div">

          <div class="blog2-title">

              <img src="images/blog-pics/<?=$value['image']?>" alt="<?=$value['title']?>">
              <h3 class="header-h2"><?=$value['title']?></h3><hr />

              <span class="text"> <?=$value['full_desc']?></span>
          
              <div class="bottom-space">

                  <form action="blog_detail.php"  method="get" >
                      <a type="submit" class="sub-btn try-btn" href="blog_detail.php?page=blog_detail&post_id=<?=$value['post_id']?>" >Read More</a>
                  </form>
             </div>

          </div>
        

      </div>


  <?php endforeach; ?>
       
</div> <!-- row blog -->


<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>