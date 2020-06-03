<?php

require __DIR__ . '/../../config.php';

use Capstone\Validator;
use Capstone\BlogModel;
use Capstone\AuthorModel;

//if the user is not an admin
if(empty($_SESSION['is_admin'])){
    $errors['admin'] = 'You must be an admin to see this page.';
    $_SESSION['errors'] = $errors;
    header('Location: /profile.php' );
    die;
}


$v = new Validator();

$title = "Post Detail";

//for message field
$class='hidden';

$post = new BlogModel();

$authors = new AuthorModel;

$all_authors = $authors->fullAuthors();

$all_images = $post->allImages();



if(!empty($_GET['post_id']))
{

    $one_post = $post->onePost($_GET['post_id']);

} 
elseif(empty($_GET['post_id'])) 
{

  $class='err-msg';
  $_SESSION['errors'] = "You must select something";
  die;

}



if(!empty(err('title', $errors))){

  $flash =array(
  'class' => "err-msg",
  'message' => err('title', $errors)
   );
}

if(!empty(err('full_desc', $errors))){
  $flash =array(
  'class' => "err-msg",
  'message' => err('full_desc', $errors)
   );
}



if(!empty(err('category', $errors))){
  $flash =array(
  'class' => "err-msg",
  'message' => err('category', $errors)
   );
}
if(!empty(err('image', $errors))){
  $flash =array(
  'class' => "err-msg",
  'message' => err('image', $errors)
   );
}





if(!empty(err('title', $errors))&&!empty(err('full_desc', $errors)) ){
    $flash =array(
    'class' => "err-msg",
    'message' => "Title & Description are required and must contain 2 characters at minimum"
     );
}

if(empty($errors)){
      $flash =array(
      'class' => "success-msg",
      'message' => 'Record Successfully Updated'
    );

}
//setting flash message
$_SESSION['flash'] = $flash;



?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?=$title?></title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/977c9f68f6.js" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<!-- CSS STYLING  -->
<style>
  img{
    max-width: 100%;
  }
  .author_name{
    width: 50%;
  }
  footer{
    text-align: center;
  }
  ​textarea { vertical-align: top;
  }​
  .success-msg {
    background-color: #bafaba;
  }
  .success-msg p {
    padding:12px;
    margin: 0;
  }
  .err-msg{
    background-color: #fababa;
  }
  .hidden{
    display: none;
  }
  .flash {
    text-align: center;
    padding: 10px;
    font-weight: bold;
  }
  .hidden{
    display: none;
  }
  .flash-area{
    list-style: none;
    padding:  12px;
    text-align: center;
    font-weight: 500;
  }
</style>




<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

    <a class="navbar-brand" href="/admin/"><?=esc($title)?></a>

    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample03" style="">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link" href="/admin/">Posts <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Authors</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Comments</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Users</a>
            </li>

        </ul>
          <!-- Search Form -->
          <form class=" form float-right form-inline" action="posts.php" method="get" autocomplete="off" novalidate>

              <input class="form-control" type="text" id="s2" name="s2" maxlength="255" placeholder="Search Posts" value="" />

              <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>

          </form>

    </div>
</nav>




    
<!-- Display msg if there is one in $flash -->
 <?php if(!empty($flash)) :?> 

      <div class="flash-area <?=esc($flash['class'])?>">

          <span><?=esc($flash['message'])?></span>

      </div>

 <?php endif; ?>



   
</div>

<!-- Page Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-12">

        <h1 class="mt-5">Edit Post</h1>
        <p>
          <a class="btn btn-info float-left mb-5" href="posts.php">Back</a> 
        </p>

        <p class="clear">&nbsp;</p>

    <!-- PHP FOREACH LOOP -->
    <?php foreach ($one_post as $key => $value) : ?>

        <div class="row mt-5">
            <div class=" col-img d-flex justify-content-center" style="margin-bottom:30px;">
                <img id="blogger" src="../images/blog-pics/<?=esc($value['image'])?>" alt="<?=esc($value['title'])?>">
            </div>

            <div class="col col-sm-9">

                <form action="/admin/" method="post">

                    <fieldset>

                        <legend>Edit Post</legend>
                   
                        <input type="hidden" name="post_id" value="<?=esc($value['post_id'])?>" />
                        <input type="hidden" name="success" value="success" />

                    <div class="form-group required">
                        <label for="title"><strong>Blog Title</strong></label>
                        <input class="form-control" type="text" name="title" value="<?=esc($value['title'])?>" />  
                    </div>

                    <div class="form-group required">
                        <label for="read_length"><strong>Read Length</strong>(read only)</label>
                        <p><?=esc($value['read_length'])?></p>                  
                    </div>


                    <div class="form-group required">
                        <label for="views"><strong>Number of Views</strong>(read only)</label>
                        <p><?=esc($value['views'])?></p>    
                    </div>

                    <div class="form-group required">
                        <label for="seo_done"><strong>SEO Finished </strong></label>
                            <p>
                                <input class="form-control" type="radio" name="seo_done" value='0' <?php  if(esc($value['seo_done']) == 0 || esc($value['seo_done']) === NULL ){echo 'checked';} ?>/> No 
                            </p>

                            <p>
                                <input class="form-control" type="radio" name="seo_done" value='1' <?php if(esc($value['seo_done']) == 1 ){echo 'checked';} ?>/> Yes 
                            </p>  
                    </div>


                    <div class="form-group required">
                        <label for="category"><strong>Category</strong></label>
                        <input class="form-control" type="text" name="category" value="<?=esc($value['category'])?>" />  
                    </div>

                    <select name="image">

                        <option value="">Select an image</option>

                        <!-- PHP FOREACH LOOP -->
                        <?php foreach($all_images as $picture) :?>
                                                      
                            <option <?=($picture['image'] === $one_post[0]['image']) ? 'selected' : ''?> > 

                                <?=esc($picture['image'])?>
                               
                            </option>

                        <?php endforeach; ?>
                        <!-- END OF FOREACH LOOP -->

                    </select>





                    <div class="form-group required">

                        <label for="full_desc"><strong>Full Post Description</strong></label>
                      
                        <textarea id="body" rows="4" cols="50" class="form-control" name="full_desc"><?=esc($value['full_desc'])?></textarea>

                    </div>

                    <div class="form-group required">
                        <label for="author"><strong>Authors: </strong></label>



                        <select name="author_name" class="author_name">

                            <option value="">Select an author</option>
                            
                            <!-- PHP FOREACH LOOP -->
                            <?php foreach($all_authors as $author) :?>
                              
                               <option <?=($author['author_name'] === $one_post[0]['author_name']) ? 'selected' : ''?> value="<?=esc($author['author_id'])?>"> 

                                    <?=esc($author['author_name'])?>
                               
                                </option>

                            <?php endforeach; ?>
                          <!-- END OF FOREACH LOOP -->
                        </select>

                    </div>

                  
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a  class="btn btn-primary" href="/blog_detail.php?page=blog_detail&post_id=<?=$value['post_id']?>">Visit Blog</a>
                    </div>


                    <?php endforeach ; ?>
                    <!-- END OF Main FOREACH LOOP -->

                    </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- JQUERY  -->
<script>
    $(document).ready(function(){
        $(".flash-area").delay(2500).slideUp(2500);
    });
</script>



  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="/js/ckeditor/ckeditor.js"></script>


    </body>
</html>