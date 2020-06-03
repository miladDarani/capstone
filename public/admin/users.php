<?php

require __DIR__ . '/../../config.php';

use Capstone\BlogModel;
use Capstone\UserModel;

$title = "Users";

$u = new UserModel();
$all_users = $u->allUsers();

// IF USER IS NOT AN ADMIN
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

                <li class="nav-item">
                    <a class="nav-link" href="posts.php">Posts</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="authors.php">Authors</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="comments.php">Comments</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="users.php">Users <span class="sr-only">(current)</span></a>
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
  

<!-- FLASH MSG AREA -->
<?php if(!empty($flash)) :?> 
    <div class="flash-area <?=esc($flash['class'])?>">

        <span><?=esc($flash['message'])?></span>

    </div>
<?php endif; ?>

    <div class="container admin-container">
        <div class="row">
            <div class="col-lg-12">

                <h1 class="mt-3">Users</h1>

                <p>
                    <form class="mb-5 form float-right form-inline" action="posts.php" method="get" autocomplete="off" novalidate>


                        <input class="form-control" type="text" id="s" name="s" maxlength="255" placeholder="Search Posts" value="" />

                        <button  type= "submit" class="btn float-left btn-info"><i class="fas fa-search"></i></button>

                    </form>
                </p>




               
            <table id="admin_posts" class="table table-striped table-dark">
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>E-Mail</th>
                </tr>

            
            <!-- PHP FOREACH LOOP -->
            <?php foreach ($all_users as $key => $value) : ?>
                <tr>
                    <!-- profile pic -->
                    <td>
                        <img style="width:58px;" src="https://api.adorable.io/avatars/150/<?=$value['first_name'];?>@adorable.png" alt="Profile Picture"></td>
                    <td>

                        <?=esc($value['first_name']). " " .esc($value['last_name'])?>
                        <?php if(esc($value['is_admin']) == 1 ){echo "<br/>(admin)";} ?>    
                    </td>

                    <td>
                        <?=esc($value['street']) . ', ' . esc($value['city']) . ', ' . esc($value['province']) ?>
                            
                    </td>
                    <td>
                        <?=esc($value['email'])?>
                    </td>
                  
                </tr>
            <?php endforeach ; ?>
            <!-- END FOREACH LOOP -->

            </table>
            </div>
        </div>
    </div>

<!-- JQUERY -->
<script>
    $(document).ready(function(){

        $(".flash-area").delay(2500).slideUp(2500);

    });
</script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIMB07jRM" crossorigin="anonymous"></script>
    </body>
</html>
