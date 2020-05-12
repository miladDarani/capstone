<?php

class Model
{
    
     static protected $dbh;

    static public function init(PDO $dbh) {
        static::$dbh = $dbh;
    }


        /**
     * Get All
     * @return Array
     */
    public function all()
    {
        // Create query
        $query = "SELECT * FROM {$this->table}";

        // create stmt from DB
        $stmt = static::$dbh->query($query);

        // fetch all results
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // return the results
        return $result;

    }

        /**
     * Get one 
     * @param  Integer $author_id
     * @return Array  
     */
    public function one(int $id)
    {

        // Create query 
        $query = "SELECT * FROM {$this->table} WHERE {$this->key} = :id";

        // Create stmt from $dbh (prepare)
        $stmt =static::$dbh->prepare($query);

        // Set params
        $params = array(
            ':id' => $id
        );

        // Execute query
        $stmt->execute($params);

        // fetch result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return the result
        return $result;
        
    }



}