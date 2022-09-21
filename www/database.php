<?php
abstract class Database{
    
    private static $name = 'vagrant';
    private static $psw = 'vagrantpass';
    private static $host = '10.10.20.15';
    private static $db = 'vagrant';

    private static $connection = null;

    public static function getConnection(){
        if(self::$connection == null){
            $conn = new mysqli(self::$host, self::$name, self::$psw, self::$db);
			self::$connection = $conn;
        }
		
		if(self::$connection->connect_error){
			die('Errore di connessione (' . $conn->connect_errno . ') '. $conn->connect_error);
		}
        return self::$connection;
    }
   
}
?>