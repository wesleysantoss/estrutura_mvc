<?php

namespace App\config;

class ConexaoBD
{
    private static $connection;
    
    public static function getConnection() 
    {

        if(!isset(self::$connection)){
            self::$connection = new \PDO("mysql:host=".SITE_HOST."; dbname=".SITE_DATABASE.";charset=utf8", SITE_LOGIN, SITE_SENHA);
            // define para que o PDO lance exceções caso ocorra erros.
            self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return self::$connection;
    }
}

?>
