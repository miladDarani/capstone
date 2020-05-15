<?php


require __DIR__ . '/../../config.php';


require __DIR__ . '/models/blog_post_model.php';
$posts = getAllPosts();
$title ="Admin"


$query = 'SELECT * FROM blog_post';

$stmt = $dbh->prepare($query);


// // $params = array(
// //     ':user_id' => $_SESSION['user_id']
// // );


$stmt->execute();

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);




?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/977c9f68f6.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MDdH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?=$title?></title>
  </head>
  <body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

      <a class="navbar-brand" href="#"><?=$title?></a>
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

  



  <div class="container">
    <div class="row">
      <div class="col-lg-12">


        <h1 class="mt-5">Posts</h1>

          
          <p>
            <a class="btn float-left btn-success" href="#">Add a Post</a> 

            <form class="form float-right form-inline" action="#" method="post">

              <input type="hidden" name="hide" value="" />

              <input type="text" name="search" placeholder="Search Posts"/>

              <button>Search</button>

            </form>
          </p>




               
        <table id="admin_posts" class="table table-striped table-dark">
          <tr>
              <th>Post ID</th>
              <th>Title</th>
              <th>Created_at</th>
              <th class="actions">Actions</th>
          </tr>

          <tr>
             
              <?php foreach ($posts as $key => $value) : ?>
                <td><?=$value['post_id']?></td>
                <td><?=$value['title']?></td>
                <td><?=$value['date_posted']?></td>
                <td>
                  <a class="btn btn-primary btn-sm" href="#">edit</a>&nbsp;<a class="delete btn btn-danger btn-sm" data-id="25" href=""><i class="fas fa-trash"></i></a>
                </td>
          </tr>

              <?php endforeach ; ?>


        </table>

        
      </div>
    </div>
  </div>


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