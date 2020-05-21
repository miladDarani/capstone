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
            read_length=:read_length,
            views=:views,
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
                ':read_length' => $_POST['read_length'],
                ':views' => $_POST['views'],
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
            


            header('Location: index.php');
     
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


            final public function addPost()
            {
                $query = 'INSERT INTO users
                          (title, full_desc, read_length, date_posted, views, seo_done, category, author_id, image)
                          VALUES
                          (:title, :full_desc, :read_length, :date_posted, :views, :seo_done, :category, :author_id, :image)';

            //13. create stmt to prepare query 
            $stmt = static::$dbh->prepare($query);


            //14. set params
            $params = array (
            ':title' => $_POST['title'],
            ':full_desc' => $_POST['full_desc'],
            ':read_length' => $_POST['read_length'],
            ':date_posted' => $_POST['date_posted'],
            ':views' => $_POST['views'],
            ':seo_done' => $_POST['seo_done'],
            ':category' => $_POST['category'],
            ':author_id' => $_POST['author_id'],
            ':image' => $_POST['image']
          

            );

            //15 execute query
            $stmt->execute($params);

            //16.value of the primary key of the last record on this session
            $user_id = static::$dbh->lastInsertId();
            $_SESSION['user_id'] = $user_id;
            if ($user_id > 0 ) {
 
            header('Location: index.php');
    // ?user_id=' . $user_id
            die;
            }

        }




}