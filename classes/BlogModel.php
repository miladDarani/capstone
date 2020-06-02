<?php
namespace Capstone;
class BlogModel extends Model
{

    protected $table = 'blog_post';

    protected $key = 'post_id';

   


     public function allPosts()
        {
            $query = 'SELECT blog_post.*,
            authors.author_name as author
            FROM 
            blog_post
            JOIN authors USING(author_id)';

            $stmt = static::$dbh->query($query);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }


        public function onePost($id)
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



        final function getAllPostsBySearch($searchterm)
        {

            $query = 'SELECT blog_post.*,
            authors.author_name as author
            FROM 
            blog_post
            JOIN authors USING(author_id)

            WHERE 
            blog_post.title LIKE :searchterm1
            OR
            authors.author_name LIKE :searchterm2
            OR
            blog_post.full_desc LIKE :searchterm3
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
            post_id=:post_id';



            //3. prepare the query
            $stmt = static::$dbh->prepare($query);
            //4.param
            $params = array (
                ':title' => $_POST['title'],
                ':full_desc' => $_POST['full_desc'],
                ':author_id' => $_POST['author_name'],
                ':post_id' => $_POST['post_id'],
              
                ':seo_done' => $_POST['seo_done'],
                ':category' => $_POST['category'],
                ':image' => $_POST['image']


            );
            //5.execute
            // dd($_POST);
            // dd($stmt);
            // dd($params);
            // die;
            $stmt->execute($params);
            



     
        }


            final public function deleteRecord(int $id)
            {
                $query = 'DELETE FROM blog_post 
               
                WHERE post_id = :post_id';

                $stmt = static::$dbh->prepare($query);

                $params = array (
                    ':post_id' => $id
                );
                

                

                

                return $stmt->execute($params);
            }


            



            /*
             * adds one post to blog_post
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
            


            public function allImages()
            {
                $query = "SELECT DISTINCT image from blog_post";

                $stmt =  static::$dbh->query($query);

                $images = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $images;

            }


            public function minViews()
            {
                $query = "SELECT MIN(views) FROM blog_post";

                $stmt =  static::$dbh->query($query);

                $views = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $views;
            }


            public function maxViews()
            {
                $query = "SELECT MAX(views) FROM blog_post";

                $stmt =  static::$dbh->query($query);

                $views = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $views;
            }

            public function sumViews()
            {
                $query = "SELECT SUM(views) FROM blog_post";

                $stmt =  static::$dbh->query($query);

                $views = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $views;
            }

            public function avgViews()
            {
                $query = "SELECT AVG(views) FROM blog_post";

                $stmt =  static::$dbh->query($query);

                $views = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $views;
            }

        




}