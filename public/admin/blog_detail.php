<?php
require __DIR__ . '/../../config.php';
use Capstone\Validator;
use Capstone\BlogModel;
use Capstone\AuthorModel;




$v = new Validator();
$title = "Post";
$class='hidden';
$post = new BlogModel();

$authors = new AuthorModel;



$all_authors = $authors->fullAuthors();






if(!empty($_GET['post_id'])){

    $one_post = $post->onePost($_GET['post_id']);


    // $v->required('title', $_GET['title']);
    // $v->required('full_desc', $_GET['full_desc']);

    // $errors = $v->errors();
   

} elseif(empty($_GET['post_id'])) {

        $class='err-msg';
        $_SESSION['errors'] = "You must select something";
        // header('Location: /admin');
        die;
        }



// if(!empty($errors)){
//   dd($errors);

//   // header('Location: blog_detail.php');


// }



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
    background-color:#aefb8c;
 
    text-align: center;
    transition: 2s;

  }
  .success-msg p {
    padding:12px;
     margin: 0;
  }

  .err-msg{
    background-color:red;
    text-align: center;
    transition: 2s;
  }
  .hidden{
    display: none;
  }
  .error-ul{
    list-style: none;
    padding:  0;
    color: white;
    transition: 2s;
  }
  .error-ul li {
    padding: 12px;
  }
  .err {}
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

          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Posts</a>
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
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>



 <div>
    <ul class="error-ul">
 <?php  

    if(!empty(err('title', $errors))){
      $class = 'err-msg';
      echo "<div class='err-msg'> <li>" . err('title', $errors) . "</li></div>";
    }
    if(!empty(err('full_desc', $errors))){
      $class = 'err-msg';
      echo "<div class='err-msg'> <li>" . err('full_desc', $errors) . "</li></div>";
    }

 ?>
  </ul>
</div> 
   
</div>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <h1 class="mt-5">Edit Post</h1>

          
          

        
        <p>
          <a class="btn btn-info float-left mb-5" href="/admin">Back</a> 

          <form class="mb-5 form float-right form-inline" action="index.php" method="get" autocomplete="off" novalidate>


            <input class="form-control" type="text" id="s" name="s" maxlength="255" placeholder="Search Posts" value="" />

            <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>

          </form>

        </p>

        <p class="clear">&nbsp;</p>



      <?php foreach ($one_post as $key => $value) : ?>


      



        <div class="row mt-5">
          <div class="col col-sm-3">
            <img id="blogger" src="/../images/<?=esc($value['image'])?>" alt="<?=esc($value['title'])?>">
        
          </div>

          <div class="col col-sm-9">

            <form action="/admin/" method="post">
              <fieldset>

                <legend>Edit Post</legend>
               
                <input type="hidden" name="post_id" value="<?=esc($value['post_id'])?>" />

              <div class="form-group required">
                  <label for="title"><strong>Blog Title</strong></label>
                  <input class="form-control" type="text" name="title" value="<?=esc($value['title'])?>" /> 
                  <?=err('title', $errors)?>
              </div>



               <div class="form-group required">

                  <label for="full_desc"><strong>Full Post Description</strong></label>
                  <?=err('full_desc', $errors)?>
                  <textarea id="body" rows="4" cols="50" class="form-control" name="full_desc"><?=esc($value['full_desc'])?></textarea>

              </div>

              <div class="form-group required">
                  <label for="author"><strong>Authors: </strong></label>
                  <select name="author_name" class="author_name">

                    <!-- <option  value="">Select Author</option> -->
                      <option value="">Select an author</option>
                      <?php foreach($all_authors as $author) :?>
                          
                        
                           <option <?=($author['author_name'] === $one_post[0]['author_name']) ? 'selected' : ''?> value="<?=esc($author['author_name'])?>"> 

                         <?=esc($author['author_name'])?>
                           
                         </option>

                      <?php endforeach; ?>

                  </select>
              </div>

              
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>


              <?php endforeach ; ?>


              </fieldset>
            </div>
          </form>
        </div>
      
      </div>
    </div>
  </div>


    
<script>
    $(document).ready(function(){

        $(".error-ul li").delay(2000).slideUp(2500);

    });
</script>

  <footer>

    <p>Contents copyright 2020 by S O U N D C O M E T</p>
    
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="/js/ckeditor/ckeditor.js"></script>


</body>
</html>