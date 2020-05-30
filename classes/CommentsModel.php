<?php

namespace Capstone;

class CommentsModel extends Model
{

    protected $table = 'comment_rate';

    protected $key = 'comment_id';

    public function add($array){

        $query = 'INSERT INTO comment_rate
              (user_id, post_id, comment_text)
              VALUES
              (:user_id, :post_id, :comment_text)';

              $stmt = static::$dbh->prepare($query);

              $params = array (
                ":user_id" => $array['user_id'],
                ":post_id" => $array['post_id'],
                ":comment_text" => $array['comment_text']
              );

              $stmt->execute($params);

              return static::$dbh->lastInsertId();

    }

         /**
     * Get All
     * @return Array
     */
    final public function postComments($id)
    {
        // Create query
        $query = "SELECT comment_text, date_added, user_id, first_name, last_name FROM comment_rate  
        JOIN users USING(user_id)
        JOIN blog_post USING(post_id)

        WHERE post_id = :id";

         $stmt = static::$dbh->prepare($query);

            $params = array (
                ':id' => $id
            );

            $stmt->execute($params);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
            return $result;

    }

        final public function userComments($id)
    {
        // Create query
        $query = "SELECT comment_text, date_added, user_id, first_name, last_name, post_id, title, image FROM comment_rate  
        JOIN users USING(user_id)
        JOIN blog_post USING(post_id)

        WHERE user_id = :id";

         $stmt = static::$dbh->prepare($query);

            $params = array (
                ':id' => $id
            );

            $stmt->execute($params);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
            return $result;

    }

   
}