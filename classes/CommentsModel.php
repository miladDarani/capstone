<?php

namespace Capstone;

class CommentsModel extends Model
{

    protected $table = 'comment_rate';

    protected $key = 'comment_id';

    /**
     * add to comment_rate table 
     * @param [array] 
     */
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






// --------------------------------------------------------------- \\
    /**
     * Gets All comments on a particular post
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





// --------------------------------------------------------------- \\
        /**
         * comments that a user has made
         * @param  [int]
         * @return array
         */
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




// --------------------------------------------------------------- \\
        /**
         * all comments from table
         * @return [array] 
         */
        final public function allComments()
        {
            // Create query
            $query = "SELECT * FROM comment_rate
            JOIN users USING(user_id)
            JOIN blog_post USING(post_id)
             "; 
        

            $stmt = static::$dbh->prepare($query);


            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
            return $result;

        }



   
} // END OF MODEL