<?php


require __DIR__ . '/../../config.php';

use Capstone\BlogModel;
use Capstone\UserModel;
use Capstone\CommentsModel;
use Capstone\AuthorModel;
use Capstone\Validator;

$title = "Admin";

$post = new BlogModel();
$p = $post->allPosts();


$u = new UserModel();
$uu = $u->allUsers();

$c = new CommentsModel();
$cc = $c->allComments();

$a = new AuthorModel();
$aa = $a->authorsAll();


$v= new Validator();

$class='hidden';
// --------- TEST AREA -------------\\
// dd($_SERVER['REQUEST_METHOD']);
// // die;
// dd($_POST);
// die;
// dd($_GET);
// // dd($_SERVER['REQUEST_METHOD']);
// // dd($flash);

// die;

if(empty($_SESSION['is_admin'])){
    $errors['admin'] = 'You must be an admin to see this page.';
    $_SESSION['errors'] = $errors;
    header('Location: /profile.php' );
    die;
}
//NO ERRORS
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['delete'])){

        $_SESSION['delete'] = "delete";

        $post->deleteRecord($_POST['post_id']);

        header('Location: index.php');

        die;
        
}



if(!empty($_SESSION['delete'])){

      $flash =array(
          'class' => "success-msg",
          'message' => 'Record Successfully Deleted'
      );
}
    



//search function
if(!empty($_GET['s'])){

    $title2 = 'You searched for ' . $_GET['s'];
    $p = $post->getAllPostsBySearch($_GET['s']);  
}

if(!empty($_GET['s1'])){

    $title2 = 'You searched for ' . $_GET['s1'];
    $p = $post->getAllPostsBySearch($_GET['s1']);  
}

if(!empty($_GET['s2'])){

    $title2 = 'You searched for ' . $_GET['s2'];
    $p = $post->getAllPostsBySearch($_GET['s2']);  
}

//REQUEST METHOOD = POST
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $v->required('title', $_POST['title']);
    $v->min_length('title', $_POST['title'],2);
    $v->max_length('title', $_POST['title'],255);

    $v->min_length('full_desc', $_POST['full_desc'],2);
    $v->required('full_desc', $_POST['full_desc']);


    $v->required('category', $_POST['category']);
    $v->min_length('category', $_POST['category'],2);

    $v->required('image', $_POST['image']);
    $v->min_length('image', $_POST['image'],5);



    $errors = $v->errors();

    if(!empty($_POST['success'])){
        $_SESSION['success'] = "success";
        $post->updateRecord($_POST['post_id']);
    }



    if(!empty($_POST['add'])){
        $post->addPost($_POST['post_id']);
    }


    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        $_SESSION['post'] = $_POST;

        $id = $_POST['post_id'];

        header("Location: blog_detail.php?page=blog_detail&post_id=".$id );
        $class='err-msg';
        die;
   
    }

}
else
{
  // session_destroy();
}
   
    if(!empty($_SESSION['success'])){
    
         $flash =array(
          'class' => "success-msg",
          'message' => 'Record Successfully Updated'
        );

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

    .flash-area{
    list-style: none;
    padding:  12px;
    text-align: center;
    font-weight: 500;
  }
  .icons {
    display: flex;
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
            <a class="nav-link" href="/admin">Posts <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="authors.php">Authors</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="comments.php">Comments</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="users.php">Users</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/">Back to SoundComet</a>
          </li>

        </ul>
            <form class="form float-right form-inline" action="index.php" method="get" autocomplete="off" novalidate>


              <input class="form-control" type="text" id="s1" name="s1" maxlength="255" placeholder="Search Posts" value="" />

              <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>

            </form>
      </div>
    </nav>
  


<?php if(!empty($flash)) :?> 
    <div class="flash-area <?=esc($flash['class'])?>">

      <span><?=esc($flash['message'])?></span>

    </div>
 <?php endif; ?>

 <table class="table table-striped table-hover table-dark" style="width:90%; margin:0 auto;">
    <tbody>
        <tr>
            <th class="one-quarter ">Dashboard</th>
        </tr>

        <tr>
          <td class="one-quarter">

            <p>
               Posts: <strong><?=count($p)?></strong><br>
               Users: <strong><?=count($uu)?></strong><br>
               Comments: <strong><?=count($cc)?></strong><br>
               Authors: <strong><?=count($aa)?></strong><br>
            </p>

          </td>
        </tr>

    </tbody>
  </table>

  <div class="container admin-container">
    <div class="row">
      <div class="col-lg-12">


        <h1 class="mt-3">Posts</h1>

          
          <p>

            <form action="index.php" method="post" novalidate="">
                <button class=" btn float-left btn-success " href="#">Add a Post</button> 
                <input type="hidden" name="add" value="add" />
            </form>

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
                <td class="icons">
                  <form action="blog_detail.php" method="get" >
                    <a type="submit" class="btn btn-primary btn-sm"  href="/admin/blog_detail.php?page=blog_detail&post_id=<?=$value['post_id']?>">edit</a>
                    &nbsp;

                    
                  </form>

                  <form action="/admin/" method="post">
                    <input type="hidden" name="delete" value="delete" />
                    <input type="hidden" name="post_id" value="<?=esc($value['post_id'])?>" />
                    <button type="submit" class="delete btn btn-danger btn-sm" href="index.php"><i class="fas fa-trash"></i></button>
                    
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

        $(".flash-area").delay(2500).slideUp(2500);

    });
</script>


  </body>
</html>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIMB07jRM" crossorigin="anonymous"></script>
  </body>
</html>