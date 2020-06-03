<?php
require __DIR__ . '/../../config.php';

use Capstone\Validator;
use Capstone\BlogModel;
use Capstone\CommentsModel;
use Capstone\AuthorModel;

$v = new Validator();

$authors = new AuthorModel;
$all_authors = $authors->fullAuthors();

$title="Add Post";

// CHECKING FOR USER ERROR VIA VALIDATOR CLASS
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
    die;
}


$model = new BlogModel();
$added_post = $model->addPost($_POST);

if($added_post > 0){
    $flash = array(
        'class'=>'success-msg',
        'message' => "Your blog entry has been saved! "

    );
    $_SESSION['flash'] = $flash;
    header('Location: /admin' );
    die;
} 
else 
{
    $flash = array(
        'class'=>'err-msg',
        'message' => "Your blog entry has NOT been saved, There was a problem "
    );
    $_SESSION['flash'] = $flash;
}
