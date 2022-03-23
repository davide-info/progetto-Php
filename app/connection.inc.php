<?php
include 'config.inc.php';
 class DbConnection {
    private static $connection;
    private static function openConnection() {
        if(!isset(self::$connection)) {
           
            try {
                
                $serverName = SERVER_NAME;
                $databaseName = db_name;
                $connectionString="mysql:server=$serverName; dbname=$databaseName";
                self::$connection = new PDO( $connectionString, USER_NAME, PASSWORD);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->exec("SET CHARACTER SET utf8");
                //print 'CONNESSIONE APERTA <br/>';
            }catch(PDOException $e){
                print 'ERROR ' . $e->getMessage()."<br/>";
                die();

            }
        }
    }
    
    public static function closeConnnection() {
        if(isset(self::$connection)) {
            self::$connection = null;   
           
        }
    }
    public static function getConnection() {
        self::openConnection();
        return self::$connection;
    }
}

?>