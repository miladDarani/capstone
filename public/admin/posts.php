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
// |||        posts.php       ||| 
// ||| - shows all blog post  |||
// |||    in a list format    |||
// |||     you can edit or    |||
// |||      delete them.      |||     
// |||                        |||
// ||||||||||||||||||||||||||||||

require __DIR__ . '/../../config.php';

use Capstone\BlogModel;
use Capstone\UserModel;
use Capstone\CommentsModel;
use Capstone\AuthorModel;
use Capstone\Validator;

$title = "Posts";

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

// Displays flash msg 
if(empty($_SESSION['is_admin'])){
    $errors['admin'] = 'You must be an admin to see this page.';
    $_SESSION['errors'] = $errors;
    header('Location: /profile.php' );
    die;
}
// //IF NO ERRORS
// if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['delete']) ){

//         $_SESSION['delete'] = $_POST['delete'];

//         $post->deleteRecord($_POST['post_id']);

//         header('Location: index.php');

//         die;
// }


if(!empty($_SESSION['success'])){
        $flash =array(
          'class' => "success-msg",
          'message' => 'Record Successfully updated'
        );
        $_SESSION['success'] = "";
}

if(!empty($_SESSION['add'])){
        $flash =array(
          'class' => "success-msg",
          'message' => 'Record Successfully added'
        );
        $_SESSION['add'] = "";
}
if(!empty($_SESSION['delete'])){
        $flash =array(
          'class' => "success-msg",
          'message' => 'Record Successfully deleted'
        );
        $_SESSION['delete'] = "";
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

    if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['success'])){
 
        $post->updateRecord($_POST['post_id']);

    }
  
    // ADDING A POST
    if(!empty($_POST['add'])){
        $post->addPost($_POST['post_id']);
    }

    // REDIRECT IF ERRORS
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
   // $_SESSION['delete'] = "";
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
            .icons 
            {
                display: flex;
            }
            @media screen and (max-width:890px){
                .form {
                    display:none;
                }
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

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Dash</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="posts.php">Posts <span class="sr-only">(current)</span></a>
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

            <!-- SEARCH FORM -->
            <form class="form float-right form-inline" action="posts.php" method="get" autocomplete="off" novalidate>

                <input class="form-control" type="text" id="s1" name="s1" maxlength="255" placeholder="Search Posts" value="" />

                <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>

            </form>
        </div>
    </nav>
  

    <!-- FLASH MSG AREA -->
    <?php if(!empty($flash)) :?> 
    <div class="flash-area <?=esc($flash['class'])?>">

      <span><?=esc($flash['message'])?></span>

    </div>
    <?php endif; ?>

 

    <div class="container admin-container">
        <div class="row">
            <div class="col-lg-12">

            <h1 class="mt-3">Posts</h1>

           

                <form action="add_post.php" method="post" novalidate="">
                    <button class=" btn float-left btn-success " >Add a Post</button> 
                    <input type="hidden" name="add" value="add" />
                </form>
                
                <!-- SEARCH AREA -->
                <form class="mb-5 form float-right form-inline" action="posts.php" method="get" autocomplete="off" novalidate>

                    <input class="form-control" type="text" id="s" name="s" maxlength="255" placeholder="Search Posts" value="" />

                    <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>
                </form>
         
       
            <table id="admin_posts" class="table table-striped table-dark">
                <tr>
                    <th>Post ID</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Created at</th>
                    <th class="actions">Actions</th>
                </tr>

               <!-- PHP FOREACH LOOP -->
                <?php foreach ($p as $key => $value) : ?>
                <tr>
                    <td><?=esc($value['post_id'])?></td>
                    <td><?=esc($value['author'])?></td>
                    <td><?=esc($value['title'])?></td>
                    <td><?=esc($value['date_posted'])?></td>

                    <td class="icons">
                        <!-- EDIT A POST  -->
                        <form action="blog_detail.php" method="get" >
                        <a class="btn btn-primary btn-sm"  href="/admin/blog_detail.php?page=blog_detail&post_id=<?=esc($value['post_id'])?>">edit</a>
                        &nbsp;

                        </form>
                    
                        <!--  SOFT DELETE A POST -->
                        <form action="/admin/" method="post">
                            <input type="hidden" name="delete" value="delete" />
                            <input type="hidden" name="post_id" value="<?=esc($value['post_id'])?>" />
                            <button onclick="return (confirm('Are you sure you want to delete?'))" type="submit" class="delete btn btn-danger btn-sm" ><i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <?php endforeach ; ?>
                <!-- END OF FOREACH LOOP -->

            </table> 
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        $(".flash-area").delay(2500).slideUp(2500);

    });

    // CONFIRM BOX 
    function deleteItem(e) {
        if (confirm("Are you sure?")) {
            return true;
        }
        else 
        {
            location.reload();
            return false;
        }
    }   

</script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>