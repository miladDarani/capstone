<?php
                    //     ──────▄▀▄─────▄▀▄              W W W !!
                    //     ─────▄█░░▀▀▀▀▀░░█▄         E O  
                    //     ─▄▄──█░░░░░░░░░░░█──▄▄   M
                    //     █▄▄█─█░░▀░░┬░░▀░░█─█▄▄█
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// ||       Milad Darani - Capstone 2020 - Author Model Class           ||
// || Responsible for selecting all or one author, based on request     ||
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

namespace Capstone;

class AuthorModel extends Model
{


    protected $table = 'authors';

    protected $key = 'author_id';

        /**
         * [return all authors from author table]
         * @return [string] 
         */
        public function allAuthors()
        {
            $query = 'SELECT author_name
            FROM 
            blog_post
            WHERE author_name = :author_name;
            JOIN authors USING(author_id)';

            $stmt = static::$dbh->query($query);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }




// --------------------------------------------------------------- \\
        /**
         * [returns distinct authors from author table]
         * @return [string] 
         */
        public function fullAuthors()
        {
            $query = "SELECT DISTINCT author_name,author_id from authors";

            $stmt =  static::$dbh->query($query);

            $authors = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $authors;

        }





// --------------------------------------------------------------- \\
        /**
         * [return all authors from author table]
         * @return [string] 
         */
        public function authorsAll()
        {
            $query = 'SELECT * 
            FROM 
            authors';


            $stmt = static::$dbh->query($query);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }

   
} // END OF MODEL