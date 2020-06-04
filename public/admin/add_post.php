<?php

//     ──────▄▀▄─────▄▀▄              W W W !!
//     ─────▄█░░▀▀▀▀▀░░█▄         E O  
//     ─▄▄──█░░░░░░░░░░░█──▄▄   M
//     █▄▄█─█░░▀░░┬░░▀░░█─█▄▄█
// ||||||||||||||||||||||||||||||
// |||                        |||
// |||       Milad Darani     |||
// |||    WDD - Capstone      |||
// |||          2020          |||
// |||  Instructor: S. George |||
// |||     add_post.php       |||
// |||     adding blog post   ||| 
// |||           as           |||
// |||     an admin only      |||
// |||                        |||
// ||||||||||||||||||||||||||||||


require __DIR__ . '/../../config.php';

use Capstone\AuthorModel;
use Capstone\BlogModel;
use Capstone\Validator;

$v= new Validator();  

$authors = new AuthorModel;
$all_authors = $authors->fullAuthors();

$title = "Add Post";

$i = new BlogModel();
$all_images = $i->allImages();


//if the user is not an admin
if(empty($_SESSION['is_admin'])){
    $errors['admin'] = 'You must be an admin to see this page.';
    $_SESSION['errors'] = $errors;
    header('Location: /profile.php' );
    die;
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?=esc($title)?></title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/977c9f68f6.js" crossorigin="anonymous"></script>
  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

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
        background-color: #bafaba !important;
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
    .flash-err{
      background-color: #f8807b;
      color: white;
      padding: 10px;
      margin-bottom: 20px;
  }
</style>




<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

      <a class="navbar-brand" href="#"><?=esc($title)?></a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample03" style="">
          <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                  <a class="nav-link" href="/admin">Dash </a>
              </li>

              <li class="nav-item ">
                  <a class="nav-link" href="posts.php">Posts</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="authors.php">Authors </a>
              </li>

              <li class="nav-item ">
                  <a class="nav-link" href="comments.php">Comments <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="users.php">Users</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="/">Back to SoundComet</a>
              </li>
          </ul>

          <!-- Search Form -->
        <form class="form float-right form-inline" action="posts.php" method="get" autocomplete="off" novalidate>


            <input class="form-control" type="text" id="s1" name="s1" maxlength="255" placeholder="Search Posts" value="" />

            <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>

        </form>

    </div>
</nav>
  




    
<!-- Displays Flash msg's  -->
<?php if(!empty($flash)) :?> 

    <div class="flash-area <?=esc($flash['class'])?>">

      <span><?=esc($flash['message'])?></span>

    </div>

<?php endif; ?>



<div class="flash flash-area flash-err">

        <!-- PHP FOREACH LOOP -->
        <ul>
        <?php foreach($errors as $error) : ?>
            <li><?=$error?></li>
        <?php endforeach; ?>
        <!-- END FOREACH LOOP -->
        </ul>
</div>



   
</div>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <h1 class="mt-5">Add Post</h1>
        <p>
          <a class="btn btn-info float-left mb-5" href="/admin">Back</a> 
        </p>

        <p class="clear">&nbsp;</p>

        <div class="row mt-5">
            <div class=" col-img d-flex justify-content-center" style="margin-bottom:30px;">
                <img id="blogger" src="" alt="">
           
            </div>

            <div class="col col-sm-9">

              <form action="process_post.php" method="post">
                  <fieldset>

                  <legend>Edit Post</legend>
               
                  <input type="hidden" name="post_id" value="" />
                  <input type="hidden" name="post_add" value="post_add" />

                <div class="form-group required">

                    <label for="title"><strong>Blog Title</strong></label>
                    <input class="form-control" type="text" name="title" value="<?=esc(old('title', $post))?>" /> 
                  
                </div>

                <div class="form-group required">

                    <label for="seo_done"><strong>SEO Finished </strong></label>
                
                    <p><input class="form-control" type="radio" name="seo_done" value='0' checked="true" /> No </p>

                    <p><input class="form-control" type="radio" name="seo_done" value='1' /> Yes </p>

                </div>


                <div class="form-group required">

                    <label for="category"><strong>Category</strong></label>
                    <input class="form-control" type="text" name="category" value="<?=esc(old('category', $post))?>" /> 

                </div>
              

                <select name="image" style="margin:20px 0 25px 0; ">

                    <option value="">Select an image:</option>
                        <!-- PHP FOREACH LOOP -->
                        <?php foreach($all_images as $image) :?>
                                                    
                            <option  value="<?=esc($image['image'])?>"> 

                                <?=esc($image['image'])?>
                           
                            </option>

                        <?php endforeach; ?>
                        <!-- END FOREACH LOOP -->

                </select>

                <div class="form-group required">

                    <label for="full_desc"><strong>Full Post Description</strong></label>
                  
                    <textarea id="body" rows="4" cols="50" class="form-control" name="full_desc" value=""><?=esc(old('full_desc', $post))?></textarea>

                </div>

                <div class="form-group required">

                    <label for="author"><strong>Authors: </strong></label>

                    <select name="author_name" class="author_name">

                        <option value="">Select an author:</option>

                        <!-- PHP FOREACH LOOP -->
                        <?php foreach($all_authors as $author) :?>
                          
                           
                            <option  value="<?=esc($author['author_name'])?>"> 

                                <?=esc($author['author_name'])?>
                           
                        </option>

                      <?php endforeach; ?>
                      <!-- END FOREACH LOOP -->

                  </select>

                </div><!-- /form-group -->

              
                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </div>

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