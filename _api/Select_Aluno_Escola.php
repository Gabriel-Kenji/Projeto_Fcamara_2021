<?php
require __DIR__ . "/../vendor/autoload.php";

    $user = new \_api\Classes\Class_Aluno();
    
    $inep = $_POST['inep'];

    $user->setInep($_POST['inep']);

    $Aluno_EscolaDao = new \_api\Classes\DaoAlunoEscola();
    $Aluno_EscolaDao->read($user);

    
    $cont = 0;
    $array = [];
   
    
    if($Aluno_EscolaDao->read == $user){
    foreach($Aluno_EscolaDao->readSelect() as $aluno):

        $array[$cont] = array (
            $aluno["cd_RA"],$aluno["nm_aluno"]);
        $cont++;
        
    endforeach;
    }
    else
    {

    }
    
    
    
        
?>