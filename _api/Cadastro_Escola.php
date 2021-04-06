<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
if(isset($_POST['numeroINEP']) && !empty($_POST['numeroINEP']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirm-password']) && !empty($_POST['confirm-password']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['uf']) && !empty($_POST['uf']) && isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['bairro']) && !empty($_POST['bairro'])){
  
    $user = new \_api\Classes\Class_Escola();

    $inep = $_POST['numeroINEP'];
    $usuario = $_POST['nome'];
    $senha = $_POST['password'];
    $senhaconf = $_POST['confirm-password'];
    $email = $_POST['email'];
    $estado = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    $user->setInep($inep);
    $user->setEmail($email);
    $user->setNome($usuario);
    $user->setSenha($senha);
    $user->setEstado($estado);
    $user->setCidade($cidade);
    $user->setBairro($bairro);
   

    if($senha == $senhaconf)
    {


        $DaoCadastroEscola = new \_api\Classes\DaoCadastro_Escola();
        $DaoCadastroEscola->read($user);


        if(isset($_POST['telefone']) && !empty($_POST['telefone']))
        {

            $user->setTelefone($_POST['telefone']);
            if($DaoCadastroEscola->read($user) == FALSE){
                $DaoCadastroEscola->create_com_telefone($user);
                $_SESSION['erro_cad'] = 4;
                echo "foi";
                header("Location: ../Index.html");
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
            if($DaoCadastroEscola->read($user) == FALSE){
                $DaoCadastroEscola->create_sem_telefone($user);
                $_SESSION['erro_cad'] = 4;
                echo "foi";
                header("Location: ../Index.html");
            }
            else{
                //ERRO EMAIL JA EXISTENTE
                echo "email";
                $_SESSION['erro_cad'] = 3;
                header("Location: ../index.html");
            }
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