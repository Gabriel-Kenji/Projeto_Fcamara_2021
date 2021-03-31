<?php
require __DIR__ . "/../vendor/autoload.php";
session_start(); 
    $user = new \_api\Classes\Class_Aluno();
    
    $user->setEmail($_POST['email']);
    $psenha = $_POST['senha'];

    $LoginDao = new \_api\Classes\DaoLogin_Aluno();
    $LoginDao->read($user);

    if($LoginDao->read($user) == []){
        $_SESSION['erro_login'] = 1;
        header("Location: ../testlogin.html");
        echo "erro email"; 
    }
    else
    {
        foreach($LoginDao->read($user) as $login):
            $senha = $login['nm_senha'];
            $id = $login['cd_usuario'];
            $nomeuser = $login['nm_aluno'];
            
        endforeach;
        if($senha == $psenha){
            $_SESSION['RaAuluno'] = $id;
            $_SESSION['logado'] = true;
            $_SESSION['nomeuserlogado'] = $nomeuser;
            header("Location: ../home_aluno.php");
            
            
        }
        else
        {
            echo "erro senha";
            $_SESSION['erro_login'] = 2;
            header("Location: ../testlogin.html");
        }
    }
    
    
        
?>