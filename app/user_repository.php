<?php
 include_once 'connection.inc.php';
 include_once 'user.php';
class UserRepository {
    static private $connection ;
    static public function getUsers() {
       
       
        
       
        self::$connection = DbConnection::getConnection();
        
        
        try {
            $sql = "SELECT * FROM users";
        $statement = self::$connection->prepare($sql);
        $results = $statement->fetchAll();
        $users=self::getResultsUsers($results);
          
        

    }catch(PDOException $e){
        die("Error " . $e->getMessage());
    }
    finally {
        DbConnection::closeConnnection();
    }
    return $users;
}
    private static function getResultsUsers($results) {
        $users = [];
        if(count($results)>0) {
           
            foreach($results as $row) {
                 $users[] = new User($row['id'], $row['first_name'], $row['email'], $row['password'], $row['register_date'], $row['active']);
               
            }
        }
        return $users;
    }
    public static function countUsers(){

        self::$connection = DbConnection::getConnection();
        $query = "SELECT COUNT(*) as counter FROM Users";
       
        try {
            $statement = self::$connection->prepare($query);
            $statement->execute();
            $result = $statement->fetch();

            return $result["counter"];
        }catch(PDOException $e) {

        }
        finally{
            DbConnection::closeConnnection();
        }

    }

}
?>