<?php
// try{
require __DIR__ . '/../config.php';


require CLASSES . '/UserModel.php';
require CLASSES . '/AuthorModel.php';
require CLASSES . '/BlogModel.php';


$user = new UserModel();
$author = new AuthorModel();
$blog = new BlogModel();


// dd($blog);
dd($author->all());
// dd($user->one(2));
// // dd($blog->one(2));
// // dd($blog->all());
// dd($user->all());
// dd($blog->one(2));
// dd($blog->all());




// dd($author->one(3));
// dd($blog->one(5));
// }catch(Exception $e){
//     echo $e->getMessage();
//     print_r($e->getTrace());
// }