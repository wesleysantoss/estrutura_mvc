<?php

class ConexaoBDSite
{
    private static $connection;

    /**
    * Função para abrir a conexão com o BD
    */
    public static function getConnection() 
    {

        if(!isset($connection)){
            $connection = new PDO("mysql:host=".SITE_HOST."; dbname=".SITE_DATABASE.";charset=utf8", SITE_LOGIN, SITE_SENHA);
            // define para que o PDO lance exceções caso ocorra erros.
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $connection;
    }
}

?>
