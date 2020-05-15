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
           
            JOIN authors USING(author_id)
           
           ';

            $stmt = static::$dbh->query($query);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }


        public function onePost($id)
        {
            $query = 'SELECT *
            
          

            FROM 
            blog_post
        
          
            WHERE post_id = :id';

            $stmt = static::$dbh->prepare($query);

            $params = array (
                ':id' => $id
            );

            $stmt->execute($params);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }






}