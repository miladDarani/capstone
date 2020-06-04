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
// |||     comments.php       ||| 
// ||| - shows list of all    |||  
// |||        comments.       |||     
// |||                        |||
// ||||||||||||||||||||||||||||||


require __DIR__ . '/../../config.php';

use Capstone\BlogModel;
use Capstone\CommentsModel;

$title = "Comments";

$c = new CommentsModel();
$all_comments = $c->allComments();

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

                <li class="nav-item active">
                    <a class="nav-link" href="comments.php">Comments <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="users.php">Users</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/">Back to SoundComet</a>
                </li>

            </ul>

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

    <div class="container admin-container">
        <div class="row">
            <div class="col-lg-12">

                <h1 class="mt-3">Comments</h1>
                
                    <form class="mb-5 form float-right form-inline" action="posts.php" method="get" autocomplete="off" novalidate>

                        <input class="form-control" type="text" id="s" name="s" maxlength="255" placeholder="Search Posts" value="" />

                        <button  type= "submit" class="btn float-left btn-info">
                            <i class="fas fa-search"></i>
                        </button>

                    </form>
                

               
                <div class="comments-row">
        
                    <table id="admin_posts" class="table table-striped table-dark">

                        <tr>
                            <th></th>
                            <th>By</th>
                            <th>Comment</th>
                            <th>Date</th>
                            <th>Post</th> 
                        </tr>
                    
                    <!-- PHP FOREACH LOOP -->
                    <?php foreach ($all_comments as $comment) : ?>
                  
                        <tr>

                            <td>

                                <img style="width:75px; margin-right:10px;" src="https://api.adorable.io/avatars/150/<?=$comment['first_name'];?>@adorable.png" alt="Profile Pic">

                            </td>

                            <td style="width:150px;">

                                <a style="color:white; "><?=esc($comment['first_name']) . ' ' . esc($comment['last_name'])?>
                                
                                </a>
                            
                            </td>

                            <td>

                                <a style="color:cornflowerblue" href="blog_detail.php?page=blog_detail&post_id=<?=esc($comment['post_id'])?>" ><?=esc($comment['comment_text'])?>
                                
                                </a>

                            </td>

                            <td>

                                <?=esc($comment['date_added'])?>
                                
                            </td>

                            <td class="title-size" style="width:200px; ">

                                <a  style="color:cornflowerblue;" href="blog_detail.php?page=blog_detail&post_id=<?=esc($comment['post_id'])?>" ><?=esc($comment['title'])?>
                                
                                </a>

                            </td>
                        
                        </tr>
                      
                        <?php endforeach; ?>
                        <!-- END FOREACH LOOP -->
                    </table>
                </div>  
            </div>
        </div>
    </div>

<!-- JQUERY -->
<script>
    $(document).ready(function(){
        $(".flash-area").delay(2500).slideUp(2500);
    });
</script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
