<?php
class DataBase{
    private static $dbhost = "localhost";
    private static $dbname = "burgercode";
    private static $login = "root";
    private static $pass = "";

    private static $connection = null;

    public static function connect(){
        try {
            self::$connection = new PDO("mysql:host=".self::$dbhost.";dbname=".self::$dbname,self::$login,self::$pass);
        }
        catch (Exception $e){
            die($e->getMessage());
        }
        return self::$connection;
    }
    public static function disconnect (){
        self::$connection = null;
    }
}

DataBase::connect();

?>