<?php
namespace Capstone;
class BlogModel extends Model
{

    protected $table = 'blog_post';

    protected $key = 'post_id';

   


     public function allPosts()
        {
            $query = 'SELECT blog_post.*,
            authors.author_name as author
            FROM 
            blog_post
            JOIN authors USING(author_id)';

            $stmt = static::$dbh->query($query);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }


        public function onePost($id)
        {
            $query = 'SELECT *
            FROM 
            blog_post
            JOIN authors USING(author_id)
            WHERE post_id = :id';

            $stmt = static::$dbh->prepare($query);

            $params = array (
                ':id' => $id
            );

            $stmt->execute($params);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }



        final function getAllPostsBySearch($searchterm)
        {

            $query = 'SELECT blog_post.*,
            authors.author_name as author
            FROM 
            blog_post
            JOIN authors USING(author_id)

            WHERE 
            blog_post.title LIKE :searchterm1
            OR
            authors.author_name LIKE :searchterm2
            OR
            blog_post.full_desc LIKE :searchterm3
            ORDER BY blog_post.title ASC';

            $stmt = static::$dbh->prepare($query);

            $params = array(
               ':searchterm1' => "%{$searchterm}%",
               ':searchterm2' => "%{$searchterm}%",
               ':searchterm3' => "%{$searchterm}%"
            );

            $stmt->execute($params);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;

            }





}