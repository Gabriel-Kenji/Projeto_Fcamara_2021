<?php
require __DIR__ . "/../vendor/autoload.php";
session_start(); 
    $escola = new \_api\Classes\Escolas();

    
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

    

    $CepDao = new \_api\Classes\CepDao();
    $CepDao->read($escola);

    if($CepDao->read($escola) == []){
        $_SESSION['erro_login'] = 1;
        //header("Location: ../index.php");
        echo "erro email"; 
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
        /* if($senha == $psenha){
            $_SESSION['idusuario'] = $id;
            header("Location: ../index_fila.php");
        }
        else
        {
            echo "erro senha";
            $_SESSION['erro_login'] = 2;
            header("Location: ../index.php");
        } */
    } 
    
    
        
?>