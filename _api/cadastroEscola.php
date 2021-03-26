<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
if(isset($_POST['cd_inep']) && !empty($_POST['cd_inep']) && isset($_POST['nm_escola']) && !empty($_POST['nm_escola']) && isset($_POST['nm_endereco']) && !empty($_POST['nm_endereco']) && isset($_POST['nm_cidade']) && !empty($_POST['nm_bairro']) && isset($_POST['nm_bairro']) && !empty($_POST['nm_cidade']) && isset($_POST['sg_uf']) && !empty($_POST['sg_uf']) && isset($_POST['cd_cep']) && !empty($_POST['cd_cep'])){
  
    $user = new \_api\Classes\Class_Escolas();

    $user->setId($_POST['cd_inep']);
    $user->setNome($_POST['nm_escola']);
    $user->setEndereco($_POST['nm_endereco']);
    $user->setBairro($_POST['nm_bairro']);
    $user->setCidade($_POST['nm_cidade']);
    $user->setUf($_POST['sg_uf']);
    $cep = $_POST['cd_cep'];
    $cepp =+  $cep[0].$cep[1].$cep[2].$cep[3].$cep[4].$cep[6].$cep[7].$cep[8];
    
    $user->setCep($cepp);

    $DaoEscola = new \_api\Classes\DaoEscola();
    $DaoEscola->read($user);

    if($DaoEscola->read($user) == FALSE){

        $DaoEscola->create($user);
        echo "foi";
        echo $cepp;

    }else{

        echo "codigo INEP já cadastrado";

    }
    
}
?>