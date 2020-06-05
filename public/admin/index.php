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
// |||        index.php       ||| 
// ||| - this is the admin    |||
// |||       dashboard        |||     
// |||                        |||
// ||||||||||||||||||||||||||||||
// 


require __DIR__ . '/../../config.php';

use Capstone\BlogModel;
use Capstone\UserModel;
use Capstone\CommentsModel;
use Capstone\AuthorModel;
use Capstone\Validator;
use Capstone\LogModel;

$title = "Dashboard";
$server = $_SERVER;
$post = new BlogModel();
$p = $post->allPosts();

// AGGREGATE FUNCTIONS
$min_views= $post->minViews();
$max_views= $post->maxViews();
$sum_views= $post->sumViews();
$avg_views= $post->avgViews();

$u = new UserModel();
$uu = $u->allUsers();

$c = new CommentsModel();
$cc = $c->allComments();

$a = new AuthorModel();
$aa = $a->authorsAll();

$v= new Validator();

$class='hidden';

$log= new LogModel();

$arr = ['remote_addr' => $_SERVER['REMOTE_ADDR'],
'remote_uri' => $_SERVER['REQUEST_URI'],
'request_method' => $_SERVER['REQUEST_METHOD']];

// $log->addLog($arr);
$my_log = $log->allLogs();


//Displays flash msg
if(empty($_SESSION['is_admin'])){
    $errors['admin'] = 'You must be an admin to see this page.';
    $_SESSION['errors'] = $errors;
    header('Location: /profile.php' );
    die;
}

//delete record
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['delete']) ){

        $_SESSION['delete'] = $_POST['delete'];

        $post->deleteRecord($_POST['post_id']);

        header('Location: posts.php');

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


    //UPDATE RECORD
    if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['success'])){
        //Checking for errors
        $v->required('title', $_POST['title']);
        $v->min_length('title', $_POST['title'],2);
        $v->max_length('title', $_POST['title'],255);

        $v->min_length('full_desc', $_POST['full_desc'],2);
        $v->required('full_desc', $_POST['full_desc']);

        $v->required('category', $_POST['category']);
        $v->min_length('category', $_POST['category'],2);

        $v->required('image', $_POST['image']);
        $v->min_length('image', $_POST['image'],5);

        $v->required('author_name', $_POST['author_name']);

        $errors = $v->errors();


        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['post'] = $_POST;

            header("Location:" . $_SERVER['HTTP_REFERER']);
            $class='err-msg';
            die;}
            
        $_SESSION['success'] = $_POST['success'];
        $post->updateRecord($_POST['post_id']);


        header('Location: posts.php ');
        die;
    }
    
      //DELETE RECORD
    if(!empty($_POST['delete']) ){
        dd("here");
        die;
        $_SESSION['delete'] = $_POST['delete'];

        $post->deleteRecord($_POST['post_id']);

        header('Location: posts.php');

        die;
}
  
    // ADD RECORD
    if(!empty($_POST['add'])){
        $_SESSION['add'] = $_POST['add'];
        $post->addPost($_POST['post_id']);
        header('Location: posts.php ');
        die;
    }




    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        $_SESSION['post'] = $_POST;

        $id = $_POST['post_id'];

        header("Location: blog_detail.php?page=blog_detail&post_id=".$id );
        $class='err-msg';
        die;
    }

} // END OF IF REQUEST POST
else
{
    $_SESSION['delete'] = "";
    // $_SESSION['success'] = "";
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
        
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="navbar-collapse collapse" id="navbarsExample03" style="">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Dash <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="posts.php">Posts</a>
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
  

<!-- Displays flash msg -->
<?php if(!empty($flash)) :?> 
    <div class="flash-area <?=esc($flash['class'])?>">

        <span><?=esc($flash['message'])?></span>

    </div>
<?php endif; ?>

<table class="table table-striped table-hover table-dark" style="width:90%; margin:30px auto;">
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

            <!-- aggregate results -->
            <td class="one-quarter">

                <p>
                    Min View: <strong><?=implode(" ",$min_views[0])?></strong><br>
                    Max View: <strong><?=implode(" ",$max_views[0])?></strong><br>
                    Sum of all views: <strong><?=implode(" ",$sum_views[0])?></strong><br>
                    Average per views: <strong><?=round(implode(" ",$avg_views[0]))?></strong><br>
                </p>

            </td>
        </tr>
    </tbody>
</table>

<table class="table table-striped table-hover table-dark " style="width:90%; margin:30px auto;">
    <tbody>
        <tr  style="background-color:cornflowerblue">
            <th>Time</th>
            <th>Request URI</th>
            <th>Request Method</th>
            <th>HTTP Status</th>
        </tr>

                
                <?php foreach ($my_log as $log => $value ) : ?>

                    <tr>
                        <td><?=$value['log_date']?></td>
                        <td><?=$value['remote_uri']?></td>
                        <td><?=$value['remote_addr']?></td>
                        <td><?=$value['request_method']?></td>

                    </tr>
                <?php endforeach; ?>


    </tbody>
</table>
<!-- JQUERY -->
<script>
    $(document).ready(function(){
        $(".flash-area").delay(2500).slideUp(2500);
    });
</script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

    </body>
</html>