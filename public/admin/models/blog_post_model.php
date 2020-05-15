<?php


function getAllPosts()
{

    global $dbh; // $dbh = the global $dbh;

    $query = 'SELECT * FROM blog_post';

    $stmt = $dbh->prepare($query);

    $stmt->execute();

    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $posts;
   
    
}