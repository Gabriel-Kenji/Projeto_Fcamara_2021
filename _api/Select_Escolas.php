<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();

$EscolaDao = new \_api\Classes\DaoEscola();

    $cont = 0;
    $array = [];
    $EscolaDao->readSelect();

    foreach($EscolaDao->readSelect() as $escola):

        $array[$cont] = array (
            $escola["cd_INEP"],$escola["nm_escola"]);
        $cont++;
        
    endforeach;
    
?>