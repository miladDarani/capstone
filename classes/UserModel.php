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
            users
            JOIN authors USING(author_id)
            WHERE user_id = :id';

            $stmt = static::$dbh->prepare($query);

            $params = array (
                ':id' => $id
            );

            $stmt->execute($params);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
            return $result;
        }

    public function ourUser($id)
    {
        $query = 'SELECT *
        FROM 
        users
        WHERE user_id = :id';

        $stmt = static::$dbh->prepare($query);

        $params = array (
            ':id' => $id
        );

        $stmt->execute($params);

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }


        public function allUsers()
        {
            $query = 'SELECT * 
            FROM 
            users';


            $stmt = static::$dbh->query($query);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }


   
}