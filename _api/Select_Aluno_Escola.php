<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
    $user = new \_api\Classes\Class_escola();
    $user->setInep($_SESSION['InepEscola']);
    $Aluno_EscolaDao = new \_api\Classes\DaoAlunoEscola();
    $Aluno_EscolaDao->readselect($user);


?>