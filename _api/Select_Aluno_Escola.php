<?php
require __DIR__ . "/../vendor/autoload.php";
    $user = new \_api\Classes\Class_aluno();
    $user->setInep($id);

    $Aluno_EscolaDao = new \_api\Classes\DaoAlunoEscola();
    $Aluno_EscolaDao->readselect();
    
    $cont = 0;
    $array = [];    

    foreach($Aluno_EscolaDao->readselect() as $aluno):
        $array[$cont] = array (
            $aluno["nm_aluno"]);
        $cont++;
    endforeach;

?>