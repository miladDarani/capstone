<?php

namespace Capstone;
class UserModel extends Model
{

    protected $table = 'users';

    protected $key = 'user_id';

    /**
     * gets one user
     * @param  [int] 
     * @return [array]     
     */
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




// ------------------------------------------------------ \\
    /**
     * Similar to the function above , gets one user 
     * @param  [int] 
     * @return [array]     
     */
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





// ------------------------------------------------------ \\
        /**
         * return all users from the user table
         * @return [array] 
         */
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