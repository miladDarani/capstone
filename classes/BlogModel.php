<?php

                    //     ──────▄▀▄─────▄▀▄              W W W !!
                    //     ─────▄█░░▀▀▀▀▀░░█▄         E O  
                    //     ─▄▄──█░░░░░░░░░░░█──▄▄   M
                    //     █▄▄█─█░░▀░░┬░░▀░░█─█▄▄█
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// ||       Milad Darani - Capstone 2020 - Blog Model Class             ||
// || Sound Comets primary Class, it is based on the model class and    ||
// || its job is to help us select stuff from our blog post.            ||
// || - Responsile for our search results.                              ||
// || - Responsible for updating records.                               ||
// || - Responsile for adding records.                                  ||
// || - Responsible for deleting records.                               ||
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// 
namespace Capstone;
class BlogModel extends Model
{

    protected $table = 'blog_post';

    protected $key = 'post_id';

   

        /**
         * Return all posts from blog
         _post table
         * @return [array] [description]
         */
        public function allPosts()
            {
                $query = 'SELECT blog_post.*,
                authors.author_name as author
                FROM 
                blog_post
                JOIN authors USING(author_id)
                WHERE deleted = 0';

                $stmt = static::$dbh->query($query);

                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $result;
            }  




// --------------------------------------------------------------- \\
        /**
         * [onePost return only one post from blog_post]
         * @param  [int] $id 
         * @return [array]
         */
        public function onePost($id)
        {
            $query = 'SELECT *
            FROM 
            blog_post
            JOIN authors USING(author_id)
            WHERE post_id = :id
            AND deleted = 0';

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
         * gets all matching posts using search
         * @param  [string] 
         * @return [array]        
         */
        final function getAllPostsBySearch($searchterm)
        {

            $query = 'SELECT blog_post.*,
            authors.author_name as author
            FROM 
            blog_post
            JOIN authors USING(author_id)
            WHERE
            blog_post.title LIKE :searchterm1
            AND deleted=0
            OR
            authors.author_name LIKE :searchterm2
            AND deleted=0
            OR
            blog_post.full_desc LIKE :searchterm3
            AND deleted=0
            ORDER BY blog_post.title ASC';

            $stmt = static::$dbh->prepare($query);

            $params = array(
               ':searchterm1' => "%{$searchterm}%",
               ':searchterm2' => "%{$searchterm}%",
               ':searchterm3' => "%{$searchterm}%"
            );

            $stmt->execute($params);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;

            }





// --------------------------------------------------------------- \\
        /**
         * [updateRecord edit and update an exisitng record]
         * @param  [int] $id 
         * @return [array]    
         */
        final public function updateRecord($id)
        {
           $query = '
            UPDATE blog_post
           
            SET 
            title = :title,
            full_desc=:full_desc,
            author_id = :author_id,
        
            seo_done=:seo_done,
            category=:category,
            image=:image

            WHERE 
            post_id=:post_id
            AND deleted = 0';


            $stmt = static::$dbh->prepare($query);

            $params = array (
                ':title' => $_POST['title'],
                ':full_desc' => $_POST['full_desc'],
                ':author_id' => $_POST['author_name'],
                ':post_id' => $_POST['post_id'],
              
                ':seo_done' => $_POST['seo_done'],
                ':category' => $_POST['category'],
                ':image' => $_POST['image']

            );

            $stmt->execute($params);
            
        }







// --------------------------------------------------------------- \\
            /**
             * [deleteRecord deleted a record]
             * @param  int    
             * @return [array ]     to be deleted
             */
            final public function deleteRecord(int $id)
            {
                $query = ' UPDATE blog_post SET deleted = 1 WHERE post_id = :post_id';


                $stmt = static::$dbh->prepare($query);

                $params = array (
                    ':post_id' => $id
                );

                return $stmt->execute($params);
            }


            


// --------------------------------------------------------------- \\
            /**
             * [addPost add a post to the blog_post table]
             * @param [array] $array
             */
            public function addPost($array){

                $query = 'INSERT INTO blog_post 
                (title, full_desc, read_length, views, seo_done, category, author_id, image) 
                VALUES
                (:title, :full_desc,:read_length,:views, :seo_done, :category, :author_id, :image)';

                 $stmt = static::$dbh->prepare($query);

                 $params = array (
                    ":title" => $array['title'],
                    ":full_desc" => $array['full_desc'],
                    ":read_length" => 2,
                    ":views" => 0,
                    ":seo_done" => $array['seo_done'],
                    ":category" => $array['category'],
                    ":author_id" => 1,
                    ":image" => $array['image'],

                );

                 $stmt->execute($params);

                 return static::$dbh->lastInsertId();

            }






            
// --------------------------------------------------------------- \\
            /**
             * gets all images from the database
             * @return [array] 
             */
            public function allImages()
            {
                $query = "SELECT DISTINCT image from blog_post 
                WHERE deleted = 0";

                $stmt =  static::$dbh->query($query);

                $images = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $images;

            }





            /**
             * gets all images from the database
             * @return [array] 
             */
            public function categories()
            {
                $query = "SELECT DISTINCT category from blog_post 
                WHERE deleted = 0";

                $stmt =  static::$dbh->query($query);

                $images = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $images;

            }





            function getAllBlogsByCategory($category)
            {

                $query = 'SELECT * 
                            FROM 
                            blog_post
                            WHERE 
                            category = :category';

                $stmt = static::$dbh->prepare($query);

                $params = array(
                    ':category' => ($category)
                );

                $stmt->execute($params);

                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $result;
            }

// --------------------------------------------------------------- \\
            /**
             * minimum # of views in a post
             * @return [int] 
             */
            public function minViews()
            {
                $query = "SELECT MIN(views) FROM blog_post 
                WHERE deleted = 0";

                $stmt =  static::$dbh->query($query);

                $views = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $views;
            }






// --------------------------------------------------------------- \\
            /**
             * maximum # of views in a post
             * @return [int] 
             */
            public function maxViews()
            {
                $query = "SELECT MAX(views) FROM blog_post 
                WHERE deleted = 0";

                $stmt =  static::$dbh->query($query);

                $views = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $views;
            }



// --------------------------------------------------------------- \\
            /**
             * sum of views in a post
             * @return [int] 
             */
            public function sumViews()
            {
                $query = "SELECT SUM(views) FROM blog_post 
                WHERE deleted = 0";

                $stmt =  static::$dbh->query($query);

                $views = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $views;
            }


// --------------------------------------------------------------- \\
            /**
             * average # of views in a post
             * @return [int] 
             */
            public function avgViews()
            {
                $query = "SELECT AVG(views) FROM blog_post 
                WHERE deleted = 0";

                $stmt =  static::$dbh->query($query);

                $views = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $views;
            }

        




} // END OF MODEL