<?php
require __DIR__ . "/../vendor/autoload.php";
session_start(); 
    $escola = new \_api\Classes\Class_Escolas();

    
    function get_endereco($cep){
    // formatar o cep removendo caracteres nao numericos
    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "http://viacep.com.br/ws/$cep/xml/";
    $xml = simplexml_load_file($url);
    return $xml;
    }

    $endereco = get_endereco($_POST['cep']); 
    //echo $endereco->cep; 
    // echo $endereco->logradouro;
    $bairro = $endereco->bairro;
    $escola->setCidade($endereco->localidade); 
    $escola->setUf($endereco->uf);

    

    $CepDao = new \_api\Classes\DaoCep();
    $CepDao->read($escola);

    if($CepDao->read($escola) == []){
        
        echo "erro"; 
    }
    else
    {
        foreach($CepDao->read($escola) as $endereco):
            $bairroBD = $endereco['nm_bairro'];
            
            if($bairroBD == $bairro)
            {
                echo $endereco['nm_escola'];?> <br><?php
                echo $endereco['nm_endereco'];?> <br><?php
                echo $endereco['nm_cidade'];?> <br><?php
                echo $endereco['nm_bairro'];?> <br><?php
                echo $endereco['sg_uf'];?> <br><?php
            }
            
        endforeach;

        foreach($CepDao->read($escola) as $endereco):
            $bairroBD = $endereco['nm_bairro'];
            
            if($bairroBD != $bairro)
            {
                echo $endereco['nm_escola'];?> <br><?php
                echo $endereco['nm_endereco'];?> <br><?php
                echo $endereco['nm_cidade'];?> <br><?php
                echo $endereco['nm_bairro'];?> <br><?php
                echo $endereco['sg_uf'];?> <br><?php
            }
            
        endforeach;
       
    }
    
    
    
    
        
?>