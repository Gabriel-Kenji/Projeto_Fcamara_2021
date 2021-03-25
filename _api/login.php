<?php
require __DIR__ . "/../vendor/autoload.php";
session_start(); 
    $user = new \_api\Classes\Class_Usuario();
    
    $user->setEmail($_POST['email']);
    $psenha = $_POST['senha'];

    $LoginDao = new \_api\Classes\DaoLogin();
    $LoginDao->read($user);

    if($LoginDao->read($user) == []){
        $_SESSION['erro_login'] = 1;
        header("Location: ../index.html");
        echo "erro email"; 
    }
    else
    {
        foreach($LoginDao->read($user) as $login):
            $senha = $login['nm_senha'];
            $id = $login['cd_usuario'];
            
        endforeach;
        if($senha == $psenha){
            $_SESSION['idusuario'] = $id;
            header("Location: ../home.php");
            $_SESSION['logado'] = true;
            
        }
        else
        {
            echo "erro senha";
            $_SESSION['erro_login'] = 2;
            header("Location: ../index.html");
        }
    }
    
    
        
?>