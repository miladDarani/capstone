<?php

namespace Capstone;
class UserModel extends Model
{

    protected $table = 'users';

    protected $key = 'user_id';

    public function oneUser($id)
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


   
}