<?php
require __DIR__ . "/../vendor/autoload.php";

$MaterialDao = new \_api\Classes\DaoMaterial();

    $cont = 0;
    $array = [];
    $MaterialDao->read();

    foreach($MaterialDao->read() as $material):

        $array[$cont] = array (
            $material["cd_material"],$material["nm_material"]);
        $cont++;
        
    endforeach;
    
?>