<?php
require __DIR__ . "/../config.php";
$title = "Blog";

require __DIR__ . "/../includes/header_inc.php";

use Capstone\BlogModel;

$post = new BlogModel();
$p = $post->allPosts();

$categories = $post->categories();
$class = "hidden";
if(!empty($_GET['s'])){

    $title2 = 'You searched for ' . $_GET['s'];
    $p = $post->getAllPostsBySearch($_GET['s']);
    $search_result = $_GET['s'] ;
    $class="block";  
}

?>

<div class="row-blog-header">
    <h1>B L O G</h1>
    <p></p>
    <ul class="blog-menu">
        <?php foreach ($categories as $category ) : ?>
          <form action="blog_category.php"  method="get" >
            <li><a type="submit" href="blog_category.php?category=<?=esc(implode("",$category))?>"><?=esc(implode("",$category))?></a></li>
          </form>
        <?php endforeach; ?>
    </ul>


    <!-- SEARCH AREA -->
    <form class="blog-search" action="blog.php" method="get" autocomplete="off" novalidate>

        <input class="form-control" type="text" id="s" name="s" maxlength="255" placeholder="Search Posts" value="" />

        <button  type= "submit" ><i class="fas fa-search"></i></button>
    </form>
    <h2 class="<?=$class?>">Seacrh Results For: <?php echo $search_result ?></h2>
</div>



<div id="row_blog">

  <?php foreach ($p as $key => $value) : ?>
      <div class="blog-div">

          <div class="blog2-title">

              <img src="images/blog-pics/<?=$value['image']?>" alt="<?=$value['title']?>">
              <h3 class="header-h2"><?=esc($value['title'])?></h3><hr />

              <span class="text"> <?=esc($value['full_desc'])?></span>
          
              <div class="bottom-space">

                  <form action="blog_detail.php"  method="get" >
                      <a type="submit" class="sub-btn try-btn" href="blog_detail.php?page=blog_detail&post_id=<?=esc($value['post_id'])?>" >Read More</a>
                  </form>
             </div>

          </div>
        

      </div>


  <?php endforeach; ?>
       
</div> <!-- row blog -->


<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>