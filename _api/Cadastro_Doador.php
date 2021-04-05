<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
if(isset($_POST['numeroCPF']) && !empty($_POST['numeroCPF']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirm-password']) && !empty($_POST['confirm-password']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['uf']) && !empty($_POST['uf']) && isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['bairro']) && !empty($_POST['bairro'])){
  
    $user = new \_api\Classes\Class_Doador();


    $CPF = $_POST['numeroCPF'];
    $usuario = $_POST['nome'];
    $senha = $_POST['password'];
    $senhaconf = $_POST['confirm-password'];
    $email = $_POST['email'];
    $estado = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    $user->setCPF($CPF);
    $user->setNome($usuario);
    $user->setEmail($email);
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
                header("Location: ../Homepage.html");
            }
            else{
                //ERRO EMAIL JA EXISTENTE
                echo "email";
                $_SESSION['erro_cad'] = 3;
                header("Location: ../testcadastro.html");
            }
        }
        else
        {
            if($DaoCadastroDoador->read($user) == FALSE){
                $DaoCadastroDoador->create_sem_telefone($user);
                $_SESSION['erro_cad'] = 4;
                echo "foi";
                header("Location: ../Homepage.html");
            }
            else{
                //ERRO EMAIL JA EXISTENTE
                echo "email";
                $_SESSION['erro_cad'] = 3;
                header("Location: ../testcadastro1.html");
            }
        }
        
    }
    else
    {
        //ERRO SENHAS DIFERENTES
        echo "senha";
        $_SESSION['erro_cad'] = 2;
        header("Location: ../cadastro_doador3.html");
    }
}
else
{
    echo "vazio";
    $_SESSION['erro_cad'] = 1;
/*     header("Location: ../testcadastro.html"); */
}


?>