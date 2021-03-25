<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['senhaconf']) && !empty($_POST['senhaconf']) && isset($_POST['nome']) && !empty($_POST['nome'])){
  
    $user = new \_api\Classes\Class_Usuario();

    $usuario = $_POST['nome'];
    $senha = $_POST['senha'];
    $senhaconf = $_POST['senhaconf'];
    $email = $_POST['email'];
    $user->setEmail($email);
    $user->setNome($usuario);
    $user->setSenha($senha);
   

    if($senha == $senhaconf){


        $cadastroDao = new \_api\Classes\DaoCadastro();
        $cadastroDao->read($user);

        if($cadastroDao->read($user) == FALSE){
            $cadastroDao->create($user);
            $_SESSION['erro_cad'] = 4;
            echo "foi";
            header("Location: ../index.html");
        }
        else{
            //ERRO EMAIL JA EXISTENTE
            echo "email";
            $_SESSION['erro_cad'] = 3;
            header("Location: ../index.html");
        }
    }
    else
    {
        //ERRO SENHAS DIFERENTES
        echo "senha";
        $_SESSION['erro_cad'] = 2;
        header("Location: ../index.html");
    }
}
else
{
    echo "vazio";
    $_SESSION['erro_cad'] = 1;
    header("Location: ../index.html");
}


?>