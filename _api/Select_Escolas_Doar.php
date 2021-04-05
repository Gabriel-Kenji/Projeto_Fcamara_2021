<?php
    require __DIR__ . "/../vendor/autoload.php";
    session_start();
    $user = new \_api\Classes\Class_Escola();
    $EscolaDao = new \_api\Classes\DaoEscola();

    if(isset($_POST['estado']) && !empty($_POST['estado']) && isset($_POST['id_cidade']) && !empty($_POST['id_cidade'])){
        $estado = $_POST["estado"];
        $cidade = $_POST["id_cidade"];

        $user->setEstado($estado);
        $user->setCidade($cidade);

        $cont = 0;
        $array = [];
        $EscolaDao->readSelectCidade($user);

        foreach($EscolaDao->readSelectCidade($user) as $escola):

            $array[$cont] = array (
                $escola["cd_INEP"],$escola["nm_escola"]);
            $cont++;
            
        endforeach;
    }

    
?>