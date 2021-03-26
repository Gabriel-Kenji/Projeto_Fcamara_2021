<?php
require __DIR__ . "/../vendor/autoload.php";
session_start(); 
    $DaoMaterial = new \_api\Classes\DaoMaterial();

    $DaoMaterial->read();

    if($DaoMaterial->read() == []){
        
        echo "erro"; 
    }
    else
    {
        foreach($DaoMaterial->read() as $material):   
                echo $material['id'];?> <br><?php
                echo $material['nome'];?> <br><?php
                echo $material['tipo'];?> <br><?php
        endforeach;
    }
?>