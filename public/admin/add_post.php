<?php

require __DIR__ . '/../../config.php';
use Capstone\AuthorModel;
use Capstone\BlogModel;
use Capstone\Validator;
$v= new Validator();    
$authors = new AuthorModel;
$all_authors = $authors->fullAuthors();
$title = "Add Post";
// dd($_SERVER['REQUEST_METHOD']);
// dd($_POST);
// die;

$i = new BlogModel();


$all_images = $i->allImages();

// dd($_SESSION['errors']);



?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/977c9f68f6.js" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

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
            <a class="nav-link" href="/admin/">Posts </a>
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
            <form class=" form float-right form-inline" action="index.php" method="get" autocomplete="off" novalidate>


              <input class="form-control" type="text" id="s2" name="s2" maxlength="255" placeholder="Search Posts" value="" />

              <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>

            </form>
      </div>
    </nav>




    

 <?php if(!empty($flash)) :?> 

    <div class="flash-area <?=esc($flash['class'])?>">

      <span><?=esc($flash['message'])?></span>

    </div>

 <?php endif; ?>



  <?php if(!empty($errors)) :?> 

    <div class="flash-area err-msg">
        <?php foreach ($errors as $error) : ?>
            <span><?=$error?></span>
        <?php endforeach; ?>
    </div>

 <?php endif; ?>



   
</div>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <h1 class="mt-5">Add Post</h1>

          
          

        
        <p>
          <a class="btn btn-info float-left mb-5" href="/admin">Back</a> 

          <!-- <form class="mb-5 form float-right form-inline" action="index.php" method="get" autocomplete="off" novalidate>


            <input class="form-control" type="text" id="s" name="s" maxlength="255" placeholder="Search Posts" value="" />

            <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>

          </form> -->

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
                  <input class="form-control" type="text" name="title" value="" /> 
                  
              </div>



              <div class="form-group required">
                  <label for="seo_done"><strong>SEO Finished </strong></label>
                
                    <p><input class="form-control" type="radio" name="seo_done" value='0' checked="true" /> No </p>
                    
                  
                    <p><input class="form-control" type="radio" name="seo_done" value='1' /> Yes </p>
                
                  
              </div>


              <div class="form-group required">
                  <label for="category"><strong>Category</strong></label>
                  <input class="form-control" type="text" name="category" value="" /> 
                  
              </div>
              


                <select name="image" style="margin:20px 0 25px 0; ">

                      <option value="">Select an image:</option>
                
                        <?php foreach($all_images as $image) :?>
                          
                           
                           <option  value="<?=esc($image['image'])?>"> 

                               <?=esc($image['image'])?>
                           
                           </option>

                        <?php endforeach; ?>

                </select>










               <div class="form-group required">

                  <label for="full_desc"><strong>Full Post Description</strong></label>
                  
                  <textarea id="body" rows="4" cols="50" class="form-control" name="full_desc"></textarea>

              </div>

              <div class="form-group required">
                  <label for="author"><strong>Authors: </strong></label>



                  <select name="author_name" class="author_name">

                    <!-- <option  value="">Select Author</option> -->
                      <option value="">Select an author:</option>
                
                        <?php foreach($all_authors as $author) :?>
                          
                           
                           <option  value="<?=esc($author['author_name'])?>"> 

                            <?=esc($author['author_name'])?>
                           
                         </option>

                      <?php endforeach; ?>

                  </select>




              </div>

              
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