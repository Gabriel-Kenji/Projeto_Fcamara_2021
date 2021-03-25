<?php
namespace _api\Classes;
class Conexao{

    private static $instance;
    
    public static function getConn(){
    
        //conexão com o banco (ip / nome do banco / usuario / senha)
        if(!isset(self::$instance)):
                self::$instance = new \PDO('mysql:host=localhost;dbname=banco_fcamara_2021;charset=utf8','root','');
        endif;
            return self::$instance;   
    }
}

?>