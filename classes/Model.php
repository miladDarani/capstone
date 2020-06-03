<?php

                    //     ──────▄▀▄─────▄▀▄              W W W !!
                    //     ─────▄█░░▀▀▀▀▀░░█▄         E O  
                    //     ─▄▄──█░░░░░░░░░░░█──▄▄   M
                    //     █▄▄█─█░░▀░░┬░░▀░░█─█▄▄█
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// ||       Milad Darani - Capstone 2020 - The Model Class              ||
// || Every other class under Capdtone namespace is extended from this  ||
// || You can select all of something or just one of something          ||
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
namespace Capstone;
class Model
{
    
    static protected $dbh;

    static public function init(\PDO $dbh) {
        static::$dbh = $dbh;
    }


    /**
     * Gets All from any table 
     * @return Array
     */
    final public function all()
    {
        // Create query
        $query = "SELECT * FROM {$this->table}";

        // create stmt from DB
        $stmt = static::$dbh->query($query);

        // fetch all results
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        // return the results
        return $result;

    }




// --------------------------------------------------------------- \\
    /**
     * Gets one from any table 
     * @param  Integer $author_id
     * @return Array  
     */
    final public function one(int $id)
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
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        // return the result
        return $result;
        
    }



    


}