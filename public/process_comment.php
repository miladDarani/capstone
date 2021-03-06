<?php

require __DIR__ . "/../config.php";
use Capstone\Validator;
use Capstone\BlogModel;
use Capstone\CommentsModel;

$v = new Validator();

$v->required('comment_text', $_POST['comment_text']);

$errors = $v->errors();

if(count($errors) > 0) {

    $_SESSION['errors'] = $errors;
  //9A. Make post sticky
    $_SESSION['post'] = $_POST;
    
    header('Location:' . $_SERVER['HTTP_REFERER']);
    die;
}
// if not post , redirect
if('POST' !== $_SERVER['REQUEST_METHOD']){
    die("Not Allowed");
}

$errors = $v->errors();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['post'] = $post;
    header('Location:' . $_SERVER['HTTP_REFERER']);
    die;
}

$model = new CommentsModel();

// adds a comment to comment table
$comment_id = $model->add($_POST);

if($comment_id > 0){
    $flash = array(
        'class'=>'success-msg',
        'message' => "Your comment has been saved! "
    );

} else {
    $flash = array(
        'class'=>'err-msg',
        'message' => "Your comment has NOT been saved, There was a problem "

    );
}




header('Location:' . $_SERVER['HTTP_REFERER']);
die;