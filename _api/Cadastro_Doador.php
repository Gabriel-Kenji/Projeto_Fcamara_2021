<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['senhaconf']) && !empty($_POST['senhaconf']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['sg_uf']) && !empty($_POST['sg_uf']) && isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['bairro']) && !empty($_POST['bairro'])){
  
    $user = new \_api\Classes\Class_Doador();

    $usuario = $_POST['nome'];
    $senha = $_POST['senha'];
    $senhaconf = $_POST['senhaconf'];
    $email = $_POST['email'];
    $estado = $_POST['sg_uf'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    $user->setEmail($email);
    $user->setNome($usuario);
    $user->setSenha($senha);
    $user->setEstado($estado);
    $user->setCidade($cidade);
    $user->setBairro($bairro);
   

    if($senha == $senhaconf)
    {


        $DaoCadastroDoador = new \_api\Classes\DaoCadastro_Doador();
        $DaoCadastroDoador->read($user);


        if(isset($_POST['telefone']) && !empty($_POST['telefone']))
        {

            $user->setTelefone($_POST['telefone']);
            if($DaoCadastroDoador->read($user) == FALSE){
                $DaoCadastroDoador->create_com_telefone($user);
                $_SESSION['erro_cad'] = 4;
                echo "foi";
                header("Location: ../login_doador.html");
            }
            else{
                //ERRO EMAIL JA EXISTENTE
                echo "email";
                $_SESSION['erro_cad'] = 3;
                header("Location: ../cadastro_doador.html");
            }
        }
        else
        {
            if($DaoCadastroDoador->read($user) == FALSE){
                $DaoCadastroDoador->create_sem_telefone($user);
                $_SESSION['erro_cad'] = 4;
                echo "foi";
                header("Location: ../login_doador.html");
            }
            else{
                //ERRO EMAIL JA EXISTENTE
                echo "email";
                $_SESSION['erro_cad'] = 3;
                header("Location: ../cadastro_doador.html");
            }
        }
        
    }
    else
    {
        //ERRO SENHAS DIFERENTES
        echo "senha";
        $_SESSION['erro_cad'] = 2;
        header("Location: ../cadastro_doador.html");
    }
}
else
{
    echo "vazio";
    $_SESSION['erro_cad'] = 1;
    header("Location: ../login_doador.html");
}


?>