<?php
namespace Capstone;

class AuthorModel extends Model
{

    protected $table = 'authors';

    protected $key = 'author_id';

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

        public function fullAuthors()
        {
            $query = "SELECT DISTINCT author_name,author_id from authors";

            $stmt =  static::$dbh->query($query);

            $authors = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $authors;

        }

   
}