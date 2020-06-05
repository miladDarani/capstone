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

class LogModel extends Model
{


    protected $table = 'my_log';

    protected $key = 'log_id';

        /**
         * [return all logs from author table]
         * @return [string] 
         */
        public function allLogs()
        {
            $query = 'SELECT *
            FROM 
            my_log';
    

            $stmt = static::$dbh->query($query);

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        }




            public function addLog($array){

                $query = 'INSERT INTO my_log (remote_addr, remote_uri, request_method) 
                VALUES
                (:remote_addr, :remote_uri, :request_method)';

                 $stmt = static::$dbh->prepare($query);

                 $params = array (
                    ":remote_addr" => $array['remote_addr'],
                    ":remote_uri" => $array['remote_uri'],
                    ":request_method" => $array['request_method'],
                );

                $result=$stmt->execute($params);

                 return $result;



            }



   
} // END OF MODEL