<?php
require __DIR__ . "/../vendor/autoload.php";

    $inep = new \_api\Classes\Class_Aluno();
    $inep->setInep = $id;

    $Aluno_EscolaDao = new \_api\Classes\DaoAlunoEscola();
    $Aluno_EscolaDao->read($inep);
    
    $cont = 0;
    $array = [];    

    foreach($Aluno_EscolaDao->read($inep) as $aluno):

        $array[$cont] = array (
            $aluno["cd_RA"],$aluno["nm_aluno"]);
        $cont++;
        
    endforeach;

?>