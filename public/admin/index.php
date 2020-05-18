<?php


require __DIR__ . '/../../config.php';
use Capstone\BlogModel;
use Capstone\Validator;
$title = "Admin";
$post = new BlogModel();
$p = $post->allPosts();
$v= new Validator();

$class='hidden';

// $errors=[];
// Validation
// if(empty($_POST['title'])){
//   $errors['title'] = "Title is a required field";
// }
// if(empty($_POST['full_desc'])){
//   $errors['full_desc'] = "Post description is a required field";
// }



//NO ERRORS
if(empty($errors)){
  $class='success-msg';
  $success = $_SESSION['success'] = " Record Successfully Updated";
 
}

if($_SERVER['REQUEST_METHOD'] === "GET"){
  session_destroy();
}


//YES ERRORS




//search function
if(!empty($_GET['s'])){
    $title2 = 'You searched for ' . $_GET['s'];
    $p = $post->getAllPostsBySearch($_GET['s']);  
}



if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $v->required('title', $_POST['title']);
  $v->required('full_desc', $_POST['full_desc']);

  $v->max_length('title', $_POST['title'],255);
  $v->min_length('title', $_POST['title'],2);

  $v->min_length('full_desc', $_POST['full_desc'],2);

  $errors = $v->errors();
    // $post->updateRecord($_POST['id']);
  $post->updateRecord($_POST['post_id']);

    if(!empty($errors)){
  
    $_SESSION['errors'] = $errors;
    
    $_SESSION['post'] = $_POST;
 
    $id = $_POST['post_id'];
    header("Location: blog_detail.php?page=blog_detail&post_id=".$id );
    $class='err-msg';
    die;
  //DISPLAY SOMETHING
 
  }
}









?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css" type="text/css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/977c9f68f6.js" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
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
    </style>


    <title><?=esc($title)?></title>
  </head>
  <body>
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
  


<div class="<?=$class?>">
 
 
    <p><?php 
    echo $_SESSION['success'];
    $_SESSION['success'] = '';


    ?></p>
   
</div>

  <div class="container admin-container">
    <div class="row">
      <div class="col-lg-12">


        <h1 class="mt-3">Posts</h1>

          
          <p>
            <a class=" btn float-left btn-success " href="#">Add a Post</a> 

            <form class="mb-5 form float-right form-inline" action="index.php" method="get" autocomplete="off" novalidate>


              <input class="form-control" type="text" id="s" name="s" maxlength="255" placeholder="Search Posts" value="" />

              <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>

            </form>
          </p>




               
        <table id="admin_posts" class="table table-striped table-dark">
          <tr>
              <th>Post ID</th>
              <th>Author</th>
              <th>Title</th>
              <th>Created at</th>
              <th class="actions">Actions</th>
          </tr>

          <tr>
             
              <?php foreach ($p as $key => $value) : ?>
                <td><?=$value['post_id']?></td>
                <td><?=$value['author']?></td>
                <td><?=$value['title']?></td>
                <td><?=$value['date_posted']?></td>
                <td>
                  <form action="blog_detail.php" method="get" >
                    <a type="submit" class="btn btn-primary btn-sm"  href="/admin/blog_detail.php?page=blog_detail&post_id=<?=$value['post_id']?>">edit</a>
                    &nbsp;

                    <button type="submit" class="delete btn btn-danger btn-sm" data-id="25" href=""><i class="fas fa-trash"></i></button>
                  </form>
                </td>
          </tr>

              <?php endforeach ; ?>


        </table>

        
      </div>
    </div>
  </div>

<script>
    $(document).ready(function(){

        $(".success-msg p").delay(2000).slideUp(2500);

    });
</script>
  <footer>

    <p>Contents copyright 2020 by S O U N D C O M E T</p>
    
  </footer>

  </body>
</html>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIMB07jRM" crossorigin="anonymous"></script>
  </body>
</html>